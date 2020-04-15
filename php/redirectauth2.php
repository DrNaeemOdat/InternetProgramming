<?php
  if(isset($_POST['where'])){
    if($_POST['where']=='1'){
      header("Location: redirectauth1.php");
      return;
    }elseif($_POST['where']=='2'){
      header("Location: redirectauth2.php?param=123");
      return;
    }else{
      header("Location: http://www.ttu.edu.jo");
      return;
    }
  }
?>
<html>
<body style="font-family:sans-serif;">
<p>I am Router Two ...</p>
<form method="post">
  <p><label for"inp">Where to go? (1-3)</label>
  <input type="text" name="where" id="inp" size="5"/></p>
  <input type="submit"/>
</form>
</body>
</html>
