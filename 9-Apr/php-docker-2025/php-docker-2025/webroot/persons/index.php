<?php

$link = require_once "db_connect.inc.php";

// query person form db
function excute_query($link, $query)
{
    try {
        $result = mysqli_query($link, $query);
        return $result;
    } catch (mysqli_sql_exception $e) {
        error_log($e);
        die("Database error: " . $e->getMessage());
    }
}

// Add a new person
function insert_person($link, $nmae, $surname,$email, $phone)
{
    $query = "INSERT INTO persons (name, surname, email, phone) values ('$nmae', '$surname', '$email', '$phone')";
    return excute_query($link, $query);
}

// Handle a new person submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add"])) {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    insert_person($link, $name, $surname, $email, $phone);
}

$query = "SELECT * FROM persons ORDER BY id DESC";
$result = excute_query($link, $query);
$persons = mysqli_fetch_all($result, MYSQLI_ASSOC);
//var_dump($persons);
require 'persons.view.php';

mysqli_close($link);