$.get('js/rooms.json')	.done(function(data){
	for(var i = 0; i < data.length; i++){
		var t = data[i]; 

		var modalButton = document.createElement('button');
		modalButton.setAttribute('type', 'button');
		modalButton.setAttribute('class', 'btn btn-primary btn-lg');
		modalButton.setAttribute('data-toggle', 'modal');
		modalButton.setAttribute('data-target', '#' + t.Name);
		modalButton.innerHTML = t.Name;
		mapContainer = document.getElementById('map1');
		mapContainer.appendChild(modalButton);


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
		$(".modal-body").load('js/createTable.php');


		document.body.appendChild(modal);
		modal.appendChild(modal_dialog);
		modal_dialog.appendChild(modal_content);
		modal_content.appendChild(modal_header);
		modal_header.appendChild(button);
		modal_header.appendChild(modal_title);
		modal_content.appendChild(modal_body);
		/*
		*/
		
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