<!DOCTYPE html>
<html>
<title>WANDERLUST</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
    background-color: #000000;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('img/wanderlust1.jpg');
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("img/travel.gif");
    min-height: 500px;
}


.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> ABOUT INDIA</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT WANDERLUST</a>
    <!--<a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>-->
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
      <i class="fa fa-search"></i>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <!--<a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>-->
    <a href="#" class="w3-bar-item w3-button">SEARCH</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
   <img src="img/logo1.png" length="200px" width="210px"><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px"> <a href="login_signup.php">LOGIN / SIGNUP></a></button>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h2 class="w3-center">WELCOME TO INDIA</h2>
  <p>
  The land which has undoubtedly its own way of life; the land that showcases the scintillating part of natural beauty, majestic culture, ancient heritage and grand wildlife; India invites all for a tremendous classical tour at its variant location for various purposes and for different reasons for celebration.</p>

<p>From Northern Himalayas to Southern beaches, Eastern jungles to Western deserts, India is flourished with so many cultural and geographical diversities, a perfect reason for India tourism. There is simply no other words that catch the true enigma of this land where great legends still holds its power and impression, the grand architectural structures are the true reflector of history and the life of the spirit can be sacredly glimpsed at different temples and pilgrimage sites at its every corner.</p>

<p>Royal Rajasthan, lying at the west end part is the most blissful state where colorful attires and vibrant cultures are its true enigma. The land of the Rajputs showcases many forts and palaces and sustained museums drawing people to experience impressive travel to India. The city palace in Jaipur and Udaipur are the true pride of royal Rajputana kingdom, Lake Palace in Udaipur at Jag Niwas Island reflects the true sanctity of pure white marble structure. The Chittorgarh Fort symbolizes the valorous tradition of Rajputs. The Amber Fort is the true emblem of both Rajputana and Mughal architectural marvels. Besides, the world famous Pushkar Fair brings huge amount of camel and cattle trade with ancient Hindu practices.</p>

<p>India is also framed with many spiritual and holy regions right from the sacred Himalayan valleys to the oceanic temples of South. Badrinath, Haridwar, Rishikesh, Varanasi, Dwarka at North-east region; Puri, Somenath, Mahabalipuram, Hoysla, Meenakshi Temple, Tirupati Balaji Temple, Konark (Sun) Temple and Ramshwaram Temple in South India are the sacred destination to attain spirituality.</p>

<p>The history of India is engraved deeply and incessantly at its ancient paintings, rock carved structures and sculptures at different ancient caves and monuments. The Ajanta, Ellora and Elephanta in Maharashtra, Hoysala Architecture and temple in Karnataka and ancient Mahabalipuram in Tamil Nadu are the perfect examples for historical connections in India.</p>

<p>India Tourism also brings a fantastic opportunity of backwater tour in its vast, eloquent beaches. The magnanimous beaches of Kerala, Goa, Maharashtra and Tamil Nadu soak ever moods along with the tranquility of the nature. Kovalam, Baga, Marine Drive, Calangute, Juhu Beach, Dona Paula Beach are some of the magnificent sea-sides that brings tremendous enjoyable options for the party freaks and the romantic honeymooners along with some relaxing Ayurvedic Treatment Centers and Spa therapies.</p>

<p>But above all these fantastic features, the most royal experience one can have with India tourism is its grand wildlife tour at different dense jungles and sanctuaries. For the welfare of the endangered species and balancing the eco-system, India is designed with more than 500 sanctuaries and bio-reserve. India proudly holds tremendous counts of wild species in the respective zones for great wilderness. The names of Ranthambore, Corbett and Kanha are most popular for tiger tours, where on the other hand Kaziranga in Assam is the perfect home for great Indian Rhinos along with SasanGir in Gujarat to bring the majestic Asiatic Lions. In addition to this, India is a perfect paradise for the bird watchers and for the enthusiastic ornithologists who can easily visit Bharatpur Bird Sanctuary in Rajasthan, Chilka Lake Bird Sanctuary in Orissa, Thattekad Bird Sanctuary in Kerala and more for much fun and excitements.</p>

<p>India is definitely the land of dreams and fantasy and people visiting this incredible land wish to come again and again and experience the true glory of the nation.
  </p>
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">Xplore Cities</span><br>
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">Search Hotels</span><br>
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">Search Flights</span><br>
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">Choose Packages</span><br>
    
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide"></span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h2 class="w3-center">ABOUT WANDERLUST</h2>
  <h4 class="w3-center"><em>Don't call it a dream, call it a plan</em></h4>
  <p class="w3-center">WANDERLUST takes the privilege to make you get acquainted with the glorified treasures of this amazing ancient country. The country which is full of differences and with the most alluring tour operating services we are ready to assist you to recognize and respect those differences and versatility in a grand and royal manner. From booking, accommodation, transportation and guidance our dedicated members will always stand by you to make the most of your trip.<br><br>

  Be it special interest tours, budget travelling, family holidays, honeymoons or adventure tours, we can make it in a click for you. Being a customer-driven travel company, we fully understand the desires as well as compulsions of the traveler and take them into account while making travel deals. The end result is packages and deals that allow clients to have maximum fun without burning a hole in the pocket.
</p><br>



<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
 
</footer>
 
<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
