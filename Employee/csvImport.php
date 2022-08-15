<?php include 'admin_header.php';

require('spreadsheet-reader-master/php-excel-reader/excel_reader2.php');
require('spreadsheet-reader-master/SpreadsheetReader.php');
require('dbConn.php');?>
<div class="container mt-2">
            <?php include('toasts.php')?>
        <div class="jumbotron"><?php

// function createTableWithFirstlineasheader(){

// $query_create_new_table = "CREATE TABLE IF NOT EXISTS $table_name ( id varchar(100),name varchar(100));";
 
//      if (mysqli_query_create_new_table($db_conn, $query_create_new_table)) {
//         echo "Successfully created";
//      } else {
//         echo "Table Already Exist";
//      }

// }

if(isset($_POST['Submit']))
{

// Allowed mime types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');


    // echo $totalSheet;
// Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes))
    {
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name']))
        {
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);
			$count_rows=0;
			$count_success_rows=0;
			$count_fail_rows=0;
				$count_lines=0;

	 		// Parse data from CSV file line by line
	        while(($line = fgetcsv($csvFile)) !== FALSE)
	        {
	            // Get line data
	  	
	  			$count_lines++;
			
      		
  			// echo "<br>".$line[0];
  			// echo "<br>".$line[1];      		
  			// echo "<br>".$line[2];
  			// echo "<br>".$line[3];      		
  			// echo "<br>".$line[4];
  			// echo "<br>".$line[5];      		
  			// echo "<br>".$line[6];
  			// echo "<br>".$line[7];      		
  			// echo "<br>".$line[8];
  			// echo "<br>".$line[9];      		
  			// echo "<br>".$line[10];      		
  			
  			// echo "<br>".$line[11];      		
  			// echo "<br>".$line[12];
  			// echo "<br>".$line[13];      		
  			// echo "<br>".$line[14];
  			// echo "<br>".$line[15];      		
  			// echo "<br>".$line[16];
  			// echo "<br>".$line[17];      		
  			// echo "<br>".$line[18];
  			// echo "<br>".$line[19];      		
  			// echo "<br>".$line[20];

			$query_insert_new_table = "INSERT INTO `Imported`(`rank`, `employee_ID`, `name`, `mobile_number`, `gender`, `general_management`, `sub_management`, `location_of_work`, `nationality`, `section`, `category`, `from_needs_list`, `course_name`, `contract_location`, `start_date`, `end_date`, `course_specialization`, `course_plan`, `days`, `hourse_per_day`, `total_hours`, `instructor_1`, `hours_instructor1`, `instructor_2`, `hours_instructor2`, `exam_result`, `pass_fail`, `notes`, `date_of_resit`, `resit_result`, `pass_fail_resit`, `instructor_grade`, `course_grade`, `instructor_self_grade`, `direct_manager_grade`, `work_test`) VALUES ('$line[0]','$line[1]',$line[2],'$line[3]','$line[4]','$line[5]','$line[6]','$line[7]','$line[8]','$line[9]','$line[10]','$line[11]','$line[12]','$line[13]','$line[14]','$line[15]','$line[16]','$line[17]','$line[18]','$line[19]','$line[20]','$line[21]','$line[22]','$line[23]','$line[24]','$line[25]','$line[26]','$line[27]','$line[28]','$line[29]','$line[30]','$line[31]','$line[32]','$line[33]','$line[34]','$line[35]');";

				mysqli_query($db_conn, $query_insert_new_table);
			 	$error_message = mysqli_error($db_conn);
				if($error_message == "")
				{
			        echo "<br>Row Success insertion: <br>".$count_rows;
			     	$count_success_rows++;

			     } else 
			     {
			       echo "<br>query_insert_new_table failed: <br>".$error_message;
			     	$count_fail_rows++;
			     }

			     //12 entries
				 $query_insert_Emp ="INSERT INTO Employee(rank,employee_id,name,phone,sex,general_management,sub_management,location_of_work,nationality,section,category,from_needs_list) VALUES ( '$line[0]',  '$line[1]' ,'$line[2]' ,'$line[3]' ,'$line[4]' ,'$line[5]' ,'$line[6]' ,'$line[7]' ,'$line[8]' ,'$line[9]' ,'$line[10]' ,'$line[11]' );";

		      		//13
		     	 $query_insert_Course ="INSERT INTO Course(course_name, contract_location,start_date, end_date, course_specialization, course_plan, no_of_days, hours_per_day, total_hours, instructor_1, hours_instructor_1, instructor_2,hours_instructor_2) VALUES ( '$line[12]' ,'$line[13]' ,'$line[14]','$line[15]' ,'$line[16]' ,'$line[17]' ,'$line[18]' ,'$line[19]' ,'$line[20]','$line[21]' ,'$line[22]' ,'$line[23]','$line[24]' );";
	
					
		      		//12
		      	 $query_insert_Enroll ="INSERT INTO `Enrolled`( `employee_id`, `course_name`, `exam_result`, `pass_or_fail`, `notes`, `date_of_resit`, `resit_result`, `pass_fail_resit`, `instructor_grade`, `course_grade`, `instructor_self_grade`, `direct_manager_grade`, `work_test`) VALUES( '$line[1]' ,'$line[12]' ,'$line[25]' ,'$line[26]' ,'$line[27]' ,'$line[28]' ,'$line[29]' ,'$line[30]','$line[31]' ,'$line[32]' ,'$line[33]' ,'$line[34]','$line[35]');";
	
				mysqli_query($db_conn, $query_insert_Emp);

			   	$error_message = mysqli_error($db_conn);
			     if (mysqli_query($db_conn, $query_insert_Emp)) {
			        echo "<br> query_insert_Emp Success ".$error_message. "<br>";
			     } else {
			       echo "<br> query_insert_Emp Fail ".$error_message. "<br>" ;
			     }


				mysqli_query($db_conn, $query_insert_Course);
			      	$error_message = mysqli_error($db_conn);
			     if (mysqli_query($db_conn, $query_insert_Course)) {
			        echo "<br>Success:query_insert_Course ".$error_message. "<br>";
			     } else {
			       echo "<br>Fail:query_insert_Course ".$error_message. "<br>" ;
			     }

			     
				mysqli_query($db_conn, $query_insert_Enroll);
			      	$error_message = mysqli_error($db_conn);
			     if (mysqli_query($db_conn, $query_insert_Emp)) {
			        echo "<br>Success: query_insert_Enroll ".$error_message. "<br>";
			     } else {
			       echo "<br>Fail: query_insert_Enroll ".$error_message. "<br>" ;
			     }


		  } // End of While
 	echo "<br><br>-----------------------------Report -----------------------------";
       	echo "<br>Total rows in a sheet: ".$count_lines."";
       	echo "<br>Total successful insertion: ".$count_success_rows."";
       	echo "<br>Total failed insertion: ".$count_fail_rows."";

		} 
	}// end of Second if
}// end of first if

?>

<!-- <a href="view.php?view=imported&filename=<?php echo $table_name?>" class="list-group-item list-group-item-action">View from database</a> -->
</div></div>