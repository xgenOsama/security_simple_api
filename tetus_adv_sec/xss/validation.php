<?php
 class  Validation{
 	public $errors = array();
 	public function validate($data ,$rules) {
 		$valid = TRUE;
 		foreach ($rules as $fieldname => $rule){
 			/// extract the rules to callback methods
 			$callbacks = explode('|', $rule);
 			///call the validation callback methods
 			foreach ($callbacks as $callback){
 				$value = isset($data[$fieldname]) ? $data[$fieldname] : NULL;
 				if($this->$callback($value,$fieldname) == FALSE) $valid = FALSE;
 			} 
 		}
 		return $valid;
 	}

 	public function email($value ,$fieldname) {
 		$valid = filter_var($value,FILTER_VALIDATE_EMAIL);
 		if($valid == FALSE) $this->errors[] = "The $fieldname needs to be a valid email";
 		return $valid;
 	}
 	public function required($value ,$fieldname) {
 		$valid = !empty($value);
 		if($valid == FALSE) $this->errors[] = "The $fieldname is required";
 		return $valid;
 	}
 	public function text($value ,$fieldname) {
 		$whitelist = '/^[a-zA-Z0-9 ,\.\+\n;:!_\-@]+$/';
 		$valid = preg_match($whitelist, $value);
 		if($valid == FALSE) $this->errors[] = "The $fieldname contains invalid characters";
 		return $valid;
 	}
 	public function environment($value ,$fieldname) {
 		$values = array('admin','frontend');
 		$valid = in_array($value, $values);
 		if($valid == FALSE) $this->errors[] = "The $fieldname is not correct";
 		return $valid;
 	}
 	public function example($value ,$fieldname) {
 		$string = '@example.com';
 		$valid = $string == substr($value,strpos($value, $string));
 		if($valid == FALSE) $this->errors[] = "The $fieldname is not correct email address";
 		return $valid;
 	}
 	public  function number($value, $fieldname){
 		$valid = filter_var($value,FILTER_VALIDATE_INT);
 		if($valid == FALSE) $this->errors[] = "The $fieldname needs to be a valid Number";
 		return $valid;
 	}
 }