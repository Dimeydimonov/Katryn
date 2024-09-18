<?php
session_start();

$user_name = htmlspecialchars(trim($_POST['username']));
$email = htmlspecialchars(trim($_POST['email']));
$password = htmlspecialchars(trim($_POST['password']));

$_SESSION['user_name'] = $user_name;
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;


?>