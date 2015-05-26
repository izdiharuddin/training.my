<?php
 if(isset($_POST['submit']))
 {
    $name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$email_from = $name.'<'.$email.'>';

 $to="admin@serai.org";
 $subject="Enquiry!";
 $headers  = 'MIME-Version: 1.0' . "\r\n";
 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 $headers .= "From: ".$email_from."\r\n";
 $message="	  
 	   
 		 Nama:
		 $name 	   
         <br>
 		 Emel:
		 $email 	   
         <br>
 		 Komen:
		 $message
   ";
	if(mail($to,$subject,$message,$headers))
		header("Location:contact.php?msg=Komen Berjaya Dihantar! Terima Kasih.");
	else
		header("Location:contact.php?msg=Error To send Email !");
		
 }
?>
