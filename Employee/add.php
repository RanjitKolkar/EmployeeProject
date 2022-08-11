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
                <h3><?php echo $language ['Create Employee'];?></h3>
                <hr>
            </div>
           
            <form action="insert-process.php?insert=employee" id="validateNumber" method="post">
              
                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Employee ID'];?></span>
                        </div>
                    <input type="text"  placeholder="only numbers" name="employee_id" class="form-control" required="">
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Name'];?></span>
                        </div>
                     <input type="text"  name="name" class="form-control" required="">                 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Phone'];?></span>
                        </div>
                    <input type="number"  name="phone" class="form-control" >
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Email'];?></span>
                        </div>
                     <input type="text"  name="email" class="form-control" >                 
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Nationality'];?></span>
                        </div>
                    <input type="text"  name="nationality" class="form-control" >
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Gender'];?></span>
                        </div>
                     <input type="text"  name="sex" class="form-control" >                 
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Rank'];?></span>
                        </div>
                    <input type="text"  name="rank" class="form-control" >
                    </div>         
                               <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Classification'];?></span>
                        </div>
                    <input type="text"  name="classification" class="form-control" >
                    </div>
                </div>

                 <div class="form-group row">

                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['General Management'];?></span>
                        </div>
                     <input type="text"  name="general_management" class="form-control" >         
                    </div>
                                        <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Sub Management'];?></span>
                        </div>
                     <input type="text"  name="sub_management" class="form-control" >
                    </div>
                </div>
               
                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Section'];?></span>
                        </div>
                    <input type="text"  name="section" class="form-control" >
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Category'];?></span>
                        </div>
                     <input type="text"  name="category" class="form-control" >                 
                    </div>
                </div>

                 <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Location of the work'];?></span>
                        </div>
                    <input type="text"  name="location_of_work" class="form-control" >
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Needs List'];?></span>
                        </div>
                     <input type="text"  name="from_needs_list" class="form-control" >            
                    </div>
                </div>

                <br>
                <input type="submit" class="btn btn-primary shadow " name="submit" value="<?php echo $language ['Create Employee'];?>">
            </form>

<!---------------------------------------------- End Create Employee --><?php


// <!---------------------------------------------- Create Course -->
            }elseif ($add_action == 'course') {
  ?>
          <div class="page-header">
                <h3><?php echo $language['Create Course details'];?></h3>
                <hr>
            </div>
           
            <form action="insert-process.php?insert=course" method="post">

                               

                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Course ID'];?></span>
                        </div>
                    <input type="text" placeholder="only numbers" name="course_id" class="form-control" required="">
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Course Name'];?></span>
                        </div>
                     <input type="text"  name="course_name" class="form-control" required="">                 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Start Date'];?></span>
                        </div>
                    <input type="date" name="start_date" class="form-control" required="">
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['End Date'];?></span>
                        </div>
                     <input type="date" name="end_date" class="form-control" required="">                   
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Quarter'];?></span>
                        </div>
                    <!-- <input type="text" name="quarter" class="form-control" > -->
                      <select class="form-select btn-light custom-select" id="inputGroupSelect01" name="quarter">
                          
                          <option value="Quarter 1">Quarter 1</option>
                          <option value="Quarter 2">Quarter 2</option>
                          <option value="Quarter 3">Quarter 3</option>
                          <option value="Quarter 4">Quarter 4</option>
                        </select>
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Month'];?></span>
                        </div>
                     <input type="text" name="month" class="form-control" >                   
                    </div>
                                        <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Year'];?></span>
                        </div>
                     <input type="text" name="year" class="form-control" >                   
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Number of days'];?></span>
                        </div>
                    <input type="text" name="no_of_days" class="form-control" >
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Hours per day'];?></span>
                        </div>
                     <input type="text" name="hours_per_day" class="form-control" >                  
                    </div>
                                        <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Total Hours'];?></span>
                        </div>
                     <input type="text" name="total_hours" class="form-control" >              
                    </div>
                </div>



                  <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Course Specialization'];?></span>
                        </div>
                    <input type="text" name="course_specialization" class="form-control" >   
                    </div>
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Course Plan'];?></span>
                        </div>
                     <input type="text" name="course_plan" class="form-control" >                  
                    </div>
                </div>

                

                  <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Instructor 1'];?></span>
                        </div>
                    <input type="text" name="instructor_1" class="form-control" >
                    </div> 
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Hours Instructor 1'];?></span>
                        </div>
                     <input type="text" name="hours_instructor_1" class="form-control" ></div>                  
                    </div>
                                      <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Instructor 2'];?></span>
                        </div>
                    <input type="text" name="instructor_2" class="form-control" >
                    </div> 
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['Hours Instructor 2'];?></span>
                        </div>
                     <input type="text" name="hours_instructor_2" class="form-control" ></div>                  
                    </div>
              
                  <div class="form-group row">
                    <div class="col input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><?php echo $language['contract_location'];?></span>
                        </div>
                    <input type="text" name="contract_location" class="form-control" >
                    </div>                   
                    </div>

               
<br>
                <input type="submit" class="btn btn-primary" name="submit" value="<?php echo $language ['Create Course'];?>">
            </form>

<!---------------------------------------------- End Create Course --><?php



            }
            ?>

<!-- end of coulmn, row, jumbotron container -->
        </div> 
     </div>        
    </div>
</div>
<script type="text/javascript">
    
$(document).ready(function(){

    $('#validateNumber').bootstrapValidator({
        feedbackIcons:{
            valid:'glyphicon glyphicon-ok',
            invalid:'glyphicon glyphicon-remove',
            validating:'glyphicon glyphicon-refresh',
        },
        fields:{
            phone:{
                integer:{
                    message:'The value is not Number'
                }
            }
        }

    });
});

</script>
