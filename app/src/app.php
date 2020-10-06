<?php
    // isset - ar prie ivestu laukeliu buvo priskirta reiksme.
    if(isset($_POST['submit'])) {
        // debaginimui:
        // var_dump($_POST);
        $userName = trim($_POST['userName']);
        $userEmail = trim($_POST['userEmail']);
        $myMessage = trim($_POST['myMessage']);
        // ar priskirta reiksme susidaro is leistinu simboliu: nuo A iki Z ir nuo a iki z.
        $validChar = !preg_match("/[^A-Za-z'-]/i", $userName);

        // tikrinam ar ne tusti laukeliai
        if (!empty($userName) && !empty($userEmail) && !empty($myMessage) && $validChar) {
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
