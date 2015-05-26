<?php
include "../db/pdo.php";


if( isset($_POST['username'])AND isset($_POST['password']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
     //echo 'Username :'.$username .'<br>';
	 //echo 'Password :'.$password .'<br>'; 
	 //echo 'Password (SHA1) :'.sha1($password).'<br>'; 
	 
	//do query
	try
	{
		//query
		$resource = $db->prepare('SELECT * FROM user WHERE username = :username AND password = :password');
		$resource->bindValue(':username', $username);
		$resource->bindValue(':password', sha1($password));
		$resource->execute();
		
		//result
		$result = $resource->fetchAll(PDO::FETCH_ASSOC); //FETCH_ASSOC
		//$rows = $result->fetch(PDO::FETCH_NUM);
		//printf_array('%s',$result);
		//echo 'result'.sizeof($result).'<br>';
		}
	catch(PDOException $ex)
	{
		echo 'DB Query Error: ' . $ex->getMessage();
		exit;
	}
	if (sizeof($result)>0)
	{
		$_SESSION = $result;
		session_set_cookie_params(300,'training.my/'); //utk kill page idle - letak sebelum semua session start
		session_start();
		$_SESSION["username"]=$username;
		header('Location: index.php');
		//echo 'success';
	}
	else
	{
		echo 'failed';
		header('Location: login.php?error=1');
		//exit;
	}
}

//header('Location: login.php');
//exit;
?>