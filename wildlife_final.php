<?php
include 'session.php';

?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Wildlife Sanctuary Packages</title>
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
              <img src="img1/cc.jpg" alt="Shoes" width="500" height="100"/>
            </div>
            <div class="features col-7">
              <h2>Features</h2>
              <ul>
                <li>Lunch</li>
<li>Parking and Toll tax</li>
<li>Meet & greet at arrival</li>
<li>Dinner</li>
<li>Sightseeing in shared vehicle</li>
<li>Pick and Drop at time of arrival/departure</li>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="side side-front side-front1">
        <div class="container-fluid">
          <div class="row">
            <div class="product-image col-12 col-lg-5">
              <img src="img1/bh.jpg" alt="Shoes" width="450" height="300"/>            </div>
            <div class="content col-12 col-lg-7">
              <h2>Bandhavgarh National Park</h2>
              <div class="price-rating">
                <div class="price">
                  <h3>Price:</h3>
                  <p>Rs.6,000</p>
                </div>
                <div class="rating">
                  <h3>Rating: <span class="rating-text">4.5</span></h3>
                  <div id="rateYo1"></div>
                </div>
              </div>
              <div class="details">
                <p>

Take a break from your daily routine and spend refreshing time in the city of Jabalpur. During this 3-day tour, visit Bandhavgarh National Park, a delightful home to animals like tigers, leopards, and various species of deer. The lush green forests contain a variety of bird species, like eagles. The Narmada River has shaped the soft marble rocks of Bhedaghat to create a gorge that offers a fascinating sight.
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
              <img src="img1/cd.jpg" alt="Shoes" width="500" height="500"/>
            </div>
            <div class="features col-7">
              <h2>Features</h2>
              <ul>
                <li>Lunch</li>
<li>Parking and Toll tax</li>
<li>Meet & greet at arrival</li>
<li>Dinner</li>
<li>Sightseeing in shared vehicle</li>
<li>Pick and Drop at time of arrival/departure</li>
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
              <img src="img1/cor.jpg" alt="Shoes" width="450" height="300"/>
            </div>
            <div class="content col-12 col-lg-7">
              <h2>Corbett National Park</h2>
              <div class="price-rating">
                <div class="price">
                  <h3>Price:</h3>
                  <p>Rs.6,000</p>
                </div>
                <div class="rating">
                  <h3>Rating: <span class="rating-text">4.5</span></h3>
                  <div id="rateYo2"></div>
                </div>
              </div>
              <div class="details">
                <p>
                Named after the famous hunter, author and conservationist Jim Corbett, the Corbett National Park is one of the finest tiger habitats in India. Nestled at the foothills of the Himalayas in Uttarakhand, the park extends over a tract of 520 square kilometers. It is a large valley with forested ridges running through it
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
              <img src="img1/ce.jpg" alt="Shoes" width="500" height="500"/>
            </div>
            <div class="features col-7">
              <h2>Features</h2>
              <ul>
                <li>Lunch</li>
<li>Parking and Toll tax</li>
<li>Meet & greet at arrival</li>
<li>Dinner</li>
<li>Sightseeing in shared vehicle</li>
<li>Pick and Drop at time of arrival/departure</li>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="side side-front side-front3">
        <div class="container-fluid">
          <div class="row">
            <div class="product-image col-12 col-lg-5">
              <img src="img1/nan.jpg" alt="Shoes" width="450" height="300"/>
            </div>
            <div class="content col-12 col-lg-7">
              <h2>Nanda Devi National Park</h2>
              <div class="price-rating">
                <div class="price">
                  <h3>Price:</h3>
                  <p>Rs.8,000</p>
                </div>
                <div class="rating">
                  <h3>Rating: <span class="rating-text">4.5</span></h3>
                  <div id="rateYo3"></div>
                </div>
              </div>
              <div class="details">
                <p>
                One of the most scenic national parks in the country, Nanda Devi National Park lies in the foothills of the Nanda Devi Mountains. It is located in the Chamoli district of Uttarakhand, and is a must visit from Auli. This park is divided into the Outer Sanctuary and Inner Sanctuary
                </p>
              </div>
              <<a href="coming_soon.php"><div class="button">BOOK NOW</div></a>
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
              <img src="img1/cf.jpg" alt="Shoes" width="500" height="500"/>
            </div>
            <div class="features col-7">
              <h2>Features</h2>
              <ul>
                <li>Lunch</li>
<li>Parking and Toll tax</li>
<li>Meet & greet at arrival</li>
<li>Dinner</li>
<li>Sightseeing in shared vehicle</li>
<li>Pick and Drop at time of arrival/departure</li>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="side side-front side-front4">
        <div class="container-fluid">
          <div class="row">
            <div class="product-image col-12 col-lg-5">
              <img src="img1/mha.jpg" alt="Shoes"width="450" height="300"/>
            </div>
            <div class="content col-12 col-lg-7">
              <h2>Mhadei Wildlife Sanctuary</h2>
              <div class="price-rating">
                <div class="price">
                  <h3>Price:</h3>
                  <p>Rs.28,000</p>
                </div>
                <div class="rating">
                  <h3>Rating: <span class="rating-text">4.5</span></h3>
                  <div id="rateYo4"></div>
                </div>
              </div>
              <div class="details">
                <p>
                Spread across 208 sq km, and at a distance of 52 km from Panaji, lies the expansive and verdant Mhadei Wildlife Sanctuary of Goa. Situated in North Goa this park is rich in flora and fauna and has a large presence of Royal Bengal Tigers. A picturesque road journey through hills, waterfalls, and valleys takes you to the sanctuary from Panaji
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
              <img src="img1/cg.jpg" alt="Shoes" width="500" height="500"/>
            </div>
            <div class="features col-7">
              <h2>Features</h2>
              <ul>
                <li>Lunch</li>
<li>Parking and Toll tax</li>
<li>Meet & greet at arrival</li>
<li>Dinner</li>
<li>Sightseeing in shared vehicle</li>
<li>Pick and Drop at time of arrival/departure</li>
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
              <img src="img1/pur.jpg" alt="Shoes" width="450" height="300"/>
            </div>
            <div class="content col-12 col-lg-7">
              <h2>Purna Wildlife Sanctuary</h2>
              <div class="price-rating">
                <div class="price">
                  <h3>Price:</h3>
                  <p>Rs.8,000</p>
                </div>
                <div class="rating">
                  <h3>Rating: <span class="rating-text">4.5</span></h3>
                  <div id="rateYo5"></div>
                </div>
              </div>
              <div class="details">
                <p>
                The Purna Sanctuary in Saputara is located in the Western ghats of the country and is observed to be surrounded by the dense forests. The area covered by the Purna Sanctuary spreads up to 160 square kilometer. It was sanctioned as a sanctuary in 199
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
