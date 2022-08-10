<?php
   session_start();
   
   // if( isset( $_SESSION['isArabic'] ) ) {
   //    $_SESSION['isArabic'] = "True"; 
   //    header ("Location: index.php?lang=ar");
   // }else {
   //    $_SESSION['isArabic'] = "False"; 
   // }
  $_SESSION['isArabic'] = "False"; 
  if( isset( $_GET['lang'] ) ) {
        if($_GET['lang']=="ar"){
        header ("Location: index.php?lang=ar");
        $_SESSION['isArabic'] = "True"; }
        else{ 
          unset($_SESSION['isArabic']);
          header ("Location: index.php?lang=en");
        }
    }
  
  
   $msg = "You have visited this page ".$_SESSION['isArabic'];
   $msg .= "in this session.";
   // header ("Location: index.php?lang=ar");
?>

