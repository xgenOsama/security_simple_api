<?php
 session_start();
 $_SESSION['username'] = 'osama';
 $_SESSION['loggedin'] = TRUE;
 $_SESSION['role'] = 'admin';
 
 echo '<pre>';
 var_dump(session_id());
 var_dump(session_get_cookie_params());
 var_dump($_SESSION);