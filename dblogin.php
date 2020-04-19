<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="shortcut icon" href="media/favicon.ico?v=2" type="image/x-icon">
        <title>DB Login</title>  
    </head>
    <body onload="getColor(); setColor();" id="fullbody">
        <script src="/js/readCookies.js"></script>
        <script src="/js/darkmode.js"></script>
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
                    Enter your login credentials: <br><br>
                <div id="formular">
                    <form action="/db/connect.php" method="POST">
                        <label for="username">Username:</label><br>
                        <input type="text" name="username" id="username" value="" autocomplete="on" required><br>
                        <label for="pwd">Password:</label><br>
                        <input type="password" name="pwd" id="pwd" value="" autocomplete="off" required><br><br>
                        <input type="submit" class="w3-btn w3-grey w3-round" value="Log In">
                    </form>
                </div> 
                </div> 
                </div>
                <div id="footer">
                    Copyright &copy; 2020 Christian Schmidt.
                </div>    
        </div>
    </body>
</html>