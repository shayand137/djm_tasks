<?php include "header.php" ?>

<h4>1.  Write a php script to display courses as list. Use <li>
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")</h4>
<?php
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
foreach ($courses as $i){
    echo "$i";
}
?>

<h4>2. The unset() function is used to remove element from the array. The var_dump() function is used to dump information about a variable.  array_values() is an inbuilt function that returns all the values of an array and not the keys.
Delete an element from the array below:
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");</h4>

<?php
$courses1 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[4]);
echo implode(",", $courses1);
?>

<h4>3. Sort the following array 
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");<br>
a) ascending order sort by value<br>
b) ascending order sort by Key<br>
c) descending order sort by Value<br>
d) descending order sort by Key </h4>

<?php
$courses3 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
asort($courses3);
echo implode(",", $courses3) . "<br>";
rsort($courses3);
echo implode(",",$courses3). "<br>";
arsort($courses3);
echo implode(",",$courses3). "<br>";
krsort($courses3);
echo implode(",",$courses3). "<br>";
?>

<h4>4. Change the following array's all values to upper case.
 $courses4=array("php", "html", "javascript", "cms", "project");
</h4>
<?php
 $courses4 = array("php", "html", "javascript", "cms", "project");
$courses4 = array_map('strtoupper', $courses4);
foreach ($courses4 as $i){
    echo "$i".",";
}
?>

<h4>5. List all your favorite colors and their hexadecimal equivalents. (associative arrays)</h4>
<?php
$colors = array(
    "pink" => "#fbdcf2",
    "darkgreen" => "#395943",
    "gray" => "#9b9b9b",
    "with" => "#ffffff",
    "black" => "#000000",
);

$keys = array_keys($colors);

for ($i = 0; $i < count($keys); $i++) {
    echo $keys[$i] . ": " . $colors[$keys[$i]] . "<br>";
}
?>



<?php include "footer.php" ?>