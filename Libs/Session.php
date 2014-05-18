<?php

class Session {

	public static function init() {
		@session_start();
		$_SESSION['start'] = time();

		if (!isset($_SESSION['expire'])) {
			$_SESSION['expire'] = $_SESSION['start'] + (15 * 60);
			// ending a session in 10 mins
		}
		$now = time();
		// checking the time now when home page starts

		if ($now > $_SESSION['expire']) {
			@session_destroy();
			@session_start();
		}
	}

	public static function set($key, $value) {
		$_SESSION[$key] = $value;
	}

	public static function get($key) {
		if (isset($_SESSION[$key]))
			return $_SESSION[$key];
	}

	public static function destroy() {
		//unset($_SESSION);
		@session_destroy();
	}

}
