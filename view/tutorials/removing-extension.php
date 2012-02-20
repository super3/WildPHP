<div class="container">
    <h1>Removing the .php extension from a URL</h1>
    <div>
        <p>
        If you are developing a website in PHP then most of your files will end in the .PHP file extension. This
        works just fine for your development, but when you release your website the .php extension is just 
        added characters in the URL.
        </p>
        <p>
            Most websites that use PHP simple have the extension of the page removed. This leads to cleaner, shorter,
            and easier to read URLs. It is also better for your SEO or Search Engine Optimization.
        </p>
        <p>
            Using a simple .htaccess&nbsp;file with a few lines we can automatically add the .php file
            &nbsp;extension&nbsp;to any URL without it. This means something like example.com/page will look
            like example.com/page.php to the computer, but still retain the cleaner look of example.com/page
            to the user. Note: You can still explicitly call any page even with this change.
        </p>

        <h2>Step #1</h2>
        <p class="center">
            <img style="border: 1px solid #d5d5d5;" src="view/tutorials/images/ext-image.png" alt="ext-image" >
        </p>
        <p>Create a file called&nbsp;.htaccess and place it in the root or home directory of your website.</p>

        <h2>Step #2</h2>
        <p>
            Add the following lines of code to your&nbsp;.htaccess file this will add a .php file extension to
            all the pages without a file extension.
        </p>
        <pre>
            RewriteEngine On 
            RewriteCond %{REQUEST_FILENAME} !-f
            RewriteRule ^([^\.]+)$ $1.php [NC,L]</pre>

        <h2>Step #3</h2>
        <p>
            To keep your users from getting lost you should add a 404&nbsp;redirect&nbsp;as well. If a user enters
            a wrong URL the web server will try to display that wrong page with a .php extension. To fix this, a 
            404 redirect will redirect all non-existent&nbsp;URLs to a predetermined 404 page. Note you will have
            to have some sort of 404 page for this to work. Don’t forget to change http://example.org/404 to the 
            URL of your own 404 page.
        </p>
        <pre>
            ErrorDocument 404 http://example.org/404
            RewriteEngine On
            RewriteCond %{REQUEST_FILENAME} !-f
            RewriteRule ^([^\.]+)$ $1.php [NC,L]</pre>                    
    </div>
</div>