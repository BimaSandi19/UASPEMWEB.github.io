<?php
session_start();


$_SESSION['user_id'] = 456;
$_SESSION['username'] = 'bima';


echo 'Hello, ' . $_SESSION['username'];
?>