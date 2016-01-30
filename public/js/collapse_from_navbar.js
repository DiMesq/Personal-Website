$(function(){

	sections = {about: $("#about_button"), 
				act: $("#act_button"), 
				proj: $("#proj_button"), 
				past: $("#past_button")};

	var btnClick = function(){

		$(".sections").collapse('hide');
	}

	var setEvents = function(){
		for (section in sections){
			sections[section].on('click', btnClick)
		}
	}

	setEvents();

	
});


