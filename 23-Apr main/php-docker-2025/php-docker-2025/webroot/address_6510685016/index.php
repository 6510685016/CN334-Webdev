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

// Add a new address
function insert_address($link, $fullname, $gender, $birthdate, $occupation, $address, $province, $phone)
{
    $query = "INSERT INTO address (fullname, gender, birthdate, occupation, address, province, phone) values ('$fullname', '$gender', '$birthdate', '$occupation', '$address', '$province', '$phone')";
    return excute_query($link, $query);
}

// delete address
function delete_address($link, $id)
{
    $query = "DELETE FROM address WHERE id = $id";
    return excute_query($link, $query);
}

function update_address($link, $fullname, $gender, $birthdate, $occupation, $address, $province, $phone, $id)
{
    $query = "UPDATE address 
              SET fullname = '$fullname', gender = '$gender', birthdate = '$birthdate', occupation = '$occupation', address = '$address', province = '$province', phone = '$phone'
              WHERE id = $id";
    return excute_query($link, $query);
}

// Handle a new person submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add"])) {
    $fullname = $_POST["fullname"];
    $gender = $_POST["gender"];
    $birthdate = $_POST["birthdate"];
    $occupation = $_POST["occupation"];
    $address = $_POST["address"];
    $province = $_POST["province"];
    $phone = $_POST["phone"];
    insert_address($link, $fullname, $gender, $birthdate, $occupation, $address, $province, $phone);
}

// Handle delete person
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    $id = $_POST["delete"];
    delete_address($link, $id);
}

//
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    $id = $_POST["update"];
    $fullname = $_POST["fullname"];
    $gender = $_POST["gender"];
    $birthdate = $_POST["birthdate"];
    $occupation = $_POST["occupation"];
    $address = $_POST["address"];
    $province = $_POST["province"];
    $phone = $_POST["phone"];
    update_address($link, $fullname, $gender, $birthdate, $occupation, $address, $province, $phone, $id);
}


$query = "SELECT * FROM address ORDER BY id DESC";
$result = excute_query($link, $query);
$persons = mysqli_fetch_all($result, MYSQLI_ASSOC);
//var_dump($persons);
require 'address.view.php';

mysqli_close($link);