var appa = document.getElementById("appa");
var appadmin = document.getElementById("appadmin");
var rmart = document.getElementById("rmart");
var main = document.getElementsByClassName("main1")[0];
var mode = 0;
var ch = 0;
appa.addEventListener("click", function() {
	ch = 1;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			main.innerHTML = main.innerHTML + this.responseText;
			// main.style.background-image = none;
		}
	}
	xmlhttp.open("GET","approve.php?ch="+ch+"&mode="+mode,true);
	xmlhttp.send();

	document.body.addEventListener('click', function(event) {
		var xmlhttp = new XMLHttpRequest();
		if(event.srcElement.id == 'boom') {
			var id = prompt("Enter the id(ONLY ONE) of the article to be approved");
		}
	xmlhttp.open("GET","approve.php?id="+id,true);
	xmlhttp.send();
		})
})

appadmin.addEventListener("click", function() {
	ch = 2;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200)
		{
			main.innerHTML = main.innerHTML + this.responseText;
			// main.style.background-image = none;
		}
		xmlhttp.open("GET", "approve.php?ch="+ch, true);
		xmlhttp.send();
	}
})

rmart.addEventListener("click", function() {
	ch = 3;
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			main.innerHTML = main.innerHTML + this.responseText;
			// main.style.background-image = none;
		}
	}
	xmlhttp.open("GET", "approve.php?ch="+ch, true);
	xmlhttp.send();
	document.body.addEventListener('click', function(event) {
		var xmlhttp = new XMLHttpRequest();
		if(event.srcElement.id == 'boom') {
			var id = prompt("Enter the id(ONLY ONE) of the article to be deleted");
		}
	xmlhttp.open("GET","approve.php?id="+id+"&ch="+ch,true);
	xmlhttp.send();
		})

})