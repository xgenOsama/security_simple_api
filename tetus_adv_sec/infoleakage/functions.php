<?php

$path = dirname(__FILE__);

switch ($path){
	case '/var/www/html/tetus_adv_sec/infoleakage/':
		$env = 'development';
		break;
	default:
		$env = 'production';
		break;
}

define('C_ENVIRONMENT', $env);

switch (C_ENVIRONMENT){
	case 'development':
		error_reporting(-1);
		break;
	default:
		error_reporting(0);
		break;	
}