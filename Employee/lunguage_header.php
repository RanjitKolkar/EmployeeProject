<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
  // include language configuration file based on selected language
  $lang = 'en';
  if(isset($_GET['lang'])){ 
    $lang = $_GET['lang']; 
  } 
 if($lang == 'en'){
  require_once("language.php");
  }elseif ($lang == 'ar') {    
  require_once("language_arabic.php");
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

    <title><?php echo $language['Page_Title']?></title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="bg-primary">




    <div class="container">
      <nav class="navbar navbar-expand-lg bg-white text-white shadow-sm rounded">
        <a class="navbar-brand" href="index.php"><?php echo $language['Title']?></a>

          <ul class="navbar-nav  mr-auto">
            <li class="nav-item">
              <a class="btn btn-light" href="index.php"><?php echo $language['Home'];?></a>
            </li>
            <li class="nav-item">
              <a class="btn btn-light" href="about.php"><?php echo $language['About'];?></a>
            </li>   

          </ul>
            <li>        
              <div class="p-3">
            <a class="" href="index.php?lang=en"
            <?php if($lang == 'en'){?> style="color: #ff9900;"
            <?php } ?>>English</a> | <a class="" href="index.php?lang=ar" <?php if($lang == 'ar'){?>
            style="color: #ff9900;" <?php } ?>>Arabic</a>
          </div>
          </li>


            <li class="nav-item" style=" list-style-type: none;">
            
           <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModal"><?php echo $language['Admin_Login'];?></button>

          </li></nav>

    </div>
    <!-- /container -->

      <div id="myModal" class="modal fade">
        <form class="modal-dialog modal-sm"  action="authentication.php" method="post">
          <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title"><?php echo $language['Enter_login_details'];?></h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

                <!-- Modal body -->
            <div class="modal-body">
              <div class="form-group">
                <label ><?php echo $language['Username'];?></label>
                <input type="text" class="form-control" name="user" placeholder="Enter name" required>
              </div>
                            <div class="form-group">
                <label ><?php echo $language['Password'];?></label>
                <input type="password" class="form-control" name="pass" placeholder="Enter Password" required>
              </div>
          
              
              <button class="btn btn-primary" type="submit" name="submit_login"><?php echo $language['Login'];?></button>
               <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo $language['Close'];?></button>
              </div>
            </div>
            
          </div>


        </form>

