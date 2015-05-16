<?php
require 'functions.php';
require 'csrf.php';

/// check for the token 
$csrf = new csrf();

if ($csrf->check_token($csrf->get_token_from_url()) == FALSE){
	die('csrf sucks ! ');
}

$_SESSION['loggedin'] = TRUE;
header("Location: index.php");