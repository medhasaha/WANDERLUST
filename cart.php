<?php
include 'session.php';
include 'connect.php';
$user=$_SESSION['username1'];
$name=$_POST["name"];
$url=$_POST["img"];
$price=$_POST["price"];
$city=$_POST["city"];
$name=str_replace('.', " ", $name);
$sql="INSERT INTO `my_cart`(`user`,`name`,`price`,`img`,`city`)VALUES('$user','$name','$price','$url','$city')";
$var = mysqli_query($conn,$sql);
if($var>0)
{
	header('LOCATION:first.php');
}
else
{
	echo $sql;
}

?>