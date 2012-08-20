<?php

class CoreController {
	
	var $template;
	var $body;
	
	function __construct($template, $body) {
		$this->template = $template;
		$this->body = $body;
		
		$template->set('body', $body);
	}
	
}