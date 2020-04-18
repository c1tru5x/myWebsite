<html>
    <head>
        <meta charset="UTF-8">
        <title>Connect</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
        
    </head>
    <body id="fullbody">
        <div id="header">
        <h3>db connect test</h3>
        </div>
        <?php
        $servername = "localhost";
        $username = $_POST['username'];
        $password = $_POST['pwd'];
        $dbname = "c1tru5x_testdb";
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully to $dbname";
        ?>
        <script src="/js/darkmode.js"></script>
        <input id="button" type="submit" name="lightbutton" value="💡" onclick="darkmode()" style="width: 40px; height: 40px;"/>
        <a href="../index.php">Go back?</a>
    </body>
</html>