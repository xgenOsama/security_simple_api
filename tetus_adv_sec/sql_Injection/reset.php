<?php
	require 'pdo.php';
	
	$pdo = connect();
	$email = "any value'; UPDATE users SET email ='xgen.osama@gmail.com' where email ='joost@ostvanveen.com";
	$email = "any valus'; DROP TABLE users; --";
	//$email = 'joost@ostvanveen.com';
	$pdo->quote($email);
	
	$sql = "SELECT * from users WHERE  email=:email";
	echo "<p>{$sql}</p>";
	try {
		//$query = $pdo->query($sql);
		$query = $pdo->prepare($sql);
		$query->bindParam(':email', $email,PDO::PARAM_STR);
		$query->execute();
		$user = $query->fetch();
		
		/// set up a password reset email
		if($user !== FALSE){
			echo "<p> A password reset email has been sent to {$user['email']}</p>";
		}
		
	}
	catch (PDOException $e){
	    echo $e->getMessage();
	}