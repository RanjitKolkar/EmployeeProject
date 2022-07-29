<?php 
include 'dbConn.php';
if(count($_POST)>0){
   $name=$_POST['name'];   
   $rank=$_POST['rank'];
   $employee_id=(int)$_POST['employee_id'];
   echo $employee_id;

$query = "UPDATE Employee set name= '$name', rank='$rank' WHERE employee_id='$employee_id'";

 if (mysqli_query($db_conn, $query)) {
    $msg=1;

 } else {
    $msg=4;
 }

}

header ("Location: view.php?view=employee&msg=".$msg."");

?>