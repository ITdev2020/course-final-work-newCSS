<?php
    // patikriname, kad vart pasieke si faila ne tiosiogiai, o pasp Sign Up mygtuka
    // check that the user has accessed this file not directly, but click the Sign Up button
    if (isset($_POST['submit'])) {
        include_once 'db.inc.php';
        $first = mysqli_real_escape_string($conn, $_POST['first']);
        $last = mysqli_real_escape_string($conn, $_POST['last']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $uid = mysqli_real_escape_string($conn, $_POST['uid']);
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

        // tikrinam papildomai, daug tikrinimu:
        // Error handlers
        // checking for blank fields
        if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
            header("Location: ../signup.php?signup=empty");
            exit();
        } else {
            // Patikriname ar teisingai ivesti simboliai
            if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
                header("Location: ../signup.php?signup=invalid");
                exit();
            } else {
                // Patikriname ar galiojantis email formatas
                // Validates whether the value is a valid e-mail address.
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: ../signup.php?signup=invalidemail");
                    exit();
                } else {
                    // Patikriname ar username jau naudojamas
                    // Checking if the username is already in use
                    $sql = "SELECT * FROM users WHERE user_uid = '$uid'";
                    $result = mysqli_query($conn, $sql);
                    $result_check = mysqli_num_rows($result);
                    if ($result_check > 0) {
                        header("Location: ../signup.php?signup=usertaken");
                        exit();
                    } else {
                        // Sukuriame hash slaptazodziui
                        // password_hash() creates a new password hash using a strong one-way hashing algorithm.
                        //  is a cryptographic hash function that derives one or more secret keys from a secret value such as a main key, a password, or a passphrase using a pseudorandom function.
                        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                        // Ikeliame vartotoja i DB
                        // Create new user in the database
                        $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
                        VALUES('$first', '$last', '$email', '$uid', '$hashedPwd');";
                        mysqli_query($conn, $sql);
                        header("Location: ../signup.php?signup=success");
                        header("Location: ../../../public/index.php");
                        exit();
                    }
                }
            }
        }
    } else {
        header("Location: ../signup.php");
        exit();
    }
