<?php
session_start();

$isLoggedIn = isset($_SESSION['user']);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="site_katerina/CSS/s_k.css" rel="stylesheet" type="text/css">
    <title>Катерина Погребенна</title>
</head>
<body>

<header>
    <div class="container">
        <a class="logo">Катерина Погребенна</a>


        <div class="auth-container">
            <?php if ($isLoggedIn): ?>
                <img src="<?=$_SESSION ['user']['avatar'] ?>" width="" alt="" >
                <h2><?=$_SESSION ['user']['username'] ?></h2>
                <a href="blocks/logout.php">Выйти</a>


            <?php else: ?>
                <a href="blocks/auth.php">Войти</a>
            <?php endif; ?>
        </div>
    </div>
</header>

<div class="content">
    <div class="leftblock">
        <img src="site_katerina/img/ekater.jpg" alt="Катерина Погребенна">
    </div>

    <div class="rightblock">
        <a class="project">Мої проекти</a>
        <a class="pages2" href="site_katerina/insta_pg/page_insta.php">Художня студія Арт Клас</a>
        <a class="pages2" href="gallery/gallery.php">Особисте мистецтво</a>
    </div>
</div>

</body>
</html>
