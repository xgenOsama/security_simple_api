<?php
require 'functions.php';
require 'csrf.php';

 $csrf = new csrf();
/* var_dump($taken);
exit(); */
//$_SESSION['loggedin'] = FALSE;

if ($_SESSION['loggedin'] && $_SESSION['loggedin'] == TRUE){
	$account = isset($_GET['account']) ? (int) $_GET['account'] : 0 ;
	$amount =  isset($_GET['amount']) ? (int) $_GET['amount'] : 0 ;
	
	if($account > 0 && $amount > 0){
		/// check token 
		$token = $csrf->get_token_from_url();
		if ($csrf->check_token($token) == FALSE){
			die('CSRF SUCKS! WE CATCH YOU');
		}
		//Transfer
		$filename = 'transfer.txt';
		$data = file_get_contents($filename);
		$msg = "a transfer of {$amount} has been made to account {$account} ";
		$data .= $msg;
		file_put_contents($filename, $data);
		
		echo $msg;
	}
	else{
		$token = $csrf->get_token();
		echo "<h1>No transfer could be made</h1>";
		echo "<a href='index.php?amount=10&account=123&token=".$token."'>Transfer 10$ into account 123</a>";
		//// when you submit a form 
		// you will have input fields from 
		//amout
		///account
		/// token hidden field 
	}
}
else{
	$token = $csrf->get_token();
	echo 'you need to login man !';
	echo "<br>";
	echo "<a href='login.php?token=".$token."'>login to account</a>";
}