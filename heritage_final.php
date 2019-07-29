<?php
include 'session.php';
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Heritage Packages</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.css'>

      <link rel="stylesheet" href="css/packagestyle.css">

  
</head>

<body>
<div class="w3-bar w3-white w3-large">
  <a href="first.php" class="w3-bar-item w3-button w3-mobile"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="hotel.php" class="w3-bar-item w3-button w3-DodgerBlue w3-mobile"><i class="fa fa-bed w3-margin-right"></i>Hotels</a>
  <a href="flightfront.php" class="w3-bar-item w3-button w3-mobile"><i class="fa fa-fighter-jet w3-margin-right"></i>Flights</a>
  <a href="page2.php" class="w3-bar-item w3-button w3-mobile"><i class="fa fa-globe w3-margin-right"></i>Explore</a>

</div>
  <div class="wrapper">
  <svg class="header" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
    <polygon fill="white" points="0,0 100,100 0,100"/>
  </svg>
  <div class="card-container card-container1">
    <div class="card-body">
      <div class="side side-back">
        <div class="container-fluid">
          <div class="row">
            <div class="product-image col-5">
              <img src="img1/ge.jpg" alt="Shoes" />
            </div>
            <div class="features col-7">
              <h2>Features</h2>
              <ul>
<li>Accommodation in a well appointed room</li>
<li>Meal as per Plan</li>
<li>All transfers and sightseeing as per the itinerary in an air-conditioned vehicle.</li>
<li>All Toll taxes, Parking & State Tax</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="side side-front side-front1">
        <div class="container-fluid">
          <div class="row">
            <div class="product-image col-12 col-lg-5">
              <img src="img1/glo.jpg" alt="Shoes" width="450" height="300"/>
            </div>
            <div class="content col-12 col-lg-7">
              <h2>3 glorious gem of Rajasthan</h2>
              <div class="price-rating">
                <div class="price">
                  <h3>Price:</h3>
                  <p>Rs.8,000</p>
                </div>
                <div class="rating">
                  <h3>Rating: <span class="rating-text">4.5</span></h3>
                  <div id="rateYo1"></div>
                </div>
              </div>
              <div class="details">
                <p>
                Undulating hills, picturesque lakes, incredible monuments, and breath-taking gardens make Rajasthan a renowned holiday destination for tourists from across the globe. The entire state is sprinkled with dazzling colors and you can see this in the people’s clothing, the lively markets, and the numerous fairs and festivals
                </p>
              </div>
              <a href="coming_soon.php"><div class="button">BOOK NOW</div></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flip">
    <div class="flip-button flip-button1">
      <i class="flip-icon fa fa-angle-double-up" aria-hidden="true"></i>
    </div>
    <p>Flip</p>
  </div>
</div>

<div class="wrapper">
  <svg class="header" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
    <polygon fill="white" points="0,0 100,100 0,100"/>
  </svg>
  <div class="card-container card-container2">
    <div class="card-body">
      <div class="side side-back">
        <div class="container-fluid">
          <div class="row">
            <div class="product-image col-5">
              <img src="img1/gf.jpg" alt="Shoes" />
            </div>
            <div class="features col-7">
              <h2>Features</h2>
              <ul>
                <li>Welcome drink on arrival</li>
<li>Wi-Fi</li>
<li>Parking and Toll tax</li>
<li>Meet & greet at arrival</li>
<li>Pick and Drop at time of arrival/departure</li>
<li>Driver's allowance, Road tax and Fuel charges
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="side side-front side-front2">
        <div class="container-fluid">
          <div class="row">
            <div class="product-image col-12 col-lg-5">
              <img src="img1/del.jpg" alt="Shoes" width="450" height="300"/>
            </div>
            <div class="content col-12 col-lg-7">
              <h2>Bazaars of Delhi</h2>
              <div class="price-rating">
                <div class="price">
                  <h3>Price:</h3>
                  <p>Rs.2,000</p>
                </div>
                <div class="rating">
                  <h3>Rating: <span class="rating-text">4.5</span></h3>
                  <div id="rateYo2"></div>
                </div>
              </div>
              <div class="details">
                <p>

The regal Delhi, which many years back was, a throne of authority for several rulers and emperors continues to reign as the political capital of India. Explore the charm of this magnificent destination as you visit the fascinating monuments, art galleries, impressive government buildings, interesting museums and bustling, colorful bazaars
                </p>
              </div>
              <a href="coming_soon.php"><div class="button">BOOK NOW</div></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flip">
    <div class="flip-button flip-button2">
      <i class="flip-icon fa fa-angle-double-up" aria-hidden="true"></i>
    </div>
    <p>Flip</p>
  </div>
</div>

<div class="wrapper">
  <svg class="header" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
    <polygon fill="white" points="0,0 100,100 0,100"/>
  </svg>
  <div class="card-container card-container3">
    <div class="card-body">
      <div class="side side-back">
        <div class="container-fluid">
          <div class="row">
            <div class="product-image col-5">
              <img src="img1/gg.jpg" alt="Shoes" />
            </div>
            <div class="features col-7">
              <h2>Features</h2>
              <ul>
                
<li>Accommodation in a well appointed room</li>
<li>Meal as per Plan</li>
<li>All transfers and sightseeing as per the itinerary in an air-conditioned vehicle.</li>
<li>All Toll taxes, Parking & State Tax</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="side side-front side-front3">
        <div class="container-fluid">
          <div class="row">
            <div class="product-image col-12 col-lg-5">
              <img src="img1/jj.png" alt="Shoes" width="450" height="300"/>
            </div>
            <div class="content col-12 col-lg-7">
              <h2>Padharo Rajasthan</h2>
              <div class="price-rating">
                <div class="price">
                  <h3>Price:</h3>
                  <p>Rs.28,000</p>
                </div>
                <div class="rating">
                  <h3>Rating: <span class="rating-text">4.5</span></h3>
                  <div id="rateYo3"></div>
                </div>
              </div>
              <div class="details">
                <p>
                Rajasthan, the epitome of royalty, is one of India's most culturally vibrant states. This 'Land of the Kings' has a glorious past and this is reflected in the towering forts, magnificent palaces and intricate marble temples. 
               </p>
              </div>
              <a href="coming_soon.php"><div class="button">BOOK NOW</div></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flip">
    <div class="flip-button flip-button3">
      <i class="flip-icon fa fa-angle-double-up" aria-hidden="true"></i>
    </div>
    <p>Flip</p>
  </div>
</div>

<div class="wrapper">
  <svg class="header" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
    <polygon fill="white" points="0,0 100,100 0,100"/>
  </svg>
  <div class="card-container card-container4">
    <div class="card-body">
      <div class="side side-back">
        <div class="container-fluid">
          <div class="row">
            <div class="product-image col-5">
              <img src="img1/gh.jpg" alt="Shoes" />
            </div>
            <div class="features col-7">
              <h2>Features</h2>
              <ul>
                
<li>Accommodation in a well appointed room</li>
<li>Meal as per Plan</li>
<li>All transfers and sightseeing as per the itinerary in an air-conditioned vehicle.</li>
<li>All Toll taxes, Parking & State Tax</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="side side-front side-front4">
        <div class="container-fluid">
          <div class="row">
            <div class="product-image col-12 col-lg-5">
              <img src="img1/jai.jpg" alt="Shoes" width="450" height="300"/>
            </div>
            <div class="content col-12 col-lg-7">
              <h2>Mehrangarh Fort,Jaisalmer fort</h2>
              <div class="price-rating">
                <div class="price">
                  <h3>Price:</h3>
                  <p>Rs.8,000</p>
                </div>
                <div class="rating">
                  <h3>Rating: <span class="rating-text">4.5</span></h3>
                  <div id="rateYo4"></div>
                </div>
              </div>
              <div class="details">
                <p>

Join us on an exciting journey across the royal state of Rajasthan and experience its pulsating culture. A land with battle-scarred forts, opulent palaces and bustling markets, Rajasthan is sure to delight the explorer in you. It has a plethora of architectural marvels like the mighty Mehrangarh Fort, Jaisalmer Fort and the many city palaces
                </p>
              </div>
              <a href="coming_soon.php"><div class="button">BOOK NOW</div></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flip">
    <div class="flip-button flip-button4">
      <i class="flip-icon fa fa-angle-double-up" aria-hidden="true"></i>
    </div>
    <p>Flip</p>
  </div>
</div>

<div class="wrapper">
  <svg class="header" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
    <polygon fill="white" points="0,0 100,100 0,100"/>
  </svg>
  <div class="card-container card-container5">
    <div class="card-body">
      <div class="side side-back">
        <div class="container-fluid">
          <div class="row">
            <div class="product-image col-5">
              <img src="img1/gi.jpg" alt="Shoes" />
            </div>
            <div class="features col-7">
              <h2>Features</h2>
              <ul>
                <li>Welcome drink on arrival</li>
<li>Wi-Fi</li>
<li>Parking and Toll tax</li>
<li>Meet & greet at arrival</li>
<li>Pick and Drop at time of arrival/departure</li>
<li>Driver's allowance, Road tax and Fuel charges
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="side side-front side-front5">
        <div class="container-fluid">
          <div class="row">
            <div class="product-image col-12 col-lg-5">
              <img src="img1/laal.jpg" alt="Shoes" width="450" height="300"/>
            </div>
            <div class="content col-12 col-lg-7">
              <h2>Delhi Monuments</h2>
              <div class="price-rating">
                <div class="price">
                  <h3>Price:</h3>
                  <p>Rs.1,000</p>
                </div>
                <div class="rating">
                  <h3>Rating: <span class="rating-text">4.5</span></h3>
                  <div id="rateYo5"></div>
                </div>
              </div>
              <div class="details">
                <p>

Once you arrive in Delhi, head to the hotel and check-in. Later, proceed for a sightseeing tour, visit the Qutub Minar, India Gate and the imposing government buildings like the President House, Red Fort and Mahatma Gandhi Memorial. Also visit Laxmi Narayan Temple, which is known as Birla Temple. Overnight stay in Delhi.
                </p>
              </div>
              <a href="coming_soon.php"><div class="button">BOOK NOW</div></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flip">
    <div class="flip-button flip-button5">
      <i class="flip-icon fa fa-angle-double-up" aria-hidden="true"></i>
    </div>
    <p>Flip</p>
  </div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.js'></script>

<script>
function toggleFlip1() {
  this.classList.toggle('flipped');
  
  var cardContainer = document.querySelector('.card-container1');
  cardContainer.classList.toggle('flipped');
  
  var sideFront = document.querySelector('.side-front1');
  sideFront.classList.toggle('disappear');
}

var flipButton = document.querySelector('.flip-button1');

flipButton.addEventListener('click', toggleFlip1);

function toggleFlip2() {
  this.classList.toggle('flipped');
  
  var cardContainer = document.querySelector('.card-container2');
  cardContainer.classList.toggle('flipped');
  
  var sideFront = document.querySelector('.side-front2');
  sideFront.classList.toggle('disappear');
}

var flipButton = document.querySelector('.flip-button2');

flipButton.addEventListener('click', toggleFlip2);

function toggleFlip3() {
  this.classList.toggle('flipped');
  
  var cardContainer = document.querySelector('.card-container3');
  cardContainer.classList.toggle('flipped');
  
  var sideFront = document.querySelector('.side-front3');
  sideFront.classList.toggle('disappear');
}

var flipButton = document.querySelector('.flip-button3');

flipButton.addEventListener('click', toggleFlip3);

function toggleFlip4() {
  this.classList.toggle('flipped');
  
  var cardContainer = document.querySelector('.card-container4');
  cardContainer.classList.toggle('flipped');
  
  var sideFront = document.querySelector('.side-front4');
  sideFront.classList.toggle('disappear');
}

var flipButton = document.querySelector('.flip-button4');

flipButton.addEventListener('click', toggleFlip4);

function toggleFlip5() {
  this.classList.toggle('flipped');
  
  var cardContainer = document.querySelector('.card-container5');
  cardContainer.classList.toggle('flipped');
  
  var sideFront = document.querySelector('.side-front5');
  sideFront.classList.toggle('disappear');
}

var flipButton = document.querySelector('.flip-button5');

flipButton.addEventListener('click', toggleFlip5);


// Rating jQuery Plugin

$(function () {
 
  $("#rateYo1,#rateYo2,#rateYo3,#rateYo4,#rateYo5").rateYo({
    rating: 4.5,
    starWidth: "25px",
    normalFill: "#f7f3cd"
  }).on("rateyo.change", function (e, data) {
    var rating = data.rating;
    $('.rating-text').text(rating);
  });
  
});    
</script>

</body>
</html>
