<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="shortcut icon" href="media/favicon.ico?v=2" type="image/x-icon">
        <title>Contact</title>
    </head>
    <body onload="getColor(); setColor();" id="fullbody">
        <script src="/js/readCookies.js"></script>
        <script src="/js/darkmode.js"></script>
        </script>
        <div id="container">
            <div id="content">
                <div id="header">
                c1tru5x - thats what I do.
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
                <input id="button" class="w3-btn w3-grey w3-round floatright" type="submit" name="lightbutton" value="💡" onclick="darkmode()" style="width: 45px; height: 40px;"/>
                    <br>
                    Any Questions? Just send me your text! <br><br>
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
                        <input type="submit" class="w3-btn w3-grey w3-round floatright" value="Send Form">
                        </fieldset>
                    </form>
                </div>
            </div>
            <div id="footer">
                Copyright &copy; 2020 Christian Schmidt.
            </div>
        </div>
    </body>
</html>