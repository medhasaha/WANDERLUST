<?php


include 'connect.php';  //require
include 'functions.php';
$name = $_REQUEST['tname'];
$usr_name = $_REQUEST['tusername'];
$usr_email= $_REQUEST['temail'];
$usr_pwd  = $_REQUEST['tpass'];
$usr_con_pwd  = $_REQUEST['tconpass'];
$usr_mobile  = $_REQUEST['tmobile'];
$usr_age  = $_REQUEST['tage'];
$gender=$_REQUEST['gender'];
$usr_address  = $_REQUEST['taddress'];

if(validate_email($usr_email)!=1||validate_mobile($usr_mobile)!=1||validate_age($usr_age)!=1||validate_user($usr_name,$name)!=1||validate_password($usr_pwd,$usr_con_pwd)!=1|| validate_address($usr_address)!=1)
{
   echo '<script type="text/javascript">alert(" INVALID VALUE");</script>';
}
else 
{
    $query1 = "SELECT * FROM `signup` WHERE username='$usr_name'";
    $exec1=mysqli_query($conn,$query1);
    if(mysqli_num_rows($exec1)>0)
    {
        echo '<script type="text/javascript">alert(" Already Registered ");</script>'; 
    } 
    else 
    {
        $query = "INSERT INTO signup(name,username,email,password,con_password,phone,age,gender,address,status)VALUES('$name','$usr_name', '$usr_email','$usr_pwd','$usr_con_pwd','$usr_mobile','$usr_age','$gender','$usr_address','signup')" ;
        $var = mysqli_query($conn,$query);
        if($var)
        {
            header('LOCATION:login_signup.php');
           // echo "Registration Successful";
        } 
        else
        {
            echo '<script type="text/javascript">alert(" Sign-up Failed ");</script>';  
        }
    }
}
mysqli_close($conn);

?>

