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

	<script type="text/javascript">
		function showhide(id) {
       	var e = document.getElementById(id);
       	e.style.display = (e.style.display == 'block') ? 'none' : 'block';
     }
	</script>
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

			<div class="btn" id="etg1" style="display:none;">
				<h3>ETG 1 - A</h3>	
				<h3>ETG 1 - B</h3>
			</div>
			<div class="btn" id="etg2" style="display:none;">
				<h3>ETG 2 - A</h3>	
				<h3>ETG 2 - B</h3>
			</div>

			<div class="klasseplan" id="klp1" 
			style="display:none; ">

			</div>
			<div class="klasseplan" id="klp2" 
			style="display:none;">

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

/*if (!btn1.onfocus && !btn2.onfocus) {
	etg1.style.display = "none";
	etg2.style.display = "none";
} */




</script>


	<div class="container" style="display:none">
		<div class="schedule">
			<table class="table table-bordered">
				<tr class="header-row">
					<th>Uke 5</th>
					<th>Mandag</th>
					<th>Tirsdag</th>
					<th>Onsdag</th>
					<th>Torsdag</th>
					<th>Fredag</th>
				</tr>
				<tr>
					<td class="left-row">1</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="left-row">2</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="left-row">3</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="left-row">4</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="left-row">5</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="left-row">6</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="left-row">7</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="left-row">8</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="left-row">9</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
		</div>		
	</div>
</body>
</html>