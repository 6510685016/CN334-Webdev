<?php

$link = require_once "db_connect.inc.php";

$id = $_GET["id"];
$query = "SELECT * FROM address WHERE id=$id";

try {
    $result = mysqli_query($link, $query);
    $address = mysqli_fetch_assoc($result);
} catch (mysqli_sql_exception $e) {
    error_log($e);
    die("Failed to delete record: " . $e->getMessage());
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete person</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/info.css">
</head>
<body>

<div class="container">
    <a href="/address_6510685016/" class="back"> กลับไปหน้าหลัก </a>
    <h1> <?= $address['fullname'] ?> </h1>
    <p><b> รหัส: <?= $address['id'] ?> </b></p>
    <div class="data-display">
        <table class="info-table">
            <tr>
                <th> วันเกิด</th>
                <td> <?= $address['birthdate'] ?> </td>
            </tr>
            <tr>
                <th> เพศ</th>
                <td> <?= $address['gender'] ?> </td>
            </tr>
            <tr>
                <th> อาชีพ</th>
                <td> <?= $address['occupation'] ?> </td>
            </tr>
            <tr>
                <th> จังหวัด</th>
                <td> <?= $address['province'] ?> </td>
            </tr>
            <tr>
                <th> ที่อยู่</th>
                <td> <?= $address['address'] ?> </td>
            </tr>
            <tr>
                <th> เบอร์โทรศัพท์</th>
                <td> <?= $address['phone'] ?> </td>
            </tr>
        </table>
    </div>

    <form method="POST" action="index.php">
        <a href="/address_6510685016/" class="btn btn-secondary">กลับไปยังหน้าหลัก</a>
        <a href="update.php?id=<?= $address["id"];?>" class="btn btn-update">แก้ไขข้อมูล</a>
        </form>
</body>
</html>