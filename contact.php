<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="shortcut icon" href="media/favicon.ico?v=2" type="image/x-icon">
        <title>Contact</title>
    </head>
    <body onload="getColor(); setColor();" id="fullbody">
        <script src="js/readCookies.js">
        </script>
        <div id="container">
            <div id="content">
                <div id="header">
                <h3>c1tru5x - thats what I do.</h3>
                </div>
                <div id="navbar">
                    <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="dblogin.php">Database</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="about.php">About</a></li>
                    </ul>
                </div>
                <div id="main">
                    Any Questions? Just send me your text! <br>
                    <form action="/mail/validate.php" method="POST">
                        <fieldset style="width: 500px">
                        <legend>Form</legend>
                        <label for="Vorname">First Name*:</label><br>
                        <input type="text" name="Vorname" id="Vorname" value="" autocomplete="off" required><br>
                        <label for="Nachname">Last Name*:</label><br>
                        <input type="text" name="Nachname" id="Nachname" value="" autocomplete="off" required><br>
                        <label for="Mail">e-Mail adress*:</label><br>
                        <input type="email" name="Mail" id="Mail" value="" autocomplete="off" required><br> 
                        <label for="msgbox">Message:</label><br>
                        <textarea name="msgbox" id="msgbox" rows="10" cols="40"></textarea>
                        <br>
                        <input type="submit" value="Send Form">
                        </fieldset>
                    </form>
                    <script src="/js/darkmode.js"></script>
                    <input id="button" type="submit" name="lightbutton" value="💡" onclick="darkmode()" style="width: 40px; height: 40px;"/>
                </div>
            </div>
            <div id="footer">
                Copyright &copy; 2020 Christian Schmidt.
            </div>
        </div>
    </body>
</html>