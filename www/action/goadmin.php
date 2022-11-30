<?php 
require_once "../cfg/config.php"; 
$sql = "UPDATE user SET admin =:admin WHERE id_user=:id_user ";
$dataBinded=array(
    ':admin' => $_POST['admin'],
    ':id_user' => $_POST['id_user']
);  
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


header('Location:../panel-admin.php');
?>