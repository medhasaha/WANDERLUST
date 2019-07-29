// Inspired by this cool shot of Razvan Hosu:
// https://dribbble.com/shots/3366262-Product-presentation






// Rating jQuery Plugin

$(function () {
 
  $("#rateYo").rateYo({
    rating: 4.5,
    starWidth: "25px",
    normalFill: "#f7f3cd"
  }).on("rateyo.change", function (e, data) {
    var rating = data.rating;
    $('.rating-text').text(rating);
  });
  
});