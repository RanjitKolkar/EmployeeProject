<?php include("admin_header.php");include("dbConn.php");include('toasts.php') ;
$selected_course_name="-1,-1";
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




$query="select course_name from Course limit 200"; // Fetch all the data from the table customers

$result=mysqli_query($db_conn,$query);
if ($result->num_rows > 0):;?>     
    <form action="" method="post" class="mb-3">
        <h3> Select Course for Employee <?php echo $employee_name;?> to enroll</h3>
        <div class="select-block">
        <select class="form-select btn-light" name="select_course_name">
          <option value="" disabled selected>Select Course</option>

    <?php while($array=mysqli_fetch_row($result)):?>        
          <option value=<?php echo $employee_id.",".$array[0];?>><?php echo $array[0];?>
          </option>
    <?php endwhile; ?>

        </select>
      </div>
      <br />
      <input class="btn btn-primary" type="submit" name="submit" value="Enroll">
      <hr>
    </form>
    <?php

    if(isset($_POST['submit'])){
        if(!empty($_POST['select_course_name'])) {
            $selected_course_name = $_POST['select_course_name'];
            echo "<br>".$selected_course_name;



    $str_arr = preg_split ("/\,/", $selected_course_name); 
    $employee_id= (int)$str_arr[0];
    $course_name= $str_arr[1];

    echo "<br>".$employee_id."<br>".$course_name;

    $query = "INSERT INTO Enrolled ( employee_id, course_name )
    VALUES ($employee_id,'$course_name')";


    mysqli_query($db_conn, $query);
            $error_message = mysqli_error($db_conn);
              if($error_message == ""){
               echo "<br>query Success: ".$error_message;
                
                 } else {
                // $alreadyInserted=1;
               echo "<br>query Failed: ".$error_message;
             }


    // if (mysqli_query($db_conn, $query)) {
    //     echo "Successfully enrolled to the course";
    //     ?> <a href="view.php?view=enrolled" class="btn btn-outline-primary">View Enrolled</a><?php
    // } else {
    //     echo "You have already enrolled to the course";
    //    ?>  <a href="view.php?view=enrolled" class="btn btn-outline-primary">View Enrolled </a><?php
    // }

    

          // echo $selected_course_name;
        } 
    } else {
      echo 'Please select the course.';
    }
      
    ?> 



    

<?php else: ?>
    <h3>No Course yet. Create Course first</h3>
     <a href="add.php?add=course" class="btn btn-primary">Create Course</a>
    <?php 
    mysqli_free_result($result); 
endif;?>
       <!-- end of coulmn, row, jumbotron container -->
        </div> 
     </div>        
    </div>
</div>

