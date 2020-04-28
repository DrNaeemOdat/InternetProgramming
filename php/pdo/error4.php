<?php
  require_once "pdo.php";
  try {
    $stmt=$pdo->prepare("SELECT * FROM users WHERE users_id=:xyz");
    $stmt->execute(array(':abc'=>$_GET['users_id']));
  } catch (\Exception $e) {
    echo "Internal error, please contact app support";
    error_log("error4.php, SQL error=".$e->getMessage());
    return;
  }


  $row=$stmt->fetch(PDO::FETCH_ASSOC);
  if($row===false){
    echo "<p>users_id not found</p>\n";
  }else{
    echo "<p>users_id found<p>\n";
  }
?>
