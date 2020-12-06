<?php
    // isset - whether the entered field was assigned a value.
    if(isset($_POST['submit'])) {
        // for debugging:
        // var_dump($_POST);

        // trim — Strip whitespace (or other characters) from the beginning and end of a string
        $userName = trim($_POST['userName']);
        $userEmail = trim($_POST['userEmail']);
        $myMessage = trim($_POST['myMessage']);
        // or the assigned value is formed from the allowed symbol: A to Z and a to z.
        $validChar = !preg_match("/[^A-Za-z'-]/i", $userName);

        // checking for blank fields
        if (!empty($userName) && !empty($userEmail) && !empty($myMessage) && $validChar) {
            // filter_var — Filters a variable with a specified filter
            // Validate filter - Validates whether the value is a valid e-mail address.
            if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
                $from = "$userEmail";
                $to = "info@vilniuscoding.lt";
                $subject = "Nauja zinute";
                $autorius = 'Nuo: ' . $userName . ', ' . $userEmail;
                $zinute = htmlspecialchars($myMessage);

                // mail($to, $subject, $autorius, $zinute, $from);
                // echo "<script>alert('Dekojame. Jusu zinute gauta. Netrukus susisieksime.');</script>";
            }
            include('db.php');
        }
    }
