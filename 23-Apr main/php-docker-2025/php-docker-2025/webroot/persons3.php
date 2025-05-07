<?php

$link = require_once "db_connect.inc.php";

$query = "SELECT * FROM persons";
try {
    $result = mysqli_query($link, $query);
    $persons = mysqli_fetch_all($result, MYSQLI_ASSOC);
} catch (mysqli_sql_exception $e) {
    error_log($e);
    die($e->getMessage());
}

//var_dump($persons);
require 'persons3.view.php';

mysqli_close($link);