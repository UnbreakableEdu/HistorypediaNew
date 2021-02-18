<?php
session_start();

$_SESSION['logged'] = false;
$_SESSION['email'] = null;
$_SESSION['senha'] = null;

session_destroy();

header('Location: index.php');
?>