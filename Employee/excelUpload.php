<?php include 'admin_header.php';

require('spreadsheet-reader-master/php-excel-reader/excel_reader2.php');
require('spreadsheet-reader-master/SpreadsheetReader.php');
require('dbConn.php');?>
<div class="container mt-2">
            <?php include('toasts.php')?>
        <div class="jumbotron"><?php

function createTableWithFirstRowasheader(){

$query = "CREATE TABLE IF NOT EXISTS $table_name ( id varchar(100),name varchar(100));";
 
     if (mysqli_query($db_conn, $query)) {
        echo "Successfully created";
     } else {
        echo "Table Already Exist";
     }

}

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



    /* For Loop for all sheets */

    for($i=0;$i<$totalSheet;$i++){
     	$Reader->ChangeSheet($i);
		$first_row=1;
		$alreadyInserted=0;

      foreach ($Reader as $Row)

      {		

			
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



      	if($first_row==1){
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

      		
      		// echo " ".$header0." "." ".$header1." "." ".$header2." ";

      		 $query = "CREATE TABLE $table_name ( $header0 varchar(100), $header1 varchar(100),$header2 varchar(100),$header3 varchar(100),$header4 varchar(100),$header5 varchar(100),$header6 varchar(100),$header7 varchar(100),$header8 varchar(100),$header9 varchar(100),$header10 varchar(100),$header11 varchar(100),$header12 varchar(100),$header13 varchar(100),$header14 varchar(100));";
 
		     if (mysqli_query($db_conn, $query)) {
		        echo "Successfully created table";
		        
		     } else {
		     	$alreadyInserted=1;
		        echo "Already Imported";
		     }

      		$first_row=0;
			}
			else if($alreadyInserted==0){
				echo " ".$rowValue0." "." ".$rowValue1." "." ".$rowValue2." <br>";
				echo " ".$header0." "." ".$header1." "." ".$header2." <br>";
						
				// $query = "INSERT INTO $table_name($header0,$header1,$header2,) VALUES( '$rowValue0', '$rowValue1', '$rowValue2');";

				$query = "INSERT INTO $table_name( $header0,  $header1 ,$header2 ,$header3 ,$header4 ,$header5 ,$header6 ,$header7 ,$header8 ,$header9 ,$header10 ,$header11 ,$header12 ,$header13 ,$header14 ) VALUES( '$rowValue0',  '$rowValue1' ,'$rowValue2' ,'$rowValue3' ,'$rowValue4' ,'$rowValue5' ,'$rowValue6' ,'$rowValue7' ,'$rowValue8' ,'$rowValue9' ,'$rowValue10' ,'$rowValue11' ,'$rowValue12' ,'$rowValue13' ,'$rowValue14');";
 
		     if (mysqli_query($db_conn, $query)) {
		        echo "Successfully inserted";
		     } else {
		        echo "failed";
		     }
			}
       }
    }





  }else { 

    die("<br/>Sorry, File type is not allowed. Only .xls file."); 

  }


}

?>

<a href="view.php?view=imported&filename=<?php echo $table_name?>" class="list-group-item list-group-item-action">View from database</a>
</div></div>