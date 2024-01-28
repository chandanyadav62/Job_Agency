
<?php require_once("Connect.php") 
?>

<?php

if(isset($_POST['save']))
{	
	 $name = $_POST['name'];
	 $discription = $_POST['discription'];
	 $skill = $_POST['skill'];
      $date = date('d/m/y');
      $salary= $_POST['salary'];
      $location = $_POST['location'];
      $catid = $_POST['catid'];

      $sql_query = "INSERT INTO `jobs`( `name`, `discription`, `skill`, `date`, `salary`, `location`, `catid`)
	 VALUES ('$name', '$discription', '$skill', '$date', '$salary', '$location', '$catid')";
	 if (mysqli_query($conn, $sql_query)) 
     {
    echo "<script> alert('Recorded  Added');</script>";
     } 
     else
    {
    echo "<script> alert('Recorded Not Added');</script>";
    }
    // header('Location: job.html');
  
}
?>

