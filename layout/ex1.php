<?php include "header.php" ?>

<h3>3.1.Write a simple PHP script to print your information (Name and your groupid). </h3>
<?php
echo "mohammadreza dejamfard<br>";
echo "BBCAP22";
?> 

<h3>3.2.Write PHP code to display the following message.</h3>
<?php
echo "Hello world! My name is \"David\"";
?> 
<h3> Current Date </h3> 
<?php
echo date("d.m.Y");
?> 
<script>
document.write("Hello word this is JavaScript");
</script>
<nosescript>
    please enable JavaScript to view this content,
</nosescript>
<input type="button" onclick="hello()" value="Click Me">

<h3> 3.4.$title = "PHP is interesting”. Put this variable as a title marked as h1 (heading 1) in your HTML document. </h3>
<?php
$title1 = "php in interesting";
echo "<h1>" . $title1 . "</h1>";
?>
<script>
//window.alert
//window.alert("this will trigger an alert box");
//window.alert(5+10);
//document.write
document.write("Helllo this is intresting");
</script>

<h3> 3.5.table & variable </h3>
<button onclick="add()"> Click to add </button>
<hr>
<p id="place1" style="color : red; background-color : yellow;"></p>
<span id="place2" style="color : red; background-color : green;"></span>

    <script>
        document.getElementById("place1").innerHTML = "this will go to place1";
        document.getElementById("place2").innerHTML = "this will go to span";

    </script>
<p id="place1"></p>
<script>
document.getElementById("place1").innerHTML = "this will go to place1";

</script>
<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;
echo "
<table>
<tr>
<th> S.N </th><th> Name </th><th> Grade </th>
</tr>
<tr>
<td> 1 </td><td> Pekka </td><td> $g1 </td>
</tr>
<tr>
<td> 2 </td><td> Johanna </td><td> $g2 </td>
</tr>
<tr>
<td> 3 </td><td> John </td><td> $g3 </td>
</tr>
</table>
";
?>

<h3> 4 screenshot of the development environment </h3>
<img scr="./sc.jpg" alt ="sc4">

<h2> Changing background-color </h2>
<form>
    <input type="color" name="background" onchange="changeColor('background',this.value)">
</form>
<?php include "footer.php"
 ?>