<?php
//Cannot have any output before this
  session_start();
  if(! isset($_SESSION['whatever'])){
    echo "<p>Session is empty</p>\n";
    $_SESSION['whatever']=0;
  }elseif ($_SESSION['whatever']<3) {
    $_SESSION['whatever']=$_SESSION['whatever']+1;
    echo "<p>Added one...</p>\n";
  }else {
    session_destroy();
    session_start();
    echo "<p>Session Restarted...</p>\n";
  }
  ?>
  <p><a href="session.php">Click Me!</a></p>
  <p>Our Session ID is: <?php echo session_id();?></p>
  <pre>
  <?php
    print_r ($_SESSION);
  ?>
  </pre>
  
