
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<h1>select to ping</h1>
		<form action="#" method='POST'>
			<select name='host' id='host'>
				<option value='google.com'>google.com</option>
				<option value='yahoo.com'>yahoo.com</option>
				<option value='facebook.com'>facebook.com</option>
			</select>
			<input type='submit' value='submit'/>
		</form>
		<?php
		//$host = 'google.com';
		if(isset($_POST['host'])){
			
		echo "<pre>";
		system("nslookup ".$_POST['host']);
		}
		?>
	</body>
</html>