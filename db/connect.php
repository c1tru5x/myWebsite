<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../style.css">
        <link rel="shortcut icon" href="../media/favicon.ico?v=2" type="image/x-icon">
        <title>Connect</title>
        
    </head>
    <body id="fullbody">
        <div id="container">
            <div id="content">
                <div id="header">
                <h3>c1tru5x - thats what I do.</h3>
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
                </div>
            <div id="footer">
                Copyright &copy; 2020 Christian Schmidt.
            </div>  
        </div>
    </body>
</html>