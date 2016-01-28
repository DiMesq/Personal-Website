$(function(){

	sections = {about: $("#about_button"), 
				act: $("#act_button"), 
				proj: $("#proj_button"), 
				past: $("#past_button"), 
				other: $("#other_button")};

	var btnClick = function(){

		/*for (section in sections){
			sections[section].
		}*/
		$(".sections").collapse('hide');
		//setEvents();
		console.log("yay");
	}

	var setEvents = function(){
		for (section in sections){
			sections[section].on('click', btnClick)
		}
	}

	setEvents();

	
});


