<!-- Toasts -->

<?php 
$msg_color="";
if(isset($_GET['msg'])){ 
    if($_GET['msg']==0){?>
        $msg_color

        <script>
        $(document).ready(function(){
        $('.toast').toast('hide');

        });
        </script>
        <?php
    }
  else{
            $msg=$_GET['msg'];
            if($msg==1 or $msg==2 or $msg==3 or $msg==5 or $msg==7  ){
                $msg_color='bg-success text-white';
            }
            elseif ($msg==4 or $msg==6 or $msg==8 ) {
                $msg_color='bg-danger text-white';
            }
                elseif ($msg==10) {
            $msg_color='bg-info text-white';
            }

?>
            <div class="mb-2">        <!-- Position it -->
                <div >
                    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000">
                        <div class="toast-header <?php echo $msg_color;?>">
                            <strong class="mr-auto"> <?php include 'msg.php';  ?></strong>
                            <button type="button" class="ml-2 mb-1 close <?php echo $msg_color;?>" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                
                    </div>
                </div>
            </div>
            
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