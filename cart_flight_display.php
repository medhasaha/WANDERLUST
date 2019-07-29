<?php
include 'session.php';
include 'connect.php';
include 'cfunction.php';
$user=$_SESSION['username1'];
$q="SELECT * FROM `my_cart_flight` WHERE user='$user'";
$query = mysqli_query($conn,$q);
	//echo $q;
while($row=mysqli_fetch_array($query))
    {

    $name=$row['airlinename'];
    $dept_time=$row['dept_time'];
    $arrival_time=$row['arrival_time'];
    $price=$row['price'];
    $to_from=$row['to_from'];
    $url=$name.".jpg";
    flights($name,$url,$dept_time,$arrival_time,$price,$to_from);



    }
?>