	$.get('js/rooms.json')	.done(function(data){
	for(var i = 0; i < data.length; i++){
		var t = data[i]; 

		// var modalButton = document.createElement('button');
		// modalButton.setAttribute('type', 'button');
		// modalButton.setAttribute('class', 'btn btn-primary btn-lg');
		// modalButton.setAttribute('data-toggle', 'modal');
		// modalButton.setAttribute('data-target', '#' + t.Name);
		// modalButton.innerHTML = t.Name;
		// mapContainer.appendChild(modalButton);
		mapContainer1 = document.getElementById('map1');
		mapContainer1.setAttribute('style', 'width: 50%; display:none; float:right;');
		mapContainer1 = document.getElementById('map2');
		mapContainer1.setAttribute('style', 'width: 50%; display:none; float:left;');

		var modal = document.createElement('div');
		modal.setAttribute('class', 'modal fade');
		modal.setAttribute('id', t.Name);
		modal.setAttribute('role', 'dialog');
		modal_dialog = document.createElement('div');
		modal_dialog.setAttribute('class', 'modal-dialog modal-lg');
		modal_content = document.createElement('div');
		modal_content.setAttribute('class', 'modal-content');
		modal_header = document.createElement('div');
		modal_header.setAttribute('class', 'modal-header')
		button = document.createElement('button');
		button.setAttribute('type', 'button');
		button.setAttribute('class', 'close');
		button.setAttribute('data-dismiss', 'modal');
		button.innerHTML = "&times;";
		modal_title = document.createElement('h4');
		modal_title.setAttribute('class', 'modal-title');
		modal_title.innerHTML = t.Name;
		modal_body = document.createElement('div');
		modal_body.setAttribute('class', 'modal-body');

		document.body.appendChild(modal);
		modal.appendChild(modal_dialog);
		modal_dialog.appendChild(modal_content);
		modal_content.appendChild(modal_header);
		modal_header.appendChild(button);
		modal_header.appendChild(modal_title);
		modal_content.appendChild(modal_body);

		createTable(t.Name);
	}
});



function createTable(roomNr) {
	table = document.createElement('table');
	table.setAttribute('class', 'table table-bordered schedule');
	table_header_row = document.createElement('tr');
	table_header1 = document.createElement('th');
	table_header2 = document.createElement('th');
	table_header3 = document.createElement('th');
	table_header4 = document.createElement('th');
	table_header5 = document.createElement('th');
	table_header6 = document.createElement('th');
	table_header1.innerHTML = 'Uke 3';
	table_header2.innerHTML = 'Mandag';
	table_header3.innerHTML = 'Tirsdag';
	table_header4.innerHTML = 'Onsdag';
	table_header5.innerHTML = 'Torsdag';
	table_header6.innerHTML = 'Fredag';

	modal_body.appendChild(table);
	table.appendChild(table_header_row);
	table_header_row.appendChild(table_header1);
	table_header_row.appendChild(table_header2);
	table_header_row.appendChild(table_header3);
	table_header_row.appendChild(table_header4);
	table_header_row.appendChild(table_header5);
	table_header_row.appendChild(table_header6);
	for(i = 1; i < 10; i++) {
		table_row = document.createElement('tr');
		table.appendChild(table_row);
		for(x = 0; x < 6; x++) {
			table_data = document.createElement('td');
			teacher_name = document.createElement('div');
			teacher_name.setAttribute('class', 'teacher-name');
			subject_name = document.createElement('div');
			subject_name.setAttribute('class', 'subject-name');
			class_name = document.createElement('div');
			class_name.setAttribute('class', 'class-name');
			table_data.setAttribute('id', roomNr +'-d' + x + '-' + i);
			
			if(x == 0) {
				table_data.innerHTML = '<h2 class="text-center">' + i + '</h2>';
			} else  {
				table_data.innerHTML = '';
			}
			table_row.appendChild(table_data);
			table_data.appendChild(teacher_name);
			table_data.appendChild(subject_name);
			table_data.appendChild(class_name);
		}
	}
	// this will load the data from the API. It is an async call, and when it is DONE...
}
$.get('js/data.json')	.done(function(data){
	for(var i = 0; i < data.length; i++) {			
		var t = data[i];
		var cell = (t.Room).toUpperCase() + '-d' + t.Day + '-' + t.Time; 
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