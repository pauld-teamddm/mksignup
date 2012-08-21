<?php

// Local config things.
define('SIGNUP_CUTOFF', 1345759200);

// Bootstrap a few needed classes.
include_once('markdown.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/../app/flourish/fFilesystem.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/../app/flourish/fDirectory.php');

$fs = fFilesystem::createObject($_SERVER['DOCUMENT_ROOT'] . '/../app/');
define('APP_ROOT', $fs->getPath());

/**
 * Automatically includes classes
 * 
 * @throws Exception
 * 
 * @param  string $class_name  Name of the class to load
 * @return void
 */
function __autoload($class_name)
{
	
	if (preg_match('/^f[\w]*$/', $class_name)) { 
		$file = APP_ROOT . '/flourish/' . $class_name . '.php';
	} else if (preg_match('/^([\w]*)Controller$/', $class_name, $matches)) {
		$file = APP_ROOT . '/controllers/' . lcfirst($matches[1]) . '.php';
	} else {
		$file = APP_ROOT . '/models/' . lcfirst($class_name) . '.php';
	}
	
	if (file_exists($file)) {
		include $file;
		return;
	}
	
	throw new Exception('The class ' . $class_name . ' could not be loaded');
}

$db = new fDatabase('sqlite', APP_ROOT . '/db.sqlite3');
fORMDatabase::attach($db);
