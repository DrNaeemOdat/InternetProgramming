<?php
  require_once "pdo.php";

  $stmt=$pdo->prepare("SELECT * FROM users WHERE users_id=:xyz");
  $stmt->execute(array(':abc'=>$_GET['users_id']));
  $row=$stmt->fetch(PDO::FETCH_ASSOC);
  if($row===false){
    echo "<p>users_id not found</p>\n";
  }else{
    echo "<p>users_id found<p>\n";
  }
?>
