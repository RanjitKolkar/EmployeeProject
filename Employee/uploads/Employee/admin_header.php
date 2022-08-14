<?php
session_start();

include 'dbConn.php';
$language_set='arabic';
$query="select language_set from language";
$result=mysqli_query($db_conn,$query);
 if ($result->num_rows > 0):;?>

    <?php while($array=mysqli_fetch_row($result)):       
           $language_set=$array[0]; 
     endwhile; 
     endif;

     if($language_set=='english')
     require_once("language.php");else require_once("language_arabic.php");

?>
<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>Employee</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
     <body class="bg-primary">
       <div class="container">
      <nav class="navbar navbar-expand-lg bg-white text-white shadow-sm rounded">
        <a class="navbar-brand" href="adminhome.php">
          <img src="logo.jpeg" alt="logo" width="60" height="60">
        <!-- <?php echo $language['Page Title']?> --></a>

          <ul class="navbar-nav  mr-auto">
            <li class="nav-item">
              <a class="btn btn-primary" href="logout.php"><?php echo $language['Logout_to_Home'];?></a>
            </li>   
   
          </ul>

            <li class="nav-item" style=" list-style-type: none;">
<button type="button" class="btn shadow btn-success" data-placement="bottom" title="logout" data-toggle="modal" data-target="#logoutModal"><?php echo $language['Welcome'];?> </button>


          </li>


      </nav>
    </div>
    <!-- /container -->



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
              
              <button class="btn btn-danger shadow" type="submit" name="submit_login">logout</button>
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