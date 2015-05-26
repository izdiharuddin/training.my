<?php
 if(isset($_POST['submit']))
 {
    $name = $_POST['nama'];
	$email = $_POST['emel'];
	$query = $_POST['komen'];
	$email_from = $name.'<'.$email.'>';

 $to="";
 $subject="Enquiry!";
 $headers  = 'MIME-Version: 1.0' . "\r\n";
 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 $headers .= "From: ".$email_from."\r\n";
 $message="	  
 	   
 		 Nama:
		 $nama 	   
         <br>
 		 Emel:
		 $emel 	   
         <br>
 		 Komen:
		 $query 	   
      
   ";
	if(mail($to,$subject,$message,$headers))
		header("Location:../contact.php?msg=Komen Berjaya Dihantar! Terima Kasih.");
	else
		header("Location:../contact.php?msg=Error To send Email !");
		
 }
?>
