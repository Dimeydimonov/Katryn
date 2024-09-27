<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: profile.php');
    exit(); }
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--Registration-->
<form action="signup.php" method="post" enctype="multipart/form-data">

    <label> Username</label>
    <input type="text" name="username" placeholder="INPUT YOUR USERNAME ">

    <label> Your login</label>
    <input type="text" name="login" placeholder="INPUT YOUR LOGIN">

    <label> Email</label>
    <input type="email"  name="Email" placeholder="INPUT YOUR EMAIL">

    <label>Photo profile </label>
    <input type="file" name="avatar">

    <label>Password</label>
    <input type="password" name="password" placeholder="INPUT YOUR PASSWORD">

    <label>Password</label>
    <input type="password" name="password_confirm" placeholder="CONFIRM YOUR PASSWORD">
    <button type="submit">Registration</button>
    <p>
        <a href="auth.php" >Authentication</a>
    </p>

    <?php
    if(isset($_SESSION['message'])){
        echo '<p class="msg"> '.$_SESSION["message"].' </p>';
    }
    unset($_SESSION["message"]);
    ?>


</form>

</body>
</html>