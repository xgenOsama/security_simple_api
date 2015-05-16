<?php
/* $file = isset($_GET['file']) ? $_GET['file'] : NULL ;
if ($file === NULL){
	die('invalid file name');
}

include 'logs/'.$file; */

///local.php?file=123_log
$pattern = '/^[0-9]+_log$/';
$file = isset($_GET['file']) ? $_GET['file'] : NULL ;

if (!preg_match($pattern, $file)){
	die('file could not be found');
}
$filename = 'logs/'.$file.'.php';
if (file_exists($filename) && is_file($filename)){
	include $filename;
	
}
else{
	die('file could not be located');
}
