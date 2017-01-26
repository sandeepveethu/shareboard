<?php

class Home extends Controller {
	protected function Index() {
		$viewmodel = new HomeModel();
		$this->returnview($viewmodel->Index(), true);
	}
}