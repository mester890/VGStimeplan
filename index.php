<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS morten tester -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<div class="container">
		<div class="btn_container">

			<a id="btn1">
				<div class="btn">
					<h3>ETG 1</h3>
				</div>
			</a>

			<a id="btn2">
				<div class="btn">
					<h3>ETG 2</h3>
				</div>
			</a>

			<button id="mBtn">Modal</button>
			<br>
			<div id="etg1" style="display:none;">
				<span>ETG 1 AB</span>
			</div>
			<div id="etg2" style="display:none;">
				<span>ETG 2 AB</span>	
			</div>

			<div class="klasseplan" id="klp1">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<?php include 'includes/map_a.php'; ?>
						</div>
						<div class="col-md-6">
							<?php include 'includes/map_b.php'; ?>
						</div>
					</div>
				</div>

			</div>

			<div class="klasseplan" id="klp2">
				<!-- Map B-fløy etg 2 -->
				<div class="container">
					<div class="row">
						<div class="col-md-6 map">
							<?php include 'includes/map_a.php'; ?>
						</div>
						<div class="col-md-6 map">
							<?php include 'includes/map_b.php'; ?>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-6 map">
							<?php include 'includes/map_a.php'; ?>
						</div>
						<div class="col-md-6 map">
							<?php include 'includes/map_b.php'; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Script for btn and show of map -->
<script type="text/javascript">
var etg1 = document.getElementById('etg1');
var etg2 = document.getElementById('etg2');
var btn1 = document.getElementById('btn1');
var btn2 = document.getElementById('btn2');
var klp1 = document.getElementById('klp1');
var klp2 = document.getElementById('klp2');
var B202 = document.getElementById('B202');
var modal = document.getElementById('modal');
var mBtn = document.getElementById('mBtn');

btn1.onclick = function () {
	etg1.style.display = "inline-block";
	klp1.style.display = "initial";
	etg2.style.display = "none";
	klp2.style.display = "none";
};

btn2.onclick = function () {
	etg1.style.display = "none";
	klp1.style.display = "none";
	etg2.style.display = "inline-block";
	klp2.style.display = "initial";	
};



</script>


	<div class="container" style="display: none;" id="modal">
		<?php include 'includes/table.php'; ?>	
	</div>
</body>
</html>