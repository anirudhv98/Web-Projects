var xmlhttp = new XMLHttpRequest();
var matchday = 9;
document.querySelector(".main #fix").innerHTML = "<h2>Fixtures</h2>"+'<div><a id="lefti"></a><p>Gameweek '+matchday+'</p><a id="righti"></a></div>';
xmlhttp.onreadystatechange = function() {
if(this.readyState == 4 && this.status == 200) {
	document.querySelector(".main #fix").innerHTML = document.querySelector(".main #fix").innerHTML+this.responseText;
	}
	};
	xmlhttp.open("GET", "fix.php?match="+matchday, true);
	xmlhttp.send();	

document.body.addEventListener( 'click', function ( event ) {
  if( event.srcElement.id == 'lefti' ) {
    matchday = matchday -1;
    document.querySelector(".main #fix").innerHTML = "<h2>Fixtures</h2>"+'<div><a id="lefti"></a><p>Gameweek '+matchday+'</p><a id="righti"></a></div>';
	xmlhttp.onreadystatechange = function() {
	if(this.readyState == 4 && this.status == 200) {
		document.querySelector(".main #fix").innerHTML = document.querySelector(".main #fix").innerHTML+this.responseText;
	}
	};
	xmlhttp.open("GET", "fix.php?match="+matchday, true);
	xmlhttp.send();
  };
} );

document.body.addEventListener( 'click', function ( event ) {
  if( event.srcElement.id == 'righti' ) {
    matchday = matchday + 1;
    document.querySelector(".main #fix").innerHTML = "<h2>Fixtures</h2>"+'<div><a id="lefti"></a><p>Gameweek '+matchday+'</p><a id="righti"></a></div>';
	xmlhttp.onreadystatechange = function() {
	if(this.readyState == 4 && this.status == 200) {
	document.querySelector(".main #fix").innerHTML = document.querySelector(".main #fix").innerHTML+this.responseText;
	}
	};
	xmlhttp.open("GET", "fix.php?match="+matchday, true);
	xmlhttp.send();
  };
} );

//This method doesnt work, as lefti and righti are DYNAMICALLY CREATED
//Dynamically created elements in JS don't have the functions inbuilt with normal elements
//Therefore, we use document.EventListener to record an event, then check the source of event
//If event has come from the required dynamic element, we trigger a function
// var left = document.getElementsByClassName("lefti")[0];  
// var right = document.getElementsByClassName("righti")[0];

// left.onclick = function() 
// {
// 		matchday = matchday-1;
// 		alert("lol");
// }
// right.addEventListener("click", function() {
// 	if(matchday !== 38)
// 	{
// 		matchday = matchday+1;
// 		alert("lol");
// 	}
// })