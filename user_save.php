<?php
include_once('con_bd.php');

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
$password = $_POST['password'];
$selectactive = $_POST['selectactive'];
$selectstatus = $_POST['selectstatus'];

$sql = "INSERT INTO `users` (`name`, `lastname`, `birthday`, `email`, `password`, `is_active`, `reg_date`, `last_update`, `status`) VALUES 
(:name, :lastname, :birthday, :email, :password, :is_active, :status)";

$STH = $pdo->prepare($sql);
$STH->bindParam(':name', $name);
$STH->bindParam(':lastname', $lastname);
$STH->bindParam(':birthday', $birthday);
$STH->bindParam(':email', $email);
$STH->bindParam(':password', $password);
$STH->bindParam(':is_active', $selectactive);
$STH->bindParam(':status', $selectstatus);

$STH->execute();
