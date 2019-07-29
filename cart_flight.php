<?php
include 'session.php';
include 'connect.php';
$user=$_SESSION['username1'];

$name=$_POST["name"];
$name=str_replace("."," ",$name);

//$url1=str_replace("X"," ",$url);
echo $url1;
$price=$_POST["price"];
$deptT=$_POST["dept"];


$arrT=$_POST["arr"];
$to_from=$_POST["fromto"];
$sql="INSERT INTO `my_cart_flight`(`user`,`airlinename`,`dept_time`,`arrival_time`,`price`,`to_from`)VALUES('$user','$name','$deptT','$arrT','$price','$to_from')";
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