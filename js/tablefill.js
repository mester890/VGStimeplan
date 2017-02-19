// this will load the data from the API. It is an async call, and when it is DONE...
$.get('js/data.json')	.done(function(data){
	for(var i = 0; i < data.length; i++) {			
		var t = data[i];
		var cell = 'd' + t.Day + '-' + t.Time; 
		var $ourCell = $('#' + cell); // $ because it is a jQuery object. 
		$ourCell.find('.teacher-name').html(t.Teacher); // this will only set the data for the first hour, because the function 'getCorrectHour' does not return the 'correctHour' - yet :D
		$ourCell.find('.subject-name').html(t.Subject);
		$ourCell.find('.class-name').html(t.CurrentClass);
		document.getElementById('room-nr').innerHTML = (t.Room).toUpperCase();


		if(t.Teacher == '' && t.Subject == '') {
			$ourCell.find('.subject-name').html('Ledig');
			$ourCell.find('.teacher-name').html('Rom');
		}
	}		
});