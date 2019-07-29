<?php
include 'connect.php';
include 'session.php';
$username3=$_SESSION['username1'];
echo $query="UPDATE signup SET status='offline' WHERE username='$username3'";
$exec=mysqli_query($conn,$query);
if($exec==1)
{
    session_unset();
    session_destroy();
   
    header('LOCATION:index.php');
} 
else
{
   echo '<script type="text/javascript">alert("Unsuccessfull logout");</script>';
}
?>