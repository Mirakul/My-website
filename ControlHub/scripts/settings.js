
function sendAvailability(){
	var isChecked = document.getElementById("available").checked;
	var ajax = new XMLHttpRequest();
	ajax.open("POST", "\ControlHub\php\main.php?q=" + isChecked);
	ajax.send();
}

function setup(isChecked){
	
	
}
