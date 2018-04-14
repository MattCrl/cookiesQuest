<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('Location: login.php?log=1');
    } else {

        if (isset($_COOKIE['cookieadded'])) {
            $countAdded = $_COOKIE['cookieadded'][$_GET['add_to_cart']] + 1;
        } else {
            $countAdded = 1;
        }

        setcookie('cookieadded[' . $_GET['add_to_cart'] . ']', $countAdded, time() + 86400);


        header('Location: index.php');
        exit();
    }