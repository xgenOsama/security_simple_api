<?php
 function connect(){
 	return new PDO('mysql:host=localhost;dbname=testing','root','g33k',array(PDO::
 			ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 }