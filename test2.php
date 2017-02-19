<!DOCTYPE html>
<html>
	<head>
		<title>Romoversikt</title>
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
	<h1 class="text-center" id="room-nr"></h1>
	<table class="table table-bordered">
		<tr>
			<th>UKE 3</th>
			<th>Mandag</th>
			<th>Tirsdag</th>
			<th>Onsdag</th>
			<th>Torsdag</th>
			<th>Fredag</th>
		</tr>

	<?php 
			for($i = 1; $i < 10; $i++){
				?>
				<tr>
					<td><?php echo $i ?></td>
					<td id="d1-<?php echo $i ?>" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div><div class="free-room"></div></td>
					<td id="d2-<?php echo $i ?>" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div><div class="free-room"></div></td>
					<td id="d3-<?php echo $i ?>" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div><div class="free-room"></div></td>
					<td id="d4-<?php echo $i ?>" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div><div class="free-room"></div></td>
					<td id="d5-<?php echo $i ?>" class="tbData"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div><div class="free-room"></div></td>
				</tr>
				<?php
			}
	?>
	</table>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="js/tablefill.js"></script>
	</body>
</html>