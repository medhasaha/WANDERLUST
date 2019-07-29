<?php
include 'session.php';
//echo $_SESSION['username1'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WANDERLUST</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
  <link rel="icon" href="img/logo.png" sizes="16x16" type="image">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/mystyle.css" rel="stylesheet">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.myLink {display: none}
</style>
<body class="#FFFFFF">



<div>

<!-- Header -->
<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
<div class="w3-content w3-section" style="max-width:1500px">
  <img class="mySlides" src="img/taj lp.jpg" alt="London" width="1500" height="700" class="img-responsive">
  <img class="mySlides" src="img/holi.jpg" alt="London" width="1500" height="700" class="img-responsive">
  <img class="mySlides" src="img/H.jpg" alt="London" width="1500" height="700" class="img-responsive">
  <img class="mySlides" src="img/K.jpg" alt="London" width="1500" height="700" class="img-responsive">
  <img class="mySlides" src="img/L.jpg" alt="London" width="1500" height="700" class="img-responsive">
  </div>
   <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
  <div class="w3-display-middle" style="width:65%">
    <div class="w3-bar w3-black">
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'FLIGHT');"><i class="fa fa-plane w3-margin-right"></i>Flight</button>
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'HOTEL');"><i class="fa fa-bed w3-margin-right"></i>Hotel</button>
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'PACKAGE');"><i class="fa fa-gift w3-margin-right"></i>Packages</button>
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'XPLORE');"><i class="fa fa-globe"></i> Xplore</a></button>
    </div>

    <!-- Tabs -->
    <div id="FLIGHT" class="w3-container w3-white w3-padding-16 myLink">
      <h3>Travel the world with us</h3><br>
      <div class="w3-row-padding" style="margin:0 -16px;">
        <div class="w3-half">
         
        </div>
        <div class="w3-half">
         
        </div>
      </div>
      <p><button class="w3-button w3-dark-grey"><a href="flightfront.php">Search flights</a></button></p>
    </div>

    <div id="HOTEL" class="w3-container w3-white w3-padding-16 myLink">
      <h3>Find the best hotels</h3><br>
      <p>Book a hotel with us and get the best fares and promotions.</p><br></br>
      <p>We know hotels - we know comfort.</p><br></br>
      <p><button class="w3-button w3-dark-grey"> <a href="hotel.php">Search Hotels</a></button></p>
    </div>

    <div id="PACKAGE" class="w3-container w3-white w3-padding-16 myLink">
      <h3>Best Packages in the world!</h3><br>
      <p><span class="w3-tag w3-deep-orange"> SPECIAL OFFERS !!</span>  Travel does the heart good.</p><br>
     
      <p><button class="w3-button w3-dark-grey"><a href="packages.php">View Packages</a></button></p>
    </div>
    <div id="XPLORE" class="w3-container w3-white w3-padding-16 myLink">
      <h3>XPLORE INDIA WITH US</h3><br>
      <p><span class="w3-tag w3-deep-orange">INCREDIBLE INDIA !!</span>   Better to see something once than hear about it a thousand times.</p><br>
      <p><button class="w3-button w3-dark-grey"><a href="page2.php">Xplore</a></button></p>
    </div>
  </div>
</header>
</div>

  <br>
  <br>
  <h3>        Wanderlust Special</h3>
  <br>
  <br>
      <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="img/lotus temple.jpg" alt="lotustemple" style="width:350px;height: 200px;">
      <h3>DELHI</h3>
      <p>Special season sale upto 50% discount</p>
    </div>
    <div class="w3-quarter">
      <img src="img/GOA.jpg" alt="GOA" style="width:350px;height: 200px;">
      <h3>GOA</h3>
      <font color="red"><p>Wanderlust Special</p></font>
    </div>
    <div class="w3-quarter">
      <img src="img/H.jpg" alt="GANGTOK" style="width:350px;height:200px;">
      <h3>GANGTOK</h3>
      <font color="blue"><p>Starting at rupees 20,0000</p></font>
      <p></p>
    </div>
    <div class="w3-quarter">
      <img src="img/3-2.jpg" alt="RAJASTHAN" style="width:350px;height: 200px;">
      <h3>RAJASTHAN</h3>
      <font color="green"><p>Few rooms left Book now!</p></font>
    </div>
  </div>
   <br>
  <br>
  <h3>        Frequently Explored</h3>
  <br>
  <br>
        <!-- second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="img/F.jpg" alt="AJANTA ELLORA" style="width:350px;height: 200px;">
      <h3>AJANTA ELLORA</h3>
      <font color="red"><p>weekend break| affordable prices</p></font>
    </div>
    <div class="w3-quarter">
      <img src="img/new.jpg" alt="JIM CORBETT" style="width:350px;height: 200px;">
      <h3>JIM CORBETT</h3>
      <font color="green"><p>Few rooms left Book now!</p></font>
    </div>
    <div class="w3-quarter">
      <img src="img/K.jpg" alt="DAL LAKE" style="width:350px;height: 200px;">
      <h3>DAL LAKE</h3>
      <font color="blue"><p>Popular deals</p></font>
      <p></p>
    </div>
    <div class="w3-quarter">
      <img src="img/L.jpg" alt="BANARAS" style="width:350px;height: 200px;">
      <h3>BANARAS</h3>
      <font color="blue"><p>Few rooms left Book now!</p></font>
    </div>
  </div>
   <br>
  <br>
  <h3>        Perfect Holidays</h3>
  <br>
  <br>
      <!-- third Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="img/kk.jpg" alt="batao" style="width:350px;height: 200px">
      <h3>Heritage Tours</h3>
      <p>Special tourist provided</p>
    </div>
    <div class="w3-quarter">
      <img src="img/OO.jpg" alt="HONEYMOON" style="width:350px;height: 200px;">
      <h3>SPECIAL HONEYMOON PACKAGES</h3>
      <font color="green"><p>luxury |comfortable stay</p></font>
    </div>
    <div class="w3-quarter">
      <img src="img/YY.jpg" alt="PILGRIMAGE" style="width:350px;height: 200px;">
      <h3>PILGRIMAGE PACKAGE</h3>
      <font color="red"><p>Special offers for senior citizens upto 100% off</p></font>
      <p></p>
    </div>
    <div class="w3-quarter">
      <img src="img/LM.jpg" alt="HILL STATION" style="width:350px;height: 200px;">
      <h3>HILL STATIONS PACKAGES</h3>
      <font color="blue"><p>Few rooms left Book now!</p></font>
    </div>
  </div>
  <?php 
  include 'sidebar.php';
  include 'navbar.php';
  ?>
<script>

// Tabs
function openLink(evt, linkName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("myLink");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(linkName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
// Click on the first tablink on load
document.getElementsByClassName("tablink")[0].click();
</script>

</body>
</html>
