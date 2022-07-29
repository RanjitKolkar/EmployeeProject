<?php  include 'dbConn.php';

if(isset($_GET['insert'])){ 
   $add_action = $_GET['insert']; 
} 



// --------- Insert Employee into DB
if($add_action == 'employee'){
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
 
     $query = "INSERT INTO Employee (employee_id,name, phone, email, rank, nationality, sex, classification, general_management, sub_management, location_of_work, section, category, from_needs_list)
     VALUES ('$employee_id','$name', '$phone', '$email', '$rank', '$nationality', '$sex', '$classification', '$general_management', '$sub_management', '$location_of_work', '$section', '$category', '$from_needs_list')";
 
     if (mysqli_query($db_conn, $query)) {
        $msg = 1;
     } else {
        $msg = 4;
     }

  header ("Location: adminhhome.php?msg=".$msg."");
}
// --------- End Insert Employee into DB

// --------- Insert Course into DB
if($add_action == 'course'){
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
     $instructor_2 = $_POST['instructor_2'];
     
     $query = "INSERT INTO Course(course_name, start_date, end_date, quarter, month, year, course_specialization, course_plan, no_of_days, hours_per_day, total_hours, contract_location, instructor_1, instructor_2) VALUES ( '$course_name', '$start_date', '$end_date', '$quarter', '$month', '$year', '$course_specialization', '$course_plan', '$no_of_days', '$hours_per_day', '$total_hours', '$contract_location', '$instructor_1', '$instructor_2')";
 
     if (mysqli_query($db_conn, $query)) {
        $msg = 1;
     } else {
        $msg = 4;
     }

  header ("Location: adminhhome.php?msg=".$msg."");
}
// --------- End Insert Course into DB



?>