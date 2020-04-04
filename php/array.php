<pre>
<?php
  //indexed array
  // $cars = array("Volvo", "BMW", "Toyota");
  // shuffle($cars);
  // var_dump($cars);
  
  // echo "I like ".$cars[0].", ".$cars[1]." and ".$cars[2].".\n";
  // var_dump($cars);
  // sort($cars);
  // var_dump($cars);
  // $arrlength = count($cars);
  // for($x = 0; $x < $arrlength; $x++) {
  //   echo $cars[$x];
  //   echo "\n";
  // }
  //Associative Arrays
  // $age = array("Peter"=>"38", "Ben"=>"37", "Joe"=>"43");
  // $myage=$age['Ben']??'noage';
  // echo $myage;
  // var_dump($age);
  // ksort($age);
  // var_dump($age);
  // echo "The size of our array is: ". count($age)."\n";
  // echo "The age of Ben is: ".$age["Ben"]. "\n";
  // foreach($age as $x => $x_value) {
  //   echo "Key=".$x.", Value=".$x_value;
  //   echo "<br>";
  // }
  // echo "Existance of a key: ". array_key_exists("Ben",$age);
  // if (array_key_exists("Ben",$age)===FALSE) echo "\nNot there";
  // else echo "\nThere";
  // if (isset($age['Bewn'])===FALSE) echo "\nNot there";
  // else echo "\nThere";
  // $dd=9;
  // if (is_array($dd)===FALSE) echo "\nNot Array";
  // else echo "\nArray!";

  // //Multidimensional Arrays
  // $prod=array(
  //   'paper'=>array(
  //     'copier'=>"Copier &multipurpose",
  //     'inkjet'=>"Inkjet Printer",
  //     'laser'=>"Laser Printer"),
  //   'pens'=>array(
  //     'ball'=>"Ball Point",
  //     'marker'=>"Markers")
  // );
  // echo $prod["pens"]["marker"];
  //Exploding a sentence
  $inp="This is a sentence with seven words";
  $tmp=explode(' ',$inp);
  print_r($tmp);
  echo FALSE;
?>
</pre>