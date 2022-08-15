<?php
include 'dbConn.php';
$searchErr = '';
$employee_details='';
if(isset($_POST['save']))
{
    if(!empty($_POST['search_ID']))
    {
        $search_id = $_POST['search_ID'];
        $stmt = $con->prepare("select * from Employee where employee_id like '%$search_id%'");
        $stmt->execute();
        $employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // print_r($employee_details);
         
    }
        if(!empty($_POST['search_Name']))
    {

        $search_name = $_POST['search_Name'];
        $stmt = $con->prepare("select * from Employee where name like '%$search_name%'");
        $stmt->execute();
        $employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // print_r($employee_details);
         
    }
        if(!empty($_POST['search_Rank']))
    {
        $search_rank = $_POST['search_Rank'];
        $stmt = $con->prepare("select * from Employee where rank like '%$search_rank%'");
        $stmt->execute();
        $employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //print_r($employee_details);
         
    }
    else
    {
        $searchErr = "Please enter the information";
    }





}
 
?> 

<?php include('admin_header.php') ?> 

<div class="container mt-2">
    <?php
include 'toasts.php';?>
  <div class="jumbotron">
    
    <h3><?php echo$language['Search the employee to be enrolled'];?></h3>

<hr>
    <form action="" method="post" class="mb-3">
      <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01"><?php echo $language['Search_Employee'];?></label>
          </div>
        <select class="form-select btn-light custom-select" id="inputGroupSelect01" name="emp_search">
          <option value="" disabled selected><?php echo $language['Search_by'];?></option>
          <option value="id"><?php echo $language['Employee ID'];?></option>
          <option value="name"><?php echo $language['Name'];?></option>
          <option value="rank"><?php echo $language['Rank'];?></option>
        </select>
      </div>
      <input class="btn shadow btn-primary" type="submit" name="submit" value=<?php echo $language['Submit'];?>>
      <hr>
    </form> <?php

      if(isset($_POST['submit'])){
        if(!empty($_POST['emp_search'])) {
           $selected = $_POST['emp_search'];

              switch ($selected) {
                case "id":
                        displaySearch($selected,"search_ID",$searchErr);
                break;
                case "name":
                    displaySearch($selected,"search_Name",$searchErr);
                break;
                case "rank":
                    displaySearch($selected,"search_Rank",$searchErr);
                break;
              
    } 


        } else {
          echo 'Please select the value.';
        }
      }
    ?> 


    <?php
function displaySearch($value,$searchBy,$searchErr) {
  ?> 

  <form class="form-horizontal" action="#" method="post">
      <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01"><?php echo "Enter Employee ".$value;?></label>
          </div>
          <input type="text" class="form-control" name="<?php echo $searchBy ?>" placeholder="<?php echo "Enter Employee ".$value;?>">
        </div>
          <button type="submit" name="save" class="btn shadow btn-success">Search</button>     
        <span class="error" style="color:red;"> <?php echo $searchErr;?> </span>
     
    </form> <?php
}

function isEnrolled($employee_id,$db_conn) {

$query="select * from Enrolled where employee_id='$employee_id'"; // Fetch all the data from the table customers
$result=mysqli_query($db_conn,$query);
if ($result->num_rows > 0):;
return 1;
else:return 0;
endif; 

               mysqli_free_result($result); 
}


?>

    <hr>
    <div class="table-responsive shadow-sm rounded"> <?php
                 if(!$employee_details)
                 {
                    echo '<tr>'.$language ['No_data_found'].'</tr>';
                 }
                 else{?> 
        <table class="table border border-warning table-striped">
        <thead class="thead bg-warning">
          <tr>
            <th>Action</th>
            <th>Id</th>
            <th>Employee Name</th>
            <th>rank</th>
          </tr>
        </thead>
        <tbody> <?php
                    foreach($employee_details as $key=>$value)
                    {
    ?> <tr>
              <td> <?php 
                    if(isEnrolled($value['employee_id'],$db_conn))
                    {?> 
                        
                        <!-- IF Enrolled -->
                    <a  class="btn btn-secondary">Enrolled</a>
                    <a href="edit.php?employee_id=<?php echo $value['employee_id'];?>&action=update_results" class="btn btn-success">Update results</a>
<?php }else {    ?>     

                        <!-- IF NOT Enrolled -->
                    <a href="enroll-process.php?employee_id=<?php echo $value['employee_id'];?>&employee_name=<?php echo $value['name'];?>" class="btn btn-primary">Enroll</a>
<?php }?>
                    
                    
                </td>
            <td> <?php echo $value['employee_id'];?> </td>
            <td> <?php echo $value['name'];?> </td>
            <td> <?php echo $value['rank'];?> </td>
          </tr> <?php
                    }
                     
                 }
                ?> 
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>