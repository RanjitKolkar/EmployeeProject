<?php
// Load the database configuration file
include_once 'dbConn.php';

if(isset($_POST['importSubmit'])){
    
    // Allowed mime types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);
            
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data
                $name   = $line[0];
                $email  = $line[1];
                $phone  = $line[2];
                $status = $line[3];
                echo $status;


                // Check whether member already exists in the database with the same email
                $prevQuery = "SELECT id FROM members WHERE email = '".$line[1]."'";
                $prevResult = $db_conn->query($prevQuery);
               if ($prevResult) {
                  echo("Success description: " . $db_conn -> error);
                }
                else echo("Error");
                if($prevResult->num_rows > 0){
                    // Update member data in the database
                    if($db_conn->query("UPDATE members SET name = '".$name."', phone = '".$phone."', status = '".$status."', modified = NOW() WHERE email = '".$email."'")){

                      echo("Error description1: " . $db_conn -> error);
                    }
                    else  echo("Error description1: " . $db_conn -> error);

                }else{
                    // Insert member data in the database
                   if($db_conn->query("INSERT INTO members (name, email, phone, created, modified, status) VALUES ('".$name."', '".$email."', '".$phone."', NOW(), NOW(), '".$status."')")){
                      echo("Success description2: " . $db_conn -> error);
                   }
                   else  echo("Error description2: " . $db_conn -> error);
                }
            }
            
            // Close opened CSV file
            fclose($csvFile);
            
            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}

// // Redirect to the listing page
// header("Location: index.php".$qstring);