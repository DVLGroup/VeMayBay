<?php
/**
 *
 */
class View {

	function __construct() {

	}

	public function render($name, $noInclude = false) {
		if ($noInclude == TRUE) {
			require 'Views/header.php';
			require 'Views/' . $name . '.php';
			require 'Views/footer.php';
		} else {
			require 'Views/header.php';
			require 'Views/searchBox.php';
			require 'Views/' . $name . '.php';
			require 'Views/footer.php';
		}

	}

	public function render_admin($name, $noInclude = false) {
		if ($noInclude == TRUE) {
			require 'Views/admincp/' . $name . '.php';
		} else {
			require 'Views/admincp/header.php';
			require 'Views/admincp/' . $name . '.php';
			require 'Views/admincp/footer.php';
		}
	}

}
