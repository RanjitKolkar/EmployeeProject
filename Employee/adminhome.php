<?php include('admin_header.php'); ?>


<div class="container mt-2">
            <?php include('toasts.php')?>
        <div class="jumbotron">
            <h3>Hi Admin,</h3>
           <div class="list-group">
              <a href="add.php?add=employee" class="list-group-item list-group-item-action">Create Employee</a>
              <a href="add.php?add=course" class="list-group-item list-group-item-action">Create Course</a>
              <a href="enroll.php" class="list-group-item list-group-item-action">Enroll Employee</a>
              <a href="results.php" class="list-group-item list-group-item-action">Update Results Employee</a>
            </div>


            <hr>
            <div class="list-group">
                <a href="view.php?view=employee" class="list-group-item list-group-item-action">View all employee details</a>
                <a href="view.php?view=course" class="list-group-item list-group-item-action">View all course</a>
                <a href="view.php?view=enrolled" class="list-group-item list-group-item-action">View employee enrolled to course</a>
            </div>
           

      
</div>
</div>

</body>
</html>