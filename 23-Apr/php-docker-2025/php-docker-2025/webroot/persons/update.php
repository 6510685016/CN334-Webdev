<?php

//delete.php
$link = require_once "db_connect.inc.php";

$id = $_GET["id"];
$query = "SELECT * FROM persons WHERE id=$id";

try {
    $result = mysqli_query($link, $query);
    $person = mysqli_fetch_assoc($result);
} catch (mysqli_sql_exception $e) {
    error_log($e);
    die("Failed to update record: " . $e->getMessage());
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update person</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>

<div class="container">
    <h1> Update Deletion </h1>
    <form action="index.php" method="post">
        <input type="hidden" name="update" value="<?= $person["id"]; ?>">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?= $person["name"] ?>" required>
            <label for="name">Surname</label>
            <input type="text" name="surname" id="surname" class="form-control" value="<?= $person["surname"] ?>" required>
            <label for="name">Email</label>
            <input type="text" name="email" id="email" class="form-control" value="<?= $person["email"] ?>" required>
            <label for="name">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="<?= $person["phone"] ?>" required>
        </div>
        <div class="form-action">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</body>
</html>