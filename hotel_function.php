
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>WANDERLUST</title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.css'>

      <link rel="stylesheet" href="css/style_hotel.css">
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.js'></script>
  <!-- Navigation Bar -->
<div class="w3-bar w3-white w3-large">
  <a href="first.php" class="w3-bar-item w3-button w3-mobile"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="hotel.php" class="w3-bar-item w3-button w3-DodgerBlue w3-mobile"><i class="fa fa-bed w3-margin-right"></i>Hotels</a>
  <a href="flightfront.php" class="w3-bar-item w3-button w3-mobile"><i class="fa fa-fighter-jet w3-margin-right"></i>Flights</a>
  <a href="page2.php" class="w3-bar-item w3-button w3-mobile"><i class="fa fa-globe w3-margin-right"></i>Explore</a>

</div>

<?php
function displayhotel($city,$price,$rating,$img,$loc,$title)
{
  $t=str_replace(" ",".", $title);
?>
<div class="wrapper">

  <svg class="header" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
    <polygon fill="white" points="0,0 100,100 0,100"/>
  </svg>
  <div class="card-container">

    <div class="card-body">
      <div class="side side-front">
        <div class="container-fluid">
        <form action ="cart.php" method="post">
        <input type="hidden" value=<?php echo $t; ?> name="name">
        <input type="hidden" value=<?php echo $price; ?> name="price">
        <input type="hidden" value=<?php echo $img ?> name="img">
        <input type="hidden" value=<?php echo $city; ?> name="city">
        <input type="hidden" value=<?php echo $loc; ?> name="location">
          <div class="row">
            <div class="product-image col-12 col-lg-5">
              <img src="<?php echo $img; ?>" alt="Shoes" />
            </div>
            <div class="content col-12 col-lg-7">
              <h2><?php echo $title; ?></h2>
              <div class="price-rating">
                <div class="price">
                  <h3>Price:</h3>
                  <p>Rs.<?php echo $price; ?></p>
                </div>
                
                <div class="rating">
                  <h3>Rating: <span class="rating-text"><?php echo $rating; ?></span></h3>
                  <div id="rateYo<?php echo $price;?>">OK</div>
                </div>
              </div>
              <div class="details">
                <p>
                <h4> LOCATION </h4>
             <?php echo $loc; ?>
                </p>
              </div>
              <div>
              <button type="Submit" class="button">Add to Cart</button></div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
 



    <script type="text/javascript">
       
 
  $("#rateYo<?php echo $price;?>").rateYo({
    rating: <?php echo $rating;?>,
    starWidth: "25px",
    normalFill: "#f7f3cd"
  }); 



    </script>
<?php
}

?>