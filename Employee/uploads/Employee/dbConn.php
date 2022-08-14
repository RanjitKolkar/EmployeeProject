<?php
$servername='localhost';
$username="root";
$password="";
$dbname="myEmpl";
try
{
   $db_conn = mysqli_connect('localhost','root','','myEmpl');
    $con=new PDO("mysql:host=$servername;dbname=myEmpl",$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo 'connected';
}
catch(PDOException $e)
{
    echo '<br>'.$e->getMessage();
}
     
?>

