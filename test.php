<!DOCTYPE html>
<html>
<head>
	<title>TEST PAGE</title>
	
</head>
<body>
<h1>Parsing JSON - Teachers</h1>

<ul id="demo"></ul> 

<!-- jQuery :) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
	
	// this will load the data from the API. It is an async call, and when it is DONE...
	$.get('http://enormt-api-test.azurewebsites.net/Api/Time?room=b205&week=3')	.done(function(data){
		// ... this function will be called :D
		//console.log(data); 
		
		// Check it out!
		for(var i = 0; i < data.length; i++){
			// iterate through the list of "Time"
			
			// this will log the object to the console
			//console.log(data[i]);
						
			// you can also access the fields of the object, like this: 
			//console.log(data[i].Teacher);
			

			document.getElementById('demo').appendChild(document.createElement('li')).innerHTML = data[i].Teacher + " - " + data[i].Subject + " - " + data[i].Room.toUpperCase();

			// you can log multiple data if you like, at once!
			//console.log(data[i].Teacher, data[i].Subject);
			
			// for simplicity, you can set the current 'Time' to a variable, and access it like this: 
			var t = data[i]; 
			console.log(t.Teacher, t.Subject); // then you don't have to write "data[i]" every time :)
			
			// live long and prosper
		}
		
		
	});

</script>
</body>
</html>