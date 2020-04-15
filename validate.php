<html>
    <head>
        <meta charset="UTF-8">
        <title>Valdiation</title>
    </head>
    <body>
        <!-- Code for email form validation -->
        <?php
        /*?
        if (!isset($_POST['submit']))
        {
            echo "error, you have to submit the form!";
        }
        */
        $fname = $_POST['Vorname'];
        $lname = $_POST['Nachname'];
        $emailaddr = $_POST['Mail'];
        $msg = $_POST['msgbox'];

        $betreff = "c1tru5x bplaced mail from $fname $lname Email: $emailaddr";

        #send mail
        mail('your@email.com',$betreff,$msg);
        ?>

        <h3>Dein Formular wurde gesendet!</h3>
        <a href="../">zurück?</a>
    </body>
</html>