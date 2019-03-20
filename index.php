<?php
$login = !empty($_GET['login']) ? $_GET['login'] : 'Переменная не передена';
$password = !empty($_GET['password']) ? $_GET['password'] : 'Значение не передано';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="yodalogo.jpg">
    <title>Тестовое задание
    </title>
</head>
<body>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="/jquery.grab-gets.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
  	$('СЕЛЕКТОР ФОРМЫ').grabgets({
             hidden: false 
          });
  });
  </script>
<p>
  <form method="get" action="index.php">Запоните поля:<br><br>
 Укажите имя переменной: <input name="login" type="text" maxlength="20" size="25" value="" />
<br><br> Укажите значение: <input name="password" type="text" maxlength="20" size="25" value="" />
<br><br> <input type=submit value="Что же получилось?"></form>
    <?= $login ?> : <?= $password ?>
</p>
</body>
</html>
