<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Employee</title>  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="bg-primary">


    
    <div class="container">
      <nav class="navbar navbar-expand-lg bg-white text-white shadow-sm rounded">
        <a class="navbar-brand" href="index.php">Employee</a>

          <ul class="navbar-nav  mr-auto">
            <li class="nav-item">
              <a class="btn btn-light" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-light" href="about.php">About</a>
            </li>   
          </ul>

            <li class="nav-item" style=" list-style-type: none;">
            
           <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModal">Admin Login </button>

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