<?php

session_start();

$name = 'Wilder';

if (isset($_SESSION['username'])) {
    $name = $_SESSION['username'];
}