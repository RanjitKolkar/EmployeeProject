<?php

   include 'dbConn.php';
if(isset($_GET['action'])){ 
  $view_action = $_GET['action']; 
} 

// -------------fetch  Employee Details for edit
if($view_action == 'delete_employee')
{
   $employee_id=(int)$_GET['employee_id'];
    $query = "DELETE FROM Enrolled WHERE employee_id='$employee_id' ";  
      $query1 = "DELETE FROM Employee WHERE employee_id='$employee_id' "; 
   // Delete data from the table customers using id

    mysqli_query($db_conn, $query)  ;
    //First delete from Enrolled then from Employee
   if (mysqli_query($db_conn, $query1)) {
$msg=1;

 } else {
    $msg=4;
 }
   // header ("Location: adminhome.php?msg=".$msg."");
 }

 // -------------fetch  Employee Details for edit
if($view_action == 'delete_course')
{
   $course_id=(int)$_GET['course_id'];
    $query = "DELETE FROM Enrolled WHERE course_id='$course_id' ";  
      $query1 = "DELETE FROM Course WHERE course_id='$course_id' "; 
   // Delete data from the table customers using id

    mysqli_query($db_conn, $query) ; 
    //First delete from Enrolled then from Employee
   if (mysqli_query($db_conn, $query1)) {
$msg=1;

 } else {
    $msg=4;
 }
   // header ("Location: adminhome.php?msg=".$msg."");
 }
 // -------------fetch  Employee Details for edit
if($view_action == 'withdraw_course')
{
   $course_id=(int)$_GET['course_id'];
    $query = "DELETE FROM Enrolled WHERE course_id='$course_id' ";   
   // Delete data from the table customers using id

   if (mysqli_query($db_conn, $query)) {
$msg=7;

 } else {
    $msg=4;
 }

}

header ("Location: view.php?view=course&msg=".$msg."");




?>