<html>
<head>
<title>Тестовое задание</title>
</head>
<body>

<form method="post" action="index.php">Запоните поля:<br><br>
 Укажите имя переменной: <input name="peremennaya" type="text" maxlength="20" size="25" value="" />
<br><br> Укажите значение: <input name="znachenie" type="text" maxlength="20" size="25" value="" />
<br><br> <input type=submit value="Что же получилось?"></form>

<?php

 if (!empty($_POST["peremennaya"])&&!empty($_POST["znachenie"]))
 {
 echo "Вы ввели данные:<br>";
 echo $_POST["peremennaya"];
 echo ":";
 echo $_POST["znachenie"];
 }

?>
</body>
</html>
