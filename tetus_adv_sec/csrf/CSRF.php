<?php
 class csrf {
 	public function get_token(){
 		/// create a taken
 		$token = hash('sha512', mt_rand(0,mt_getrandmax()).microtime(TRUE));
 		$_SESSION['token'] = $token;
 		return $token;
 	}
 	public function check_token($token){
 		/// check taken against the session
 		$sessiontoken = $this->get_token();
 		if (strlen($sessiontoken) == 128 && strlen($token) == 128 && $sessiontoken == $token){
 			return TRUE;
 		}
 		return FALSE;
 	}
 	public function get_token_from_url(){
 		return isset($_GET['token']) ? $_GET['token'] : '';
 	}
 	public function get_token_from_session(){
 		return isset($_SESSION['token']) ? $_SESSION['token'] : '';
 	}
 }