<?php
  require_once "pdo.php";
  session_start();
  if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['users_id'])){
    $sql="UPDATE users SET name=:name, email=:email, password=:password WHERE users_id=:usid";
    $stmt=$pdo->prepare($sql);
    $stmt->execute(array(
      ':name' =>$_POST['name'],
      ':email' =>$_POST['email'],
      ':password' =>$_POST['password'],
      ':usid' =>$_POST['users_id']));
    $_SESSION['success']='Record Updated';
    header('Location: index.php');
    return;
  }
  $stmt=$pdo->prepare("SELECT * FROM users WHERE users_id=:idd");
  $stmt->execute(array(":idd"=>$_GET['users_id']));
  $row=$stmt->fetch(PDO::FETCH_ASSOC);
  if ($row===false) {
    $_SESSION['error']="Bad value for users_id";
    header('Location:index.php');
    return;
  }
  $n=htmlentities($row['name']);
  $e=htmlentities($row['email']);
  $p=htmlentities($row['password']);
  $users_id=$row['users_id'];
  ?>
  <p>Edit User</p>
  <form method="post">
    <p>Name:<input type="text" name="name" value="<?=$n ?>"></p>
    <p>Email:<input type="text" name="email" value="<?=$e ?>"></p>
    <p>Password:<input type="text" name="password" value="<?=$p ?>"></p>
    <input type="hidden" name="users_id" value="<?= $users_id ?>">
    <input type="submit" value="Update"/><a href="index.php">Cancel</a></p>
  </form>
