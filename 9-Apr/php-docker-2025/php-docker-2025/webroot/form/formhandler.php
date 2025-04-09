<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

Hello <?= $_POST["firstname"] ?> <?= $_POST["lastname"] ?> <br>
Password : <?= $_POST['password'];?> <br>
Gender : <?= $_POST['gender'];?> <br>
Receive news:
    <?php foreach (@$_POST['receive'] as $value){
        echo $value." ";
    }
    ?> <br>
Car:
    <?php foreach (@$_POST['cars'] as $value){
        echo $value." ";
    }
    ?> <br>

Address : <?= nl2br(@$_POST['address']); ?><br>

</body>
</html>