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
							<script src="js/gvsLoad.js"></script>
							<br>
							<?php include 'js/map_a.php'; ?>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mapContainer">
						<div id="map2" style="display:none;">
							<script src="js/gvsLoad.js"></script>
							<br>
							<?php include 'js/map_a.php'; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end of container-->
	</div>
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>