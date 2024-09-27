<?php
function get_images($dir)
{
    $files = scandir($dir);
    unset($files[0], $files[1], $files[2]);
    return $files;
}
