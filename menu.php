<!DOCTYPE html>
<html>
	<head>
		<title>Gauldal VGS - Romoversikt</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="container-fluid">
	      <nav class="navbar navbar-default">
	        <div class="container-fluid">
	          <div class="navbar-header">
	            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	              <span class="sr-only">Toggle navigation</span>
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand orange-color" href="index.php">Gauldal VGS</a>
	          </div>
	          <div id="navbar" class="navbar-collapse collapse">
	            <ul class="nav navbar-nav">
	              <li><a href="index.php" class="">Hjem</a></li>
	              <li><a href="map.php" class="">Kart</a></li>
	              <li><a href="myAccount.php" class="">Min Side</a></li>
	              <!-- <li class="dropdown">
	                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rom <span class="caret"></span></a>
	                <ul class="dropdown-menu">
	                  <li><a href="#">B200</a></li>
	                  <li><a href="#">B201</a></li>
	                  <li><a href="#">B202</a></li>
	                  <li><a href="#">B203</a></li>
	                  <li><a href="#">B204</a></li>
	                  <li><a href="#">B205</a></li>
	                  <li><a href="#">B206</a></li>
	                </ul>
	              </li>
	              <li class="dropdown">
	                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Klasser <span class="caret"></span></a>
	                <ul class="dropdown-menu">
	                  <li><a href="#">1STA</a></li>
	                  <li><a href="#">1STB</a></li>
	                  <li><a href="#">2STA</a></li>
	                  <li><a href="#">2STB</a></li>
	                  <li><a href="#">3STA</a></li>
	                  <li><a href="#">3STB</a></li>
	                </ul>
	              </li> -->
	            </ul>
	            <ul class="nav navbar-nav navbar-right">
	              <!--<li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>-->
	              <li><a href="#" data-toggle="modal" data-target="#login-modal" class="orange-color">Logg inn</a></li>
	            </ul>
	          </div><!--/.nav-collapse -->
	        </div><!--/.container-fluid -->
	      </nav>

	      <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Logg inn</h1><br>
				  <form>
					<input type="text" name="user" placeholder="Brukernavn">
					<input type="password" name="pass" placeholder="Passord">
					<input type="submit" name="login" class="login loginmodal-submit" value="Logg inn">
				  </form>
					
				  <div class="login-help">
					<a href="#">Registrer deg</a> - <a href="#">Glemt Passord</a>
				  </div>
				</div>
			</div>
		  </div>





















	      <script type="text/javascript">
		    	function FindByAttributeValue(attribute, value)    {
					  var All = document.getElementsByTagName('*');
					  for (var i = 0; i < All.length; i++)       {
					    if (All[i].getAttribute(attribute) == value) { return All[i]; }
					  }
					}
			    $(document).ready(function(){
			    	var url = document.location.href;
			    	var refinedUrl = (url).split('/')[4];
			    	var currentPage = FindByAttributeValue('href', refinedUrl);
			    	console.log(currentPage);
			    	currentPage.parentNode.setAttribute('class', 'active');
					});
		    </script>