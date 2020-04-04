<h1>PHP Expressions:</h1>
<?php
  echo "<pre>";
  // echo "This is a single line string<br>";
  // echo "\nHowevr this one, is\n hgfhgfhjf
  // a two line string";
  // echo '\nHowevr this \\one\\, is \'not\'
  // a two line string';
  //+, -, /, * as usual
  //. is a concatenation operator for strings
  // $y=7;
  // $d=9;
  // $res=$y*$d;
  // $msg="The output of $y multiplied by $d is: $res
  // "."\nor ".$y*$d;
  // print($msg);
  // echo("\n");
  // echo($msg);
  // echo "\n";
  // $x=1;
  // $y=3 + $x++;
  // print $y." while x becomes: ".$x;
  // /* $msg1="Hello ";
  // $msg2="World!";

  // $msg3="\n".$msg1.$msg2;
  // echo $msg3;*/

  // Terneray 
  // $w=123;
  // $msg=$w>100? "Large":"Small";
  // echo "First: $msg\n";
  // $msg=($w % 2==0)?"Even":"Odd";
  // echo "Second: $msg\n";
  // $msg=($w%2)?"Odd":"Even";
  // echo "Third: $msg\n";
//   //Assignments
  // $o="Hello";
  // $o.=" ";//$o=$o." ";
  // $o.="World!";
  // $o.="\n";
  // echo $o;
  // $cnt=0;
  // $cnt+=1;
  // echo "Count: $cnt\n";
//   //Conversion/casting
  // $a=56;$b=12;
  // $c=$a/$b;
  // echo "C: $c\n";
  //  $d="100"+36.25+TRUE;
  // echo ("D: ".$d."\n");
  // echo ("D2: ". (string)$d."\n");
  // $e=(int)9.9-1;
  // echo "E: $e\n";
  // $e=9.9-1;
  // echo "E2: $e\n";
  // $f="Ali"+25;
  // echo "F: $f\n";
  // $g="Ali". 25;
  // echo "G: $g\n";
  // // echo "A".FALSE."B\n";
  // echo "X".TRUE."Y\n";
//   //Equality
  // if (123=="123") print "Equality 1\n";
  // if(123=="100"+23) print("Equality 2\n"); 
  // if(FALSE=="0") print("Equality 3\n");
  // if((5<6)=="2"-"1") print("Equality 4\n");
  // if((5<6)===TRUE) print("Equality 5\n");
  //string postion
  // $v="Hello World!";
  // echo "First: ".strpos($v,"Wo")."\n";
  // echo "Second: ".strpos($v,"He")."\n";
  // echo "Third: ".strpos($v,"ZZ")."\n";
  // if(strpos($v,"He")==FALSE) echo "Wrong A\n";
  // if(strpos($v,"ZZ")==FALSE) echo "Right B\n";
  // if(strpos($v,"He")!== FALSE) echo "Right C\n";
  // if(strpos($v,"ZZ")===FALSE) echo "Right D\n";
  // print_r(FALSE); print FALSE;
  // echo "Where were they?\n";
  var_dump(FALSE);
  
  // for($x=0;$x<10;$x++){
  //   echo $x."\n";
  // }
  // $x=0;
  // while($x<10){
  //   echo $x."\n";
  //   $x++;
  // }
  $x=0;
  do{
    $x++;
    if($x==5) continue;
    echo $x."\n";
    
    
  }while($x<10);
  echo "</pre>";
?>