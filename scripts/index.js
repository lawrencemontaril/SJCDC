// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Add bg class to header when y-axis reaches (windowHeight * 5.40rem)
function myFunction() {
  const header = document.getElementById("navbar");
  var winHeight = window.innerHeight - (5.40 * 16);
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

