<?php

mysqli_report(MYSQLI_REPORT_STRICT|MYSQLI_REPORT_ERROR);

$host = "mariadb";
$username = 'db_user';
$password = 'db_pw';
$dbname = 'my_db';

try {
    return mysqli_connect($host, $username, $password, $dbname);
} catch (PDOException $e) {
    error_log($e->getMessage());
}