// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// Full-width images
function one() {
    for (i = 0; i < elements.length; i++) {
    elements[i].style.flex = "100%";
  }
}

// Two images side by side
function two() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.flex = "50%";
  }
}

// Four images side by side
function four() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.flex = "25%";
  }
}

// Add active class to the current button (highlight it)
var header = document.getElementById("myHeader");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

// column
// function column(x){
//     if(x.matches){
//         elements[i].style.flex = "100%"
//     }else{
//         elements[i].style.flex = "25%"
//     }
// }

// var x = window.matchMedia("(min-width: 1024px)")
// column(x) // Call listener function at run time
// x.addListener(column) // Attach listener function on state changes

var x = window.matchMedia('(min-width: 1024px)')
var y = window.matchMedia('(min-width: 768px)')

function resize(){
    if(x.matches){
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        btns[2].classList += " active"
    }else if(y.matches){
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        btns[1].classList += " active"
    }else{
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        btns[0].classList += " active"
    }
}

resize()

console.log(y)