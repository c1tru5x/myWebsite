<html>
    <head>
        <meta charset="UTF-8">
        <title>Connect</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    <body id="fullbody">
        <div id="header">
        <h3>db connect test</h3>
        </div>
        <?php
        $servername = "localhost";
        $username = "c1tru5x";
        $password = "HarambeIsG0d";
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password);
        
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
        ?>
        <script src="/js/darkmode.js"></script>
        <input id="button" type="submit" name="lightbutton" value="💡" onclick="darkmode()" style="width: 40px; height: 40px;"/>
    </body>
</html>