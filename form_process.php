<?php


$action = isset($_GET['do']) ? $_GET['do'] : 'nothing';

if ($action == 'save')
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$full_name = $_POST['full_name'];
	

	// do saving
	try
	{
		// query
		$resource = $db->prepare('INSERT INTO user 
									  	  (username, password, full_name)
						  			VALUES(:username, :password, :full_name)
								');

		$resource->bindValue(':username', $username, PDO::PARAM_STR);
		$resource->bindValue(':password', sha1($password), PDO::PARAM_STR);
		$resource->bindValue(':full_name', $first_name, PDO::PARAM_STR);
		
		$resource->execute();

		// result
		if ( $db->lastInsertId() )
			header('Location: index.php');
		else
			header('Location: registerUser.php');
	}
	catch(PDOException $ex) 
	{
		echo 'DB Query Error: ' . $ex->getMessage();
		exit;
	}
}


elseif($action == 'delete')
{
	if ($_SESSION['group_id'] != 2)
	{
		header('Location: index.php?status=denied');
		exit;
	}


	$user_id = (int) $_GET['user_id'];

	// do delete
	try
	{
		$resource = $db->prepare('DELETE FROM users WHERE user_id = :user_id');
		$resource->bindValue(':user_id', $user_id, PDO::PARAM_INT);
		$resource->execute();

		header('Location: index.php');
	}
	catch(PDOException $ex) 
	{
		echo 'DB Query Error: ' . $ex->getMessage();
		exit;
	}	
}

elseif ($action == 'update')
{
	if ($_SESSION['group_id'] != 2)
	{
		header('Location: index.php?status=denied');
		exit;
	}
		
	$user_id = $_GET['user_id'];

	$password = $_POST['password'];
	$full_name = $_POST['full_name'];
	

	// do saving
	try
	{
		// query
		$sql_pwd = strlen($password) > 0 ? 'password = :password,' : '';
		$resource = $db->prepare('UPDATE users SET 	' . $sql_pwd . ' 
								  	full_name = :full_name,
								  	
								  WHERE user_id = :user_id');

		$resource->bindValue(':user_id', $user_id, PDO::PARAM_INT);

		if (strlen($password) > 0)
			$resource->bindValue(':password', sha1($password), PDO::PARAM_STR);
		
		$resource->bindValue(':full_name', $first_name, PDO::PARAM_STR);
		
		$resource->execute();

		// result
		if ( $resource->rowCount() )
			header('Location: index.php');
		else
			header('Location: form_edit.php?user_id=' . $user_id);
	}
	catch(PDOException $ex) 
	{
		echo 'DB Query Error: ' . $ex->getMessage();
		exit;
	}
}