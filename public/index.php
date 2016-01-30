<?php

require_once("../utils/functions.php");

$about = "<p>Hello, I'm Diogo! As you might have noticed I am studying computer science. Perhaps even more 
		  characterizing, I should say that I love to code!</p>

		  <p>In summary (cliché as it may seem) my goal is to contribute as best as 
		  I can to the improvement of society in general.</p>

		  <p>For this purpose I think that, right now, dedicating my time to Computer Science is 
		  what will provide me the best opportunity of doing so in the future. In particular, I am really interested
		  in Machine Learning. The recent applications that emerged in the past few years
		  by advancements in the field, such has Deep Learning, really excite and 
		  inspire me, specially the fact that so much more is possible.</p>";

$activities = "<p>Currently I am a BSc student in Computer Science at <a href='http://tecnico.ulisboa.pt/' 
				target='_blank'>Instituto Superior Técnico</a> (IST) in Lisbon, Portugal.</p>
			   
			   <p>Besides that, I am also a member of <a href='http://junitec.ist.utl.pt/' target='_blank'>JUNITEC</a>
			    which is IST's junior enterprise. There we develop projects in a lot
			    of different areas of engineering.</p>

			    <p>To finish, I am a member of IEEE and of <a href='http://www.ieee-ist.org/' target='_blank'>IST's 
			    IEEE Student Branch</a>, where I am the Vice-Chair
			    of the Computer Society.";

$past = "<p>I did a volunteer <a href='https://www.volunteerhq.org/volunteer-in-ghana' 
		target='_blank'>Teaching Program in Ghana</a> in the summer of 2015. There 
		I taught 6th graders Math and in a smaller amount English, Geography and Biology.</p>";

render("home.php", ["about"=>$about, "activities"=>$activities, "past"=>$past]);

?>

