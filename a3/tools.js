/* Insert your javascript here */
window.onscroll = function() {stickyNav()}

var navbar = document.getElementById("myTopNav");

var sticky = navbar.offsetTop;
//menu expand function, tried getting both the collapsed menu and sticky to work together but can't get it to work
function menuExpand() {
  if (navbar.className === "topNav" && window.pageYOffset >= sticky) {
    navbar.classList.add("responsive");
    navbar.classList.add("sticky");
  } else if (navbar.className === "topNav") {
    navbar.classList.add("responsive");
  } else {
    navbar.className = "topNav";
  }
}

// Sticky navbar functionality 
function stickyNav(){
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
}