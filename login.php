<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome!</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    <body id="fullbody">
        <div id="header">
        <h3>Log in to database:</h3>
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
    </body>
</html>