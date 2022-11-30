<?php 
require_once "../cfg/config.php"; 

if(empty($_POST['username'])){
     $_SESSION['error']="No Usermane";
     header('Location: ../index.php');
     exit();
}
if(empty($_POST['password'])){
     $_SESSION['error']="No password";
     header('Location: ../index.php');
     exit();
}
$sql = "SELECT * FROM user WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($username)){
     echo "Utlisateur ou mot de passe incorrect";
     header('Location:../index.php?error=1');
   }else{
     $_SESSION['username'] = $username;
     if($user['admin']==1){
       header('Location:../panel-admin.php');
     }else{
       header('Location:../index.php');
     }
   }

header('Location:../index.php');
?>