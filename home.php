<!DOCTYPE html/>
<html>
		
<head>
		<title>Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<div class="hero-image">
        <a href="home.php"><button class="button"><i>Home</i></button></a>
        <a href="offers.php" ><button class="button"><i>Offers</i></button></a>
        <a href="about.php"><button class="button"><i>About</i></button></a>  
        <a href="contact.php"><button class="button"><i>Contact Us</i></button></a>  
 		 <div class="hero-text">
    		<h1 style="font-size:40px"> BlackRose Catering Services</h1>
    		<p><h2 style="font-size:160%">Where tasteful creations begin </h2></p>
    		<a href="order.php"><button>Place Order</button></a>
  		</div>
	</div>

    <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 /4</div>
    <img src="birthday.jpg" style="width:100%">
    <div class="text">Celebrate your birthday in style</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 /4</div>
    <img src="wedding.jpg" style="width:100%">
    <div class="text">Let us cater for your fairytale dream wedding</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 4</div>
    <img src="corporate.jpg" style="width:100%">
    <div class="text">Hold your meetings in style and impress your shareholders</div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">4/4</div>
    <img src="funeral.jpg" style="width:100%">
    <div class="text">Celebrate your loved one's life and enjoy the moments you shared</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
</div>
<br><br>
    <a href="#" class="fa fa-phone"></a> +254702037288 or +254740804376 &nbsp;
    <a href="#" class="fa fa-google"></a> blackrose@caterers.com &nbsp; &nbsp;
    <a href="#" class="fa fa-twitter"></a> @ __blackrosecaterers_ &nbsp; &nbsp;
    <a href="#" class="fa fa-snapchat-ghost"></a> @__blackrose_catering254  &nbsp;</br>
    <a href="#" class="fa fa-facebook"></a> @__blackrose_caterers  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <a href="#" class="fa fa-instagram"></a> @__blackrosecaterers254   &nbsp; 
    <a href="#" class="fa fa-pinterest"></a> @__blackrosecaterers254  &nbsp; 
    <a href="#" class="fa fa-tumblr"></a> @__blackrose_caterers254


</body>
</html>
<script type="text/javascript">
    var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}

    </script>