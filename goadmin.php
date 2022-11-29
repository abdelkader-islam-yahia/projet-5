<?php 
require_once "../cfg/config.php"; 
$sql = "INSERT INTO user(admin) VALUES(:admin)";
$dataBinded=array(
    ':username' => $_POST['admin'],

);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


header('Location:../index.php');
?>