<?php

	if(isset($this->jsLogin)){
		$js = $this->jsLogin;
		if(file_exists($js)){
			echo  URL.$js;
			echo '<script src="'. URL . $js .'" type="text/javascript"></script>';
		}
	} else {
		echo 'Not found admin.login.js';
	}