var etg1 = document.getElementById('etg1');
var etg2 = document.getElementById('etg2');
var btn1 = document.getElementById('btn1');
var btn2 = document.getElementById('btn2');
var klp1 = document.getElementById('klp1');
var klp2 = document.getElementById('klp2');

btn1.onclick = function () {
	etg1.style.display = "inline-block";
	klp1.style.display = "initial";
	etg2.style.display = "none";
	klp2.style.display = "none";
}

btn2.onclick = function () {
	etg1.style.display = "none";
	klp1.style.display = "none";
	etg2.style.display = "inline-block";
	klp2.style.display = "initial";	
}

