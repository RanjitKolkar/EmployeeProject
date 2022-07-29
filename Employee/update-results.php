<?php 
include 'dbConn.php';
if(count($_POST)>0){
   $employee_id=$_POST['employee_id'];   
   $course_id=$_POST['course_id'];

   $exam_result=$_POST['exam_result'];
   $pass_or_fail=$_POST['pass_or_fail'];
   $fail_reason=$_POST['fail_reason'];
   $notes=$_POST['notes'];

   $date_of_resit=$_POST['date_of_resit'];
   $resit_result=$_POST['resit_result'];
   $pass_fail_resit=$_POST['pass_fail_resit'];

   $query = "UPDATE Enrolled set exam_result='$exam_result',pass_or_fail='$pass_or_fail',fail_reason='$fail_reason',notes='$notes',date_of_resit='$date_of_resit',resit_result='$resit_result',pass_fail_resit='$pass_fail_resit' WHERE employee_id='$employee_id' AND course_id='$course_id'";

if (mysqli_query($db_conn, $query)) {
    $msg=1;

 } else {
    $msg=4;
 }

}

header ("Location: adminhome.php?msg=".$msg."");


?>