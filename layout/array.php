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





<?php include "footer.php" ?>