<?php require_once 'Connect.php';?>


<?php

if(isset($_POST['apply']))
{	
	// $Username = $_SESSION['Username'];
    //$jobid = $_SESSION['jobid'];
	 //$discription = $_POST['discription'];
   $Addhar = $_POST['Addhar'];
   $file = $_FILES['file']['name'];
   $file =$_FILES['file']['size'];
   $tmp = $_FILES['file']['tmp_name'];

   move_uploaded_file($tmp,"uploads/$file");
   

   if(mysqli_query($con,"INSERT INTO `application`(`Username`, `jobid`, `Addhar`, `cv`) VALUES ('$Id','$jobid',$Addhar,'$cv')")){
      echo "<script>alert('Application Submit successfully!')</script>";
   }
   else{
      echo "<script>alert('Your application not submit!')</script>";
   }
}
?>
