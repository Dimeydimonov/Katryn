<?php
include 'fun_m_p.php';
$dir = 'img_my_project/';
$images = get_images($dir);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightbox.css">

</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="../../index.php">Головна</a></li>
            <li><a href="../../gallery/gallery.php">Галерея</a></li>
            <li><a href="../master_class/m_k/m_k.php">Майстер-класи</a></li>
            <li><a href="https://www.instagram.com/ekaterina_lightart/">Instagram</a></li>
        </ul>
    </nav>
</header>
<div class="wrapper">
    <div class="gallery">
        <?php foreach ($images as $image): ?>
            <div class="item">
                <div>
                    <a data-lightbox="lightbox" href="<?= $dir . $image ?>">
                        <img data-lightbox="lightbox" class="front" src="<?= $dir . $image ?>" alt="">
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="item">
            <div>
                <a data-lightbox="lightbox" href="img_my_project/1.jpg">
                    <img class="front" src="img_my_project/1.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
<script src="js/lightbox-plus-jquery.js"></script>
</body>
</html>