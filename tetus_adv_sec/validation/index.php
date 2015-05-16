<?php 
if (isset($_POST['submit'])){
	require 'validation.php';
	$rules = array(
			'email' => 'email|required|example',
			'password' =>'required',
			'number' => 'number',
			'environment' => 'required|environment'
	);
	$validation = new Validation();
	if ($validation->validate($_POST, $rules) == TRUE){
		var_dump($_POST);
	}
	else {
		echo '<ul style="color:red;">';
		foreach ($validation->errors as $error){
			echo '<li>'.$error.'</li>';
		}
		echo '</ul>';
		die('ABORT!');
	}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
        </title>
    </head>
<body>

<form action="#" method='POST' novalidate="novalidate">
	<input type="hidden" name='environment' value='admin'/>
    <p>
        Email :<input type="email" name='email' placeholder="email" required="required"/>
    </p>
     <p>
        password :<input type="password" name='password'   required="required"/>
    </p>
     <p>
        password :<input type="number" name='number'   required="required"/>
    </p>
     <p>
        <input type="submit" name='submit' value='log in' />
    </p>
</form>

</body>
</html>