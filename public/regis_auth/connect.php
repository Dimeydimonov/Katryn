<?php
$connect = mysqli_connect("mysql", "test", "test", "test");


if(!$connect){
    die("Error connecting to the database");
}