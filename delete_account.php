<?php 
require_once "../cfg/config.php"; 
$sql = "DELETE FROM user WHERE id_user=:id";
$dataBinded=array(
    ':id' => $_POST['id']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


//header('Location:../panel-admin.php');
?>