<?php
    $name = $_POST['name'];
    $password = $_POST['password'];
    setcookie("name",$name,time()+10);
    setcookie("password",$password,time()+10);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Set Cookies</title>
</head>
<body>
    Cookies are setup!<br>
    <a href="cookieoutput.php">Cookie Output</a><br>
</body>
</html