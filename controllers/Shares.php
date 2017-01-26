<?php

class Shares extends Controller {
	protected function Index() {
		$viewmodel = new ShareModel();
		$this->returnview($viewmodel->index(), true);
	}

	protected function Add() {
		if(isset($_SESSION['is_logged_in'])) {
			$viewmodel = new ShareModel();
			$this->returnview($viewmodel->add(), true);
		}
		else {
			// redirect
			header("Location: ".ROOT_URL."users/login");
		}
	}

	protected function myshares() {
		if(isset($_SESSION['is_logged_in'])) {
			$viewmodel = new ShareModel();
			$this->returnview($viewmodel->myshares(), true);
		}
		else {
			// redirect
			header("Location: ".ROOT_URL."users/login");
		}
	}
}