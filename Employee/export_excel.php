
<?php

if(isset($_GET['download'])){ 
   $add_action = $_GET['download']; 
} 

include 'dbConn.php';
$tasks = array();
$connString =  $db_conn;

if($add_action == 'all_employee'){
getAllEmployee($connString); 
}
if($add_action == 'all_course'){
getAllCourse($connString); 
}
if($add_action == 'all_enrolled'){
getAllEnrolled($connString); 
}
if($add_action == 'all'){
getAll($connString); 
}

function ExportFile($records) {
  $heading = false;
    if(!empty($records))
      foreach($records as $row) {
      if(!$heading) {
        // display field/column names as a first row
        echo implode("\t", array_keys($row)) . "\n";

        $heading = true;
      }
      echo implode("\t", array_values($row)) . "\n";
      }
    exit;
}

function getAllEmployee($connString) {

    $filename = "employee"."_".date('Ymd') . ".csv"; 
    $sql_query = "SELECT * FROM Employee";
    $resultset = mysqli_query($connString, $sql_query) or die("database error:". mysqli_error($conn));

    while( $rows = mysqli_fetch_assoc($resultset) ) {
      $tasks[] = $rows;
    }
    header("Content-Type: text/csv");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    ExportFile($tasks);
}


function getAllCourse($connString) {

    $filename = "course"."_".date('Ymd') . ".csv"; 
    $sql_query = "SELECT * FROM Course";
    $resultset = mysqli_query($connString, $sql_query) or die("database error:". mysqli_error($conn));

    while( $rows = mysqli_fetch_assoc($resultset) ) {
      $tasks[] = $rows;
    }
    header("Content-Type: text/csv");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    ExportFile($tasks);
}


function getAllEnrolled($connString) {

    $filename = "enrolled"."_".date('Ymd') . ".csv"; 
    $sql_query = "SELECT * FROM Enrolled";
    $resultset = mysqli_query($connString, $sql_query) or die("database error:". mysqli_error($conn));

    while( $rows = mysqli_fetch_assoc($resultset) ) {
      $tasks[] = $rows;
    }
    header("Content-Type: text/csv");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    ExportFile($tasks);
}
function getAll($connString) {

    $filename = "all_in_one"."_".date('Ymd') . ".csv"; 
    $sql_query = "SELECT * FROM Employee e LEFT JOIN Enrolled en ON e.employee_id = en.employee_id LEFT JOIN Course c ON c.course_name= en.course_name";
    $resultset = mysqli_query($connString, $sql_query) or die("database error:". mysqli_error($conn));

    while( $rows = mysqli_fetch_assoc($resultset) ) {
      $tasks[] = $rows;
    }
    header("Content-Type: text/csv");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    ExportFile($tasks);
}


?>