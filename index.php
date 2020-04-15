<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome!</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    <body id="fullbody">
        <div id="header">
        <h3>I don't know what will happen to this site.</h3>
        </div>
        <div id="formular">
        <form action="validate.php" method="POST">
            <fieldset style="width: 500px">
            <legend>Formular</legend>
            <label for="Vorname">Vorname*:</label><br>
            <input type="text" name="Vorname" id="Vorname" value="" autocomplete="off" required><br>
            <label for="Nachname">Nachname*:</label><br>
            <input type="text" name="Nachname" id="Nachname" value="" autocomplete="off" required><br>
            <label for="Mail">E-Mail Adresse*:</label><br>
            <input type="email" name="Mail" id="Mail" value="" autocomplete="off" required><br> 
            <label for="msgbox">Nachricht:</label><br>
            <textarea name="msgbox" id="msgbox" rows="10" cols="40"></textarea>
            <br>
            <input type="submit" value="Senden">
            </fieldset>
        </form>
        </div>
        <script src="darkmode.js"></script>
        <input id="button" type="submit" name="lightbutton" value="💡" onclick="darkmode()" style="width: 40px; height: 40px;"/>
    </body>
</html>