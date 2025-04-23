<?php
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
    <link rel="stylesheet" href="css/create.css">
</head>
<body>
    <div class="container">
        <h1>เพิ่มข้อมูลที่อยู่ใหม่</h1>
        <a href="/address_6510685016/" class="back"> กลับไปหน้าหลัก </a>

        <form action="index.php" method="post" class="container">
            <!-- 1 - create user -->
            <input type="hidden" name="add" value="1">

            <div class="form-group">
                <label for="fullname">ชื่อ-นามสกุล</label>
                <input type="text" id="fullname" name="fullname" placeholder="Enter name" class="form-control" required>
            </div>
            <div class="form-group">
                <label> </label>
                <span class="gender"> 
                    <label for="gender">เพศ</label>
                    <input type="radio" name="gender" id="male" value="ชาย" checked>
                    <label for="male">ชาย</label>
                    <input type="radio" name="gender" id="female" value="หญิง">
                    <label for="male">หญิง</label>
                </span>
            </div>
            <div class="form-group">
                <label for="birthdate">วัน-เดือน-ปีเกิด</label>
                <input type="date" id="birthdate" name="birthdate" placeholder="Enter surname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="occupation">อาชีพ</label>
                <select name="occupation" id="occupation" size="1" class="form-control" required>
                    <option value="volvo">เลือกอาชีพ</option>
                    <?php foreach ($occupations as $occupation): ?>
                        <option value="<?= $occupation ?>"> <?= $occupation ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group" class="form-address">
                <label for="address" class="address">ที่อยู่<br> (ตามบัตรประชาชน)</label>
                <textarea id="address" name="address" placeholder="Enter Address" class="form-control" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="province">จังหวัด</label>
                <select name="province" id="province" size="1" class="form-control" required>
                    <option value="volvo">เลือกจังหวัด</option>
                    <?php foreach ($provinces as $province): ?>
                        <option value="<?= $province["name_th"] ?>"> <?= $province["name_th"] ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="phone">โทรศัพท์</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter phone" class="form-control" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form>
    </div>

</body>
</html>