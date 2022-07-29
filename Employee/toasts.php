<!-- Toasts -->

<?php 
if(isset($_GET['msg'])){ 
  if($_GET['msg']==0){?>

<script>
$(document).ready(function(){
  $('.toast').toast('hide');
  
});
</script>
<?php
  }
  else{




?>
    <div class="mb-2">        <!-- Position it -->
        <div >
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000">
                <div class="toast-header bg-warning">
                    <strong class="mr-auto"> <?php include 'msg.php';  ?></strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
        
            </div>
        </div>
    </div>
<!-- End Toasts -->
<script>
$(document).ready(function(){
  $('.toast').toast('show');
  
});
</script>
<style type="text/css">
    .toast { max-width: 100%; }
</style>
  <?php
  }
} ?>