<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../style.css">
        <link rel="shortcut icon" href="../media/favicon.ico?v=2" type="image/x-icon">
        <title>Connect</title>
        
    </head>
    <body id="fullbody">
    <script src="../js/darkmode.js"></script>
    <script src="../js/readCookies.js"></script>
        <div id="container">
            <div id="content">
                <div id="header">
                c1tru5x - thats what I do.
                </div>
                <div id="navbar">
                    <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../blog.php">Blog</a></li>
                    <li><a href="../dblogin.php">Database</a></li>
                    <li><a href="../contact.php">Contact</a></li>
                    <li><a href="../about.php">About</a></li>
                    </ul>
                </div>
                <div id="main">
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
                
                <input id="button" class="w3-btn w3-grey w3-round floatright" type="submit" name="lightbutton" value="💡" onclick="darkmode()" style="width: 45px; height: 40px;"/>
                <br>
                <br>
                <a href="../index.php">Go back?</a>
                </div>
                </div>
                <div id="footer">
                    Copyright &copy; 2020 Christian Schmidt.
                </div>  
        </div>
    </body>
</html>