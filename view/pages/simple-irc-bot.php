<div class="container">
    <h1>Simple PHP IRC Bot Script</h1>
    <div class="alert alert-info">
        <strong>Heads up!</strong> This is an old script, and we don't support it.
        Check out the new version <a href="wildphp-irc-bot">here</a>.
    </div>
    <h2>Description</h2>
    <p>
        Simple PHP IRC Bot, is a simple PHP IRC Bot class designed to connect to an IRC server, run a few simple commands.
        This script is designed and intended to be built upon, perhaps you could build a PHP IRC Client, so please follow 
        some of the notes below for guidance. This bot is based off a PHP IRC Bot tutorial done on our sister site.
    <h2>Warning</h2>
    <p>
        This script uses PHP sockets, and most shared hosting and some servers have it disabled by default. This script
        runs continuously so it is not recommended to run on shared hosting accounts. We recommend you run it locally 
        using the instructions below.
    </p>
    <h2>Installation</h2>
    <ol>
        <li>Download or copy paste the script from this page</li>
        <li>Rename the file to bot.php ( Sorry, the site will only allow me to upload it as bot.txt)</li>
        <li>Edit the $config array in the script to the server settings, should be self explanatory</li>
        <li>Download and install <a href="http://www.apachefriends.org/en/xampp.html">XAMPP</a></li>
        <li>Place bot.php in the htdocs folder of your XAMPP installation</li>
        <li>Don’t forget to start the Apache server by pressing the start button in the XAMPP Control Panel</li>
        <li>Go to <a href="http://localhost/bot.php">http://localhost/bot.php</a>, and the bot should connect and join the channel you specified in about 30 seconds</li>
    </ol>
    <h2>Code</h2>
    <p>
        Download <a href="view/pages/files/bot.txt" target="_blank">bot.txt</a> (Right click, Save As…)
    </p>
    <h2>Features and Functions</h2>
    <ul>
        <li>!join #channel – Joins the specified IRC channel</li>
        <li>!part #channel – Leaves the specified IRC channel</li>
        <li>!say #channel Message – Says message in the specified IRC channel</li>
        <li>!restart – Quits and restarts the script. (Helpful while testing the script)</li>
        <li>!shutdown – Quits and stops the script.</li>
    </ul>
    <p>Usage and output:</p>
    <blockquote>
        <p>&lt;random-user&gt; !say #nystic_chat hello there<br>
        &lt;wildphp-bot&gt; hello there</p>
    </blockquote>
    <h2>Help/Support</h2>
    <p>
        No longer supported. Check out the new version <a href="wildphp-irc-bot">here</a>.
    </p>
    <h2>Extensions</h2>
    <p>
        Coding.layne build his own version of this PHP Bot. 
        You can take a look at it <a href="https://bitbucket.org/pogosheep/irc-bot">here</a>.
    </p>
    <h2>Conclusion</h2>
    <p>
        Thanks to KillerAuzzie for the basecode.
    </p>              
</div>