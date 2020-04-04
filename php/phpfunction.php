<pre>
<?php
// function writeMsg() {
//     echo "Hello world!";
// }

// writeMsg(); // call the function
// WRiteMsg(); // call the function

// function greet($lang="uu"){
//   if($lang=="es") return "Hola";
//   if($lang=="fr") return "Bonjour";
//   return "Hello";
// }
// echo greet('es');//returns "Hola"
// echo "\n";
// echo greet();//rerturns "Hello"?
// $x=3;
// function foo($x){//by value
//   $x=9;
// }
// foo($x);
// echo "X is: ".$x;
$y=3;
$ff=99;
function fun2(&$z){//by refrence
  $z=89;
  global $ff;
  //global $d=9;// this is wrong
  $ff=77;
  global $hh;
  $hh=12;
  echo "inside the funstion: ".$ff."\n";
}

echo "Original y is: ". $y."\n";
fun2($y);
echo "outside the function: ".$ff."\n";
echo "global keyword".$hh."\n";
echo "Affected y is: ".$y;
phpinfo();
?>
</pre>