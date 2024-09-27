<?php
global $connect;
session_start();
require_once  'connect.php';

$login = $_POST['login'];
$password = md5($_POST['password']);

$check_user = mysqli_query($connect, "SELECT * FROM test2 WHERE username='$login' AND password='$password'");
 if(mysqli_num_rows($check_user)>0) {

     $user = mysqli_fetch_assoc($check_user);

     $_SESSION['user'] = [
         "id" => $user['id'],
         "username" => $user['username'],
         "avatar" => $user['avatar'],
         "email" => $user['email'],
     ] ;
header( "Location: ../index.php" );
 } else {
$_SESSION['message'] = "не верно ";
header('location: auth.php');
 }