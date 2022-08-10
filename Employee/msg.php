<?php
// foo.php
$errors = array (
    1 => "Record Has Been Successfully Inserted",
    2 => "Record Has Been Successfully Updated",
    3 => "Record Has Been Successfully Deleted",
    4 => "MySQL Database Error. Please Check your query",
    5 => "Successfully Logged In",
    6 => "Username and Passwords are not correct",
    7 => "Course has been Withdrawn Successfully",
    8 => "Record Has Been Successfully Enrolled",
    9 => "Welcome Employee",
    10 => "You have not enrolled to the course yet. Please Enroll to the course first",
    11 => "language Changed Successfully",
);

$error_id = isset($_GET['msg']) ? (int)$_GET['msg'] : 0;

if ($error_id != 0 && in_array($error_id, [1,2,3,4,5,6,7,8,9,10,11])) {
    echo $errors[$error_id];
}else{
    header ("Location: toasts.php?msg=".$msg."");
}
?>