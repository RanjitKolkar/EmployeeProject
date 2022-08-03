<?php include("admin_header.php"); ;

$add_action = 'employee';
?>
<div class="container mt-2">
    <?php include "toasts.php"?>
    <div class="jumbotron">
    <div class="row">
        <div class="col-md-12">
<?php
            if(isset($_GET['add'])){ 
            $add_action = $_GET['add']; 
            } 
            if($add_action == 'employee'){

  ?><!---------------------------------------------- Create Employee -->
          <div class="page-header">
                <h3>Create Employee</h3>
                <hr>
            </div>
           
            <form action="insert-process.php?insert=employee" method="post">
              
                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Employee ID</span>
                        </div>
                    <input type="text" placeholder="Enter Course Id" name="employee_id" class="form-control" required="">
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Employee Name</span>
                        </div>
                     <input type="text" placeholder="Enter Course Name" name="name" class="form-control" required="">                 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Phone</span>
                        </div>
                    <input type="text"  name="phone" class="form-control" >
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Email</span>
                        </div>
                     <input type="text"  name="email" class="form-control" >                 
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Nationality</span>
                        </div>
                    <input type="text"  name="nationality" class="form-control" >
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Gender</span>
                        </div>
                     <input type="text"  name="sex" class="form-control" >                 
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Rank</span>
                        </div>
                    <input type="text"  name="rank" class="form-control" >
                    </div>         
                               <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Classification</span>
                        </div>
                    <input type="text"  name="classification" class="form-control" >
                    </div>
                </div>

                 <div class="form-group row">

                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">General Management</span>
                        </div>
                     <input type="text"  name="general_management" class="form-control" >         
                    </div>
                                        <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Sub Management</span>
                        </div>
                     <input type="text"  name="sub_management" class="form-control" >
                    </div>
                </div>
               
                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Section</span>
                        </div>
                    <input type="text"  name="section" class="form-control" >
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Category</span>
                        </div>
                     <input type="text"  name="category" class="form-control" >                 
                    </div>
                </div>

                 <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Location of the work</span>
                        </div>
                    <input type="text"  name="location_of_work" class="form-control" >
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Needs List</span>
                        </div>
                     <input type="text"  name="from_needs_list" class="form-control" >            
                    </div>
                </div>
                <br>
                <input type="submit" class="btn btn-primary shadow " name="submit" value="Create Employee">
            </form>

<!---------------------------------------------- End Create Employee --><?php


// <!---------------------------------------------- Create Course -->
            }elseif ($add_action == 'course') {
  ?>
          <div class="page-header">
                <h3>Create Course details</h3>
                <hr>
            </div>
           
            <form action="insert-process.php?insert=course" method="post">

                               

                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Course ID</span>
                        </div>
                    <input type="text" placeholder="Enter Course Id" name="course_id" class="form-control" required="">
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Course Name</span>
                        </div>
                     <input type="text" placeholder="Enter Course Name" name="course_name" class="form-control" required="">                 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Start Date</span>
                        </div>
                    <input type="date" name="start_date" class="form-control" >
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">End Date</span>
                        </div>
                     <input type="date" name="end_date" class="form-control" >                   
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Quarter</span>
                        </div>
                    <input type="text" name="quarter" class="form-control" >
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Month</span>
                        </div>
                     <input type="text" name="month" class="form-control" >                   
                    </div>
                                        <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Year</span>
                        </div>
                     <input type="text" name="year" class="form-control" >                   
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Number of days</span>
                        </div>
                    <input type="text" name="no_of_days" class="form-control" >
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Hours per day</span>
                        </div>
                     <input type="text" name="hours_per_day" class="form-control" >                  
                    </div>
                                        <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Total Hours</span>
                        </div>
                     <input type="text" name="total_hours" class="form-control" >              
                    </div>
                </div>



                  <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Course Specialization</span>
                        </div>
                    <input type="text" name="course_specialization" class="form-control" >   
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Course Plan</span>
                        </div>
                     <input type="text" name="course_plan" class="form-control" >                  
                    </div>
                </div>

                

                  <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Instructor 1</span>
                        </div>
                    <input type="text" name="instructor_1" class="form-control" >
                    </div> 
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Instructor 2</span>
                        </div>
                     <input type="text" name="instructor_2" class="form-control" ></div>                  
                    </div>
              
                  <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">contract_location</span>
                        </div>
                    <input type="text" name="contract_location" class="form-control" >
                    </div>                   
                    </div>

               
<br>
                <input type="submit" class="btn btn-primary" name="submit" value="Create Course">
            </form>

<!---------------------------------------------- End Create Course --><?php



            }
            ?>

<!-- end of coulmn, row, jumbotron container -->
        </div> 
     </div>        
    </div>
</div>

