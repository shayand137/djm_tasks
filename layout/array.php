<?php include "header.php" ?>

<h4>1.  Write a php script to display courses as list. Use <li>
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")</h4>
<?php
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
foreach ($courses as $i){
    echo "$i";
}
?>





<?php include "footer.php" ?>