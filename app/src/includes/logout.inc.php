<?php
    if(isset($_POST['submit'])) {
        // session_start — Start new or resume existing session
        session_start();
        // session_unset — Free all session variables
        session_unset();
        // session_destroy — Destroys all data registered to a session
        session_destroy();
        header("Location: ../../../public/index.php");
        exit();
    }