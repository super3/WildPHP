<div class="container">
    <h1>Simple PHP IRC Logger Script</h1>
    <div class="alert alert-info">
        <strong>Heads up!</strong> This is an old script, and we don't support it.
        Check out the new version on the <a href="index.php">main page</a>.
    </div>
    <h2>Description</h2>
    <p>
        Simple PHP IRC Logger is a simple PHP IRC Bot class designed to connect to
        an IRC server, and generate HTML log files. It is based on a modified version
        of&nbsp; <a href="tutorials.php?page=simple-irc-bot">Simple PHP IRC Bot</a>.
        Please follow some of the notes below for guidance. 
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
    <h2>Config</h2>
    <ul>
        <li>Enable/Disable Logging (PHP Script Variable)</li>
        <li>Enable/Disable Logging Warning Message (PHP Script Variable)</li>
    </ul>
    <p>
        Note the script in the current version of the script, all joined channels
        will be added to the single log file for the day.
    </p>
    <h2>Installation</h2>
    <ol>
        <li>Download or copy paste the script from this page</li>
        <li>Rename the file to bot.php ( Sorry, the site will only allow me to upload it as log-bot.txt)</li>
        <li>Edit the $config array in the script to the server settings, should  be self explanatory</li>
        <li>Download and install <a href="http://www.apachefriends.org/en/xampp.html">XAMPP</a></li>
        <li>Place bot.php in the htdocs folder of your XAMPP installation</li>
        <li>Don’t forget to start the Apache server by pressing the start button in the XAMPP Control Panel</li>
        <li>Go to <a href="http://localhost/bot.php">http://localhost/log-bot.php</a>,  and the bot should connect and join the channel you specified in about  30 seconds</li>
        <li>If you have warning enabled the bot should say “Chat Logging has been [Enabled]” when entering the default room</li>
        <li>If you have logging enabled an HTML file should appear in the same directory, it will be updated when anyone says something in the room</li>
    </ol>
    <h2>Code</h2>
    <p>
        Download <a href="view/tutorials/files/log-bot.txt" target="_blank">log-bot.txt</a> (Right click, Save As…)
    </p>
    <h2>Notice</h2>
    <p>
        This script uses PHP sockets, and most shared hosting and some servers have it disabled by
        default. This script runs continuously so it  is not recommended to run on shared hosting
        accounts. We recommend you run it locally using the instructions below.</p>
    <h2>Help/Support</h2>
    <p>
        No longer supported. Check out the new version on the <a href="index.php">main page</a>.
    </p>
    <h2>Conclusion</h2>
    <p>
        Thanks to KillerAuzzie for the basecode.
    </p>    
</div>