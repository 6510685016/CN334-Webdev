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
    <h1> Confirm Deletion </h1>
    <p class="warning-text"> Are you sure? </p>
    <div class="data-display">
        <table class="info-table">
            <tr>
                <th> ID </th>
                <td> <?=$person['id']?> </td>
            </tr>
            <tr>
                <th> Name </th>
                <td> <?= $person["name"]." ".$person["surname"];?> </td>
            </tr>
            <tr>
                <th> Email </th>
                <td> <?=$person['email']?> </td>
            </tr>
            <tr>
                <th> Phone </th>
                <td> <?=$person['phone']?> </td>
            </tr>
        </table>
    </div>

    <form method="POST" action="index.php">
        <input type="hidden" name="delete" value="<?= $person['id'] ?>">
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="index.php" class="btn btn-secondary">Cancel</a>
    </form>
</body>
</html>