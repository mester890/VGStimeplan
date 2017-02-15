<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS morten tester og sverre -->
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
		<a id="btn2" >
			<div class="btn">
				<h3>ETG 2</h3>
			</div>
		</a>
			<div class="btn" id="etg1">
				<h3>ETG 1 - A</h3>	
				<h3>ETG 1 - B</h3>
			</div>
			<div class="btn" id="etg2">
				<h3>ETG 2 - A</h3>	
				<h3>ETG 2 - B</h3>
			</div>
	</div>

<!--<button id="btn1">ETG 1</button>
<button id="btn2">ETG 2</button>
-->

<script type="text/javascript">
var etg1 = document.getElementById('etg1');
var etg2 = document.getElementById('etg2');
var btn1 = document.getElementById('btn1');
var btn2 = document.getElementById('btn2');

btn1.onclick = function () {
	etg1.style.display = "block";
	etg2.style.display = "none";
}

btn2.onclick = function () {
	etg1.style.display = "none";
	etg2.style.display = "block";	
}
</script>
</body>
</html>