<!DOCTYPE html>
<html>
<head>
	<title>Gauldal VGS - Romoversikt</title>
	<!-- Latest compiled and minified CSS morten tester -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container-fluid">
	<div class="row logo-row"">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<img src="img/logo.png">
		</div>
		<div class="col-md-2"></div>
	</div>
		<br>
		<div class="row">
			<h2 class="text-center">Velkommen!</h2>
			<h4 class="text-center">Velg etasje for å begynne.</h4>
		</div>
		<div class="btn_container">
			<a id="btn1">
				<h3 class="btn">ETG 1</h3>
			</a>
			<a id="btn2">
				<h3 class="btn">ETG 2</h3>
			</a>

			<br>
			<br>

			<div id="etg1" style="display:none;">
			</div>
			<div id="etg2" style="display:none;">
			</div>

			<div class="klasseplan" id="klp1">
					<div class="row map-row">
						<h3 class="header-text">1. Etasje</h3>
						<div class="col-md-6 map">
							<h3 class="text-center header-text">A-Fløy</h3>
							<?php include 'includes/map_a.php'; ?>
						</div>
						<div class="col-md-6 map">
							<h3 class="text-center header-text">B-Fløy</h3>
							<?php include 'includes/map_b.php'; ?>
						</div>
				</div>

			</div>

			<div class="klasseplan" id="klp2">
				<div class="row map-row">
					<h3 class="header-text">2. Etasje</h3>
					<div class="col-md-6 map">
						<h3 class="text-center header-text">A-Fløy</h3>
						<?php include 'includes/map_a.php'; ?>
					</div>
					<div class="col-md-6 map">
						<h3 class="text-center header-text">B-Fløy</h3>
						<?php include 'includes/map_b.php'; ?>
					</div>
				</div>
			</div>
			<div id="myModal" class="modal">
			  <!-- Modal content -->
			  <div class="modal-content">
			    <span class="close">&times;</span>
			    <div class="schedule">
			    	<?php include 'includes/table.php'; ?>
			    </div>

			  </div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/modal.js"></script>
<!-- Script for btn and show of map -->
<script type="text/javascript">
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

while (btn1.onfocus == false && btn1.onfocus == false) {
	etg1.style.display = "none";
	etg2.style.display = "none";
}

function b202() {
	table.style.display = "inherit";
}



</script>

</body>
</html>