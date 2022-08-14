<?php include("admin_header.php"); 
include 'dbConn.php';

$add_action = 'employee';
?>
<div class="container mt-2">
  <?php include('toasts.php')?>
        <div class="jumbotron">
      <div class="row">
        <div class="col-md-12">
<?php
if(isset($_GET['view'])){ 
  $view_action = $_GET['view'];  
} 
if(isset($_GET['filename'])){  
  $table_name = $_GET['filename']; 
 
} 
 // echo $table_name;
// -------------fetch  Employee Details
if($view_action == 'employee')
{

?>

          <h2><?php echo $language['Employeedetails'];?></h2>
          <hr>
        </div> 

<?php


$query="select * from Employee limit 200"; // Fetch all the data from the table customers

$result=mysqli_query($db_conn,$query);
 if ($result->num_rows > 0):;?>


            <div class="list-group">
                <a href="export_excel.php?download=all_employee" class="btn shadow btn-success"><?php echo $language['ExporttoExcel'];?></a>
            </div>
      <div class="table-responsive shadow rounded">
        <table class="table border border-primary table-striped">
          <thead class="thead bg-primary">           
            <tr>
              <th scope="col"><?php echo $language['Action']?></th>

              <th scope="col"><?php echo $language['Rank']?></th>
              <th scope="col"><?php echo $language['Employee ID']?></th>
              <th scope="col"><?php echo $language['Name']?></th>
              <th scope="col"><?php echo $language['Phone']?></th>
              <th scope="col"><?php echo $language['Email']?></th>
              <th scope="col"><?php echo $language['Sex']?></th>
              <th scope="col"><?php echo $language['General Management']?> </th>
              <th scope="col"><?php echo $language['Sub Management']?> </th>
              <th scope="col"><?php echo $language['Classification']?></th>
              <th scope="col"><?php echo $language['Location of the work']?></th>
              <th scope="col"><?php echo $language['Nationality']?></th>
              <th scope="col"><?php echo $language['Section']?></th>
              <th scope="col"><?php echo $language['Category']?></th>
              <th scope="col"><?php echo $language['Needs List']?> </th>
            </tr>
          </thead>
            <tbody>
<?php while($array=mysqli_fetch_row($result)):?>

              <tr>
                <td> 
                  <div class="btn-group">
                      <a href="edit.php?employee_id=<?php echo $array[1];?>&action=edit_employee" class="btn m-1 btn-primary"><?php echo $language['Edit']?> </a> 
                       <a href="delete.php?employee_id=<?php echo $array[1];?>&action=delete_employee" class="btn m-1 btn-danger"><?php echo $language['Delete']?> </a>  
                       </div> 


                </td>
                  <td><?php echo $array[0];?></td>
                  <td><?php echo $array[1];?></td>
                  <td><?php echo $array[2];?></td>
                  <td><?php echo $array[3];?></td>
                  <td><?php echo $array[4];?></td>
                  <td><?php echo $array[5];?></td>
                  <td><?php echo $array[6];?></td>
                  <td><?php echo $array[7];?></td>
                  <td><?php echo $array[8];?></td>
                  <td><?php echo $array[9];?></td>

                  <td><?php echo $array[10];?></td>
                  <td><?php echo $array[11];?></td>
                  <td><?php echo $array[12];?></td>
                  <td><?php echo $array[13];?></td>

              </tr>

<?php endwhile; ?>

<?php else: ?>

              
            <div class="alert alert-info" role="alert">
                 <?php echo $language['No_data_found'];?><a href="add.php?add=employee" class="btn btn-outline-success"> <?php echo $language['Create Employee'];?></a>
              </div>
                  
<?php endif; 

               mysqli_free_result($result); 
}//end of if
?>

            </tbody>

         </table>

        </div>

<!-- End Fetch EMployee Details -->

 <!-- -------------fetch  Course Details -->
         <div class="col-md-12">
 <?php
if($view_action == 'course')
{

?>
            
          <h2>Course details</h2>
          <hr>
        </div> 

<?php


$query="select * from Course limit 200"; // Fetch all the data from the table customers

$result=mysqli_query($db_conn,$query);
 if ($result->num_rows > 0):;

  ?>

            <div class="list-group">
                <a href="export_excel.php?download=all_course" class="btn shadow btn-success">Export to Excel</a>
            </div>
      <div class="table-responsive shadow rounded">
        <table class="table border border-primary table-striped">
          <thead class="thead bg-primary" style="background-color: #e3f2fd;">   

            <tr>
              
              <th scope="col"><?php echo $language['Action'];?></th>
              <th scope="col"><?php echo $language['Course Name'];?></th>
              <th scope="col"><?php echo $language['contract_location'];?></th>
              <th scope="col"><?php echo $language['Start Date'];?></th>
              <th scope="col"><?php echo $language['End Date'];?></th>


              <th scope="col"><?php echo $language['Course Specialization'];?></th>
              <th scope="col"><?php echo $language['Course Plan'];?></th>
              
              <th scope="col"><?php echo $language['Quarter'];?></th>
              <th scope="col"><?php echo $language['Month'];?></th>
              <th scope="col"><?php echo $language['Year'];?></th>


              <th scope="col"><?php echo $language['Number of days'];?></th>
              <th scope="col"><?php echo $language['Hours per day'];?></th>
              <th scope="col"><?php echo $language['Total Hours'];?></th>

              <th scope="col"><?php echo $language['Instructor 1'];?></th>
              <th scope="col"><?php echo $language['Hours Instructor 1'];?></th>
              <th scope="col"><?php echo $language['Instructor 2'];?></th>
              <th scope="col"><?php echo $language['Hours Instructor 2'];?></th>
            </tr>
          </thead>



            <tbody>
<?php while($array=mysqli_fetch_row($result)):?>

              <tr>
                <td> 
                  <div class="btn-group">
                      <a href="edit.php?course_name=<?php echo $array[0];?>&action=edit_course" class="btn m-1 btn-primary"><?php echo $language['Edit']?> </a>                

            
                       <a href="delete.php?course_name=<?php echo $array[0];?>&action=delete_course" class="btn m-1 btn-danger"><?php echo $language['Delete']?>  </a> </div>
                   
                </td>
                  <td><?php echo $array[0];?></td>
                  <td><?php echo $array[1];?></td>
                  <td><?php echo $array[2];?></td>
                  <td><?php echo $array[3];?></td>

                  <td><?php echo $array[4];?></td>
                  <td><?php echo $array[5];?></td>
                  <td><?php echo $array[6];?></td>
                  <td><?php echo $array[7];?></td>

                  <td><?php echo $array[8];?></td>
                  <td><?php echo $array[9];?></td>
                  <td><?php echo $array[10];?></td>
                  <td><?php echo $array[11];?></td>

                  <td><?php echo $array[12];?></td>
                  <td><?php echo $array[13];?></td>
                  <td><?php echo $array[14];?></td>
                  <td><?php echo $array[15];?></td>
                  <td><?php echo $array[16];?></td>
              </tr>

<?php endwhile; ?>

<?php else: ?>
            <div class="alert alert-info" role="alert">
                 No data found <a href="add.php?add=course" class="btn btn-outline-success"> Create Course</a>
              </div>
<?php endif; 

               mysqli_free_result($result); 
}//end of if
?>

            </tbody>
         </table>
        </div>

<!-- End Fetch course Details -->


 <!-- -------------fetch  Enrolled Details -->
         <div class="col-md-12">
 <?php
if($view_action == 'enrolled')
{

?>
            
          <h2>Enrolled details</h2>
          <hr>
        </div> 

<?php


$query="select * from Enrolled limit 200"; // Fetch all the data from the table customers

$result=mysqli_query($db_conn,$query);
 if ($result->num_rows > 0):;?>


            <div class="list-group">
                <a href="export_excel.php?download=all_enrolled" class="btn shadow btn-success">Export to Excel</a>
            </div>
      <div class="table-responsive shadow rounded">
        <table class="table border border-primary table-striped">
          <thead class="thead bg-primary">   

            <tr>

              <th scope="col"><?php echo $language['Action'];?></th>
              <th scope="col"><?php echo $language['Rank']?></th>
              <th scope="col"><?php echo $language['Employee ID']?></th>
              <th scope="col"><?php echo $language['Name']?></th>
              <th scope="col"><?php echo $language['Phone']?></th>
              <th scope="col"><?php echo $language['Email']?></th>
              <th scope="col"><?php echo $language['Sex']?></th>
              <th scope="col"><?php echo $language['General Management']?> </th>
              <th scope="col"><?php echo $language['Sub Management']?> </th>
              <th scope="col"><?php echo $language['Classification']?></th>
              <th scope="col"><?php echo $language['Location of the work']?></th>
              <th scope="col"><?php echo $language['Nationality']?></th>
              <th scope="col"><?php echo $language['Section']?></th>
              <th scope="col"><?php echo $language['Category']?></th>
              <th scope="col"><?php echo $language['Needs List']?> </th>

            </tr>
          </thead>
            <tbody>
<?php while($array=mysqli_fetch_row($result)):?>

              <tr>
                <td> <div class="btn-group m">
                    <a href="edit.php?course_name=<?php echo $array[1];?>&employee_id=<?php echo $array[0];?>&action=update_results" class="m-1 btn btn-primary"><?php echo $language['Update Results'];?> </a>
                    <a href="delete.php?course_name=<?php echo $array[1];?>&action=withdraw_course" class="m-1 btn btn-danger"><?php echo $language['Withdraw course'];?> </a></div>
                </td>
                  <td><?php echo $array[0];?></td>
                  <td><?php echo $array[1];?></td>
                  <td><?php echo $array[2];?></td>
                  <td><?php echo $array[3];?></td>

                  <td><?php echo $array[4];?></td>
                  <td><?php echo $array[5];?></td>
                  <td><?php echo $array[6];?></td>
                  <td><?php echo $array[7];?></td>

                  <td><?php echo $array[8];?></td>
                  <td><?php echo $array[9];?></td>

                  <td><?php echo $array[10];?></td>
                  <td><?php echo $array[11];?></td>
                  <td><?php echo $array[12];?></td>
                  <td><?php echo $array[13];?></td>
                  <td><?php echo $array[14];?></td>
              </tr>

<?php endwhile; ?>

<?php else: ?>
            <div class="alert alert-info" role="alert">
                 <?php echo $language['No_data_found'];?>  <a href="enroll.php" class="btn btn-outline-success"> <?php echo $language['Enroll_Employee'];?></a>
              </div>
<?php endif; 

               mysqli_free_result($result); 
}//end of if
?>

            </tbody>
         </table>
        </div>

<!-- End Fetch Imported Details -->

<!-- // -------------fetch  Employee Details --><?php 
if($view_action == 'imported')
{


// echo $table_name;
?>

          <h2>Imported details</h2>
          <hr>
        </div> 

<?php


$query="select * from $table_name limit 200"; // Fetch all the data from the table customers

$result=mysqli_query($db_conn,$query);
 if ($result->num_rows > 0):;?>


            <div class="list-group">
                <a href="export_excel.php?download=all_employee" class="btn shadow btn-success"><?php echo $language ['ExporttoExcel'];?></a>
            </div>
      <div class="table-responsive shadow rounded">
        <table class="table border border-primary table-striped">
          <thead class="thead bg-primary">           
            <tr>
              <th scope="col"><?php echo $language['Rank']?></th>
              <th scope="col"><?php echo $language['Employee ID']?></th>
              <th scope="col"><?php echo $language['Name']?></th>
              <th scope="col"><?php echo $language['Phone']?></th>
              <th scope="col"><?php echo $language['Email']?></th>
              <th scope="col"><?php echo $language['Sex']?></th>
              <th scope="col"><?php echo $language['General Management']?> </th>
              <th scope="col"><?php echo $language['Sub Management']?> </th>
              <th scope="col"><?php echo $language['Classification']?></th>
              <th scope="col"><?php echo $language['Location of the work']?></th>
              <th scope="col"><?php echo $language['Nationality']?></th>
              <th scope="col"><?php echo $language['Section']?></th>
              <th scope="col"><?php echo $language['Category']?></th>
              <th scope="col"><?php echo $language['Needs List']?> </th>
            </tr>
          </thead>
            <tbody>
<?php while($array=mysqli_fetch_row($result)):?>

              <tr>               
                  <td><?php echo $array[0];?></td>
                  <td><?php echo $array[1];?></td>
                  <td><?php echo $array[2];?></td>
                  <td><?php echo $array[3];?></td>

                  <td><?php echo $array[4];?></td>
                  <td><?php echo $array[5];?></td>
                  <td><?php echo $array[6];?></td>
                  <td><?php echo $array[7];?></td>

                  <td><?php echo $array[8];?></td>
                  <td><?php echo $array[9];?></td>
                  <td><?php echo $array[10];?></td>
                  <td><?php echo $array[11];?></td>

                  <td><?php echo $array[12];?></td>
                  <td><?php echo $array[13];?></td>

              </tr>

<?php endwhile; ?>

<?php else: ?>
              <tr>
                 <td colspan="3" rowspan="1" headers=""><?php echo $language['No_data_found'];?></td>
              </tr>
<?php endif; 

               mysqli_free_result($result); 
}//end of if
?>

            </tbody>

         </table>

        </div>

<!-- End Fetch Imported Details -->




</div>
</div>
</div>
