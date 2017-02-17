<!DOCTYPE html>
<html>
	<head>
		<title>Modal Test</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">

	</head>


	<body>

		<!-- Trigger/Open The Modal -->
		<button id="btn_202">Open Modal</button>
		<button id="btn_203">Open Modal</button>
		<button id="btn_204">Open Modal</button>
		<button id="btn_205">Open Modal</button>

		<!-- The Modal -->
		<div id="b202" class="modal">
		  <div class="modal-content">
		    <span class="close">&times;</span>
		    B202
		  </div>
		</div>
		<div id="b203" class="modal">
		  <div class="modal-content">
		    <span class="close">&times;</span>
		    B203
		  </div>
		</div>
		<div id="b204" class="modal">
		  <div class="modal-content">
		    <span class="close">&times;</span>
		    B204
		  </div>
		</div>
		<div id="b205" class="modal">
		  <div class="modal-content">
		    <span class="close">&times;</span>
		    B205
		  </div>
		</div>
		<script type="text/javascript">
			// Get the modal
var modal202 = document.getElementById('b202');
var modal203 = document.getElementById('b203');
var modal204 = document.getElementById('b204');
var modal205 = document.getElementById('b205');

// Get the button that opens the modal
var b202 = document.getElementById("btn_202");
var b203 = document.getElementById("btn_203");
var b204 = document.getElementById("btn_204");
var b205 = document.getElementById("btn_205");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
b202.onclick = function() {
    modal202.style.display = "block";
}
b203.onclick = function() {
    modal203.style.display = "block";
}
b204.onclick = function() {
    modal204.style.display = "block";
}
b205.onclick = function() {
    modal205.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal202.style.display = "none";
    modal203.style.display = "none";
    modal204.style.display = "none";
    modal205.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

		</script>

	</body>
</html>