<?php
include 'dbConn.php';
$searchErr = '';
$employee_details='';
if(isset($_POST['save']))
{
    if(!empty($_POST['search_ID']))
    {
        $search_id = $_POST['search_ID'];
        $stmt = $con->prepare("select * from employee where employee_id like '%$search_id%'");
        $stmt->execute();
        $employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // print_r($employee_details);
         
    }
        if(!empty($_POST['search_Name']))
    {

        $search_name = $_POST['search_Name'];
        $stmt = $con->prepare("select * from employee where name like '%$search_name%'");
        $stmt->execute();
        $employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // print_r($employee_details);
         
    }
        if(!empty($_POST['search_Phone']))
    {
        $search_phone = $_POST['search_Phone'];
        $stmt = $con->prepare("select * from employee where phone_number like '%$search_phone%'");
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

<?php include('header.php') ?> 

<div class="container mt-2">
  <div class="jumbotron">
    <form action="" method="post" class="mb-3">
      <div class="select-block">
        <select class="form-select btn-light" name="emp_search">
          <option value="" disabled selected>Search By</option>
          <option value="id">Employee Id</option>
          <option value="name">Employee Name</option>
          <option value="phone">Employee Phone Number</option>
        </select>
      </div>
      <br />
      <input class="btn btn-primary" type="submit" name="submit" value="Submit">
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
                case "phone":
                    displaySearch($selected,"search_Phone",$searchErr);
                break;
              
    } 


        } else {
          echo 'Please select the value.';
        }
      }
    ?> 


    <?php
function displaySearch($value,$searchBy,$searchErr) {
  echo "Enter Employee ".$value;?> 

  <form class="form-horizontal" action="#" method="post">
      <div class="form-group">
        <div class="col-sm-6">
          <input type="text" class="form-control" name="<?php echo $searchBy ?>" placeholder="Enter">
        </div>
        <br>
        <div class="col-sm-2">
          <button type="submit" name="save" class="btn btn-outline-success">Search</button>
        </div>
        <span class="error" style="color:red;"> <?php echo $searchErr;?> </span>
      </div>
    </form> <?php
}
?>



    <hr>
    <div class="table-responsive shadow-sm rounded"> <?php
                 if(!$employee_details)
                 {
                    echo '<tr>No data found</tr>';
                 }
                 else{?> 
        <table class="table table-hover">
        <thead class="thead bg-primary">
          <tr>
            <th>Id</th>
            <th>Employee Name</th>
            <th>Phone No</th>
          </tr>
        </thead>
        <tbody> <?php
                    foreach($employee_details as $key=>$value)
                    {
                        ?> <tr>
            <td> <?php echo $key+1;?> </td>
            <td> <?php echo $value['name'];?> </td>
            <td> <?php echo $value['phone_number'];?> </td>
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