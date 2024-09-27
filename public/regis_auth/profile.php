<?php
session_start();
if (!$_SESSION['user']) {
    header('Location:register.php');
}

?>


<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form>
    <img src="<?=$_SESSION ['user']['avatar'] ?>" width="100px" alt="" >
    <img src="blocks/uploads/1.jpg" width="100px" alt="" >
<h2><?=$_SESSION ['user']['username'] ?></h2>
<a href="#"><?=$_SESSION ['user']['email'] ?></a>
    <a href="logout.php" class=logout >Exit</a>

</form>
<img src="blocks/uploads/1.jpg" width="100px" alt="" >

</body>
</html>