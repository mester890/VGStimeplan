			<?php include 'menu.php'; ?>
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center">Gauldal VGS - Romoversikt</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-3 text-center">
					<h2 class="btn btn-default btn-lg btn-warning gvs-btn" id="btn1">ETG 1</h2>
				</div>
				<div class="col-md-3 text-center">
					<h2 class="btn btn-default btn-lg btn-warning gvs-btn" id="btn2">ETG 2</h2>
				</div>
				<div class="col-md-3"></div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="mapContainer">
						<div id="map1" style="display:none;">
							<br>
							<?php include 'js/map_a.php'; ?>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mapContainer">
						<div id="map2" style="display:none;">
							<br>
							<?php include 'js/map_a.php'; ?>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h1 id="modalHeader"></h1>
						</div>
						<div class="modal-body">
							<table class="table table-bordered schedule"><tr><th>Uke 3</th><th>Mandag</th><th>Tirsdag</th><th>Onsdag</th><th>Torsdag</th><th>Fredag</th></tr><tr><td id="d0-1"><h2 class="text-center">1</h2><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d1-1"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d2-1"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d3-1"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d4-1"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d5-1"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td></tr><tr><td id="d0-2"><h2 class="text-center">2</h2><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d1-2"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d2-2"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d3-2"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d4-2"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d5-2"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td></tr><tr><td id="d0-3"><h2 class="text-center">3</h2><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d1-3"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d2-3"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d3-3"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d4-3"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d5-3"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td></tr><tr><td id="d0-4"><h2 class="text-center">4</h2><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d1-4"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d2-4"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d3-4"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d4-4"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d5-4"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td></tr><tr><td id="d0-5"><h2 class="text-center">5</h2><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d1-5"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d2-5"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d3-5"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d4-5"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d5-5"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td></tr><tr><td id="d0-6"><h2 class="text-center">6</h2><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d1-6"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d2-6"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d3-6"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d4-6"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d5-6"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td></tr><tr><td id="d0-7"><h2 class="text-center">7</h2><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d1-7"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d2-7"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d3-7"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d4-7"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d5-7"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td></tr><tr><td id="d0-8"><h2 class="text-center">8</h2><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d1-8"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d2-8"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d3-8"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d4-8"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d5-8"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td></tr><tr><td id="d0-9"><h2 class="text-center">9</h2><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d1-9"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d2-9"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d3-9"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d4-9"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td><td id="d5-9"><div class="teacher-name"></div><div class="subject-name"></div><div class="class-name"></div></td></tr></table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end of container-->
	</div>
	<script src="js/gvsLoad.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>