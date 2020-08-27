/* // When the user scrolls the page, execute navScroll
window.onscroll = function() {navScroll()};
	
// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function navScroll() {
	// Get the navbar
	var navbar = document.getElementById("navbar");
	// Get the offset position of the navbar
	var sticky = navbar.offsetTop;
	if (window.pageYOffset >= sticky) {
		navbar.classList.add("sticky")
	} 	else {
    navbar.classList.remove("sticky");
	}
}  */

function setup(){
	// var w = document.getElementById("dropdown_posel");
	// var homebtn = document.getElementById("homebtn");
	
	document.getElementById("dropdown_posel").style.width = document.getElementById("homebtn").style.width;
	
}

window.onload = function() {setup()};
