<?php
#get data from login page
session_start();
$vol_id = $_SESSION['vol_id'];

#get response fron api
// $response = file_get_contents('https://pure-mountain-72218.herokuapp.com/api/getDonationRequests?longitude=73.106938&latitude=18.986312&range=5');
$response = file_get_contents('https://pure-mountain-72218.herokuapp.com/api/getDonationRequests?vol_id='.$vol_id);
$data_arr = json_decode($response)->data;
?>

<html>
<head>
    <title> Food Request</title>
<style>

    /* Header/Blog Title */
    .header {
    color: black;
    padding-top: 30px;
    background:inherit;
    }

    .header .marquee
    {
    font-size: 19px;
    }

    .up-section{
    display: flex;
    }

    .up-section .logo{
    padding-right: 20px;
    padding-left: 20%;
    }

    .title{
    font-size: 45px;
    margin: 20px 0;
    }

    .subtitle{
    font-size: 35px;
    margin: 0;
    }

    @media screen and (max-width:1000px) {

    .logo img{
        width: 100px;
        height: 100px;
    }

    .up-section .logo{
        padding-left:15%;
    }

    .title{
    font-size: 30px;
    }

    .subtitle{
        font-size: 20px;
        margin: 0;
    }

    }

    @media screen and (max-width:400px) {

    .logo img{
        width: 75px;
        height: 75px;
    }

    .up-section .logo{
        padding-left:15%;
    }

    .title{
    font-size: 20px;
    margin: 10px 0;
    }

    .subtitle{
        font-size: 15px;
    }

    .marquee h3{
        font-size: 15px;
        margin: 10px 0;
    }

    }
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



.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #04AA6D;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #04AA6D;
  cursor: pointer;
}
.request-box{
    display: flex;
    justify-content: space-between;
    background-color: greenyellow;
    padding: 10px 10px;
    margin: 10px 0px;
}

.right{
    display: flex;
    justify-content: space-evenly;
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

<div class="header">
    <div class="up-section">
      <div class="logo">
        <img src="logo.jpg"  width="150px" height="150px" >
      </div>
      <div class="title-section">
        <h1 class="title">THE NO HUNGER WEBSITE</h1>
        <h2 class="subtitle">the motive line</h2>
      </div>
    </div>
    <marquee class="marquee"><h3>Welcome to The No Hunger Website!</h3></marquee>
</div>
</head>

<body>

<div class="navbar">
  <a href="index.php"><image src="home.jpg" width="30" height = "30" class="navimage"></image></a>
  <div class="dropdown">
    <button class="dropbutton">Donation</button>
    <div class="dropdown-content">
      <a href="donate-food.php">Food</a>
      <a href="Money_donation.php">Money</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbutton">Donation</button>
    <div class="dropdown-content">
      <a href="registration-volunteer.php">Volunteer</a>
      <a href="registration-ngo.php">NGO</a>
      <a href="registration-hotel.php">Hotel</a>
    </div>
  </div>
  <a href="provide-info.php">Provide Info</a>
</div>
 
<div class="row">
  <div class="leftcolumn">
    <div class="card1">
    <p style="font-size: 30px;">Food Donation Request Detail</p>

        <?php
        #loop through each donation request display data
        if($data_arr!=null) {
            
            foreach ($data_arr as $data) {
                $foodItems = $data->foodItems; ?>

                <!-- html here for building single food request  -->

                <div class="request-box">
                    <div class="left">
                        <p>Name: <?php echo $data->donation->name; ?></p>
                        <p>Email: <?php echo $data->donation->email; ?></p>
                        <p>Number: <?php echo $data->donation->number; ?></p>
                        <p>Food Type: <?php echo $data->food->type; ?></p>

                        <?php
                            #inner for loop to loop through each food Items
                        foreach ($foodItems as $foodItem) { ?>
                            <p>Food Name: <?php echo $foodItem->name; ?></p>
                            <p>Amount: <?php echo $foodItem->amount; ?></p>
                        <?php } ?>
                        <a target="_blank" href="https://www.google.com/maps/search/?api=1&query=<?php echo $data->donation->latitude; ?>,<?php echo $data->donation->longitude; ?>">See Location</a>
                    </div>
                    <div class="right">
                        <div style="margin:auto 20px"><p>Accept: </br> <?php echo "<img src='images/tick.jpg' >"; ?></p> </div>
                        <div style="margin:auto 20px"><p>Completed: </br> <?php echo "<img src='images/tick.jpg' >"; ?></p>  </div>
                    </div>
                </div>

                <?php
                #closing of for loop
                }
        }
        else {  ?>
            <p>No food donation request now!</p>
        <?php    } ?>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card2">

      <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 5</div>
          <img src="donate-money/pic1.jpeg" class="simage">
          <h2 class="text">Volunteer's are the root elements of our team.</h2>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 5</div>
          <img src="donate-money/pic2.jpeg" class="simage">
          <h2 class="text">Volunteers has to collect the food from hotels.</h2>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 5</div>
          <img src="donate-money/pic3.jpeg" class="simage">
          <h2 class="text">Pack the food provided by the hotels.</h2>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">4 / 5</div>
          <img src="donate-money/pic4.jpeg" class="simage">
          <h2 class="text">Distribute the packets to the needy.</h2>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">5 / 5</div>
          <img src="donate-money/pic5.jpeg" class="simage">
          <h2 class="text">Distribute the packets to the needy.</h2>
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
// set image properties, for Highlight effect added when click
var imgProp = {
 'padding': '3px',
 'backgroundColor': '#ff0066',
 'borderSize': '1ps',
 'borderStyle': 'dashed',
 'borderColor': '#000000'
};

// function to highlight IMGs on click - from: https://coursesweb.net/
function highlightImg() {
  // gets all <img> tags, and their number
  var allimgs = document.getElementsByTagName('img');
  var nrallimgs = allimgs.length;

  // traverses the <img> elements, and register onclick to each one
  // else, apply the properties defined in $imgProp
  for(i=0; i<nrallimgs; i++) {
  allimgs[i].onclick=function() {
  // if borderStyle is already applied, anulates the 'padding', 'background' and 'border' properties
  if(this.style.borderStyle == imgProp.borderStyle) {
  this.style.padding = 'auto';
  this.style.background = 'none';
  this.style.border = 'none';
  }
  else {
  this.style.padding = imgProp.padding;
  this.style.backgroundColor = imgProp.backgroundColor;
  this.style.borderSize = imgProp.borderSize;
  this.style.borderStyle = imgProp.borderStyle;
  this.style.borderColor = imgProp.borderColor;
  }
  }
  }
  }

  // calls the highlightImg() function to apply the effect
  highlightImg();

  var slideIndex = 0;
  showSlides();
  
  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides fade");
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
