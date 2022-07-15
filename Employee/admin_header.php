<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Employee</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="adminhome.php">Employee</a>

          <ul class="navbar-nav  mr-auto">
            <li class="nav-item">
              <a class="btn btn-primary" href="logout.php">Logout to Home</a>
            </li>   
   
          </ul>

            <li class="nav-item" style=" list-style-type: none;">
<button type="button" class="btn btn-success" data-placement="bottom" title="logout" data-toggle="modal" data-target="#logoutModal">Welcome, <?php  echo $_SESSION['username']?> </button>


          </li>


      </nav>
    </div>
    <!-- /container -->

      <div id="myModal" class="modal fade">
        <form class="modal-dialog modal-sm" action="authentication.php" method="post">
          <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Enter Login Details</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

                <!-- Modal body -->
            <div class="modal-body">
              <div class="form-group">
                <label >User Name</label>
                <input type="text" class="form-control" name="user" placeholder="Enter name" required>
              </div>
                            <div class="form-group">
                <label >Password</label>
                <input type="password" class="form-control" name="pass" placeholder="Enter Password" required>
              </div>
          
              
              <button class="btn btn-primary" type="submit" name="submit_login">Login</button>
               <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
            
          </div>


        </form>
     <div id="logoutModal" class="modal fade">
        <form class="modal-dialog modal-sm" action="logout.php" method="post">
          <div class="modal-content">
                           <!-- Modal Header -->
              <div class="modal-header">
                <h5 class="modal-title">want to logout?</h5>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
                <!-- Modal body -->
            <div class="modal-body">                 
              
              <button class="btn btn-danger" type="submit" name="submit_login">logout</button>
              </div>
            </div>
            
      </div>
          
          
        </form>  

    </body>


        <script>

      


      function validation() {
        var id = document.f1.user.value;
        var ps = document.f1.pass.value;
        if (id.length == "" && ps.length == "") {
          alert("User Name and Password fields are empty");
          return false;
        } else {
          if (id.length == "") {
            alert("User Name is empty");
            return false;
          }
          if (ps.length == "") {
            alert("Password field is empty");
            return false;
          }
        }
      }
    </script>
        
</html>