<?php
  // $num='';
  // $msg=false;
  // if (isset($_POST['num'])) {
  //   $num=$_POST['num']+0;
  //   if ($num==42) {
  //     $msg='Great job!';
  //   }elseif ($num<42) {
  //     $msg='Too low';
  //   }else {
  //     $msg='Too high';
  //   }
  // }
  session_start();
  if (isset($_POST['num'])) {
    $num=$_POST['num']+0;
    $_SESSION['num']=$num;
    if ($num==42) {
      $_SESSION['msg']='Great job!';
    }elseif ($num<42) {
      $_SESSION['msg']='Too low';
    }else {
      $_SESSION['msg']='Too high';
    }
    header("Location: postredirectget.php");
    return;
  }
 ?>
<html>
<head>
  <title> Choose a number game</title>
</head>
<body style="font-family: sans-serif;">
  <?php
    $num=isset($_SESSION['num'])?$_SESSION['num']:'';
    $msg=isset($_SESSION['msg'])?$_SESSION['msg']:false;
  ?>
  <p>Choose a number ... </p>
  <?php
    if ($msg!==false) {
      echo ("<p>$msg</p>\n");
    }
   ?>
   <form method="post">
     Input number:
     <input type="text" name="num" id="num" size="40" <?php echo 'value="' . htmlentities($num) . '"'; ?>/>
     <input type="submit"/>
   </form>
</body>
</html
