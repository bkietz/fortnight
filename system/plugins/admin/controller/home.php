<?php

class Home_Controller extends FN_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load_view("common/head", true);
		pr($this->request);
		pr($this->config);
		$this->load_view("common/foot", true);
	}
}

?>
