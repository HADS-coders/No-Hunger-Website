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
  color: black;
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
  block-size: 930px;
}
.card {
  border-radius: 5%;
  background-color:white;
  padding: 20px;
  margin-top: 20px;
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
color: white;
background-color: inherit;
border:1px solid black;
}

input[type=email]
{
width:100%;
height: 50px;
padding: 10px;
font-size: 19;
margin: 15px 0;
color: white;
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
color: white;
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
color: white;
background-color: inherit;
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
  top: 50%;
  right: 15%;
  margin: auto;
}

.simage
{
  border-radius: 5%;
  width: 240%;
  height:145%;
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
  <div class="img"><image src="images/home/logo.jpg"  width="150" height="150" ></image></div> 
  <h2 class="h2">the motive line</h2>
  <marquee class="marquee"><h3>Fill the form to get register your NGO.You can help us to achieve our goals.</h3></marquee>
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
      <h1 class="new-h1">NGO'S REGISTRATION</h1>
    <form method="post">
    <label for="fname"> NGO Name</label>
     <input type="text" id="fname"  name="ngo_name" placeholder="Enter NGO'S Name" required>
     <label for="uname">User Name</label>
     <input type="text" id="uname" name="username" placeholder="Enter User Name" required>
     <label for="email">Email</label>
     <input type="email" id="email" name="email" placeholder="Enter Official Email ID" required>
     <label for="Number"> Contact Number</label>
     <input type="text" id="number" name="contact" placeholder="Enter Contact No." required>
     <label for="pass">Password</label>
     <input type="password" id="pass" name="password" placeholder="Enter password" required>
     <label for="confirm">Confirm password</label>
     <input type="password" id="confirm" name="confirm_password" placeholder="Confirm password" required>
     <input type="submit" name="submit" value="Submit">
    </form>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card2">
      <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="images/ngo/ngo.jpeg" class="simage">
          <h2 class="text">NGO's are a big part of our team </h2>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="images/ngo/ngo2.png" class="simage">
          <h2 class="text">You can help us by providing charity</h2>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="images/ngo/ngo3.jpeg" class="simage">
          <h2 class="text">You can also provide us volunteer,s that are willing to work with us</h2>
        </div>
        
        </div>

    </div>
    <div class="card">
      <h3> Number of NGO's working with us</h3>
      <p>5000+ NGO's currently working with us</p>
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
  </script>

</body>
</html>

<?php

if(isset($_POST['submit']))
{
  $ngo=$_POST['ngo_name'];
  $un=$_POST['username'];
  $em=$_POST['email'];
  $cn=$_POST['contact'];
  $pwd=$_POST['password'];
  $conpwd=$_POST['confirm_password'];

  $query="INSERT INTO ngo VALUES ('$ngo','$un','$em','$cn','$pwd','$conpwd')";
  $data=mysqli_query($conn,$query);

  if($data)
  {
  echo "Data inserted into Database";
  }
  else
  {
  echo "Failed to insert Data inserted into Database ".mysqli_error($conn);
  }
}
?>