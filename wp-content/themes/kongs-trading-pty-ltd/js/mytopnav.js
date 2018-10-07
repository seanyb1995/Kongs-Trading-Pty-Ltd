function responsive() {
	var x = document.getElementById("myTopnav");
	if (x.className === "topnav") {
	x.className += "_responsive";
	} else {
	x.className = "topnav";
	}
}
