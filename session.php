<?php
// session.php

session_set_cookie_params(300, '/training.my/');
session_start();

if ( ! isset($_SESSION['username']) )
{
	//header('Location: login.php');
	//exit;
}
?>