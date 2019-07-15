var menu = document.getElementsByClassName("burger_nav")[0];
var list = document.querySelector("header nav ul");
var list2 = document.querySelector("header nav ul li ul");
var li = document.querySelector("header nav ul li a");

console.log(menu);
menu.addEventListener("click", function ()
{
	list.classList.toggle("open");
})

// li.addEventListener("click", function() 
// {
// 	list.classList.toggle("open");
// 	list2.classList.toggle("open");
// })