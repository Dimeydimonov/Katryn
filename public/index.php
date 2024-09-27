<?php
session_start();

$isLoggedIn = isset($_SESSION['user']);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="master_class/CSS/s_k.css" rel="stylesheet" type="text/css">
    <title>Катерина Погребенна</title>
</head>
<body>
<header>
    <div class="container">
        <a class="logo">Катерина Погребенна </a>


        <div class="auth-container">
            <?php if ($isLoggedIn): ?>

            <a href="regis_auth/profile.php"><h2 ><?=$_SESSION ['user']['username'] ?></h2></a>
                <img  src="regis_auth/<?=$_SESSION ['user']['avatar'] ?>" alt="" >
            <?php else: ?>
                <a href="regis_auth/auth.php">Войти</a>
            <?php endif; ?>
        </div>
    </div>
</header>

<div class="content">
    <div class="leftblock">
        <img src="img_for_index/ekater.jpg" alt="Катерина Погребенна">
    </div>

    <div class="rightblock">
        <a class="project" href="my_project/my_project.php">Мої проекти</a>
        <a class="pages2" href="master_class/m_k/m_k.php">Художня студія Арт Клас</a>
        <a class="pages2" href="gallery/gallery.php">Особисте мистецтво</a>
    </div>
</div>

</body>
</html>
