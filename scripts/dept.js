// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Add bg class to header when y-axis reaches (windowHeight * 0.35)
function myFunction() {
  const header = document.getElementById("header");
  var winHeight = (window.innerHeight*0.85) - (6*16);
  var distanceScrolled = document.documentElement.scrollTop;

  if (distanceScrolled >= winHeight) {
    header.classList.add("bg");
  } else if (distanceScrolled <=20) {
    header.classList.remove("bg");
  }
  else {
    header.classList.remove("bg");
  }
}
