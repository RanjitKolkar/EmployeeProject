<?php
   ob_start();
   session_start();

include 'dbConn.php';
$searchErr = '';
$employee_details='';
$_SESSION['valid'] = "false";
if(isset($_POST['submit_login']))
{
    if(!empty($_POST['user']) and !empty($_POST['pass']))
    {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $stmt = $con->prepare("select * from login where uname like '%$user%' and pass like '%$pass%'");
        $stmt->execute();

        $login = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo count($login);
       if(count($login)==1)
       {
            $_SESSION['valid'] = "true";
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = $_POST['user'];
            $msg=5;
           header ("Location: adminhome.php?msg=".$msg."");

       }
       else {
            $_SESSION['valid'] = "false";
            $msg=6;
            header("location: index.php?msg=".$msg."");
         
        }
    }
   
    else
    {
        $searchErr = "Please enter the information";
    }
       
    
}
 
?>


