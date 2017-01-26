<?php

class Messages {
	public static function setMessage($text, $type) {
		if($type == 'error') {
			$_SESSION['error_msg'] =  $text;
		}
		else if($type == 'success') {
			$_SESSION['success_msg'] = $text;
		}
	}

	public static function display() {
		if(isset($_SESSION['error_msg'])) {
			echo '<div class="alert alert-danger">'.$_SESSION['error_msg'].'</div>';
			unset($_SESSION['error_msg']);
		}

		if(isset($_SESSION['success_msg'])) {
			echo '<div class="alert alert-success">'.$_SESSION['success_msg'].'</div>';
			unset($_SESSION['success_msg']);
		}
	}
}