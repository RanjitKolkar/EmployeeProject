<?php include('header.php') ?>


<div class="container mt-2">

<?php include('toasts.php') ?>
  <div class="jumbotron shadow-lg">

    <h1 class="display-4"><?php echo $language['Hi_employee'];?>,</h1>
    
    <hr class="my-4">
    <p><?php echo $language['Employee_text'];?></p>
    <p class="lead">
      <a class="btn btn-primary" href="search.php" role="button"><?php echo $language['Search'];?></a>
    </p>
  </div>
</div>

</body>
</html>