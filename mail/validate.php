<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Validation</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <link rel="shortcut icon" href="../media/favicon.ico?v=2" type="image/x-icon">
    </head>
    <body onload="getColor(); setColor();" id="fullbody">
    <script src="../js/readCookies.js"></script>
    <script src="../js/darkmode.js"></script>
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
            <br>
        <!-- Code for email form validation -->
        <?php
        include 'mailadress.php'; #for $sendTo
        $fname = $_POST['Vorname'];
        $lname = $_POST['Nachname'];
        $emailaddr = $_POST['Mail'];
        $msg = $_POST['msgbox'];

        $betreff = "$fname $lname Email: $emailaddr";

        #send mail
        if(!$fname || !$lname || !$emailaddr || !$msg)
        {
            echo "You left something empty. Try again!";
        }
        else
        {
            mail($sendTo,$betreff,$msg);
            echo "Your form has been sent!";
        }
        ?>
        <a href="../">Go back?</a>
        </div>
    </div>
    </body>
</html>