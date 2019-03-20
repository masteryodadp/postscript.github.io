<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">

  <title>PHP</title>
</head>
<body>
  <form action = "" method="post">
    <label for="name">Your Name</label>
    <input type="text" name ="name"><br>
    <label for="email">Your Email</label>
    <input type="email" name="email"><br>
    <button type="submit">Send</button>
  </form>
<?php
echo $_POST['some'];
if ($_POST['name'] == "")
  echo 'Enter Your Name<br>';
    else
      echo $_POST['name'].'<br>';

      if ($_POST['email'] == "")
        echo 'Enter Your Email<br>';
          else
            echo $_POST['email'] ;

 ?>
</body>
</html>
