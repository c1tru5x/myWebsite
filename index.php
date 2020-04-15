<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome!</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    <body id="fullbody">
        <div id="header">
        <h3>My Blog</h3>
        </div>
        <div id="formular">
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
        </div>
        <script src="/js/darkmode.js"></script>
        <input id="button" type="submit" name="lightbutton" value="💡" onclick="darkmode()" style="width: 40px; height: 40px;"/>
    </body>
</html>