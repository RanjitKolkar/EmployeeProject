
<?php

if(isset($_GET['download'])){ 
   $add_action = $_GET['download']; 
} 

Class dbObj{
  /* Database connection start */
  var $dbhost = "localhost";
  var $username = "root";
  var $password = "";
  var $dbname = "myEmpl";
  var $conn;

  function getConnstring() {
    $con = mysqli_connect($this->dbhost, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());
    /* check connection */
    if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
    } else {
      $this->conn = $con;
    }
    return $this->conn;
  }

}
  
$tasks = array();
$db = new dbObj();
$connString =  $db->getConnstring();

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

    $filename = "employee".date('Ymd') . ".xls"; 
    $sql_query = "SELECT * FROM Employee";
    $resultset = mysqli_query($connString, $sql_query) or die("database error:". mysqli_error($conn));

    while( $rows = mysqli_fetch_assoc($resultset) ) {
      $tasks[] = $rows;
    }
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    ExportFile($tasks);
}


function getAllCourse($connString) {

    $filename = "course".date('Ymd') . ".xls"; 
    $sql_query = "SELECT * FROM Course";
    $resultset = mysqli_query($connString, $sql_query) or die("database error:". mysqli_error($conn));

    while( $rows = mysqli_fetch_assoc($resultset) ) {
      $tasks[] = $rows;
    }
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    ExportFile($tasks);
}


function getAllEnrolled($connString) {

    $filename = "enrolled".date('Ymd') . ".xls"; 
    $sql_query = "SELECT * FROM Enrolled";
    $resultset = mysqli_query($connString, $sql_query) or die("database error:". mysqli_error($conn));

    while( $rows = mysqli_fetch_assoc($resultset) ) {
      $tasks[] = $rows;
    }
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    ExportFile($tasks);
}
function getAll($connString) {

    $filename = "all_employee".date('Ymd') . ".xls"; 
    $sql_query = "SELECT * FROM Employee e LEFT JOIN Enrolled en ON e.employee_id = en.employee_id LEFT JOIN Course c ON c.course_id= en.course_id";
    $resultset = mysqli_query($connString, $sql_query) or die("database error:". mysqli_error($conn));

    while( $rows = mysqli_fetch_assoc($resultset) ) {
      $tasks[] = $rows;
    }
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    ExportFile($tasks);
}


?>