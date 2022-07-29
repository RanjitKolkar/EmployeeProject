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
            </div>
           
            <form action="insert-process.php?insert=employee" method="post">
                <div class="form-group">
                    <label>Employee ID</label>
                    <input type="text" name="employee_id" class="form-control" required="">
              
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required="">
        
                    <label>Phone</label>
                    <input type="number" name="phone" class="form-control">
    
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" >
 
                    <label>Rank</label>
                    <input type="text" name="rank" class="form-control" >

                    <label>Nationality</label>
                    <input type="text" name="nationality" class="form-control" >
      
                    <label>Sex</label>
                    <input type="text" name="sex" class="form-control" >
               
                    <label>Classification</label>
                    <input type="text" name="classification" class="form-control" >
             
                    <label>General Management</label>
                    <input type="text" name="general_management" class="form-control" >
             
                    <label>Sub Management</label>
                    <input type="text" name="sub_management" class="form-control" >
             
                    <label>Location of the work</label>
                    <input type="text" name="location_of_work" class="form-control" >
               
                    <label>Section</label>
                    <input type="text" name="section" class="form-control" >
                
                    <label>Category</label>
                    <input type="text" name="category" class="form-control" >
               
                    <label>Needs List</label>
                    <input type="text" name="from_needs_list" class="form-control" >
                </div>

                <input type="submit" class="btn btn-primary" name="submit" value="Create">
            </form>

<!---------------------------------------------- End Create Employee --><?php


// <!---------------------------------------------- Create Course -->
            }elseif ($add_action == 'course') {
  ?>
          <div class="page-header">
                <h3>Create Course details</h3>
            </div>
           
            <form action="insert-process.php?insert=course" method="post">

                <div class="form-group">
                    <label>Course Name</label>
                    <input type="text" name="course_name" class="form-control" required="">
                </div>                      

                <div class="form-group">
                    <label>Start Date</label>

                    <input type="date" name="start_date" class="form-control" >
                </div>
                <div class="form-group">
                    <label>End date</label>
                    <input type="date" name="end_date" class="form-control" >
                </div>
                 <div class="form-group">
                    <label>Quarter</label>
                    <input type="text" name="quarter" class="form-control" >
                </div>
                                 <div class="form-group">
                    <label>Month</label>
                    <input type="text" name="month" class="form-control" >
                </div>
                                 <div class="form-group">
                    <label>Year</label>
                    <input type="text" name="year" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Course Specialization</label>
                    <input type="text" name="course_specialization" class="form-control" >
                </div>  
                                         <div class="form-group">
                    <label>Course Plan</label>
                    <input type="text" name="course_plan" class="form-control" >
                </div>
                 <div class="form-group">
                    <label>Number of days</label>
                    <input type="text" name="no_of_days" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Hours per day</label>
                    <input type="text" name="hours_per_day" class="form-control" >
                </div>
                 <div class="form-group">
                    <label>Total Hourse</label>
                    <input type="text" name="total_hours" class="form-control" >
                </div>
                                 <div class="form-group">
                    <label>contract_location</label>
                    <input type="text" name="contract_location" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Instructor_1</label>
                    <input type="text" name="instructor_1" class="form-control" >
                </div>
                 <div class="form-group">
                    <label>Instructor_2</label>
                    <input type="text" name="instructor_2" class="form-control" >
                </div>

                <input type="submit" class="btn btn-primary" name="submit" value="Create">
            </form>

<!---------------------------------------------- End Create Course --><?php



            }
            ?>

<!-- end of coulmn, row, jumbotron container -->
        </div> 
     </div>        
    </div>
</div>

