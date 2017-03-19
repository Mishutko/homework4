<?php
include_once('login.php');
try {
    $pdo = new PDO("mysql:host=$host; dbname=$db", $login, $password);
} catch (PDOException $e) {
    echo $e->getMessage();
}
