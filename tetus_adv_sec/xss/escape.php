<?php
function escape($string){
	return htmlspecialchars($string,ENT_QUOTES,'UTF-8');
}

function escape_html($string){
	$config = HTMLPurifier_Config::createDefault();
	$purifier = new HTMLPurifier($config);
	return  $purifier->purify($string);
}