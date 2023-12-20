<?php
    session_start();
    if(!isset($_COOKIE["user"])) {
        header("Location: registeration-login-system/login.php");
        exit();
    }
?>
