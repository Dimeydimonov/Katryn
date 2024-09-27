<?php
global $connect;
session_start();


require_once 'connect.php';


$username = $_POST['username'];
$login = $_POST['login'];
$email = $_POST['Email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];


if($password === $password_confirm) {

//$_FILES['avatar']['name'] = $_FILES['avatar']['name'];

    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], './' . $path)) {
        $_SESSION['message'] = "Passwords do not match";
        header('location:/regis_auth/register.php');
    }
    $password = md5($password);

    $query = "INSERT INTO `test2` (`username`, `login`, `email`, `password`, `avatar`) VALUES ('$username', '$login', '$email', '$password', '$path')";
    if (mysqli_query($connect, $query)) {
        $_SESSION['message'] = "Успешно";
        header('Location: /regis_auth/auth.php');
    } else {
        $_SESSION['message'] = "Passwords do not match";
        header('location:/regis_auth/register.php');
    }
}
?>