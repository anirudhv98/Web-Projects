var submit = document.getElementById("sub1");
		var head = document.getElementById("heading");
		var caption = document.getElementById("caption");
		var mainText = document.getElementById("text");
		var img0 = document.getElementById("img0");
		var img1 = document.getElementById("img1");
		submit.addEventListener("click", function() {
			localStorage.setItem("heading",head.value);
			localStorage.setItem("text", mainText.value);
			localStorage.setItem("caption", caption.value);
			localStorage.setItem("img0",img0.value);
			localStorage.setItem("img1",img1.value);
			var xmlhttp = new XMLHttpRequest();
			var str1 = "heading="+localStorage['heading']+"&text="+localStorage['text']+"&caption="+localStorage['caption']+"&img0="+localStorage['img0']+"&img1="+localStorage['img1'];
			xmlhttp.onreadystatechange = function() {
				var main = document.getElementsByClassName("main1")[0];
				if(this.readyState == 4 && this.status == 200)
					main.innerHTML = '<h3 style="text-align:center">Article Submitted Successfully!</h3>'+this.responseText;
			}
			xmlhttp.open("POST","writeB.php", true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send(str1);
			});