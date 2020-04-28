<?php
  require_once "pdo.php";
  session_start();
  if(isset($_POST['delete']) && isset($_POST['users_id'])){
    $sql="DELETE FROM users WHERE users_id=:usid";
    $stmt=$pdo->prepare($sql);
    $stmt->execute(array(':usid' =>$_POST['users_id']));
    $_SESSION['success']='Record Deleted';
    header('Location: index.php');
    return;
  }
  $stmt=$pdo->prepare("SELECT name, users_id FROM users WHERE users_id=:idd");
  $stmt->execute(array(":idd"=>$_GET['users_id']));
  $row=$stmt->fetch(PDO::FETCH_ASSOC);
  if ($row===false) {
    $_SESSION['error']="Bad value for users_id";
    header('Location:index.php');
    return;
  }
  ?>
  <p>Confirm: Deleting <?=htmlentities($row['name'])?></p>
  <form method="post">
    <input type="hidden" name="users_id" value="<?=htmlentities($row['users_id'])?>">
    <input type="submit" value="Delete" name="delete"/><a href="index.php">Cancel</a></p>
  </form>
