<?php

session_start();

setcookie('cookieadded[' . $_GET['remove'] . ']', "", time()-3600);

header('Location: cart.php');