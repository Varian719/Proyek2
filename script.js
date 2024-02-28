let container = document.querySelector(".container");
let btn = document.getElementById("spin");
let number = Math.ceil(Math.random() * 1000);

document.addEventListener("DOMContentLoaded", function () {
	const sidebar = document.querySelector(".sidebar");
	sidebar.style.width = "250px";
});

document.getElementById("menu-icon").addEventListener("click", function () {
	const sidebar = document.querySelector(".sidebar");
	sidebar.style.width = sidebar.style.width === "250px" ? "0" : "250px";
});

document.querySelector(".content").addEventListener("click", function () {
	document.querySelector(".sidebar").style.width = "0";
});

btn.onclick = function () {
	container.style.transform = "rotate(" + number + "deg)";
	number += Math.ceil(Math.random() * 1000);
};
