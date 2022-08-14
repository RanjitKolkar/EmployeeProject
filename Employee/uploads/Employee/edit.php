<?php include("admin_header.php");
            include 'dbConn.php';?>

<div class="container mt-2">
<div class="jumbotron">

<?php
if(isset($_GET['action'])){ 
  $view_action = $_GET['action']; 
} 

// -------------fetch  Employee Details for edit
if($view_action == 'edit_employee')
{
  ?>
  <div class="page-header">
      <h2><?php echo $language['Update_Employee_Data'];?></h2>
  </div>

    <div class="row">
        <div class="col-md-12">
            <?php

            $query = "SELECT  * FROM Employee WHERE employee_id='" . $_GET["employee_id"] . "'"; // Fetch data from the table Emytable using id

            $result=mysqli_query($db_conn,$query);

            $mytable = mysqli_fetch_assoc($result);


            ?>
            
            <form action="update-process.php?update=employee" method="post">    
     

              <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Employee ID'];?></span>
                        </div>
                    <input type="text"  name="employee_id" class="form-control" value="<?php echo $_GET["employee_id"]; ?>" required="">
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Name'];?></span>
                        </div>
                     <input type="text" name="name" class="form-control" value="<?php echo $mytable["name"]; ?>" required="">                 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Phone'];?></span>
                        </div>
                    <input type="text" value="<?php echo $mytable["phone"]; ?>"   name="phone" class="form-control" >
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Email'];?></span>
                        </div>
                     <input type="text" value="<?php echo $mytable["email"]; ?>"   name="email" class="form-control" >                 
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Nationality'];?></span>
                        </div>
                    <input type="text" value="<?php echo $mytable["nationality"]; ?>"   name="nationality" class="form-control" >
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Gender'];?></span>
                        </div>
                     <input type="text" value="<?php echo $mytable["sex"]; ?>"   name="sex" class="form-control" >                 
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Rank'];?></span>
                        </div>
                    <input type="text" value="<?php echo $mytable["rank"]; ?>"   name="rank" class="form-control" >
                    </div>         
                               <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Classification'];?></span>
                        </div>
                    <input type="text" value="<?php echo $mytable["classification"]; ?>"   name="classification" class="form-control" >
                    </div>
                </div>

                 <div class="form-group row">

                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['General Management'];?></span>
                        </div>
                     <input type="text" value="<?php echo $mytable["general_management"]; ?>"   name="general_management" class="form-control" >         
                    </div>
                                        <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Sub Management'];?></span>
                        </div>
                     <input type="text" value="<?php echo $mytable["sub_management"]; ?>"   name="sub_management" class="form-control" >
                    </div>
                </div>
               
                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Section'];?></span>
                        </div>
                    <input type="text" value="<?php echo $mytable["section"]; ?>"   name="section" class="form-control" >
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Category'];?></span>
                        </div>
                     <input type="text" value="<?php echo $mytable["category"]; ?>"   name="category" class="form-control" >                 
                    </div>
                </div>

                 <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Location of the work'];?></span>
                        </div>
                    <input type="text" value="<?php echo $mytable["location_of_work"]; ?>"   name="location_of_work" class="form-control" >
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Needs List'];?></span>
                        </div>
                     <input type="text" value="<?php echo $mytable["from_needs_list"]; ?>"   name="from_needs_list" class="form-control" >            
                    </div>
                </div>

                <br>           


              <button type="submit" class="btn btn-primary" value="submit"><?php echo $language['Submit'];?></button>

             <input class="btn btn-danger" type="button" onclick="window.location.replace('adminhome.php')" value="<?php echo $language['Cancel'];?>" />
            

            </form>
        </div>
    </div>  

<?php }?>

<!-- End of Edit Employee -->

<!-- // -------------fetch  Course Details for edit -->
<?php
if($view_action == 'edit_course')
{
  ?>
  <div class="page-header">
      <h2><?php echo $language['Update_Course_Data'];?></h2>
  </div>

    <div class="row">
        <div class="col-md-12">
            <?php

            $query = "SELECT  * FROM Course WHERE course_name='" . $_GET["course_name"] . "'"; 
            // Fetch data from Course

            $result=mysqli_query($db_conn,$query);

            $mytable = mysqli_fetch_assoc($result);


            ?>
            <form action="update-process.php?update=course" method="post">  
             
          
              <div class="form-group row">

                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Course Name'];?></span>
                        </div>
                     <input type="text" value="<?php echo $mytable["course_name"]; ?>"  placeholder="Enter Course Name" name="course_name" class="form-control" required="">                 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Start Date'];?></span>
                        </div>
                    <input type="date" value="<?php echo $mytable["start_date"]; ?>"  name="start_date" class="form-control" >
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['End Date'];?></span>
                        </div>
                     <input type="date" value="<?php echo $mytable["end_date"]; ?>" name="end_date" class="form-control" >                   
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Quarter'];?></span>
                        </div>
                    <input type="text" value="<?php echo $mytable["quarter"]; ?>"  name="quarter" class="form-control" >
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Month'];?></span>
                        </div>
                     <input type="text" value="<?php echo $mytable["month"]; ?>"  name="month" class="form-control" >                   
                    </div>
                                        <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Year'];?></span>
                        </div>
                     <input type="text" value="<?php echo $mytable["year"]; ?>"  name="year" class="form-control" >                   
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Number of days'];?></span>
                        </div>
                    <input type="text" value="<?php echo $mytable["no_of_days"]; ?>"  name="no_of_days" class="form-control" >
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Hours per day'];?></span>
                        </div>
                     <input type="text" value="<?php echo $mytable["hours_per_day"]; ?>"  name="hours_per_day" class="form-control" >                  
                    </div>
                                        <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Total Hours'];?></span>
                        </div>
                     <input type="text" value="<?php echo $mytable["total_hours"]; ?>"  name="total_hours" class="form-control" >              
                    </div>
                </div>



                  <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Course Specialization'];?></span>
                        </div>
                    <input type="text" value="<?php echo $mytable["course_specialization"]; ?>"  name="course_specialization" class="form-control" >   
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Course Plan'];?></span>
                        </div>
                     <input type="text" value="<?php echo $mytable["course_plan"]; ?>"  name="course_plan" class="form-control" >                  
                    </div>
                </div>

                

                  <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Instructor 1'];?></span>
                        </div>
                    <input type="text" value="<?php echo $mytable["instructor_1"]; ?>"  name="instructor_1" class="form-control" >
                    </div> 
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Hours Instructor 1'];?></span>
                        </div>
                     <input type="text" value="<?php echo $mytable["hours_instructor_1"]; ?>"  name="hours_instructor_1" class="form-control" ></div>                  
                    </div>
                                      <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Instructor 2'];?></span>
                        </div>
                    <input type="text" value="<?php echo $mytable["instructor_2"]; ?>"  name="instructor_2" class="form-control" >
                    </div> 
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Hours Instructor 2'];?></span>
                        </div>
                     <input type="text" value="<?php echo $mytable["hours_instructor_2"]; ?>"  name="hours_instructor_2" class="form-control" ></div>                  
                    </div>
              
                  <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['contract_location'];?></span>
                        </div>
                    <input type="text" value="<?php echo $mytable["contract_location"]; ?>"  name="contract_location" class="form-control" >
                    </div>                   
                    </div>

              <button type="submit" class="btn btn-primary" value="submit"><?php echo $language['Submit'];?></button>
             <input class="btn btn-danger" type="button"  value="<?php echo $language['Cancel'];?>" />
            

            </form>
        </div>
    </div>  

<?php }?>

<!-- End of Edit Course -->

<!-- // -------------fetch  Enroll Details for result -->
<?php
if($view_action == 'update_results')
{
  $msg=1;
  ?>
  <div class="page-header">
      <h2><?php echo$language['Update_Results_Data'];?></h2>
      <hr>
  </div>

    <div class="row">
        <div class="col-md-12">
            <?php
                 $employee_id=$_GET["employee_id"];  
                 // echo $employee_id;
                 $query = "SELECT * FROM Enrolled WHERE employee_id=$employee_id"; 
                 $result=mysqli_query($db_conn,$query);
                 $mytable = mysqli_fetch_assoc($result);
                 // // echo count($mytable);
                 // if ($mytable!=NULL) {
                 //    // $msg=1;
                 // } else {
                 //    $msg=10;                    
                 //  header ("Location: enroll.php?msg=".$msg."");
                 // }

                 // echo $mytable['employee_id'];


            ?>


        <form action="update-results.php" method="POST">

                <div class="form-group row">
   
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Employee ID'];?></span>
                        </div>
                       <input type="text" name="employee_id" class="form-control" value="<?php echo $mytable['employee_id']; ?> " readonly>                
                    </div>
                                        <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Course Name'];?></span>
                        </div>
                       <input type="text" name="course_name" class="form-control" value="<?php echo $mytable['course_name']; ?> " readonly>                
                    </div>
                </div>

  



          <div class="form-group">
            <label ><?php echo $language['exam_result'];?></label>
            <input type="text" name="exam_result" class="form-control" value="<?php echo $mytable['exam_result']; ?>" >
          </div>    
            <div class="form-group">
            <label ><?php echo $language['pass_or_fail'];?></label>
            <input type="text" name="pass_or_fail" class="form-control" value="<?php echo $mytable['pass_or_fail']; ?>" >
          </div>    
          <div class="form-group">
            <label ><?php echo $language['fail_reason'];?></label>
            <input type="text" name="fail_reason" class="form-control" value="<?php echo $mytable['fail_reason']; ?>" >
          </div> 
          <div class="form-group">
            <label ><?php echo $language['notes'];?></label>
            <input type="text" name="notes" class="form-control" value="<?php echo $mytable['notes']; ?>" >
          </div> 
          <div class="form-group">
            <label ><?php echo $language['date_of_resit'];?></label>
            <input type="date" name="date_of_resit" class="form-control" value="<?php echo $mytable['date_of_resit']; ?>" >
          </div>  
                        <div class="form-group">
            <label ><?php echo $language['resit_result'];?></label>
            <input type="text" name="resit_result" class="form-control" value="<?php echo $mytable['resit_result']; ?>" >
          </div> 
          <div class="form-group">
            <label ><?php echo $language['pass_fail_resit'];?></label>
            <input type="text" name="pass_fail_resit" class="form-control" value="<?php echo $mytable['pass_fail_resit']; ?>" >
         
          </div>      
                    <div class="form-group">
            <label ><?php echo $language['instructor_grade'];?></label>
            <input type="text" name="instructor_grade" class="form-control" value="<?php echo $mytable['instructor_grade']; ?>" >
         
          </div>  
                    <div class="form-group">
            <label ><?php echo $language['course_grade'];?></label>
            <input type="text" name="course_grade" class="form-control" value="<?php echo $mytable['course_grade']; ?>" >
         
          </div>  
                              <div class="form-group">
            <label ><?php echo $language['instructor_self_grade'];?></label>
            <input type="text" name="instructor_self_grade" class="form-control" value="<?php echo $mytable['instructor_self_grade']; ?>" >
         
          </div>  
                              <div class="form-group">
            <label ><?php echo $language['direct_manager_grade'];?></label>
            <input type="text" name="direct_manager_grade" class="form-control" value="<?php echo $mytable['direct_manager_grade']; ?>" >
         
          </div>  
                              <div class="form-group">
            <label ><?php echo $language['work_test'];?></label>
            <input type="text" name="work_test" class="form-control" value="<?php echo $mytable['work_test']; ?>" >
         
          </div>   


          <button type="submit" class="btn btn-primary" value="submit"><?php echo $language['Submit'];?></button>
         <input class="btn btn-danger" type="button" onclick="window.location.replace('adminhome.php')" value="<?php echo $language['Cancel'];?>" />
        

        </form>
        </div>
    </div>  

<?php }?>

<!-- End of Edit Course -->




    </div>      
</div>
