<?php

session_start();
setcookie('cookieadded[46]', "", time()-3600);
setcookie('cookieadded[36]', "", time()-3600);
setcookie('cookieadded[58]', "", time()-3600);
setcookie('cookieadded[32]', "", time()-3600);
session_destroy();
header('Location: index.php');