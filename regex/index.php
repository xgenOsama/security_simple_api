<?php
  require 'regex.php';
  $regex = new Regex();
   	if (isset($_POST['submit'])){
   		
   		if($regex->preg($_POST, 'name','name')){
   			echo $_POST['name'];
   		} 
   		if($regex->preg($_POST, 'password', 'password')) {
   			echo $_POST['password'];
   		}
   		if ($regex->preg($_POST, 'email', 'email')){
   			echo $_POST['email'];
   		}
   		if ($regex->preg($_POST,'phone','phone')){
   			echo $_POST['phone'];
   		}
   		if ($regex->preg($_POST, 'city', 'city')){
   			echo $_POST['city'];
   		}
   		if($regex->preg($_POST, 'zip','zip')){
   			echo $_POST['zip'];
   		}
   		if(!empty($regex->errors)){
   		 $regex->showErrors();
   		}
   		
   	}
   


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <script type="text/javascript" src="regex.js"></script>
	<script type="text/javascript">
		function validate(elem){
			var regex = new regex();
			regex.preg(elem); 
		}
	</script>-->
</head>

<body>
  <form action="#" method="POST">
  	<p>name :<input type="text" name='name'/></p>
  	<p>email :<input type="email" id="email" name='email' onkeydown="validate('email')"/></p>
  	<p>password :<input type="password" name='password'/></p>
  	<p>city :<input type="text" name='city'/></p>
  	<p>phone :<input type="text" name='phone'/></p>
  	<p>zip :<input type="text" name='zip'/></p>
  	<p><input type="submit" name="submit"/></p>
  </form>
</body>
</html>