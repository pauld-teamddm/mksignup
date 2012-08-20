<?php
include $_SERVER['DOCUMENT_ROOT'] . '/../app/config.php';

$template = new fTemplating(APP_ROOT . 'views/');
$template->buffer();

$template->set('layout', 'layout.php');

$template->set('pageTitle', "MarioKart 64 Tournament of Champions and other SEO Friendly Words");
$template->set('body', 'index.php');

$url = fURL::get();
if ($url == '/') {
	$template->set('onPage', 'index');
} else {
	$parts = explode('/', $url);
	$body = $parts[1] . '.php';
	
	if (file_exists(APP_ROOT . "controllers/{$body}")) {
		//include(APP_ROOT . "controllers/{$body}");
		$className = ucfirst($parts[1]) . 'Controller';
		$controller = new $className($template, $body);
		$action = (!empty($parts[2])) ? $parts[2] : 'index';
		
		if (method_exists($controller, $action)) {
			$controller->$action();
		} else {
			$controller->display($action);
		}
	} else {
		$template->set('body', $body);
	}
	
	$template->set('onPage', $parts[1]);
}

$template->place('layout');