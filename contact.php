
<!DOCTYPE html/>
<html>
		
<head>
		<title>Contact Us</title>
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
<div class="container">
	<div class="row">
    	<div class="column">
    		<h4>
			
    		<form  action="action.php" method="POST">
  			Contact us<i class="fa fa-mobile"></i>;<br>
    		<br>
    		<label for="fullname"> Full Name</label>
    		<input type="text" name="fullname" placeholder="Your name..">
    		<label for="email"> Email Address</label>
    		<input type="email" name="emailaddress" placeholder="Your email adress(e.g someone@mail.com)">
    		<label for="location"> Location</label>
        <select id="location" name="location" >
          <option value=" "> </option>
      		<option value="Nairobi CBD">Nairobi CBD</option>
          <option value="Madaraka">Madaraka</option>
          <option value="Karen">Karen</option>
          <option value="South C">South C</option>
          <option value="South B">South B</option>
    		</select>
        <label for="Feedback"> Feedback</label><br>
        <textarea  type="text" name="feedback" placeholder="Tell us something"></textarea>
    		<input type="submit" name="Submit">
  		</form>
    </h4>
		</div>
	<div class="column">
      <div id="map" style="width:100%;height:500px"></div>
    </div>
    <div class="row1"><h4>
    Reach us at
			<i class="fa fa-car"></i>;
			<ul>Nairobi CBD;<br>Corner house,5th floor.Kimathi Street!!!</ul>
			<ul>Madaraka;<br>Strathmore Student Center,1st floor.OleSangale Street!!!</ul>
			<ul>Karen;<br>The Hub,1st floor.Dagoretti road!!!</ul>
			<ul>South C;<br> South C gardens,Ground floor.Muhoho Avenue!!!</ul>
			<ul>South B;<br>Capital Centre, 1st Floor.Mombasa road!!!</ul>
    </h4><br>
    
    <a href="#" class="fa fa-phone"></a> +254702037288 or +254740804376 &nbsp;
	<a href="#" class="fa fa-google"></a> blackrose@caterers.com &nbsp; &nbsp;
	<a href="#" class="fa fa-twitter"></a> @ __blackrosecaterers_ &nbsp; &nbsp;
	<a href="#" class="fa fa-snapchat-ghost"></a> @__blackrose_catering254  &nbsp;</br>
	<a href="#" class="fa fa-facebook"></a> @__blackrose_caterers  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	<a href="#" class="fa fa-instagram"></a> @__blackrosecaterers254   &nbsp; 
	<a href="#" class="fa fa-pinterest"></a> @__blackrosecaterers254  &nbsp; 
	<a href="#" class="fa fa-tumblr"></a> @__blackrose_caterers254
</div>
</div>
</div>
	<script src="bower_components/jquery/jquery.js"></script>
	
  <script>
  function myMap() {
  var myCenter = new google.maps.LatLng(51.508742,-0.120850);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 12};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTBjqAJOIkH2Ec46XXmxkQKducd3LSa04&callback=myMap"></script>
</body>
</html>
