<?php 
    
   
    require_once('Connect.php'); 
    
   
      ?>

<?php 
    
    include('header.php'); 

    if(!isset( $_SESSION['userid'] ) ){
        header('Location: login.php');
      } 

      
     $empid = $_SESSION['userid'];
    

     // get data from id 
     error_reporting(0);
     $catid = $_GET['catid'];

     $sql = "select * from categories where catid='$catid'";
     $rs = mysqli_query($con,$sql);
     $catdata = mysqli_fetch_array($rs);

     // delete category
     if(isset($_GET['delcatid'])){
        $catid = $_GET['delcatid'];
        $sql = "delete from categories where catid='$catid'";
        mysqli_query($con,$sql);
        header('Location: categories.php');
     }
     
    ?>


<?php
          
                              $sql = "select * from categories";
                              $rs = mysqli_query($con,$sql);
                              while($data = mysqli_fetch_array($rs)){
                           ?>

                                <tr>
                                      <td><?=$data['catid']?></td>
                                      <td><?=$data['name']?></td>
                                    
                                      <td>
                                           <a href="categories.php?catid=<?=$data['catid']?>" class="btn btn-info"> Edit</a>
                                           <a href="categories.php?delcatid=<?=$data['catid']?>" class="btn btn-danger"> Delete</a>
                                      </td>
                                </tr>

                           <?php
                              }


                              <?php 

                              if(isset($_POST['addcat']))
                              {
                   
                                   $catname = $_POST['Name'];
                                   $sql = "insert into categories (name) values('$catname')";
                                   if(mysqli_query($con,$sql)){
                                       echo "<script>alert('Add Category Successfully')</script>";
                                   }else{
                                       echo "<script>alert('Not Added')</script>";
                                   }
                   
                              }
                   
                              if(isset($_POST['updatecat']))
                              {
                   
                                   $catid = $_POST['catid'];
                                   $catname = $_POST['Name'];
                                   $sql = "update categories set Name='$catname' where catid='$catid'";
                                   if(mysqli_query($con,$sql)){
                                       echo "<script>alert('Update Category Successfully')</script>";
                                   }else{
                                       echo "<script>alert('Not Updated')</script>";
                                   }
                   
                              }
                   ?>
                   
                   </div>
                   
                   <script>
                   $(document).ready(function(){
                     $("#myinput").on("keyup", function() {
                       var value = $(this).val().toLowerCase();
                       $("#mytable tr").filter(function() {
                         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                       });
                     });
                   });
                   
                   </script>