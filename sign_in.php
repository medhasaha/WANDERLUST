<?php
include("connect.php");
$username1=$_REQUEST['username'];      //GET + POST
$pass1=$_REQUEST['password'];

$query = mysqli_query($conn,"SELECT * FROM `signup` WHERE username='$username1' AND (`status`='offline' OR `status`='signup')");
if(mysqli_num_rows($query)==1)
{
    while($row=mysqli_fetch_array($query))
    {  
		$pass2=$row['password'];
        $username2=$row['username'];
		if($pass1==$pass2) 
        {
            $query2=mysqli_query($conn,"INSERT INTO login_history(username) VALUES('$username1')");
            $query3=mysqli_query($conn,"UPDATE signup SET status='online' WHERE username='$username1'");
            if($query2 > 0 && $query3 > 0)
            {
                session_start();
                $_SESSION['username1']=$username1;
                $_SESSION['name']=$row['name'];
                header('LOCATION:first.php');
            } 
        } 
        else 
        {
            echo '<script type="text/javascript">alert("Invalid Password");</script>';
   	    }
   }  
 } 
 else 
{
    header('LOCATION:login_signup.php');
    echo '<script type="text/javascript">alert("Not Registered--Sign-up for free");</script>';
}
mysqli_close($conn);
?>