<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Persons List</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/table.css">
</head>
<body>

<h1 class="page-title">ข้อมูลที่อยู่ทั้งหมด</h1>

<a href="create.php" class="add-new"> เพิ่มข้อมูลที่อยู่ใหม่ </a>

<table class="data-table">
    <thead>
    <tr>
        <th>ID</th>
        <th>ชื่อ-นามสกุล</th>
        <th>วันเกิด</th>
        <th>อาชีพ</th>
        <th>จังหวัด</th>
        <th>เบอร์โทรศัพท์</th>
        <th>การจัดการ</th>
    </tr>
    </thead>
    <?php foreach ($persons as $person): ?>
        <tr>

                <td> <?= $person["id"];?> </td>
                <td>
                    <a class="fullname" href="info.php?id=<?= $person["id"];?>">
                        <?= $person["fullname"];?>
                    </a>
                </td>
                <td> <?= $person["birthdate"];?> </td>
                <td> <?= $person["occupation"];?> </td>
                <td> <?= $person["province"];?> </td>
                <td> <?= $person["phone"];?> </td>
                <td>
                    <a href="update.php?id=<?= $person["id"];?>" class="btn-action btn-edit">
                        แก้ไข
                    </a>
                    <a href="delete.php?id=<?= $person["id"];?>" class="btn-action btn-delete">
                        ลบ
                    </a>
                </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>