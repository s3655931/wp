/* Insert your javascript here */

function showsynopsis(tempid) {
	var ids = ['Avengers_Synopsis', 'Wedding_Synopsis', 'Dumbo_Synopsis', 'Prince_Synopsis'];

	for (var i = 0; i < 4; i++) {
		
		var item = document.getElementById(ids[i]);
		if (tempid == ids[i]) {
			item.style.display="block";
		}
		else {
			item.style.display="none";
		}
	}

}

