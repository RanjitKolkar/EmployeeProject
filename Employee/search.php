<?php
include 'dbConn.php';
$searchErr = '';
$employee_details='';
if(isset($_POST['save']))
{
    if(!empty($_POST['search_ID']))
    {
        $search_id = $_POST['search_ID'];
        $stmt = $con->prepare("select * from Employee where employee_id like '$search_id'");
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
        $search_phone = $_POST['search_Rank'];
        $stmt = $con->prepare("select * from Employee where rank like '%$search_Rank%'");
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
      <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Search Employee</label>
          </div>
        <select class="form-select btn-light custom-select" id="inputGroupSelect01" name="emp_search">
          <option value="" disabled selected>Search By</option>
          <option value="id">Employee Id</option>
          <option value="name">Employee Name</option>
          <option value="rank">Employee Rank</option>
        </select>
        <div class="col-sm-2">
      <input class="btn btn-primary" type="submit" name="submit" value="Submit">
      </div>
      </div>
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
            <label class="input-group-text" for="inputGroupSelect01"><?php echo "Enter Employee ".$value;?> </label>
          </div>
          <input type="text" class="form-control" name="<?php echo $searchBy ?>" placeholder="Enter">
        <div class="col-sm-2">
          <button type="submit" name="save" class="btn btn-success">Search</button>
        </div>
        <span class="error" style="color:red;"> <?php echo $searchErr;?> </span>
      </div>
    </form> <?php
}
?>



    <hr>
    <div class="table-responsive border border-warning shadow rounded"> <?php
                 if(!$employee_details)
                 {
                    echo '<tr>No data found</tr>';
                 }
                 else{?> 
        <table class="table table-striped">
        <thead class="thead bg-warning">
          <tr>
            <th>Id</th>
            <th>Employee Name</th>
            <th>rank</th>
          </tr>
        </thead>
        <tbody> <?php
                    foreach($employee_details as $key=>$value)
                    {
                        ?> <tr>
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