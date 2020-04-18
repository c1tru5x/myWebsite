<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="shortcut icon" href="media/favicon.ico?v=2" type="image/x-icon">
        <title>DB Login</title>  
    </head>
    <body id="fullbody">
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
                Enter your login credentials: <br>
                </div>
                <div id="formular">
                <form action="/db/connect.php" method="POST">
                    <label for="username">Username:</label><br>
                    <input type="text" name="username" id="username" value="" autocomplete="on" required><br>
                    <label for="pwd">Password:</label><br>
                    <input type="password" name="pwd" id="pwd" value="" autocomplete="off" required><br>
                    <input type="submit" value="Log In">
                </form>
                </div>
            <script src="/js/darkmode.js"></script>
            <input id="button" type="submit" name="lightbutton" value="💡" onclick="darkmode()" style="width: 40px; height: 40px;"/>
            </div> 
            <div id="footer">
                Copyright &copy; 2020 Christian Schmidt.
            </div>    
        </div>
    </body>
</html>