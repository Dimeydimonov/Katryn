<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

</head>
<body>
<div class="container mt-5 w-25">

    <?php
    if ($_COOKIE["email"] ==""):

    ?>

  <div class="row">
      <h1> Регистрация </h1>
      <form action="http://test.local/" method="post">
          <input type="text" name="username" id="username" placeholder="Введите имя" class="form-control"><br/>
          <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br/>
          <input type="text" name="password" id="password" placeholder="Введите пароль" class="form-control"><br/>
          <input type="submit" value="Зарегистрироваться">
      </form> <br>
      </div>
     <div class="col">
         <h1> Авторизация </h1>
         <form action="http://test.local/" method="post">
             <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br/>
             <input type="text" name="password" id="password" placeholder="Введите пароль" class="form-control"><br/>
             <input type="submit" value="Авторизировать">
         </form>
        </div>

    <?php else: ?>
    <p>  Hello <?=$_COOKIE["email"]?>. Exit <a href="/exit.php"> This </a>  </p>
    <?php endif;
    ?>
</div>