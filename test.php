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
<style>
	/* Use CSS to style the elements as you like. And, put the CSS stylesheet in a different file. */
</style>

<h1>Parsing JSON - Teachers</h1>
<div class="container">
<table class="table table-bordered">
	<tr>
		<th>UKE 3</th>
		<th>Mandag</th>
		<th>Tirsdag</th>
		<th>Onsdag</th>
		<th>Torsdag</th>
		<th>Fredag</th>
	</tr>
	<tr>
		<td>1</td>
		<td id="d1-1" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d2-1" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d3-1" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d4-1" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d5-1" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
	</tr>
	<tr>
		<td>2</td>
		<td id="d1-2" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d2-2" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d3-2" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d4-2" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d5-2" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
	</tr>
	<tr>
		<td>3</td>
		<td id="d1-3" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d2-3" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d3-3" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d4-3" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d5-3" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
	</tr>
	<tr>
		<td>4</td>
		<td id="d1-4" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d2-4" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d3-4" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d4-4" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d5-4" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
	</tr>
	<tr>
		<td>5</td>
		<td id="d1-5" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d2-5" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d3-5" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d4-5" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d5-5" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
	</tr>
	<tr>
		<td>6</td>
		<td id="d1-6" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d2-6" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d3-6" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d4-6" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d5-6" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
	</tr>
	<tr>
		<td>7</td>
		<td id="d1-7" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d2-7" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d3-7" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d4-7" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d5-7" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
	</tr>
	<tr>
		<td>8</td>
		<td id="d1-8" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d2-8" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d3-8" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d4-8" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d5-8" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
	</tr>
	<tr>
		<td>9</td>
		<td id="d1-9" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d2-9" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d3-9" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d4-9" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
		<td id="d5-9" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div></td>
	</tr>
</table>
</div>
<!-- jQuery :) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>		
	// this will load the data from the API. It is an async call, and when it is DONE...
	$.get('js/data.json')	.done(function(data){
		
	
		for(var i = 0; i < data.length; i++) {	
			
			var t = data[i];
			var cell = 'd' + t.Day + '-' + t.Time; 
			var $ourCell = $('#' + cell); // $ because it is a jQuery object. 
			$ourCell.find('.teacher-name').html(t.Teacher); // this will only set the data for the first hour, because the function 'getCorrectHour' does not return the 'correctHour' - yet :D
			$ourCell.find('.subject-name').html(t.Subject);
		}		
	});

</script>
</body>
</html>