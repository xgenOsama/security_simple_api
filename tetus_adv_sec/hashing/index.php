<?php

/* $password = 'secret';
echo md5($password); */

/* $rainbow = array(
		md5('secret') => 'secret',
		md5('welcome') => 'welcome',
); */

require '../vendor/autoload.php';
$password = "osamamohamed";
$hash = password_hash($password, PASSWORD_DEFAULT);
echo $hash;
var_dump(password_verify($password, $hash));