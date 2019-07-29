<?php
include 'session.php';
?>

<!DOCTYPE html>
<html>
<title>Hotel Search</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> 
<style>
.mySlides {display:none;}
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}

#abc
{ opacity=0.7;
 filter: alpha(opacity=70); 
}

#id{
  opacity=0.7;
 filter: alpha(opacity=70); 
}
</style>
<body class="w3-DodgerBlue">

<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-large">
  <a href="first.php" class="w3-bar-item w3-button w3-mobile"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="hotel.php" class="w3-bar-item w3-button w3-DodgerBlue w3-mobile"><i class="fa fa-bed w3-margin-right"></i>Hotels</a>
  <a href="flightfront.php" class="w3-bar-item w3-button w3-mobile"><i class="fa fa-fighter-jet w3-margin-right"></i>Flights</a>
  <a href="page2.php" class="w3-bar-item w3-button w3-mobile"><i class="fa fa-globe w3-margin-right"></i>Explore</a>

</div>
<!-- Header -->
  <header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
<div class="w3-content w3-section" style="max-width:1500px">
  <img class="mySlides" src="img/h7.jpg" alt="The Hotel"  width="1500" height="800">
  <img class="mySlides" src="img/h1.jpg" alt="The Hotel"  width="1500" height="800">
  <img class="mySlides" src="img/H12.jpg" alt="The Hotel"  width="1500" height="800">
  <img class="mySlides" src="img/H14.jpg" alt="The Hotel"  width="1500" height="800">
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
  <div class="w3-display-left w3-padding w3-col l6 m8" style="opacity:0.6" style="hover{opacity:1}">
    <div class="w3-container w3-black" class="op">
      <h2><i class="fa fa-bed w3-margin-right"></i>Hotel Search</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16" >
      <form action="displayhotel.php" method="post">
        <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-calendar-o"></i> Check In</label>
            <input class="w3-input w3-border"  id="datepicker1" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
           </div>
            <div class="w3-half">
            <label><i class="fa fa-calendar-o"></i> Check Out</label>
            <input class="w3-input w3-border"  id="datepicker2" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
            
        </div>
        <div class="w3-row-padding" style="margin:8px -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-home"></i> Room Type</label>
            <input class="w3-input w3-border" type="text" placeholder="Eg.Deluxe,Single Room" name="Room type" required>
          </div>
          <div class="w3-half">
            <label><i class="fa fa-globe"></i>Place</label>
          <input class="w3-input w3-border" id="auto" type="text" placeholder="Eg.Delhi,Mumbai" name="city" required>
          </div>
        </div>
        <button class="w3-button w3-black" type="submit"><i class="fa fa-search w3-margin-right"></i> Search </button>
      </form>
    </div>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1532px;">
    <div class="w3-row-padding w3-padding-16">
    <div class="w3-third w3-margin-bottom">
      <img src="img/s2.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Single Room</h3>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="img/d1.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Double Room</h3>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="img/dl1.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Deluxe Room</h3>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>  
<script type="text/javascript">
$(function() {
  
  //autocomplete
  $("#auto").autocomplete({
    source: 'search.php'
  });       
});
</script>
<link rel="stylesheet" href="css/jquery-ui.css" />
        <script src="js/jquery-ui.js"></script>
          <script>
              $(function() {
              $( "#datepicker1,#datepicker2" ).datepicker();
              });
          </script>
</body>
</html>
