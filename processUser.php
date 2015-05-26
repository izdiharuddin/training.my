<?php 
	include("db/pdo.php");
	
	/*get value from browser header*/
	$action = isset($_GET['do']) ? $_GET['do'] : 'nothing';

/*if save*/
	if($action =='save')
	{
		$username =$_POST['username'];
		$password =$_POST['password'];
		$full_name =$_POST['full_name'];
		
		
		try
		{
			$sql ='INSERT INTO `kursus`.`user` (`username`, `password`, `full_name`) VALUES (:username,:password,:full_name);';
			
			$resource = $db->prepare($sql);
			$resource->bindValue(':username', $username, PDO::PARAM_STR);
			$resource->bindValue(':password', sha1($password), PDO::PARAM_STR);
			$resource->bindValue(':full_name', $full_name, PDO::PARAM_STR);			
			$resource->execute();
			
			//result
			if($db->lastInsertId()){
				echo 'Berjaya Daftar';
				header('Location: registerSuccess.php');
			}else
				header('Location: registerUser.php');
					
		}//try
		catch(PDOException $ex){
			echo 'DB Query Error: ' . $ex->getMessage();
			exit;
		}//catch
	}//if
	
	//end of inseting data
?>

