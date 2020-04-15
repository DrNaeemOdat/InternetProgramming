<!-- //GET method -->
<!-- <p>Enter a Number</p>
<form>
  <p><label for="num">Your entry</label>
  <input type="text" name="num" id="num"/></p>
  <input type="submit"/>
</form>
<pre> -->
<!-- $_GET: -->
<?php 
 // print_r($_GET);
?>
<!-- </pre>  -->

<!--//POST method-->
<!-- <p>Enter a Number</p> 
<form method="post">
  <p><label for="num">Your entry</label>
  <input type="text" name="num" id="num" placeholder="Enter a number between 1 and 5" size= "40"/></p>
  <input type="submit"/>
</form>
<pre>
$_POST: -->
<?php
  // print_r($_POST);
?>
<!-- $_GET: -->
<?php
//  print_r($_GET);
?>
<!-- </pre>  -->


<!-- <form method="post" action="htmlformsandphp.php">
<p>Your Name:
  <input type="text" name="name"></p>
<p>Password:
  <input type="password" name="passwrd"></p>  -->
<!-- Radio buttons -->
 <!-- <p>Preferred Time:<br> 
    <input type="radio" name="when" value="AM">AM<br>
    <input type="radio" name="when" value="PM" checked>PM
  </p> -->
<!--Check Boxes-->
  <!-- <p>Meal Preferences:<br>
  <input type="checkbox" name="meal1" value="salted" checked>With alot of salt<br>
  <input type="checkbox" name="meal2" value="hot">With spices<br>
  <input type="checkbox" name="meal3" value="welldone">Well Done<br></p> -->
<!--Drop down list-->
  <!-- <p>Bevereges:
    <select name="bevereges" id="beveregesinput">
      <option value="0">--Select--</option>
      <option value="1">Pepsi</option>
      <option value="2">Apple</option>
      <option value="3">Orange</option>
      <option value="4">Tea</option>
      <option value="5">Coffee</option>
    </select>
  </p> -->
<!--Text area-->
  <!-- <p>Tell us about yourself:<br>
    <textarea rows="12" cols="30" id="selfintro" name="about">
      I am a computer engineer who loves programming....
    </textarea>
  </p> -->
  
<!--HTML5 input types-->
  <!-- Color: 
  <input type="color" name="favcolor" value="#00ff00"><br>
  Date of Birth:
  <input type="date" name="dob" value="2020-04-03"><br>
  Email:
  <input type="email" name="email"><br>
  Number (1 to 10):
  <input type="number" name="num" min="1" max="10"><br>
  Homepage:
  <input type="url" name="website"><br>
  Transportation:
  <input type="flying" name="saucer"><br> -->


  <!-- <p>
    <input type="submit" name="goahead" value="OK"/>
    <input type="button" onclick="location.href='http://www.ttu.edu.jo/'; return false;" value="Back">
  </p>
</form>  -->
<?php
  $oldnum=isset($_POST['num'])?$_POST['num']:'';
?>
<p>Enter Number:</p>
<form method="post">
  Enter Number:
  <input type="text" name="num" value="<?= htmlentities($oldnum) ?>" />
  <!-- use htmlentities($oldnum) -->
   <input type="submit"/> 
</form> 
<pre> 
$_POST:
<?php
 print_r($_POST);
?>
</pre>