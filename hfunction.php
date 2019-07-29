<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>MY HOTELS</title>
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

      <link rel="stylesheet" href="hcss/style.css">
<link href="hcss/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link href="hcss/style.css" rel="stylesheet" type="text/css" media="all" />	
<script src="js/jquery.min.js"></script>

 <link href="hcss/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	 
    

<link href="hcss/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme style-->
<link href="hcss/style1.css" rel="stylesheet" type="text/css" media="all" />	
<script src="js/jquery.min.js"></script>

<!--//theme style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="hcss/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	    
</head>

<body>
   <div class="header-top">
	 <div class="header-bottom">			
				<div class="logo">
					<h1><a href="index.html">WANDERLUST</a></h1>					
				</div>
			 <!---->		 
			 <div class="top-nav">
				<ul class="memenu skyblue"><li class="active"><a href="first.php">Home</a></li>
					<li class="grid"><a href="cart_hotel_display.php">My Hotels</a>
					<li class="grid"><a href="cart_flight_display.php">My Flights</a>				
				</ul>				
			 </div>
			 <div class="cart box_1">
				 <a href="checkout.html">
					<div class="total">
					<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)</div>
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
				</a>
				<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
			 	<div class="clearfix"> </div>
			 </div>
			 <div class="clearfix"> </div>
			 <!---->			 
			 </div>
			<div class="clearfix"> </div>
</div>

<?php

function hotels($name,$url,$price,$city)
{


?>
    
  <div class="product-card">
    <div class="product-image">
    <img src="<?php echo $url?>">
  </div>
  <div class="product-details">
    <h1><?php echo $name?></h1>
      <p><bold><br>CITY : <?php echo $city?></br><br>PRICE : Rs. <?php echo $price?></br></bold></p>
    <br>
    <a href="coming_soon.php">
    <button type="button" class="btn">Book Now</button>
    </a>
  </div>
</div>
<?php
}
?>

  
</body>
</html>
