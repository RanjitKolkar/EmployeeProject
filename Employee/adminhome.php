<?php include('admin_header.php') ?>
<div class="float-right">
<div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
  <div class="toast" data-delay="3000" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header bg-primary">
   
      <strong class="mr-auto"></strong>
 
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      <h5><?php include 'msg.php';  ?></h5>
    </div>
  </div>
</div>
</div>
<script>
$(document).ready(function(){
  $('.toast').toast('show');
});
</script>

<div class="container mt-2">
        <div class="jumbotron">
            <div class="float-left">
                <h2>Default Employee details</h2>
            </div>            
            <div class="float-right">
                <a href="add.php" class="btn btn-success">Add New Employee Record</a>
            </div>
           


                <?php

                include 'dbConn.php';

                $query="select * from employee limit 200"; // Fetch all the data from the table customers

                $result=mysqli_query($db_conn,$query);

                ?>

                <?php if ($result->num_rows > 0): ?>
            <div class="table-responsive shadow-sm rounded">
                <table class="table table-hover">
              <thead class="thead bg-primary">
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Rank</th>
                  <th scope="col">Name</th>
                  <th scope="col">Phone</th>

                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php while($array=mysqli_fetch_row($result)): ?>

                <tr>
                    <th scope="row"><?php echo $array[0];?></th>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[8];?></td>
                    <td> 
                      <a href="edit.php?custId=<?php echo $array[0];?>" class="btn btn-primary">Edit</a>
                      <a href="delete.php?custId=<?php echo $array[0];?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>

                <?php endwhile; ?>

                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>

                <?php mysqli_free_result($result); ?>

              </tbody>
            </table>
        </div>
      
</div>
</div>

</body>
</html>