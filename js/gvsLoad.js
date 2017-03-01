
mapContainer1 = document.getElementById('map1');
mapContainer1.setAttribute('style', 'width: 50%; display:none; float:right;');
mapContainer2 = document.getElementById('map2');
mapContainer2.setAttribute('style', 'width: 50%; display:none; float:left;');

$('#myModal').on('show.bs.modal', function (e) {
	var roomNr = $(e.relatedTarget).data('room');
	console.log(roomNr);
	$('#modalHeader').html(roomNr);

	$.get('http://enormt-api-test.azurewebsites.net/Api/Time?room=' + roomNr + '&week=3')	.done(function(data){
		for(var i = 0; i < data.length; i++) {			
			var t = data[i];
			var cell = 'd' + t.Day + '-' + t.Time;
			var $ourCell = $('#' + cell); // $ because it is a jQuery object. 
			$ourCell.find('.teacher-name').html(t.Teacher); // this will only set the data for the first hour, because the function 'getCorrectHour' does not return the 'correctHour' - yet :D
			$ourCell.find('.subject-name').html(t.Subject);
			$ourCell.find('.class-name').html(t.CurrentClass);
			$ourCell.css('background-color', 'rgba(255, 0, 0, 0.3)')
			if(t.Teacher == '' && t.Subject == '') {
				$ourCell.find('.free-room').html('');
				$ourCell.css("background-color", "rgba(0, 255, 0, 0.3)");
			}
		}		
	});
});




var map1 = document.getElementById('map1');
var map2 = document.getElementById('map2');

btn1.onclick = function () {
	map1.style.display = "inline-block";
	map2.style.display = "none";
}

btn2.onclick = function () {
	map2.style.display = "inline-block";
	map1.style.display = "none";
}
