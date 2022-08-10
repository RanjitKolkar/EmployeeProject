<?php
include 'dbConn.php'; include('header.php');
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



<div class="container mt-2">
  <div class="jumbotron">
    <form action="" method="post" class="mb-3">
      <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01"><?php echo $language['Search_Employee']?></label>
          </div>
        <select class="form-select btn-light custom-select" id="inputGroupSelect01" name="emp_search">
          <option value="" disabled selected><?php echo $language['Search_by']?></option>
          <option value="id"><?php echo $language['Employee ID']?></option>
          <option value="name"><?php echo $language['Name']?></option>
          <option value="rank"><?php echo $language['Rank']?></option>
        </select>
        <div class="col-sm-2">
      <input class="btn btn-primary" type="submit" name="submit" value="<?php echo $language['Submit']?>">
      </div>
      </div>
      <hr>
    </form> <?php

      if(isset($_POST['submit'])){
        if(!empty($_POST['emp_search'])) {
           $selected = $_POST['emp_search'];

              switch ($selected) {
                case "id":
                        displaySearch($selected,"search_ID",$searchErr, $language['Enter_Employee'],$language['Search']);
                break;
                case "name":
                    displaySearch($selected,"search_Name",$searchErr, $language['Enter_Employee'],$language['Search']);
                break;
                case "rank":
                    displaySearch($selected,"search_Rank",$searchErr, $language['Enter_Employee'],$language['Search']);
                break;
              
    } 


        } else {
          echo 'Please select the value.';
        }
      }
    ?> 


    <?php

   
function displaySearch($value,$searchBy,$searchErr,$enterEmployeeText,$searchtext) {
?> 

  <form class="form-horizontal" action="#" method="post">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01"><?php echo "".$enterEmployeeText.$value;?> </label>
          </div>
          <input type="text" class="form-control" name="<?php echo $searchBy ?>" placeholder="Enter">
        <div class="col-sm-2">
          <button type="submit" name="save" class="btn btn-success"><?php echo $searchtext;?></button>
        </div>
        <span class="error" style="color:red;"> <?php echo $searchErr;?> </span>
      </div>
    </form> <?php
}
?>



    <hr>
    <div class="table-responsive shadow rounded"> <?php
                 if(!$employee_details)
                 {
                    echo '<tr>'.$language['No_data_found'].'</tr>';
                 }
                 else{?> 
      
        <table class="table border border-warning table-striped">
          <thead class="thead bg-warning">  
          <tr>
              <th scope="col"><?php echo $language['Employee ID']?></th>
              <th scope="col"><?php echo $language['Name']?></th>
              <th scope="col"><?php echo $language['Phone']?></th>
              <th scope="col"><?php echo $language['Email']?></th>

              <th scope="col"><?php echo $language['Rank']?></th>
              <th scope="col"><?php echo $language['Nationality']?></th>
              <th scope="col"><?php echo $language['Sex']?></th>
              <th scope="col"><?php echo $language['Classification']?></th>

              <th scope="col"><?php echo $language['General Management']?> </th>
              <th scope="col"><?php echo $language['Sub Management']?> </th>
              <th scope="col"><?php echo $language['Location of the work']?></th>
              <th scope="col"><?php echo $language['Section']?></th>

              <th scope="col"><?php echo $language['Category']?></th>
              <th scope="col"><?php echo $language['Needs List']?> </th>
          </tr>
        </thead>
        <tbody> <?php
                    foreach($employee_details as $key=>$value)
                    {
                        ?> <tr>
            <td> <?php echo $value['employee_id'];?> </td>
            <td> <?php echo $value['name'];?> </td>
            <td> <?php echo $value['phone'];?> </td>
            <td> <?php echo $value['email'];?> </td>

            <td> <?php echo $value['rank'];?> </td>
            <td> <?php echo $value['nationality'];?> </td>
            <td> <?php echo $value['sex'];?> </td>
            <td> <?php echo $value['classification'];?> </td>

            <td> <?php echo $value['general_management'];?> </td>
            <td> <?php echo $value['sub_management'];?> </td>
            <td> <?php echo $value['location_of_work'];?> </td>
            <td> <?php echo $value['section'];?> </td>            
            <td> <?php echo $value['category'];?> </td>
            <td> <?php echo $value['from_needs_list'];?> </td>
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