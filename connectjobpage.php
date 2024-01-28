<?php
require_once 'Connect.php';
 require_once 'function.php';
// $result = display_data();

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</div>
		<table  align="center" border="1px" style="width:900px; line-height:40px;">
			<tr class="text-white">
				 
					<th>ID</th>
					<th>Name</th>
					<th colspan="4">Description</th>
					<th colspan="4">Skill</th>
					<th>Date</th>
					<th>Salary</th>

					<th>Location</th>
			</tr>
           
            <?php
             $sql = " SELECT * FROM `jobs` ";
             $rs= mysqli_query($conn,$sql);
            //  $nums = mysqli_num_rows($query);
             while($data = $mysqli_fetch_array($rs))
             {
             ?>
            
                <tr>
               
					<td><h4 class="job-title">
									<?= $data['name'] ?>
								</h4></td>
								 <td><h5 class="company">
									<?= $data['categories'] ?>
								</h5></td>
								<td><p>Description :
									<?= $data['description'] ?>
								</p></td>
								<td><h6>Skill :
									<?= $data['skill'] ?>
								</h6></td>
								<td><h6>Timing :
									<?= $data['date'] ?>
								</h6></td>
								<td><h6>Location :
									<?= $data['location'] ?>
								</h6></td>
						
                </tr>  
          
           <?php
           }
  
 
?>

		</table>
    </div>

<!-- 
	job.html -->
	<!-- <section>
		<form action="connectjobpage.php" method="Post"></form> -->

		<!-- 
<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<ul class="job-list">
						<li class="job-preview">
							<div class="content float-left">
								<h4 class="job-title">
								<?= $jobdata['name'] ?>
								</h4>
								<h5 class="company">
									<?= $jobdata['categories'] ?>
								</h5>
								<p>Description :
									<?= $jobdata['description'] ?>
								</p>
								<h6>Skill :
									<?= $jobdata['skill'] ?>
								</h6>
								<h6>Timing :
									<?= $jobdata['timing'] ?>
								</h6>
								<h6>Location :
									<?= $jobdata['location'] ?>
								</h6>
							</div>  
						</li>

					</ul>  -->

		<!-- </div>
		<table  align="center" border="1px" style="width:900px; line-height:40px;">
			<tr class="text-white">
				   <th colspan="4"> 
					<h2>Student Record</h2>
					</th> -->
<!-- 

					<th>ID</th>
					<th>Name</th>
					<th colspan="4">Description</th>
					<th colspan="4">Skill</th>
					<th>Date</th>
					<th>Salary</th>

					<th>Location</th>
			</tr>
		</table>
		</div>
	</section> -->
</body>
</html>