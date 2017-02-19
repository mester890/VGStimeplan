<div class="container">
	<h1 class="text-center" id="room-nr"></h1>
	<div class="schedule">
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
				<td class="tbWeek"><p><?php echo $i ?></p></td>
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
</div>