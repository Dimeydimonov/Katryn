<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<div class="container">
<header>
   <div class="upp1">
    <a href="index.php">Главная страница</a>
    <a href="about.php"> Про нас</a>
   </div>
</header>
    <div class="leftpanel">
       <form action="registr.php" method="post">
           <input type="text" name="username" id="username" placeholder="Введите имя" class="form-control"><br/>
           <input type="email" name="email" id="email"  placeholder="Введите email" class="form-control"><br/>
           <input type="text" name="password"  id="password" placeholder="Введите пароль" class="form-control"><br/>
        <p> REMEMBER: <input type="checkbox" name="remember" checked="checked" /></p>
        <input type="submit" value="Отправить">
</form>
    </div>