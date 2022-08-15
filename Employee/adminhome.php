<?php include('admin_header.php'); ?>


<div class="container mt-2">
            <?php include('toasts.php')?>
        <div class="jumbotron ">
            <h3><?php echo $language['Hi Admin, welcome!!!']?></h3>
           <div class="list-group border" style="border-color: #e3f2fd;">
                <a class="list-group-item list-group-item-action " style="background-color: #e3f2fd;"><i class="material-icons" >add</i>  <?php echo $language['Create and Update'];?></a>
              <a href="add.php?add=employee" class="list-group-item list-group-item-action"><?php echo $language['Create Employee'];?></a>
              <a href="add.php?add=course" class="list-group-item list-group-item-action"><?php echo $language['Create Course'];?></a>
              <a href="enroll.php" class="list-group-item list-group-item-action"><?php echo $language['Enroll Employee'];?></a>
              <a href="results.php" class="list-group-item list-group-item-action"><?php echo $language['Update Results Employee'];?></a>
            </div>



            <hr>
            <div class="list-group border" style="border-color: #e3f2fd;">
                <a class="list-group-item list-group-item-action " style="background-color: #e3f2fd;"><i class="material-icons" color:white>drafts</i><?php echo $language['View'];?> </a>
                <a href="search_admin.php" class="list-group-item list-group-item-action"><?php echo $language['Search Employee'];?></a>
                <a href="view.php?view=employee" class="list-group-item list-group-item-action"><?php echo $language['View all employee details'];?></a>
                <a href="view.php?view=course" class="list-group-item list-group-item-action"><?php echo $language['View all course'];?></a>
                <a href="view.php?view=enrolled" class="list-group-item list-group-item-action"><?php echo $language['View employee enrolled to course'];?></a>
            </div>
                       <hr>
            <div class="list-group border" style="border-color: #e3f2fd;">
                <a class="list-group-item list-group-item-action " style="background-color: #e3f2fd;"><i class="material-icons" color:white>file_download</i> <?php echo $language['Download'];?> </a>
                <a href="export_excel.php?download=all_employee" class="list-group-item list-group-item-action"><?php echo $language['Download All Employee'];?></a>
                <a href="export_excel.php?download=all_course" class="list-group-item list-group-item-action"><?php echo $language['Download All Course'];?></a>
                <a href="export_excel.php?download=all_enrolled" class="list-group-item list-group-item-action"><?php echo $language['Download All Enrolled'];?></a>
                <a href="export_excel.php?download=all" class="list-group-item list-group-item-action"><?php echo $language['Download Entire'];?></a>
             
            </div>
            <hr>
            <div class="list-group border" style="border-color: #e3f2fd;">
                <a class="list-group-item list-group-item-action " style="background-color: #e3f2fd;"><i class="material-icons" color:white>file_upload</i> <?php echo $language['Import Excel Sheet to Database'];?> </a>

                <a class="list-group-item list-group-item-action">  
                <form method="POST" action="csvImport.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label><?php echo $language['Upload Excel File'];?></label>
                        <label><?php echo $language['text_import_condition'];?></label>
                        <input type="file" name="file" class="btn btn-outline-primary" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="Submit" class="btn shadow btn-primary"><?php echo $language['Import'];?></button>
                    </div>
                </form></a>
            </div>

           

      
</div>
</div>

</body>
</html>