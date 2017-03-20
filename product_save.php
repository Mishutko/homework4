<?php
include_once('con_bd.php');

$title = $_POST['title'];
$mark = $_POST['mark'];
$count = $_POST['count'];
$price = $_POST['price'];
$description = $_POST['description'];
$selectactive = $_POST['selectactive'];
$id_catalog = $_POST['selectcatgories'];

$sql = "INSERT INTO `products` (`id_catalog`, `title`, `mark`, `count`, `price`, `description`, `status`) VALUES 
(:id_catalog, :title, :mark, :counts, :price, :description, :status)";

$STH = $pdo->prepare($sql);
$STH->bindParam(':title', $title);
$STH->bindParam(':mark', $mark);
$STH->bindParam(':counts', $count);
$STH->bindParam(':price', $price);
$STH->bindParam(':description', $description);
$STH->bindParam(':status', $selectactive);
$STH->bindParam(':id_catalog', $id_catalog);

$STH->execute();
echo '<pre>';
print_r($STH->errorInfo());
print_r($_POST);
