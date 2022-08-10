<?php 
include 'dbConn.php';


if(isset($_GET['update'])){ 
   $update_action = $_GET['update']; 
} 



// --------- Update Employee into DB
if($update_action == 'employee'){
     $employee_id = $_POST['employee_id'];
     $name = $_POST['name'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];

     $rank = $_POST['rank'];
     $nationality = $_POST['nationality'];
     $classification = $_POST['classification'];

     $general_management = $_POST['general_management'];
     $sub_management = $_POST['sub_management'];
     $location_of_work = $_POST['location_of_work'];
      $sex = $_POST['sex'];
     $section = $_POST['section'];
     $category = $_POST['category'];
     $from_needs_list = $_POST['from_needs_list'];

   $query = "UPDATE Employee set employee_id = '$employee_id',name = '$name',phone = '$phone',
     email = '$email', rank = '$rank',nationality = '$nationality', classification = '$classification', general_management = '$general_management',sub_management = '$sub_management',location_of_work = '$location_of_work',sex = '$sex', section = '$section',category = '$category',from_needs_list = '$from_needs_list' WHERE employee_id='$employee_id'";
  
     $result=mysqli_query($db_conn, $query);
     $error_message = mysqli_error($db_conn);

    if($error_message == ""){
        echo "No error related to SQL query.";
    }else{
        echo "Query Failed: ".$error_message;
    }
    mysqli_close($db_conn);
}
// --------- Update Employee into DB
if($update_action == 'course'){
     $course_id = $_POST['course_id'];
     $course_name = $_POST['course_name'];
     $course_specialization = $_POST['course_specialization'];

     $start_date = $_POST['start_date'];
     $end_date = $_POST['end_date'];
     $quarter = $_POST['quarter'];
     $month = $_POST['month'];
     $year = $_POST['year'];

     $course_plan = $_POST['course_plan'];
     $no_of_days = $_POST['no_of_days'];
     $hours_per_day = $_POST['hours_per_day'];
     $total_hours = $_POST['total_hours'];

     $contract_location = $_POST['contract_location'];
     $instructor_1 = $_POST['instructor_1'];
     $hours_instructor_1 = $_POST['hours_instructor_1'];
     $instructor_1 = $_POST['instructor_1'];
     $hours_instructor_2 = $_POST['hours_instructor_2'];




   $query = "UPDATE Course set course_id = '$course_id',course_name = '$course_name',course_specialization = '$course_specialization',start_date = '$start_date', end_date = '$end_date',quarter = '$quarter', month = '$month', year = '$year',sub_management = '$sub_management',no_of_days = '$no_of_days',hours_per_day = '$hours_per_day', total_hours = '$total_hours',contract_location = '$contract_location',instructor_1 = '$instructor_1',hours_instructor_1 = '$hours_instructor_1',instructor_2 = '$instructor_2',hours_instructor_2 = '$hours_instructor_2' WHERE course_id='$course_id'";
  
     $result=mysqli_query($db_conn, $query);
     $error_message = mysqli_error($db_conn);

    if($error_message == ""){
        echo "No error related to SQL query.";
    }else{
        echo "Query Failed: ".$error_message;
    }
    mysqli_close($db_conn);
}

// header ("Location: adminhome.php?msg=".$msg."");


?>