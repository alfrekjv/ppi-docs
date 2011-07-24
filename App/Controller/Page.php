<?php
class APP_Controller_Page extends APP_Controller_Application {

	function index() {
		die('nawty');
	}

	function view() {
		$template = 'page/' . $this->get('view');
		if($this->templateExists($template)) {
			$this->render($template);
		} else {
			$this->render('framework/404');
		}
	}
}