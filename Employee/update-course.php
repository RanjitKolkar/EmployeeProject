<?php 
include 'dbConn.php';
if(count($_POST)>0){
   $course_name=$_POST['course_name'];   
   $start_date=$_POST['start_date'];
   $course_id=(int)$_POST['course_id'];
   echo $course_id;

$query = "UPDATE Course set course_name= '$course_name', start_date='$start_date' WHERE course_id='$course_id'";

 if (mysqli_query($db_conn, $query)) {
    $msg=1;

 } else {
    $msg=4;
 }

}

// header ("Location: view.php?view=employee&msg=".$msg."");

?>