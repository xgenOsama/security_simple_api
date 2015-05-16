<?php

	if (!empty($_POST['comment'])){
		echo "<h1>your name</h1>";
		echo escape($_POST['name']);
		echo '<br>';
		echo "<h1>your comment</h1>";
		echo escape($_POST['comment']);
	}