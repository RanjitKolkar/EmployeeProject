<?php include("admin_header.php")?>

<div class="container mt-2">
<div class="jumbotron">
  <div class="page-header">
      <h2>Update Data From Database PHP</h2>
  </div>

    <div class="row">
        <div class="col-md-12">
            <?php


            include 'dbConn.php';

            $query = "SELECT * FROM customers WHERE custId='" . $_GET["custId"] . "'"; // Fetch data from the table customers using id

            $result=mysqli_query($db_conn,$query);

            $customer = mysqli_fetch_assoc($result);


            ?>
            <form action="update-process.php" method="POST">

              <input type="hidden" name="custId" value="<?php echo $_GET["custId"]; ?>" class="form-control" required="">

              <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" name="fname" class="form-control" value="<?php echo $customer['fname']; ?>" required="">
              </div>                

              <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" name="lname" class="form-control" value="<?php echo $customer['lname']; ?>" required="">
              </div>              

              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" value="<?php echo $customer['email']; ?>" required="">
              </div>

              <button type="submit" class="btn btn-primary" value="submit">Submit</button>

            </form>
        </div>
    </div>  
    </div>      
</div>
