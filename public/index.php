<?php

require_once("../utils/functions.php");

$about = "<p>Hello! As you might have noticed I am studying computer science! Perhaps, even more 
		  characterizing, I should say that I love to code!</p>

		  <p>Like a lot of people, I am right now really interested in 
		  Machine Learning. The recent applications that emerged in the past few years
		  by advancements in the field really excite and 
		  inspire me, specially the fact that so much more is possible.</p>

		  <p>In summary (cliché as it may seem) I want to contribute as best as 
		  I can to the improvement of society in general. For this purpose, I believe 
		  that right now dedicating my time to Computer Science and concretely Machine Learing is what 
		  will provide me the best chances of doing so.</p>";

$activities = "<p>Currently I am a BSc student in Computer Science at <a href='http://tecnico.ulisboa.pt/'>Instituto 
				Superior Técnico</a> (IST) in Lisbon, Portugal.</p>
			   
			   <p>Besides that, I am also a member of <a href='http://junitec.ist.utl.pt/' target='_blank'>JUNITEC</a>
			    which is IST's junior enterprise. There we develop projects in a lot
			    of different areas of engineering.</p>

			    <p>To finish, I am a member of IEEE and of <a href='http://www.ieee-ist.org/'>IST's IEEE Student Branch</a>, where I am the Vice-Chair
			    of the Computer Society.";

$past = "<p>Some past stuff.</p>";
$other = "<p>Some other interests.</p>";

render("home.php", ["about"=>$about, "activities"=>$activities, "past"=>$past, "other"=>$other]);

?>

