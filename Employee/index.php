<?php include('header.php') ?>

<div class="float-right">
<div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
  <div class="toast" data-delay="3000" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header ">
   
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


  <div class="jumbotron shadow-lg">
    <h1 class="display-4">Hi Employee,</h1>
    
    <hr class="my-4">
    <p>Here, you can search about the employee and their information</p>
    <p class="lead">
      <a class="btn btn-primary" href="search.php" role="button">Search</a>
    </p>
  </div>


</div>


</body>
</html>