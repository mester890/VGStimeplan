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
		<div class="header"></div>
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

			<br>
			<div id="etg1" style="display:none;">
				<h3>ETG 1 - A</h3>	
				<h3>ETG 1 - B</h3>
			</div>
			<div id="etg2" style="display:none;">
				<h3>ETG 2 - A</h3>	
				<h3>ETG 2 - B</h3>
			</div>

			<div class="klasseplan" id="klp1" style="display:none; ">
				
			</div>

			<div class="klasseplan" id="klp2" style="display:none;">
				<!-- Map B-fløy etg 2 -->
				<div class="map_container">
					<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 559 1671">
						<defs><style>.cls-1{fill:#fff;}</style></defs>
						<title>b_floy</title>
					<a href="#">
						<rect class="cls-1" x="4" y="4" width="307" height="217"/>
						<path d="M307,8V217H8V8H307m8-8H0V225H315V0Z"/>
					</a>
					<a href="#">
						<rect class="cls-1" x="312" y="4" width="243" height="217"/>
						<path d="M551,8V217H316V8H551m8-8H308V225H559V0Z"/>
					</a>
					<a href="#">
						<rect class="cls-1" x="4" y="221" width="243" height="217"/>
						<path d="M243,225V434H8V225H243m8-8H0V442H251V217Z"/>
					</a>
					<a href="#">
						<rect class="cls-1" x="4" y="436" width="307" height="322"/>
						<path d="M307,440V754H8V440H307m8-8H0V762H315V432Z"/>
					</a>
					<a href="#">
						<rect class="cls-1" x="4" y="758" width="307" height="209"/>
						<path d="M307,762V963H8V762H307m8-8H0V971H315V754Z"/>
					</a>
					<a href="#">
						<rect class="cls-1" x="388" y="221" width="167" height="217"/>
						<path d="M551,225V434H392V225H551m8-8H384V442H559V217Z"/>
					</a>
					<a href="#">
						<rect class="cls-1" x="388" y="436" width="167" height="189"/>
						<path d="M551,440V621H392V440H551m8-8H384V629H559V432Z"/>
					</a>
					<a href="#">
						<rect class="cls-1" x="388" y="626" width="167" height="132"/>
						<path d="M551,630V754H392V630H551m8-8H384V762H559V622Z"/>
					</a>
					<a href="#">
						<rect class="cls-1" x="4" y="968" width="197" height="209"/>
						<path d="M197,972v201H8V972H197m8-8H0v217H205V964Z"/>
					</a>
					<a href="#">
						<rect class="cls-1" x="201" y="968" width="189" height="209"/>
						<path d="M386,972v201H205V972H386m8-8H197v217H394V964Z"/>
					</a>
					<a href="#">
						<rect class="cls-1" x="300" y="1362" width="255" height="305"/>
						<path d="M551,1366v297H304V1366H551m8-8H296v313H559V1358Z"/>
					</a>
					<a href="#">
						<rect class="cls-1" x="231" y="1362" width="68" height="305"/>
						<path d="M295,1366v297H235V1366h60m8-8H227v313h76V1358Z"/>
					</a>
					<a href="#">
						<rect class="cls-1" x="4" y="1362" width="226" height="305"/>
						<path d="M226,1366v297H8V1366H226m8-8H0v313H234V1358Z"/>
					</a>
					</svg>
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