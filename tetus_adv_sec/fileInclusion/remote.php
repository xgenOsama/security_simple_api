<?php
// Exploit
$image = 'https://www.google.nl/images/srpr/logo4w.png';
$image = 'http://www.php.net/index.php';
$filename = explode('/', $image);
$filename = array_pop($filename);
$imagedata = file_get_contents($image);
file_put_contents($filename, $imagedata);

 
// fix 
error_reporting(0);

$image = '450_45asd65asc54asw48asv65asv132';
$pattern = '/^[0-9]+_[0-9a-z]{32}$/';
if (!preg_match($pattern, $image)){
	die('file could not be found');
}
$filename - $image .'jpg';
$image = 'http://www.api.com/images/fgr'.$filename;
	
$ch = curl_init($image);
curl_setopt($ch,CURLOPT_NOBODY,true);
$retcode = curl_getinfo($ch,CURLINFO_HTTP_CODE);
curl_close($ch);
if ($retcode != 200){
	die('file could not be found');
}
$imagedata = file_get_contents($image);
file_put_contents($filename, $imagedata);
