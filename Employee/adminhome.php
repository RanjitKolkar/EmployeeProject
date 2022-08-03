<?php include('admin_header.php'); ?>


<div class="container mt-2">
            <?php include('toasts.php')?>
        <div class="jumbotron">
            <h3>Hi Admin <?php  echo $_SESSION['username']?>, Welcome</h3>
           <div class="list-group ">
                <a class="list-group-item list-group-item-action bg-warning"><i class="material-icons" color:white>add</i>  Create and Update</a>
              <a href="add.php?add=employee" class="list-group-item list-group-item-action">Create Employee</a>
              <a href="add.php?add=course" class="list-group-item list-group-item-action">Create Course</a>
              <a href="enroll.php" class="list-group-item list-group-item-action">Enroll Employee</a>
              <a href="results.php" class="list-group-item list-group-item-action">Update Results Employee</a>
            </div>


            <hr>
            <div class="list-group ">
                <a class="list-group-item list-group-item-action bg-warning"><i class="material-icons" color:white>drafts</i>View </a>
                <a href="view.php?view=employee" class="list-group-item list-group-item-action">View all employee details</a>
                <a href="view.php?view=course" class="list-group-item list-group-item-action">View all course</a>
                <a href="view.php?view=enrolled" class="list-group-item list-group-item-action">View employee enrolled to course</a>
            </div>
                       <hr>
            <div class="list-group ">

                <a class="list-group-item list-group-item-action bg-warning"> <i class="material-icons">file_download</i> Download </a>
                <a href="export_excel.php?download=all_employee" class="list-group-item list-group-item-action">Download All Employee</a>
                <a href="export_excel.php?download=all_course" class="list-group-item list-group-item-action">Download All Course</a>
                <a href="export_excel.php?download=all_enrolled" class="list-group-item list-group-item-action">Download All Enrolled</a>
                <a href="export_excel.php?download=all" class="list-group-item list-group-item-action">Download Entire</a>
             
            </div>
           

      
</div>
</div>

</body>
</html>