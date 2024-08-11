
<?php 

	include_once 'data.php';
                                                              //for text not code
	$user =$_POST['user'];    //$first=msqli_real_escape_string($conn,$_POST['first']);
	$email=$_POST['email'];       //$last=msqli_real_escape_string($conn,$_POST['last']);
	$subject =$_POST['subject'];     //$email=msqli_real_escape_string($conn,$_POST['email']);
	$message =$_POST['message'];         //$uid=msqli_real_escape_string($conn,$_POST['uid']);        


		$sql= "INSERT INTO messages(user,email,subject,message)
VALUES('$user','$email','$subject','$message');";
        
		mysqli_query($conn, $sql);

	header("Location: ../contact.html?message=success")

?>