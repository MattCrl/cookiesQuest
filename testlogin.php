<?php

session_start();

if (!empty($_POST['loginname'])) {
    $_SESSION['username'] = $_POST['loginname'];
    header('Location: index.php');
} else {
    header('Location: login.php');
}