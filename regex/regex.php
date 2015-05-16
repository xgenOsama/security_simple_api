<?php
  class Regex{
   private $errors = array();
   public function preg($data , $type , $filedName){
   	return $this->$type($data,$filedName);
   }
   /// check valid zip function
    private function zip($data,$filedName){
   	if (preg_match('%^[0-9]{5}$%'
   			, stripcslashes(trim($data[$filedName])))){
   	 $valid = TRUE;
   	}
   	else {
   		$valid = FALSE;
   		$this->errors[] = "<p><font color='red' size='+1'>Please enter a valid 5 digit ZIP CODE</font></p>";
   	}
   	return $valid;
   }
   /// check valid name
    private function name($data,$filedName){
   	if (preg_match('%^[A-Za-z\.\' \-]{2,15}$%',
   			 stripcslashes(trim($data[$filedName])))){
   		$valid = TRUE;
   	}
   	else {
   		$valid = FALSE;
   		$this->errors[] = "<p><font color='red' size='+1'>Please enter a valid NAME</font></p>";
   	}
   	return $valid;
   }
   //// check password
    private function password($data,$filedName){
   	if (preg_match('%^[A-Za-z0-9\.\' \-]{6,30}$%'
   			,stripcslashes(trim($data[$filedName])))){
   		$valid = TRUE;
   	}
   	else {
   		$valid = FALSE;
   		$this->errors[] = "<p><font color='red' size='+1'>Please enter a valid PASSWORD</font></p>";
   	}
   	return $valid;
   }
   
   //// check email address
   
    private function email($data,$filedName){
   	if (preg_match('%^[A-Za-z0-9._\%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$%'
   			,stripcslashes(trim($data[$filedName])))){
   		$valid = TRUE;
   	}
   	else {
   		$valid = FALSE;
   		$this->errors[] = "<p><font color='red' size='+1'>Please enter a valid EMAIL</font></p>";
   	}
   	return $valid;
   }
   
   /// check phone number
   
    private function phone($data,$filedName){
   	if (preg_match('%^([0-9]( |-)?)?(\(?[0-9]{3}\)?|[0-9]{3})( |-)?([0-9]{3}( |-)?[0-9]{4}|[a-zA-Z0-9]{7})$%'
   			,stripcslashes(trim($data[$filedName])))){
   		$valid = TRUE;
   	}
   	else {
   		$valid = FALSE;
   		$this->errors[] = "<p><font color='red' size='+1'>Please enter a valid phone number</font></p>";
   	}
   	return $valid;
   }
   
   /// check city
   
    private  function city($data,$filedName){
   	if (preg_match('%^([0-9]( |-)?)?(\(?[0-9]{3}\)?|[0-9]{3})( |-)?([0-9]{3}( |-)?[0-9]{4}|[a-zA-Z0-9]{7})$%'
   			,stripcslashes(trim($data[$filedName])))){
   		$valid = TRUE;
   	}
   	else {
   		$valid = FALSE;
   		$this->errors[] = "<p><font color='red' size='+1'>Please enter a valid city number</font></p>";
   	}
   	return $valid;
   }
   
   /// check 
   
   /// show errors
   public function showErrors(){
   	echo "<ul class='errors'>";
   	foreach ($this->errors as $error){
   	echo "<li>".$error."</li>";
   	}
   	echo "</ul";
   }
   
  	
  }