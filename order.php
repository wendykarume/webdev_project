<!DOCTYPE html/>
<html>
    
<head>
    <title>Order</title>
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
      </div>
  </div>
  <form  action="submit.php" method="POST">
  			Order from us<i class="fa fa-share "></i>;<br>
    		<br>  
    		<label for="fullname"> Full Name</label>
    		<input type="text" name="fullname" placeholder="Your name..">
    		<label for="email"> Email Address</label>
    		<input type="email" name="emailaddress" placeholder="Your email adress(e.g someone@mail.com)">
    		<label for="pickUp">Delivery</label>
        <select id="pickup" name="pickUp" >
      		<option value=" "> </option>
          <option value="Deliver">Deliver</option>
          <option value="Pick Up">Pick Up</option>
    		</select>
        <label for="day">Day</label>
        <select id="day" name="Day" >
          <option value=" "> </option>
          <option value="Weekday">Weekday</option>
          <option value="Weekend">Weekend</option>
        </select>
        <label for="time">Time</label>
        <select id="time" name="Time" >
          <option value=" "> </option>
          <option value="Morning">Morning</option>
          <option value="Afternoon">Afternoon</option>
          <option value="Afternoon">Evening</option>
        </select>
        <label for="event">Event</label>
        <select id="event" name="Event" >
          <option value=" "> </option>
          <option value="Corporate">Corporate</option>
          <option value="Wedding">Wedding</option>
          <option value="Birthday">Birthday</option>
          <option value="Funeral">Funeral</option>
          <option value="Reunion">Reunion</option>
          <option value="Anniversary">Anniversary</option>
        </select>
        <label for="Subject"> More info</label><br>
        <textarea  type="text" name="subject" placeholder=" Give additional info on your order"></textarea>
    		<input type="submit" name="Submit">
</form>
</body>
</html>