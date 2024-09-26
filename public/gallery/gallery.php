<?php
include 'functions.php';
$dir = 'images';
$images =get_images($dir);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightbox.css">

</head>
<body>
<div class="wrapper">
    <div class="gallery">
        <?php echo "<pre>" .print_r($images,true). "</pre>"; ?>
        <?php var_dump($images); ?>
        <?php foreach ($images as $image):  ?>
        <div class="item">
        <div>
            <a data-lightbox="lightbox"  href="<?=$dir . $image?>" >
            <img  data-lightbox="lightbox" class="front" src="<?= $dir.$image?>" alt="">
            </a>
        </div>
        </div>
        <?php endforeach; ?>
        <div class="item">
            <div>
                <a data-lightbox="lightbox"  href="images/1.jpg" >
                    <img class="front" src="images/1.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
<script src="js/lightbox-plus-jquery.js" > </script>
</body>
</html>