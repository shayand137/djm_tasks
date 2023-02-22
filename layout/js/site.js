
// a simple function that triggers alert box
function hello(){
    alert("Welcom to  y website");
}
// a simple functiom to add 2 number
function add(){
    document.write(5+6);
}
// document.get ElementBy ID (id)

//function to chang the background color of the page
function changeColor(Where,newColor){
    if (Where == "background"){
        document.body.style.backgroundColor = newColor;
    }
} 
 
function changeColor(){
    let color = document.getElementById('background').value;
    document.body.style.backgroundColor = color;
}
function changeFcolor(){
    let fcolor = document.getElementById('fcolor').value;
    document.body.style.color = fcolor;
}

//crud
function crud(){
let fname=(document.form1.fname.value).trim();
if (fname.length<5){
    alert("`First name must have atleast 5 character");
    return false;
}
}
function fnameVal(){
    let fname=(document.form1.fname.value).trim();
    if (fname.length<5){
        alert("`First name must have atleast 5 character");
        return false;
    }
}