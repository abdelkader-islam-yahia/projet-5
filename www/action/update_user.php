<?php
require_once "../cfg/config.php";

$sql = "UPDATE user SET username=:username WHERE id_user=:id_user";
$dataBinded=array(
    ':username' => $_POST['username'],
    ':id_user' => $_POST['id_user'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location: ../panel-admin.php')
?>