<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Admin</h1>
    <?php
    $page = "panel-admin";
    require "cfg/config.php";
    ?>
    <h2>Liste des utilisateurs</h2>
   <?php
   $sql = "SELECT * FROM user"; 
   $pre = $pdo->prepare($sql); 
   $pre->execute();
   $data = $pre->fetchAll(PDO::FETCH_ASSOC);
   
   foreach($data as $user){ ?>
   <div class="bloc_user">
     <p><?php echo $user['username']?> <br> <?php echo $user['email']?> <br> <?php echo $user['password']?></p> 
    <form method="post" action ="action/delete_account.php">
        <input type="hidden" name ="id" value="<?php echo $user['id_user']?>">
        <button type='submit' class="white color black"> 
            delete user
        </button>
    </form>
   </div>
   <?php } 
   ?>
</body>
</html>