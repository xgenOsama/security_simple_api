<?php 
	require '../vendor/autoload.php';
	require 'escape.php';
	
	$html = "<html><h1>Foo</h1><script>alert('foo');</script></html>"; 
	echo escape_html($html);
	if ($_POST){
		require 'validation.php';
		$rules = array(
				'name' => 'required|text',
				'comment' =>'required|text',
				);
		$validation = new Validation();
		if ($validation->validate($_POST, $rules) == FALSE){
			echo '<ul style="color:red;">';
			foreach ($validation->errors as $error){
				echo '<li>'.$error.'</li>';
			}
			echo '</ul>';
			die('ABORT!');
		}
		
	}
require 'views/head.php';
require 'views/body.php';
require 'views/comment.php';
require 'views/tail.php';