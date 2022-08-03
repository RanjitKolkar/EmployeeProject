<?php include("admin_header.php"); 
include 'dbConn.php';

$add_action = 'employee';
?>
<div class="container mt-2">
        <div class="jumbotron">
            <?php include('toasts.php'); ?>
      <div class="row">
        <div class="col-md-12">
<?php
if(isset($_GET['view'])){ 
  $view_action = $_GET['view']; 
} 

// -------------fetch  Employee Details
if($view_action == 'employee')
{

?>

          <h2>Employee details</h2>
          <hr>
        </div> 

<?php


$query="select * from Employee limit 200"; // Fetch all the data from the table customers

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
                  <div class="btn-group">
                      <a href="edit.php?employee_id=<?php echo $array[0];?>&action=edit_employee" class="btn m-1 btn-primary">Edit</a>                

                    <!-- Button trigger modal -->
                      <a  class="btn m-1 btn-danger" data-toggle="modal" data-target="#exampleModal">
                       Delete
                      </a></div>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Are you sure you want to delete Employee <?php echo $array[1];?>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <a href="delete.php?employee_id=<?php echo $array[0];?>&action=delete_employee" class="btn btn-danger">Delete</a>
                            </div>
                          </div>
                        </div>
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
              <th scope="col">instructor_2</th>
            </tr>
          </thead>
            <tbody>
<?php while($array=mysqli_fetch_row($result)):?>

              <tr>
                <td> 
                  <div class="btn-group">
                      <a href="edit.php?course_id=<?php echo $array[0];?>&action=edit_course" class="btn m-1 btn-primary">Edit</a>                

                    <!-- Button trigger modal -->
                      <a  class="btn m-1 btn-danger" data-toggle="modal" data-target="#exampleModalC">
                       Delete
                      </a></div>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModalC" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Are you sure you want to delete Course <?php echo $array[1];?>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                               <a href="delete.php?course_id=<?php echo $array[0];?>&action=delete_course" class="btn btn-danger">Delete</a>
                            </div>
                          </div>
                        </div>
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
                  <td><?php echo $array[14];?></td>
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
            </tr>
          </thead>
            <tbody>
<?php while($array=mysqli_fetch_row($result)):?>

              <tr>
                <td> 
                    <a href="edit.php?course_id=<?php echo $array[0];?>&employee_id=<?php echo $array[1];?>&action=update_results" class="btn btn-primary">Update Results</a>
                    <a href="delete.php?course_id=<?php echo $array[0];?>&action=withdraw_course" class="btn btn-danger">Withdraw course</a>
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

<!-- End Fetch course Details -->

</div>
</div>
</div>
