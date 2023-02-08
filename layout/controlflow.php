<?php include "header.php" ?>

<h1> exercise 4.In-class Task Control flow and loops</h1>


<h4> 1.Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays</h4>

<?php
$month = date('F');
if ($month=="August"){
    echo "It's August, so it's still holiday.";
}
else
{
    echo "Not August, this is $month so I don't have any holidays
    ";
}
?>


<h4> 2.Assign colour red to a variable name $color and check to print one the following 
    responses (if else statement)</h4>
<?php
$color = "red";
if($color == "red"){
    echo 'The color is red. ';
}
else 
{
    echo 'The color is not red.';
}
?>


<h4> 3.Write a program to grade students based on their total score for a subject. Use variable
     to hold the total score. The grading scheme is</h4>

<form method ="post">
<input type= "number" name = "grade" placeholder = "grade:">
<input type="submit" value = "Submit">
</form>
<?php
$grade =$_POST['grade'];
if ($grade >= 80) {
    echo "The grading scheme is Excellent";
}
elseif ($grade < 80 && $grade >=70){
    echo"The grading scheme is great";
}
elseif($grade < 70 && $grade >=60){
   echo "The grading scheme is good";
}
elseif ($grade < 60 && $grade >=50) {
   echo "The grading scheme is pass";
}
elseif($grade <50){
   echo "you are Failed";
}
?>

<h4> 4.Write a program to get inputs (age and name) from the user and based on their age,
     decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,)</h4>

<form method ="post">
<input type= "text" name = "name" placeholder = "Name:">
<input type= "number" name = "age" placeholder = "Age:">
<input type="submit" value = "Submit">
</form>
<?php
$name = $_POST['name'];
$age = $_POST['age'];
if ($age >= 18){
    echo " $name" . "<br>";
    echo"yes";
}
        else
   {
    echo " $name" . "<br>";
    echo"no";
   } 
   ?> 


   <h4> 5.In task 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name. 
   Use Switch statement with strops function to print the name of the browser as below </h4> 
<?php
  
$browser= $_SERVER['HTTP_USER_AGENT'];

switch (true) {
 case (stristr($browser, 'Edge')):
    echo "You are using Microsoft Edge.";
    break;
case (stristr($browser, 'Chrome')):
    echo "You are using Google Chrome.";
    break;
case (stristr($browser, 'Firefox')):
    echo "You are using Mozilla Firefox.";
    break;
case (stristr($browser, 'Safari')):
    echo "You are using Apple Safari.";
    break;
case (stristr($browser, 'Opera')):
    echo "You are using Opera.";
    break;
    default:
    echo "Could not detect browser name.";
}
?>
<?php include "footer.php" ?>