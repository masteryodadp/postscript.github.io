<?php
$login = !empty($_GET['login']) ? $_GET['login'] : 'Переменная не передена';
$password = !empty($_GET['password']) ? $_GET['password'] : 'Значение не передано';
?>
<html>
<head>
    <title>Тестовое задание
  </title>
</head>
<body>
<p>
  <form method="get" action="index.php">Запоните поля:<br><br>
 Укажите имя переменной: <input name="login" type="text" maxlength="20" size="25" value="" />
<br><br> Укажите значение: <input name="password" type="text" maxlength="20" size="25" value="" />
<br><br> <input type=submit value="Что же получилось?"></form>
    <?= $login ?> : <?= $password ?>
</p>
</body>
</html>
