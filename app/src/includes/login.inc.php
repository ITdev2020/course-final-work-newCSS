<?php
    session_start();
    if (isset($_POST['submit'])) {
        include_once 'db.inc.php';
        $uid = mysqli_real_escape_string($conn, $_POST['uid']);
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
        // Error handlers
        // Patikriname ar yra tusciu laukeliu
        if (empty($uid) || empty($pwd)) {
            header("Location: ../../../public/index.php?=login=empty");
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE user_uid = '$uid'";
            $result = mysqli_query($conn, $sql);
            $result_check = mysqli_num_rows($result);
            if($result_check < 1) {
                header("Location: ../../../public/index.php?=login=error");
                exit();
            } else {
                if($row = mysqli_fetch_assoc($result)) {
                    // dehashing slaptazodi
                    $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
                    if($hashedPwdCheck == false) {
                        header("Location: ../../../public/index.php?=login=error");
                        exit();
                    } elseif($hashedPwdCheck == true) {
                        // Login vartotoja i svetaine
                        $_SESSION['u_id'] = $row['user_id'];
                        $_SESSION['u_first'] = $row['user_first'];
                        $_SESSION['u_last'] = $row['user_last'];
                        $_SESSION['u_email'] = $row['user_email'];
                        $_SESSION['u_uid'] = $row['user_uid'];
                        header("Location: ../../../public/index.php?=login=success");
                        exit();
                    }
                }
            }
        }
    } else {
        header("Location: ../../../public/index.php?=login=error");
        exit();
    }
