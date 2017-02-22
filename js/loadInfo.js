function createLink(cellName, subject) {
	$.get('js/subjectInfo.json')	.done(function(data){
		for(var i = 0; i < data.length; i++) {			
			var t = data[i];
			var $myCell = $('#' + cellName);
			if (subject == t.Name) {
				$myCell.find('.subject-name').html('<a href="#" data-toggle="modal" data-target="#' + t.Name + '">' + t.Name + '</a>');
			} else {
				$myCell.find('subject-name').html(subject);
			}
		}
	});
}

$.get('js/subjectInfo.json')	.done(function(data){
	for(var i = 0; i < data.length; i++){
		var t = data[i]; 

		// var modalButton = document.createElement('button');
		// modalButton.setAttribute('type', 'button');
		// modalButton.setAttribute('class', 'btn btn-primary btn-lg');
		// modalButton.setAttribute('data-toggle', 'modal');
		// modalButton.setAttribute('data-target', '#' + t.Name);
		// modalButton.innerHTML = t.Name;
		// document.body.appendChild(modalButton);

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
		modal_iframe = document.createElement('iframe');
		modal_iframe.setAttribute('src', t.URL);
		modal_iframe.setAttribute('width', '100%');
		modal_iframe.setAttribute('height', '600px');

		document.body.appendChild(modal);
		modal.appendChild(modal_dialog);
		modal_dialog.appendChild(modal_content);
		modal_content.appendChild(modal_header);
		modal_header.appendChild(button);
		modal_header.appendChild(modal_title);
		modal_content.appendChild(modal_body);
		modal_body.appendChild(modal_iframe);
	}
});

$.get('js/timeplan.json')	.done(function(data){
	for(var i = 0; i < data.length; i++) {			
		var t = data[i];
		var cell = 'd' + t.Day + '-' + t.Time; 
		var $ourCell = $('#' + cell); // $ because it is a jQuery object. 
		createLink(cell, t.Subject);


		if (t.CurrentClass == '3STA') {
			$ourCell.find('.teacher-name').html(t.Teacher); 
			//$ourCell.find('.subject-name').html(t.Subject);


			$ourCell.find('.class-name').html((t.Room).toUpperCase());
			$ourCell.css('background-color', 'rgba(255, 0, 0, 0.3)');
		}
		if (t.Subject == '') {
			$ourCell.css('background-color', 'rgba(0, 255, 0, 0.3');
			$ourCell.find('.subject-name').html('<h4 class="text-cetner">Fritime</h4>');
		}
		className = document.getElementById('className');
		className.innerHTML = '3STA';	
	}
});
