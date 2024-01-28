<?php require_once("Connect.php") ?>
<?php require_once("Registerbackend.php") ?>


<?php

if(isset($_POST['submit']))
{	 $email = $_POST['email'];
	 $password = $_POST['password'];
    
	 $sql = "SELECT * FROM entry_details WHERE email='$email' and password='$password'";
       $rs  = (mysqli_query($conn, $sql));
	 if(mysqli_num_rows($rs)>0)
     {
	             echo "<script> alert('Login successful') </script>";
          
              header("Location: Index.html");

                  
            
      } else{
            echo "<script> alert(' Login failed. Invalid username or password') </script>";
          }
     
} 







// require 'config.php';
// if(!empty($_SESSION["id"])){
//   header("Location: index.php");
// }
// if(isset($_POST["submit"])){
//   $email = $_POST["email"];
//   $password = $_POST["password"];
//   $sql = mysqli_query($conn, "SELECT * FROM entry_details  WHERE email = '$email' AND
//     password ='$password' ");
//   result = mysqli_query($conn, $sql);  
  
//   if(mysqli_num_rows > 0){
//     $row = mysqli_fetch_assoc($result);
//     if($password == $row['password']){
      
//       $_SESSION['Username'] = $row['Username'];
      
//     }
//     else{
//       echo
//       "<script> alert('Wrong Password'); </script>";
//     }
//   }
//   else{
//     echo
//     "<script> alert('User Not Registered'); </script>";
//   }
// }



// !-- <?php
// $server_name="localhost";
// $username="root";
// $password="";
// $database_name="database123";

// $conn=mysqli_connect($server_name,$username,$password,$database_name);
// //now check the connection
// if(!$conn)
// {
// 	die("Connection Failed:" . mysqli_connect_error());

// }

// if(isset($_POST['save']))
// {	
// 	 $Username = $_POST['Username'];
// 	//  $last_name = $_POST['last_name'];
// 	//  $gender = $_POST['gender'];
// 	 $email = $_POST['email'];
// 	 $password = $_POST['password'];
//      $cpassword = $_POST['cpassword'];
//     //  $exists=false;
//     //  if(($password == $cpassword) &&  $exists=false){}
// 	 $sql_query = "INSERT INTO entry_details ( Username , email, password, cpassword)
// 	 VALUES ('$Username','$email','$password', '$cpassword')";

// 	 if (mysqli_query($conn, $sql_query)) 
// 	 {
// 		echo "New Details Entry inserted successfully !";
// 	 } 
// 	 else
//      {
// 		echo "Error: " . $sql . "" . mysqli_error($conn);
// 	 }
// 	 mysqli_close($conn);
// } 


?> 

