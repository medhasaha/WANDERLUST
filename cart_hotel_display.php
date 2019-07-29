<?php
include 'session.php';
include 'connect.php';
include 'hfunction.php';
$user=$_SESSION['username1'];
$q="SELECT * FROM `my_cart` WHERE user='$user'";
$query = mysqli_query($conn,$q);
	//echo $q;
while($row=mysqli_fetch_array($query))
    {

    $name=$row['name'];
   
    $price=$row['price'];
    $url=$row['img'];
    $city=$row['city'];
    hotels($name,$url,$price,$city);



    }
?>