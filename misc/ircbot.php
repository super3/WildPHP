<?php

//So the bot doesnt stop.

set_time_limit(0);

ini_set('display_errors', 'on');


        //Example connection stuff.

        $config = array( 
                'server' => 'chat.freenode.net', 
                'port' => 6667, 
                'nick' => 'nystic-log5', 
                'name' => 'none', 
                'pass' => '', 
        );
          

class IRCBot {

        //This is going to hold our TCP/IP connection

        var $socket;



        //This is going to hold all of the messages both server and client

        var $ex = array();



        /*

         Construct item, opens the server connection, logs the bot in



         @param array

        */

        function __construct($config)

        {

                $this->socket = fsockopen($config['server'], $config['port']);

                $this->login($config);

                $this->main();

        }



        /*

         Logs the bot in on the server



         @param array

        */

        function login($config)

        {

                $this->send_data('USER', $config['nick'].' acidavengers.co.uk '.$config['nick'].' :'.$config['name']);

                $this->send_data('NICK', $config['nick']);
				
				$this->join_channel("#nystic_chat");

        }



        /*

         This is the workhorse function, grabs the data from the server and displays on the browser

        */

        function main()

        {

                $data = fgets($this->socket, 128);

                echo nl2br($data);
				
				$date = date("n-j-y");
				$time = date("H:i:s");
				$logfile = fopen("$date-log.html","a");
				fwrite($logfile,"<strong>'.$data.'</strong><br />");
				fclose($logfile);

                flush();

                $this->ex = explode(' ', $data);



                if($this->ex[0] == 'PING')

                {

                        $this->send_data('PONG', $this->ex[1]); //Plays ping-pong with the server to stay connected.

                }



                $command = str_replace(array(chr(10), chr(13)), '', $this->ex[3]);


                switch($command) //List of commands the bot responds to from a user.

                {

                        case ':!join':

                                $this->join_channel($this->ex[4]);

                                break;



                        case ':!quit':

                                $this->send_data('QUIT', 'acidavengers.co.uk made Bot');

                                break;



                        case ':!op':

                                $this->op_user();

                                break;



                        case ':!deop':

                                $this->op_user('','', false);

                                break;



                        case ':!protect':

                                $this->protect_user();

                                break;

                }



                $this->main();

        }



        function send_data($cmd, $msg = null) //displays stuff to the broswer and sends data to the server.

        {

                if($msg == null)

                {

                        fputs($this->socket, $cmd."\r\n");

                        echo '<strong>'.$cmd.'</strong><br />';
						
						$date = date("n-j-y");
						$time = date("H:i:s");
						$logfile = fopen("$date-log.html","a");
						fwrite($logfile,"<strong>'.$cmd.'</strong><br />");
						fclose($logfile);

                } else {

                        fputs($this->socket, $cmd.' '.$msg."\r\n");

                        echo '<strong>'.$cmd.' '.$msg.'</strong><br />';
						
						$date = date("n-j-y");
						$time = date("H:i:s");
						$logfile = fopen("$date-log.html","a");
						fwrite($logfile,"<strong>'.$cmd.' '.$msg.'</strong><br />");
						fclose($logfile);
                }

        }



        function join_channel($channel) //Joins a channel, used in the join function.

        {

                if(is_array($channel))

                {

                        foreach($channel as $chan)

                        {

                                $this->send_data('JOIN', $chan);

                        }

                } else {

                        $this->send_data('JOIN', $channel);

                }

        }



        function protect_user($user = '')

        {

                if($user == '')

                {

if(php_version() >= '5.3.0')
                        {
                                $user = strstr($this->ex[0], '!', true);
                        } else {
                                $length = strstr($this->ex[0], '!');
                                $user   = substr($this->ex[0], 0, $length);
                        }
                        }
echo "test";
$this->send_data('MODE', $this->ex[2] . ' +a ' . $user);
                }

				

                

        

                        

        function op_user($channel = '', $user = '', $op = true) {
			if($channel == '' || $user == '')
                {
                    if($channel == '') {

                                $channel = $this->ex[2];

                        }



                        if($user == '')

                        {

				if(php_version() >= '5.3.0')
                        {
                                $user = strstr($this->ex[0], '!', true);
                        } else {
                                $length = strstr($this->ex[0], '!');
                                $user   = substr($this->ex[0], 0, $length);
                        }
                        }

                }



                if($op) {
                        $this->send_data('MODE', $channel . ' +o ' . $user);

                } else {
                        $this->send_data('MODE', $channel . ' -o ' . $user);

                }

        }

}


        $bot = new IRCBot($config);
?>
