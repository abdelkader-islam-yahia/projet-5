<?php 
require_once "../cfg/config.php"; 
$sql = "INSERT INTO user(username,email,password) VALUES(:username,:email,sha1(:password))";
$dataBinded=array(
    ':username' => $_POST['username'],
    ':email'   => $_POST['email'],
    ':password'=> "sfcjbqjfb".($_POST['password']),

);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


header('Location:../index.php');
?>