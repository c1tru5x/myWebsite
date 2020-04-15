<html>
    <head>
        <meta charset="UTF-8">
        <title>Validation</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>
    <body>
        <!-- Code for email form validation -->
        <?php
        include 'mailadress.php'; #for $sendTo
        $fname = $_POST['Vorname'];
        $lname = $_POST['Nachname'];
        $emailaddr = $_POST['Mail'];
        $msg = $_POST['msgbox'];

        $betreff = "$fname $lname Email: $emailaddr";

        #send mail
        mail($sendTo,$betreff,$msg);
        ?>

        <h3>Your Form has been sent!</h3>
        <a href="../index.php">Go back?</a>
    </body>
</html>