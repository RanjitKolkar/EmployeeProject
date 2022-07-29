<?php include("admin_header.php");include("dbConn.php");include('toasts.php') ;
$selected_course_id="-1,-1";
$employee_id="-1";
$employee_name="dummy";
?>
<div class="container mt-2">
    <div class="jumbotron">
    <div class="row">
        <div class="col-md-12">
<?php 


if(isset($_GET['employee_id'])){ 
   $employee_id = $_GET['employee_id']; 
   // echo "hi".$employee_id;
} 

if(isset($_GET['employee_name'])){ 
   $employee_name = $_GET['employee_name']; 
   // echo "hi".$employee_id;
}




$query="select course_id, course_name from Course limit 200"; // Fetch all the data from the table customers

$result=mysqli_query($db_conn,$query);
 if ($result->num_rows > 0):;?>
    <form action="" method="post" class="mb-3">

            <h3> Select Course for Employee <?php echo $employee_name;?> to enroll</h3>
      <div class="select-block">
        <select class="form-select btn-light" name="select_course">
          <option value="" disabled selected>Select Course</option>
            <?php while($array=mysqli_fetch_row($result)):?>
                
                      <option value=<?php echo $employee_id.",".$array[0];?>><?php echo $array[0].':'.$array[1];?></option>

            <?php endwhile; ?>
            <?php else: ?>
        <h1>No Data Found</h1>
        <?php 
        mysqli_free_result($result); 
        endif;?>
        </select>
      </div>
      <br />
      <input class="btn btn-primary" type="submit" name="submit" value="Enroll">
      <hr>
    </form>
    <?php

      if(isset($_POST['submit'])){
        if(!empty($_POST['select_course'])) {
           $selected_course_id = $_POST['select_course'];
              // echo $selected_course_id;
        } } else {
          echo 'Please select the course.';
        }
      
    ?> 



   <?php 

$str_arr = preg_split ("/\,/", $selected_course_id); 
$employee_id= (int)$str_arr[0];
$course_id= (int)$str_arr[1];

   $query = "INSERT INTO Enrolled (course_id, employee_id, course_name )
     VALUES ($course_id,$employee_id,'test')";
 
     if (mysqli_query($db_conn, $query)) {
        echo "Successfully enrolled to the course".mysqli_query($db_conn, $query);
     } else {
        echo "You have already enrolled to the course".mysqli_query($db_conn, $query);
     }

 ?>
<!-- end of coulmn, row, jumbotron container -->
        </div> 
     </div>        
    </div>
</div>

