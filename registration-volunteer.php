<?php
include("connection.php");
error_reporting(0)
?>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

/*TO STYLE THE BODY*/
body {
  font-family: Arial;
  margin: 0;
  background-image:linear-gradient(to right,rgb(46, 175, 169),rgb(20, 80, 160));
  background-attachment: fixed;
  background-repeat: no-repeat;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  padding-block-end: 30px;
  padding-bottom: 40px;
  background:inherit;
  block-size: 250px;
}

.header .h1
{
  font-size: 45px;
  position: absolute;
  left: 500px;
  top: 50px;
}
.header  .img
{
  position:absolute;
  top:40px;
  left:320px;
}
.header .h2
{
  font-size: 35px;
  position: absolute;
  left: 510px;
  top: 100px;
}
 .header .marquee
 {
  font-size: 19px;
  position: absolute;
  top: 190px;
 }

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: white;
  z-index: 1;
}

.navimage
{
  width: 40px;
  height: 40px;
  border-radius:50%;
}

/* Style the topnav links */
.navbar a {
  font-size: 31px;
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown
{
  float:left;
  overflow: hidden;
}

.dropdown .dropbutton
{
  font-size: 31px;  
  border: none;
  outline: none;
  color:black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  overflow: hidden;
}


/* Change color on hover */
.navbar a:hover ,.dropdown:hover .dropbutton{
  background-color: #ddd;
  color: black;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 150px;
  box-shadow: 0px 16px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: inherit;
  padding-left: 20px;
}


/* Add a card effect for articles */
.card1{
  border-radius: 5%;
  background-color:white;
  padding: 20px;
  margin-top: 20px;
  block-size: 1100px;
  color: black;
}
.card {
  border-radius: 5%;
  background-color:white;
  padding: 20px;
  margin-top: 20px;
  color: black;
}
.ctext{
  color: black;
}

.card2{
  border-radius: 5%;
width: 10%;
height:65%;
padding: 20px;
margin-top: 20px;
}


/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.button{
  color:black;
  background-color: white;
 text-decoration: none;
 padding: 5px;
}

.button:hover
{
  color:blue;
  background-color: white;
  padding: 5px;

}

.button1{
  font-size: 21px;
 color:white;
 background-color: transparent;
 text-decoration: none;
 padding-right: 15px;
 padding-top: 5px;
 padding-bottom: 5px;
 padding-left: 5px;
}

.button1:hover
{
  color:black;
  background-color: white;
  padding-right: 15px;
  padding-top: 5px;
  padding-bottom: 5px;
  padding-left: 5px;
  
}

input[type=text]
{
width:100%;
height: 50px;
padding: 10px;
font-size: 19;
margin: 15px 0;
color:black;
background-color: inherit;
border:1px solid black;
}
.select
{
  background-color:white;
  color:black;
}


input[type=email],select
{
width:100%;
height: 50px;
padding: 10px;
font-size: 19;
margin: 15px 0;
color: black;
background-color: inherit;
border:1px solid black;
}

input[type=number]
{
width:100%;
height: 50px;
padding: 10px;
font-size: 19;
margin: 15px 0;
color: black;
background-color: inherit;
border:1px solid black;
}

input[type=password]
{
width:100%;
height: 50px;
padding: 10px;
font-size: 19;
margin: 15px 0;
color:black;
background-color: inherit;
border:1px solid black;
}


.select1
{
  width:40%;
height: 50px;
padding: 10px;
font-size: 19;
margin: 15px 5px;
color: black;
background-color: white;
border:1px solid black;
}



input[type=submit]
{
border-radius: 3%;
width:20%;
height: 50px;
padding: 10px;
font-size: 19;
margin: 15px 0;
color: black;
background-color: white;
border:1px solid black;
}

input[type=submit]:hover
{
background-color: rgb(56, 182, 56);
}

 label
 {
    font-size: 23;
    font: bolder;
    color: black;
    
 }
 
 .new-h1
 {
   color: black;
 }

/*slideshow*/
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  width: 10%;
  height:41%;
  position: absolute;
  top: 47%;
  right: 15%;
  margin: auto;
}

.simage
{
  border-radius: 5%;
  width: 240%;
  height:150%;
}

/* Caption text */
.text {
  color: white;
  font-size: 27px;
  font: bolder;
  padding: 10px 12px;
  position: absolute;
  left:30%;
  top: 75%;
  width: 170%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 25px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}

</style>
</head>
<body>

<div class="header">
  <h1 class="h1">THE NO HUNGER WEBSITE</h1>
  <div class="img"><image src="images/home/logo.jpg" width="150" height="150"></image></div>
  <h2 class="h2">the motive line</h2>
  <marquee class="marquee"><h3>Fill the form to get register as volunteer.Working together we can feed hundreds of hungry people. </h3></marquee>
</div>

<div class="navbar">
  <a href="index.php"><image src="images/home/home.jpg" width="30" height="30" class="navimage"></image></a>
  <div class="dropdown">
    <button class="dropbutton">Donation</button>
    <div class="dropdown-content">
      <a href="donate-food.php">Food</a>
      <a href="money-donation.php">Money</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbutton">Registration</button>
    <div class="dropdown-content">
      <a href="registration-volunteer.php">Volunteer</a>
      <a href="registration-ngo.php">NGO</a>
      <a href="registration-hotel.php">Hotel</a>
    </div>
  </div>   
  <a href="provide-info.html">Provide Info</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card1">
      <h1 class="new-h1">VOLUNTEER'S REGISTRATION</h1>
    <form method="post">
    <label for="fname" >Name</label>
     <input type="text" id="fname" name="name" placeholder="Enter Full Name" required>
     <label for="email" >Email</label>
     <input type="email" id="email" name="email" placeholder="Enter Email ID" required>
     <label for="Number" > Mobile Number</label>
     <input type="text" id="number" name="mobile_number" placeholder="Enter Mobile No." required>
     <label for="pass">Password</label>
     <input type="password" id="pass" name="password" placeholder="Enter password" required>
     <label for="range">Range</label>
     <input type="Number" id="range" name="range" placeholder="Enter range in Kilometer" required>

     <select class="select" name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
     </select>
     <p></p>
     <label>How many days you will like to work with us ?</label>
     <p></p>
     <select class="select1" name="from">
      <option value="" hidden>From</option>
      <option value="Sunday">Sunday</option>
      <option value="Monday">Monday</option>
      <option value="Tuesday">Tuesday</option>
      <option value="Wednesday">Wednesday</option>
      <option value="Thursday">Thursday</option>
      <option value="Friday">Friday</option>
      <option value="Saturday">Saturday</option>
      </select>
     <select class="select1" name="till">
      <option value="" hidden>Till</option>
      <option value="Sunday">Sunday</option>
      <option value="Monday">Monday</option>
      <option value="Tuesday">Tuesday</option>
      <option value="Wednesday">Wednesday</option>
      <option value="Thursday">Thursday</option>
      <option value="Friday">Friday</option>
      <option value="Saturday">Saturday</option>
     </select>
      <br>
      <button onclick="getLocation()" class="button3">My Location</button>
      <p id="Location" class="text2"></p>
      <input type="hidden" id="latitude" name="latitude"></input>
      <input type="hidden" id="longitude" name="longitude"></input>
      <br>
     <input type="submit" name="submit" value="Submit" onclick="setLatLang()">
    </form>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card2">

      <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 4</div>
          <img src="images/volunteer/volunteer1.jpg" class="simage">
          <h2 class="text">Volunteer's are the root elements of our team.</h2>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 4</div>
          <img src="images/volunteer/volunteer2.jpg" class="simage">
          <h2 class="text">Volunteers has to collect the food from hotels.</h2>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 4</div>
          <img src="images/volunteer/volunteer3.jpg" class="simage">
          <h2 class="text">Pack the food provided by the hotels.</h2>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 4</div>
          <img src="images/volunteer/volunteer4.jpg" class="simage">
          <h2 class="text">Distribute the packets to the needy.</h2>
        </div>
        
        </div>

    </div>
    <div class="card">
      <h3>Volunteer's working with us</h3>
      <p>5000 volunteers</p>
    </div>
    <div class="card">
      <h3>Food donated till now</h3>
      <p>3000 packets</p>
      <h3>Estimated Consumers remaining</h3>
      <p>3000 people</p>
      <h3>Volunteers on work</h3>
      <p>3000 volunteers</p>
      <a href="#" class="button">More Info</a>
    </div>
  </div>
</div>

<script>
  var slideIndex = 0;
  showSlides();
  
  function showSlides() {
    var i;
    var latitude;
    var longitude;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlides, 4000); // Change image every 2 seconds
  }

  var x = document.getElementById("Location");  
  function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
      x.innerHTML = "Geolocation is not supported by this browser.";
    }
  }

  function showPosition(position) {
    latitude = position.coords.latitude;
    longitude = position.coords.longitude;
    document.getElementById("latitude").setAttribute('value', latitude);
    document.getElementById("longitude").setAttribute('value', longitude);
    x.innerHTML = "Latitude: " + latitude + 
    "<br>Longitude: " + longitude;
  }

  </script>


</body>
</html>

<?php
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $number=$_POST['mobile_number'];
  $password=$_POST['password'];
  $gender=$_POST['gender'];
  $range = $_POST['range'];
  $from=$_POST['from'];
  $till=$_POST['till'];
  $latitude = $_POST['latitude'];
  $longitude = $_POST['longitude'];

  $query="INSERT INTO vol (name,email,number,password,gender,daysfrom,till,rangeKm,latitude,longitude) VALUES ('$name','$email','$number','$password', '$gender', '$from','$till','$range','$latitude','$longitude')";
  $data=mysqli_query($conn,$query);

  if($data)
  {
  // echo "Data inserted into Database";
  }
  else
  {
  echo "Failed to insert Data inserted into Database ".mysqli_error($conn);
  }
}
?>