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
        <table class="table border border-warning table-striped">
          <thead class="thead bg-warning">           
            <tr>
              <th scope="col">Action</th>
              <th scope="col">Employee ID</th>
              <th scope="col">Name</th>
              <th scope="col">Phone</th>
              <th scope="col">Email</th>

              <th scope="col">rank</th>
              <th scope="col">Nationality</th>
              <th scope="col">sex</th>
              <th scope="col">classification</th>

              <th scope="col">general_management</th>
              <th scope="col">sub_management</th>
              <th scope="col">location_of_work</th>
              <th scope="col">section</th>

              <th scope="col">category</th>
              <th scope="col">from_needs_list</th>
            </tr>
          </thead>
            <tbody>
<?php while($array=mysqli_fetch_row($result)):?>

              <tr>
                <td> 
                  <div class="btn-group">
                      <a href="edit.php?employee_id=<?php echo $array[0];?>&action=edit_employee" class="btn m-1 btn-primary">Edit </a> 
                       <a href="delete.php?employee_id=<?php echo $array[0];?>&action=delete_employee" class="btn m-1 btn-danger">Delete </a>  
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
                 No data found <a href="add.php?add=employee" class="btn btn-outline-success"> Create Employee</a>
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
 if ($result->num_rows > 0):;?>

            <div class="list-group">
                <a href="export_excel.php?download=all_course" class="btn shadow btn-success">Export to Excel</a>
            </div>
      <div class="table-responsive shadow rounded">
        <table class="table border border-warning table-striped">
          <thead class="thead bg-warning">   

            <tr>
              
              <th scope="col">Action</th>
              <th scope="col">Course ID</th>
              <th scope="col">course Name</th>

              <th scope="col">start_date</th>
              <th scope="col">end_date</th>
              <th scope="col">quarter</th>
              <th scope="col">Month</th>
              <th scope="col">Year</th>

              <th scope="col">course_specialization</th>
              <th scope="col">course_plan</th>

              <th scope="col">no_of_days</th>
              <th scope="col">hours_per_day</th>
              <th scope="col">total_hours</th>

              <th scope="col">contract_location</th>
              <th scope="col">instructor_1</th>
              <th scope="col">hours_instructor_1</th>
              <th scope="col">instructor_1</th>
              <th scope="col">hours_instructor_2</th>
            </tr>
          </thead>
            <tbody>
<?php while($array=mysqli_fetch_row($result)):?>

              <tr>
                <td> 
                  <div class="btn-group">
                      <a href="edit.php?course_id=<?php echo $array[0];?>&action=edit_course" class="btn m-1 btn-primary">Edit</a>                

            
                       <a href="delete.php?course_id=<?php echo $array[0];?>&action=delete_course" class="btn m-1 btn-danger">Delete </a> </div>
                   
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
        <table class="table border border-warning table-striped">
          <thead class="thead bg-warning">   

            <tr>

              <th scope="col">Action</th>
              <th scope="col">course_id</th>
              <th scope="col">employee_id</th>
              <th scope="col">course Name</th>

              <th scope="col">exam_result</th>
              <th scope="col">pass_or_fail</th>
              <th scope="col">fail_reason</th>
              <th scope="col">notes</th>
              <th scope="col">date_of_resit</th>

              <th scope="col">resit_result</th>
              <th scope="col">pass_fail_resit</th>


              <th scope="col">instructor_grade</th>
              <th scope="col">course_grade</th>              
              <th scope="col">instructor_self_grade</th>
              <th scope="col">direct_manager_grade</th>              
              <th scope="col">work_test</th>

            </tr>
          </thead>
            <tbody>
<?php while($array=mysqli_fetch_row($result)):?>

              <tr>
                <td> <div class="btn-group m">
                    <a href="edit.php?course_id=<?php echo $array[0];?>&employee_id=<?php echo $array[1];?>&action=update_results" class="m-1 btn btn-primary">Update Results</a>
                    <a href="delete.php?course_id=<?php echo $array[0];?>&action=withdraw_course" class="m-1 btn btn-danger">Withdraw course</a></div>
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
                 No data found <a href="enroll.php" class="btn btn-outline-success"> Enroll Employee</a>
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
                <a href="export_excel.php?download=all_employee" class="btn shadow btn-success">Export to Excel</a>
            </div>
      <div class="table-responsive shadow rounded">
        <table class="table border border-warning table-striped">
          <thead class="thead bg-warning">           
            <tr>
              <th scope="col">Action</th>
              <th scope="col">Employee ID</th>
              <th scope="col">Name</th>
              <th scope="col">Phone</th>
              <th scope="col">Email</th>

              <th scope="col">rank</th>
              <th scope="col">Nationality</th>
              <th scope="col">sex</th>
              <th scope="col">classification</th>

              <th scope="col">general_management</th>
              <th scope="col">sub_management</th>
              <th scope="col">location_of_work</th>
              <th scope="col">section</th>

              <th scope="col">category</th>
              <th scope="col">from_needs_list</th>
            </tr>
          </thead>
            <tbody>
<?php while($array=mysqli_fetch_row($result)):?>

              <tr>
                <td> 
 

 
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
              <tr>
                 <td colspan="3" rowspan="1" headers="">No Data Found</td>
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
