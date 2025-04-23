<?php
//delete.php
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
    <link rel="stylesheet" href="css/delete.css">
</head>
<body>

<div class="container">
    <h1> ลบข้อมูล </h1>
    <a href="/address_6510685016/" class="back"> กลับไปหน้าหลัก </a>

    <div class="icon-warning">⚠</div>
    <h2 class="warning-text"> ยืนยันการลบข้อมูล </h2>
    <p class="warning-text-secondary"> คุณกำลังลบข้อมูลนี้ออกจากระบบ<br><b>การดำเนินการนี้ย้อนกลับไม่ได้</b> </p>
    <div class="container">
        <table class="info-table">
            <tr>
                <th> ชื่อ-นามสกุล </th>
                <td> <?= $address['fullname']?> </td>
            </tr>
            <tr>
                <th> เพศ </th>
                <td> <?= $address['gender']?> </td>
            </tr>
            <tr>
                <th> วันเกิด </th>
                <td> <?= $address['birthdate']?> </td>
            </tr>
            <tr>
                <th> อาชีพ </th>
                <td> <?= $address['occupation']?> </td>
            </tr>
            <tr>
                <th> จังหวัด </th>
                <td> <?= $address['province']?> </td>
            </tr>
        </table>
    </div>

    <form class="actionbar" method="POST" action="index.php">
        <input type="hidden" name="delete" value="<?= $address['id'] ?>">
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="index.php" class="btn btn-secondary">Cancel</a>
    </form>
</body>
</html>