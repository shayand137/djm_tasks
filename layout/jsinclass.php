<?php 
$title = "JavaScript Events and from validation";
include "header.php"
?>
<h2> A simple button to display date</h2>
<button onclick="this.innerHTML = Date()"> Click to know date </button>
<h2> make a /button and place holder as paragraph for the date</h2>
<button onclick="getElementById().innerHTML=Date()"> Click to know date </button>
<p id="p1"></p>

<h2> Change the background color</h2>
<from>
    <input type="color" id="background" onchange="changecolor()">
</form>

<h2> Change the folor</h2>
<from>
    <input type="color" id="fcolor" onchange="changefcolor()">
</form>

<h2>on mouse over & on mouse out</h2>


<span onmouseover="this.style.color = 'blue';
                    this.style.backgroundColor = 'yellow';
                    this.style.fontSize = '2em';"

      onmouseout="this.style.color = 'red';
                    this.style.backgroundColor = 'white';
                    this.style.fontSize = '1.1em';";>some text </span>
<?php include "footer.php"?>