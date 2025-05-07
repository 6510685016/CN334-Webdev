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
    die("Failed to update record: " . $e->getMessage());
}

$occupations = [
    "ธุรกิจส่วนตัว", "นักศึกษา", "พนักงานบริษัท", "รับราชการ", "อื่น ๆ"
];

try {
    $url = "https://raw.githubusercontent.com/kongvut/thai-province-data/master/api_province.json";
    $response = file_get_contents($url);
    $provinces = json_decode($response, true);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>เพิ่มข้อมูลที่อยู่ใหม่</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>
<div class="container">
    <h1>แก้ไขข้อมูลส่วนตัว</h1>
    <a href="/address_6510685016/" class="back"> กลับไปหน้าหลัก </a>

    <form action="index.php" method="post" class="container">
        <input type="hidden" name="update" value="<?= $address["id"]; ?>">

        <div class="form-group">
            <label for="fullname">ชื่อ-นามสกุล</label>
            <input type="text" id="fullname" name="fullname" value="<?= $address["fullname"]; ?>" placeholder="Enter name" class="form-control" required>
        </div>
        <div class="form-group">
            <label> </label>
            <span class="gender">
                <label for="gender">เพศ</label>
                <input type="radio" name="gender" id="male" value="ชาย"
                    <?php if($address["gender"] === "ชาย"): ?> checked <?php endif; ?>>
                <label for="male">ชาย</label>
                <input type="radio" name="gender" id="female" value="หญิง"
                    <?php if($address["gender"] === "หญิง"): ?> checked <?php endif; ?>>
                <label for="female">หญิง</label>
            </span>
        </div>
        <div class="form-group">
            <label for="birthdate">วัน-เดือน-ปีเกิด</label>
            <input type="date" id="birthdate" name="birthdate" value="<?= $address["birthdate"]; ?>" placeholder="Enter surname" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="occupation">อาชีพ</label>
            <select name="occupation" id="occupation" size="1" class="form-control" required>
                <option value="volvo">เลือกอาชีพ</option>
                <?php foreach ($occupations as $occupation): ?>
                    <option value="<?= $occupation ?>" <?php if($address["occupation"] === "$occupation"): ?> selected <?php endif; ?>>
                        <?= $occupation ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="address">ที่อยู่<br> (ตามบัตรประชาชน)</label>
            <input type="text" id="address" name="address" value="<?= $address["address"]; ?>" placeholder="Enter address" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="province">จังหวัด</label>
            <select name="province" id="province" size="1" class="form-control" required>
                <option value="volvo">เลือกจังหวัด</option>
                <?php foreach ($provinces as $province): ?>
                    <option value="<?= $province["name_th"] ?>" <?php if($address["province"] === $province["name_th"]): ?> selected <?php endif; ?>>
                        <?= $province["name_th"] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="phone">โทรศัพท์</label>
            <input type="tel" id="phone" name="phone" value="<?= $address["phone"]; ?>" placeholder="Enter phone" class="form-control" required>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </form>
</div>

</body>
</html>