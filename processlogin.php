<?php


session_set_cookie_params(300,'training.my/'); 
session_start();
include "db/pdo.php";

if( isset($_POST['username'])AND isset($_POST['password']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];




if ($username == 'fieqa' AND $password == 'abc123')
	{
		$_SESSION = array(
						'username' => $username,
						
						
					);

		header('Location: index.php');
		exit;
	}
	elseif ($username == 'fie' AND $password == 'abc123')
	{
		$_SESSION = array(
						'username' => $username,
						
						
					);

		header('Location: index.php');
		exit;
	}
	else
	{
		header('Location: login.php?error=1');
		exit;
	}
}

header('Location: login.php');
exit;
