<?php include("admin_header.php");
            include 'dbConn.php';?>

<div class="container mt-2">
<div class="jumbotron">

<?php
if(isset($_GET['action'])){ 
  $view_action = $_GET['action']; 
} 

// -------------fetch  Employee Details for edit
if($view_action == 'edit_employee')
{
  ?>
  <div class="page-header">
      <h2>Update Employee Data</h2>
  </div>

    <div class="row">
        <div class="col-md-12">
            <?php

            $query = "SELECT  * FROM Employee WHERE employee_id='" . $_GET["employee_id"] . "'"; // Fetch data from the table Emytable using id

            $result=mysqli_query($db_conn,$query);

            $mytable = mysqli_fetch_assoc($result);


            ?>
            <form action="update-employee.php" method="POST">             
              <div class="form-group">
                <label for="employee_id">ID</label>
                <input type="text" name="employee_id" class="form-control" value="<?php echo $_GET["employee_id"]; ?> " >
              </div>    
              <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $mytable['name']; ?>" required="">
              </div>                

              <div class="form-group">
                <label for="exampleInputEmail1">Rank</label>
                <input type="text" name="rank" class="form-control" value="<?php echo $mytable['rank']; ?>" required="">
              </div>              


              <button type="submit" class="btn btn-primary" value="submit">Submit</button>
             <input class="btn btn-danger" type="button" onclick="window.location.replace('adminhome.php')" value="Cancel" />
            

            </form>
        </div>
    </div>  

<?php }?>

<!-- End of Edit Employee -->

<!-- // -------------fetch  Course Details for edit -->
<?php
if($view_action == 'edit_course')
{
  ?>
  <div class="page-header">
      <h2>Update Course Data</h2>
  </div>

    <div class="row">
        <div class="col-md-12">
            <?php

            $query = "SELECT  * FROM Course WHERE course_id='" . $_GET["course_id"] . "'"; 
            // Fetch data from Course

            $result=mysqli_query($db_conn,$query);

            $mytable = mysqli_fetch_assoc($result);


            ?>
            <form action="update-course.php" method="POST">

             
              <div class="form-group">
                <label>ID</label>
                <input type="text" name="course_id" class="form-control" value="<?php echo $_GET["course_id"]; ?> " >
              </div>    
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="course_name" class="form-control" value="<?php echo $mytable['course_name']; ?>" required="">
              </div>                

              <div class="form-group">
                <label >Start Date</label>
                <input type="date" name="start_date" class="form-control" value="<?php echo $mytable['start_date']; ?>" required="">
              </div>              


              <button type="submit" class="btn btn-primary" value="submit">Submit</button>
             <input class="btn btn-danger" type="button" onclick="window.location.replace('adminhome.php')" value="Cancel" />
            

            </form>
        </div>
    </div>  

<?php }?>

<!-- End of Edit Course -->

<!-- // -------------fetch  Enroll Details for result -->
<?php
if($view_action == 'update_results')
{
  $msg=1;
  ?>
  <div class="page-header">
      <h2>Update Results Data</h2>
      <hr>
  </div>

    <div class="row">
        <div class="col-md-12">
            <?php
                 $employee_id=$_GET["employee_id"];  
                 // echo $employee_id;
                 $query = "SELECT * FROM Enrolled WHERE employee_id=$employee_id"; 
                 $result=mysqli_query($db_conn,$query);
                 $mytable = mysqli_fetch_assoc($result);
                 // // echo count($mytable);
                 // if ($mytable!=NULL) {
                 //    // $msg=1;
                 // } else {
                 //    $msg=10;                    
                 //  header ("Location: enroll.php?msg=".$msg."");
                 // }

                 // echo $mytable['employee_id'];


            ?>


        <form action="update-results.php" method="POST">

                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Course ID</span>
                        </div>
                    <input type="text" name="course_id" class="form-control" value="<?php echo $mytable['course_id']; ?> " readonly>
                  </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Employee ID</span>
                        </div>
                       <input type="text" name="employee_id" class="form-control" value="<?php echo $mytable['employee_id']; ?> " readonly>                
                    </div>
                                        <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Course Name</span>
                        </div>
                       <input type="text" name="course_name" class="form-control" value="<?php echo $mytable['course_name']; ?> " readonly>                
                    </div>
                </div>

  
                
          <div class="form-group">
            <label >Exam Result</label>
            <input type="text" name="exam_result" class="form-control" value="<?php echo $mytable['exam_result']; ?>" >
          </div>    
            <div class="form-group">
            <label >pass_or_fail</label>
            <input type="text" name="pass_or_fail" class="form-control" value="<?php echo $mytable['pass_or_fail']; ?>" >
          </div>    
          <div class="form-group">
            <label >fail_reason</label>
            <input type="text" name="fail_reason" class="form-control" value="<?php echo $mytable['fail_reason']; ?>" >
          </div> 
          <div class="form-group">
            <label >notes</label>
            <input type="text" name="notes" class="form-control" value="<?php echo $mytable['notes']; ?>" >
          </div> 
          <div class="form-group">
            <label >date_of_resit</label>
            <input type="date" name="date_of_resit" class="form-control" value="<?php echo $mytable['date_of_resit']; ?>" >
          </div>  
                        <div class="form-group">
            <label >resit_result</label>
            <input type="text" name="resit_result" class="form-control" value="<?php echo $mytable['resit_result']; ?>" >
          </div> 
          <div class="form-group">
            <div class="form-group">
            <label >pass_fail_resit</label>
            <input type="text" name="pass_fail_resit" class="form-control" value="<?php echo $mytable['pass_fail_resit']; ?>" >
          </div> 
          <div class="form-group">        


          <button type="submit" class="btn btn-primary" value="submit">Submit</button>
         <input class="btn btn-danger" type="button" onclick="window.location.replace('adminhome.php')" value="Cancel" />
        

        </form>
        </div>
    </div>  

<?php }?>

<!-- End of Edit Course -->




    </div>      
</div>
