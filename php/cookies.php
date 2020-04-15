<pre>
<?php
//cannot have any output before setcookie
  if(! isset($_COOKIE['anything'])){
    setcookie('anything','66', time()+3600);
  }
  print_r($_COOKIE);
?>

</pre>
 <p><a href="cookies.php">Click Me!</a>or Press Refresh</p>
