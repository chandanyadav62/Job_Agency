 <?php require_once("Connect.php") 
?>

<?php

if(isset($_POST['save']))
{	
	 $Username = $_POST['Username'];
	 $email = $_POST['email'];
	 $password = $_POST['password'];
	 $sql_query = "INSERT INTO entry_details ( Username , email, password)
	 VALUES ('$Username','$email','$password')";
	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "<script> alert('Registered Succesful'); </script>";
	    echo "Go to back then login page";
	 } 
	 else
     {
		echo "<script> alert('Not Registered'); </script>";
	 }
	  
}

?>