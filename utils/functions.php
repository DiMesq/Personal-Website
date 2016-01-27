<?php

/**
 * Renders a template.
 *
 * Input: - template file name;
 *        - array of variables to be available in the template.
 *
 * No return value.
 */
function render ($template, $navbar, $values=[]){

	if (file_exists("../template/$template")){

		// extract values to local scope
		extract($values);

		require_once("../template/header.php");

		require_once("../template/$navbar");

		require_once("../template/$template");

		require_once("../template/footer.php");

	} else {
		trigger_error("Invalid template: $template", E_USER_ERROR);
	}
}

?>


