<?php
include 'session.php';
?>
<html>
<head><title>EXPLORE CITIES</title>
 <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>

      <link rel="stylesheet" href="css/ss.css">
</head>

<body>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places&types=(regions)&key=AIzaSyBH6tZ7PcZU-3TjNJdBIo1MnGhbaKCKCYg" type="text/javascript"></script>

<form action ="a.php" method="post">
    <div class='column'>
  <div class='search'>
    <div class='search_bar'>
      <input id='searchOne' type='checkbox'>
      <label for='searchOne'>
        <i class='icon ion-android-search'></i>
        <i class='last icon ion-android-close'></i>
        <p>|</p>
      </label>
      <input placeholder='Search...' type='text' id="keyword" name="keyword" size="30">
    </div>
  </div>
   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><img src="img/banner2.png" align="center">
</div>
 
  </form>


<?php
include 'sidebar.php';
  ?>
 <script type="text/javascript">
  
  var autocomplete = new google.maps.places.Autocomplete(document.getElementById('keyword'), { types: ['(cities)']});
</script>

</body>
</html>