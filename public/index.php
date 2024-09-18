
<?php
    require "blocks/header.php";
    echo '<link rel="stylesheet" type="text/css" href="css/style.css"></head>';
    ?>


    <?php
  /*  $mysqli = new mysqli("mysql", "test", "test");

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    $mysqli->select_db("test");

    $mysqli->query("SET NAMES 'utf8'");

    // Правильный способ вставки данных с использованием подготовленных выражений для защиты от SQL-инъекций
    $stmt = $mysqli->prepare("INSERT INTO `test1` (`user`, `password`, `email`) VALUES (?, ?, ?)");
    if ($stmt === false) {
        die("Prepare failed: " . $mysqli->error);
    }

    // Хеширование пароля перед вставкой
    $login = 'vasyl1';
    $password = md5("123");
    $email = 'vasil@gmail.com';

    $stmt->bind_param("sss", $login, $password, $email);

    $success = $stmt->execute();

    if ($success) {
        echo "Record inserted successfully";
    } else {
        echo "Error inserting record: " . $stmt->error;
    }

    $stmt->close();
    $mysqli->close();*/
    ?>





<?php
require "blocks/footer.php";

?>
