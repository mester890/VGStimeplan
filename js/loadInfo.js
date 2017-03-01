// function createLink(cellName, subject) {
// 	$.get('js/subjectInfo.json')	.done(function(data){
// 		for(var i = 0; i < data.length; i++) {			
// 			var t = data[i];
// 			var $myCell = cellName;

// 			if (subject == t.Name) {
// 				$myCell.find('.subject-name').html('<a href="' + t.URL + '" target="_blank">' + t.Name + '</a>');
// 				console.log(t.URL);
// 			} else {
// 				//$myCell.find('.subject-name').html(subject);
// 			}
// 		}
// 	});
// }


$.get('http://enormt-api-test.azurewebsites.net/Api/Time?room=b201&week=3')	.done(function(data){
	$.get('js/subjectInfo.json').done(function(subjects) {
		var subjectFinder = function findEquals(s, f, $ourCell) {
			 var foundIt = false; 
			for (var i = 0; i < s.length; i++) {
				var foundSubject = s[i].Name == f;
				if(foundSubject) {
					console.log(foundSubject, s[i], f);
					$ourCell.find('.subject-name').html('<a href="' + s[i].URL + '" target="_blank">' + s[i].Name + '</a>');
					foundIt = true;
				}
			}

			if(!foundIt){
				$ourCell.find('.subject-name').html(f);
			}

		}
		for(var i = 0; i < data.length; i++) {			

			var t = data[i];
			var cell = 'd' + t.Day + '-' + t.Time; 
			var $ourCell = $('#' + cell); // $ because it is a jQuery object.
			if(t.Teacher == '' & t.Subject == '') {
				$ourCell.css('background-color', 'rgba(0, 255, 0, 0.3)');	
			} else {
				subjectFinder(subjects, t.Subject, $ourCell);
				$ourCell.find('.teacher-name').html(t.Teacher); 
				$ourCell.css('background-color', 'rgba(255, 0, 0, 0.3)');
			}
			className = document.getElementById('className');
			className.innerHTML = '3STA';	
		}
	});
});


