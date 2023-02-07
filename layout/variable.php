<?php include "header.php" ?>

<h1> exercise 3.In-class Task Variable & Operators</h1>

<h2>
1. Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print 
using <h3> tag: Hello …., You are welcome to my site.  
</h2>

<form action="action.php" method="post">
    <div class="row">

    <div class="col">
    First Name:<input type="text" name="fname" required placeholder="First Name"> <br>
    Last Name:<input type="text" name="lname" required placeholder="Last Name" > <br> 
</div>
<div class="col">
    Birth Date:<input type="date" name="bdate"> <br> 
    Select fav color: <input type="color" name="color"> <br>
    </div>
    <input type="submit" value="submit">

</div>
</form>

<h3> 3.Prepare a simple html table and apply bootstrap style to the table. You may use the same table that you did in 3.5. </h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>shayan</td>
      <td>djm</td>
      <td>shayan.djm@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>ariyan</td>
      <td>mmd</td>
      <td>ariyan.mmd@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>abdol</td>
      <td>ferdos</td>
      <td>abdol.ferdos@gmail.com</td>
    </tr>
  </tbody>
</table>
<h3> 4.Write a PHP script with two string variables. Assign any text to these variables. 
   Join them together.  Print the length of the string. (Hint: string function)</h3>
   <?php
   $First_name ="mohammadreza";
   $Last_name ="dejamfard";
   echo  $First_name ." ".  $Last_name . "<br>";
   echo  $Last_name . ":" .strlen( $First_name)."  ". "<br>".$Last_name . ":" .strlen($Last_name);
   ?>
<h4> 5.Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers
     and echo statement to output your answer.</h4>
     <?php
     $num1 = 298;
     $num2 = 234;
     $num3 = 46;
     $sum = $num1 + $num2 + $num3;
     echo $num1. "+" .$num2. "+" .$num3. "=" .$sum;

     ?>
     <h4> 6.Write a PHP script to detect the browser being used to view your pages. 
      (Use predefined variables: $_SERVER).</h4>
      <?php
      echo $_SERVER['HTTP_USER_AGENT'];
      ?>

<?php include "footer.php" ?>
