<?php 
    class csrf{
    	public function get_token(){
    		/// create token
    		$token = hash('sha512', mt_rand(0,mt_getrandmax()).microtime(TRUE));
    		$_SESSION['token'] = $token;
    		return $token;
    	}
    	public function check_token($token){
    	  /// check token against the session
    	  $sessiontoken = $this->get_token_from_session();
    	  $valid = strlen($sessiontoken) == 128 && strlen($token) == 128 && $sessiontoken == $token ;
    	  	$this->get_token();
    	  	return $valid;
    	}
    	public function get_token_from_url(){
    		return isset($_GET['token']) ? $_GET['token'] : 0 ;
    	}
    	public function get_token_from_session(){
    		return isset($_SESSION['token']) ? $_SESSION['token'] : 0 ;
    	}
    }