<?php include 'admin_header.php';

require('spreadsheet-reader-master/php-excel-reader/excel_reader2.php');
require('spreadsheet-reader-master/SpreadsheetReader.php');
require('dbConn.php');?>
<div class="container mt-2">
            <?php include('toasts.php')?>
        <div class="jumbotron"><?php

// function createTableWithFirstRowasheader(){

// $query_create_new_table = "CREATE TABLE IF NOT EXISTS $table_name ( id varchar(100),name varchar(100));";
 
//      if (mysqli_query_create_new_table($db_conn, $query_create_new_table)) {
//         echo "Successfully created";
//      } else {
//         echo "Table Already Exist";
//      }

// }

if(isset($_POST['Submit'])){


  $mimes = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.oasis.opendocument.spreadsheet'];

  if(in_array($_FILES["file"]["type"],$mimes)){
	// echo basename($_FILES['file']['name']);
	$file_name =basename($_FILES['file']['name']);
    $uploadFilePath = 'uploads/'.$file_name;
	// echo $uploadFilePath;
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);

	$table_name =strtok($file_name, '.');
    $Reader = new SpreadsheetReader($uploadFilePath);	

    $totalSheet = count($Reader->sheets());
    // echo $totalSheet;



    /* For Loop for all sheets */

    for($i=0;$i<$totalSheet;$i++){
     	$Reader->ChangeSheet($i);
		$first_row=1;
		$alreadyInserted=0;
		$count_rows=-1;
		$count_success_rows=1;
		$count_fail_rows=1;

      foreach ($Reader as $Row){		
      	
      		$count_rows++;
			
      		$rowValue0=str_replace(" ","_",$Row[0],$i);
      		$rowValue1=str_replace(" ","_",$Row[1],$i);
      		$rowValue2=str_replace(" ","_",$Row[2],$i);

      		$rowValue3=str_replace(" ","_",$Row[3],$i);
      		$rowValue4=str_replace(" ","_",$Row[4],$i);
      		$rowValue5=str_replace(" ","_",$Row[5],$i);

      		$rowValue6=str_replace(" ","_",$Row[6],$i);
      		$rowValue7=str_replace(" ","_",$Row[7],$i);
      		$rowValue8=str_replace(" ","_",$Row[8],$i);

      		$rowValue9=str_replace(" ","_",$Row[9],$i);
      		$rowValue10=str_replace(" ","_",$Row[10],$i);
      		$rowValue11=str_replace(" ","_",$Row[11],$i);

      		$rowValue12=str_replace(" ","_",$Row[12],$i);
      		$rowValue13=str_replace(" ","_",$Row[13],$i);
      		$rowValue14=str_replace(" ","_",$Row[14],$i);

      		$rowValue15=str_replace(" ","_",$Row[15],$i);
      		$rowValue16=str_replace(" ","_",$Row[16],$i);
      		$rowValue17=str_replace(" ","_",$Row[17],$i);

      		$rowValue18=str_replace(" ","_",$Row[18],$i);
      		$rowValue19=str_replace(" ","_",$Row[19],$i);
      		$rowValue20=str_replace(" ","_",$Row[20],$i);

      		$rowValue21=str_replace(" ","_",$Row[21],$i);
      		$rowValue22=str_replace(" ","_",$Row[22],$i);
      		$rowValue23=str_replace(" ","_",$Row[23],$i);

      		$rowValue24=str_replace(" ","_",$Row[24],$i);
      		$rowValue25=str_replace(" ","_",$Row[25],$i);
      		$rowValue26=str_replace(" ","_",$Row[26],$i);

      		$rowValue27=str_replace(" ","_",$Row[27],$i);
      		$rowValue28=str_replace(" ","_",$Row[28],$i);
      		$rowValue29=str_replace(" ","_",$Row[29],$i);
      		$rowValue30=str_replace(" ","_",$Row[30],$i);

      		$rowValue31=str_replace(" ","_",$Row[31],$i);
      		$rowValue32=str_replace(" ","_",$Row[32],$i);
      		$rowValue33=str_replace(" ","_",$Row[33],$i);
      		$rowValue34=str_replace(" ","_",$Row[34],$i);
      		$rowValue35=str_replace(" ","_",$Row[35],$i);



      	if($first_row==1){
      		// echo $first_row."----". "<br>";
      		$header0=str_replace(" ","_",$Row[0],$i);
      		$header1=str_replace(" ","_",$Row[1],$i);
      		$header2=str_replace(" ","_",$Row[2],$i);

      		$header3=str_replace(" ","_",$Row[3],$i);
      		$header4=str_replace(" ","_",$Row[4],$i);
      		$header5=str_replace(" ","_",$Row[5],$i);

      		$header6=str_replace(" ","_",$Row[6],$i);
      		$header7=str_replace(" ","_",$Row[7],$i);
      		$header8=str_replace(" ","_",$Row[8],$i);

      		$header9=str_replace(" ","_",$Row[9],$i);
      		$header10=str_replace(" ","_",$Row[10],$i);
      		$header11=str_replace(" ","_",$Row[11],$i);

      		$header12=str_replace(" ","_",$Row[12],$i);
      		$header13=str_replace(" ","_",$Row[13],$i);
      		$header14=str_replace(" ","_",$Row[14],$i);

      		$header15=str_replace(" ","_",$Row[15],$i);
      		$header16=str_replace(" ","_",$Row[16],$i);
      		$header17=str_replace(" ","_",$Row[17],$i);

      		$header18=str_replace(" ","_",$Row[18],$i);
      		$header19=str_replace(" ","_",$Row[19],$i);
      		$header20=str_replace(" ","_",$Row[20],$i);

      		$header21=str_replace(" ","_",$Row[21],$i);
      		$header22=str_replace(" ","_",$Row[22],$i);
      		$header23=str_replace(" ","_",$Row[23],$i);

      		$header24=str_replace(" ","_",$Row[24],$i);
      		$header25=str_replace(" ","_",$Row[25],$i);
      		$header26=str_replace(" ","_",$Row[26],$i);

      		$header27=str_replace(" ","_",$Row[27],$i);
      		$header28=str_replace(" ","_",$Row[28],$i);
      		$header29=str_replace(" ","_",$Row[29],$i);
      		$header30=str_replace(" ","_",$Row[30],$i);
      		$header31=str_replace(" ","_",$Row[31],$i);
      		$header32=str_replace(" ","_",$Row[32],$i);
      		$header33=str_replace(" ","_",$Row[33],$i);

      		$header34=str_replace(" ","_",$Row[34],$i);
      		$header35=str_replace(" ","_",$Row[35],$i);


     		
      		// echo " ".$header0." "." ".$header1." "." ".$header2." ".$header3." "." ".$header4." "." ".$header5." ".$header6." "." ".$header7." "." ".$header8." ".$header9." ".$header10." "." ".$header11." "." ".$header12." ".$header13." "." ".$header14." "." ".$header15." ".$header16." "." ".$header17." "." ".$header18." ".$header19." ".$header20." "." ".$header21." "." ".$header22." ".$header23." "." ".$header24." "." ".$header25." ".$header26." "." ".$header27." "." ".$header28." ".$header29." ".$header30." "." ".$header31." "." ".$header32." ".$header33." "." ".$header34." "." ".$header35." "."<br><br>";



      		 $query_create_new_table = "CREATE TABLE $table_name ( $header0 varchar(100), $header1 int(100),$header2 varchar(100),$header3 varchar(100),$header4 varchar(100),$header5 varchar(100),$header6 varchar(100),$header7 varchar(100),$header8 varchar(100),$header9 varchar(100),$header10 varchar(100),$header11 varchar(100),$header12 varchar(100),$header13 varchar(100),$header14 varchar(100),$header15 varchar(100),$header16 varchar(100),$header17 varchar(100),$header18 varchar(100),$header19 varchar(100),$header20 varchar(100),$header21 varchar(100),$header22 varchar(100),$header23 varchar(100),$header24 varchar(100),$header25 varchar(100),$header26 varchar(100),$header27 varchar(100),$header28 varchar(100),$header29 varchar(100),$header30 varchar(100),$header31 varchar(100),$header32 varchar(100),$header33 varchar(100),$header34 varchar(100),$header35 varchar(100));";

 			mysqli_query($db_conn, $query_create_new_table);
    		$error_message = mysqli_error($db_conn);
		      if($error_message == ""){
		       echo "<br>query_create_new_table Success: ".$error_message;
		        
		    	 } else {
		     	// $alreadyInserted=1;
		       echo "<br>query_create_new_table Failed: ".$error_message;
		     }

      			$first_row=0;
			}
			else{

						
      		// echo $first_row."-------------". "<br>" ;
				// $query_create_new_table = "INSERT INTO $table_name($header0,$header1,$header2,) VALUES( '$rowValue0', '$rowValue1', '$rowValue2');";

				$query_insert_new_table = "INSERT INTO $table_name( $header0,  $header1 ,$header2 ,$header3 ,$header4 ,$header5 ,$header6 ,$header7 ,$header8 ,$header9 ,$header10 ,$header11 ,$header12 ,$header13 ,$header14,$header15 ,$header16 ,$header17 ,$header18 ,$header19 ,$header20 ,$header21 ,$header22 ,$header23 ,$header24,$header25 ,$header26 ,$header27 ,$header28 ,$header29 ,$header30,$header31 ,$header32 ,$header33 ,$header34,$header35 ) VALUES( '$rowValue0',  '$rowValue1' ,'$rowValue2' ,'$rowValue3' ,'$rowValue4' ,'$rowValue5' ,'$rowValue6' ,'$rowValue7' ,'$rowValue8' ,'$rowValue9' ,'$rowValue10' ,'$rowValue11' ,'$rowValue12' ,'$rowValue13' ,'$rowValue14','$rowValue15' ,'$rowValue16' ,'$rowValue17' ,'$rowValue18' ,'$rowValue19' ,'$rowValue20','$rowValue21' ,'$rowValue22' ,'$rowValue23' ,'$rowValue24' ,'$rowValue25' ,'$rowValue26' ,'$rowValue27' ,'$rowValue28' ,'$rowValue29' ,'$rowValue30','$rowValue31' ,'$rowValue32' ,'$rowValue33' ,'$rowValue34','$rowValue35');";
			mysqli_query($db_conn, $query_insert_new_table);
 			$error_message = mysqli_error($db_conn);
		     if (mysqli_query($db_conn, $query_insert_new_table)) {
		        echo "<br>Row Success insertion: ".$count_rows;
		     	$count_success_rows++;

		     } else {
		       // echo "query_insert_new_table failed: ".$error_message. "<br>" ;
		     	echo "<br>Failed row: ".$count_rows.": ".$rowValue0." ".$rowValue1." ".$rowValue2." ".$rowValue3." . . . . . ".$error_message;
		     	$count_fail_rows++;
		     }
		     	//12 entries
				 $query_insert_Emp ="INSERT INTO Employee(rank,employee_id,name,phone,sex,general_management,sub_management,location_of_work,nationality,section,category,from_needs_list) VALUES ( '$rowValue0',  '$rowValue1' ,'$rowValue2' ,'$rowValue3' ,'$rowValue4' ,'$rowValue5' ,'$rowValue6' ,'$rowValue7' ,'$rowValue8' ,'$rowValue9' ,'$rowValue10' ,'$rowValue11' );";

		      //13
		      $query_insert_Course ="INSERT INTO Course(course_name, contract_location,start_date, end_date, course_specialization, course_plan, no_of_days, hours_per_day, total_hours, instructor_1, hours_instructor_1, instructor_2,hours_instructor_2) VALUES ( '$rowValue12' ,'$rowValue13' ,'$rowValue14','$rowValue15' ,'$rowValue16' ,'$rowValue17' ,'$rowValue18' ,'$rowValue19' ,'$rowValue20','$rowValue21' ,'$rowValue22' ,'$rowValue23','$rowValue24' );";
	
// drop table test5;delete from Employee;Delete from Course;
		      //12
		       $query_insert_Enroll ="INSERT INTO `Enrolled`( `employee_id`, `course_name`, `exam_result`, `pass_or_fail`, `notes`, `date_of_resit`, `resit_result`, `pass_fail_resit`, `instructor_grade`, `course_grade`, `instructor_self_grade`, `direct_manager_grade`, `work_test`) VALUES( '$rowValue1' ,'$rowValue12' ,'$rowValue25' ,'$rowValue26' ,'$rowValue27' ,'$rowValue28' ,'$rowValue29' ,'$rowValue30','$rowValue31' ,'$rowValue32' ,'$rowValue33' ,'$rowValue34','$rowValue35');";
	
			mysqli_query($db_conn, $query_insert_Emp);

		   	$error_message = mysqli_error($db_conn);
		     if (mysqli_query($db_conn, $query_insert_Emp)) {
		        echo "<br>querySuccess: query_insert_Emp ".$error_message. "<br>";
		     } else {
		       echo "<br>queryFailed: query_insert_Emp ".$error_message. "<br>" ;
		     }


			mysqli_query($db_conn, $query_insert_Course);
		      	$error_message = mysqli_error($db_conn);
		     if (mysqli_query($db_conn, $query_insert_Course)) {
		        echo "<br>querySuccess:query_insert_Course ".$error_message. "<br>";
		     } else {
		       echo "<br>queryFailed:query_insert_Course ".$error_message. "<br>" ;
		     }

		     
			mysqli_query($db_conn, $query_insert_Enroll);
		      	$error_message = mysqli_error($db_conn);
		     if (mysqli_query($db_conn, $query_insert_Emp)) {
		        echo "<br>querySuccess: query_insert_Enroll ".$error_message. "<br>";
		     } else {
		       echo "<br>queryFailed: query_insert_Enroll ".$error_message. "<br>" ;
		     }


			}
       	}//End of For rows

       	echo "<br><br>-----------------------------Report -----------------------------";
       	echo "<br>Total rows in a sheet: ".$count_rows."";
       	echo "<br>Total successful insertion: ".$count_success_rows."";
       	echo "<br>Total failed insertion: ".$count_fail_rows."";

    }//End of For sheets





  } //End of seconf IF types
  else { 

    die("<br/>Sorry, File type is not allowed. Only .xls file."); 

  }


} //End of first IF

?>

<!-- <a href="view.php?view=imported&filename=<?php echo $table_name?>" class="list-group-item list-group-item-action">View from database</a> -->
</div></div>