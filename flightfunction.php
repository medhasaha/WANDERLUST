<?php
include 'sidebar.php';
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>MY HOTELS</title>
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel="stylesheet" href="cssf/style.css">
<link href="cssf/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="cssf/style.css" rel="stylesheet" type="text/css" media="all" />	
<link href="cssf/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="cssf/style1.css" rel="stylesheet" type="text/css" media="all" />	
<script src="jsf/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="cssf/memenu.css" rel="stylesheet" type="text/css" media="all" />
	    
</head>

<body>
<?php
function displayflight($name,$fromto,$dep,$arr,$dur,$price)
{
  $name=ltrim($name);
  $name=rtrim($name);
  $url=$name.".jpg";

  //echo $url;
$a=str_replace(" ",".", $name);
//echo $dep;
?>

  <div class="product-card">
    <div class="product-image">
<form action ="cart_flight.php" method="post">
        <input type="hidden" value=<?php echo $a; ?> name="name">
        <input type="hidden" value=<?php echo $price; ?> name="price">
        
        <input type="hidden" value=<?php echo $dep; ?> name="dept">
        <input type="hidden" value=<?php echo $arr; ?> name="arr">
        <input type="hidden" value=<?php echo $fromto; ?> name="fromto">

    <img src='<?php echo $url ?>' alt="Spice">
  </div>
  <div class="product-details">
    <h1><?php echo $name?></h1>
      <p><bold><br><?php echo $fromto ?></br><br>Departure Time : <?php echo $dep ?></br><br>Arrival Time : <?php echo $arr?></br><br><?php echo $price ?></br></bold></p>
    <button type="submit" class="btn">ADD TO CART</button>
  </div>
</div>
</form>

<?php
}
?>
  
   
</body>
</html>
