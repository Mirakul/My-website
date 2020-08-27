
function sendAvailability(){
	var isChecked = document.getElementById("available").checked;
	var ajax = new XMLHttpRequest();
	ajax.open("GET", "\ControlHub\php\main.php?q=" + isChecked);
	ajax.send();
}
