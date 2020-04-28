<?php
  require_once 'pdo.php';
  if (isset($_POST['users_id'])) {
    $sql="DELETE FROM users WHERE users_id = :userid";
    echo "<pre>\n$sql\n</pre>\n";
    $stmt=$pdo->prepare($sql);
    $stmt->execute(array(':userid'=>$_POST['users_id']));
  }
?>
<html><head></head><body><table border="1">
  <?php
  $stmt=$pdo->query("SELECT name,email,password FROM users");
  while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    echo "<tr><td>";
    echo ($row['name']);
    echo ("</td><td>");
    echo ($row['email']);
    echo "</td><td>";
    echo $row['password'];
    echo "</td></tr>\n";
  }
  ?>
  </table>
<p>Delete A User</p>
<form method="post">
  <p>ID to Delete:<input type="text" name="users_id"></p>
  <p><input type="submit" value="Delete"></p>
</form>
