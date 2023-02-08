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

<?php include "footer.php" ?>