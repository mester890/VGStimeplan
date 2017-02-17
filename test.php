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
<h1>Parsing JSON - Teachers</h1>

<ul id="demo"></ul> 

<p id="testing"></p>

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
		<td id="ma1" class="tbData"></td>
		<td id="ti1" class="tbData"></td>
		<td id="on1" class="tbData"></td>
		<td id="to1" class="tbData"></td>
		<td id="fr1" class="tbData"></td>
	</tr>
	<tr>
		<td>2</td>
		<td id="ma2" class="tbData"></td>
		<td id="ti2" class="tbData"></td>
		<td id="on2" class="tbData"></td>
		<td id="to2" class="tbData"></td>
		<td id="fr2" class="tbData"></td>
	</tr>
	<tr>
		<td>3</td>
		<td id="ma3" class="tbData"></td>
		<td id="ti3" class="tbData"></td>
		<td id="on3" class="tbData"></td>
		<td id="to3" class="tbData"></td>
		<td id="fr3" class="tbData"></td>
	</tr>
</table>
</div>
<!-- jQuery :) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
	
	// this will load the data from the API. It is an async call, and when it is DONE...
	$.get('http://enormt-api-test.azurewebsites.net/Api/Time?room=b205&week=3')	.done(function(data){
		// ... this function will be called :D
		//console.log(data); 
		
		// Check it out!
		for(var i = 0; i < data.length; i++) {
			// iterate through the list of "Time"
			
			// this will log the object to the console
			//console.log(data[i]);
						
			// you can also access the fields of the object, like this: 
			//console.log(data[i].Teacher);
			var t = data[i];

			var tDate = t.Date;

			
			var result = tDate.split("T");
			var dateOnly = result[0];
			var timeOnly = result[1].split(":00+")[0];
			function getDayName(dateString) {
			  return ['Søndag', 'Mandag', 'Tirsdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lørdag'][new Date(dateString).getDay()];
			}

			// Usage: Get the day name of a date
			var day = getDayName(dateOnly);

			if (timeOnly == '08:00' & day == "Mandag") {
				document.getElementById("ma1").innerHTML = t.Subject + " " + t.Teacher;
			} 
			if (timeOnly == '08:00' & day == "Tirsdag") {
				document.getElementById("ti1").innerHTML = t.Subject + " " + t.Teacher;
			}
			


			// you can log multiple data if you like, at once!
			//console.log(data[i].Teacher, data[i].Subject);
			
			// for simplicity, you can set the current 'Time' to a variable, and access it like this: 
			

			//console.log(t.Teacher, t.Subject); 

			// then you don't have to write "data[i]" every time :)
			
			// live long and prosper
		}		
	});

</script>
</body>
</html>