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
  top:7%;
  left:20%;
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
  color:black;
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
  color:black;
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
  width: 70%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 30%;
  background-color: inherit;
  padding-left: 20px;
}


/* Add a card effect for articles */
.card1{
  border-radius: 5%;
  background-color:white;
  padding: 20px;
  margin-top: 20px;
  block-size: 1400px;
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
  width: 28%;
  height:91%;
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
color: black;
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
  border-radius: 5%;
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

input[type=text1]
{
  width: 40%;
  height: 50px;
  padding: 10px;
  font-size: 19;
  margin: 15px 0;
  color: black;
  background-color: white;
  border:1px solid rgb(7, 50, 168);
}

.list
{
    font-size: 24px;
    width: 250px;
    height: 200px;
    background-color:white;
    color:black;
}

/*slideshow*/
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  border-radius: 5%;
  background-image:linear-gradient(to right,rgb(41, 5, 75),rgb(17, 5, 119));
  width: 28%;
  height:85%;
  position: absolute;
  top: 360px;
  right: 20px;
  margin: auto;
}

.simage
{
  position:absolute;
  border-radius: 5%;
  top: 10%;
  left: 2%;
  width:95%;
  height:50%;
}

/* Caption text */
.text {
  color: white;
  font-size: 27px;
  font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  font: bolder;
  padding: 8px 12px;
  position: absolute;
  top: 60%;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: white;
  font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  font: bolder;
  font-size: 27px;
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

.button2{
  font-size: 23;
  border: black solid 2px;
  background-color:white;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  cursor: pointer;
  width: 40%;

}

.button2:hover
{
  background-color: rgb(9, 160, 9);
}

/*CHECK BOX START*/

.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Custom checkbox */
.checkmark {
  position: absolute;
  top: 17px;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: rgb(151, 148, 148);
}

.container:hover input ~ .checkmark {
  background-color: rgb(22, 89, 177);
}

.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}


.container input:checked ~ .checkmark:after {
  display: block;
}

.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

.button3
{
  width: 20%;
  height: 3%;
  font-size: 130%;
  border-radius: 13px;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.button3:hover
{
  background-color: #2196F3;
}

.text2
{
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  font-size: 130%;
}

/*CHECK BOX END*/
</style>
</head>
<body>

<div class="header">
  <h1 class="h1">THE NO HUNGER WEBSITE</h1>
  <div class="img"><image src="images/home/logo.jpg"  width="150" height="150" ></image></div> 
  <h2 class="h2">the motive line</h2>
  <marquee class="marquee"><h3>To know the procedure about how to add food itmes in the list refer the procedure 
    block on the right.</h3></marquee>
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
      <h1 class="new-h1">RAW FOOD DONATION</h1>
    <form>
    <label for="fname"> Donator's Name</label>
     <input type="text" id="fname" placeholder="Enter Hotel's Name" required>
     <label for="email">Email</label>
     <input type="email" id="email" placeholder="Enter your Email ID">
     <label for="Number"> Contact Number</label>
     <input type="text" id="number" placeholder="Enter Contact No." required>
     <label for="uname">City</label>
     <input type="text" id="uname" placeholder="Enter City Name" required>
     <label for="add">Address</label>
     <input type="text" id="add" placeholder="Enter Address" required>

    
    <label for="name">Food Items:</label><p></p>
    <input type="text" id="name" placeholder="Enter the Name of Food items along with Quantity (Single Item at a time )" autocomplete="off"><P></P>

    <button class="button2 "id="btnAdd">Add to List</button><p></p>

    <label for="list">Food Items List:</label><p></p>
    <select id="list" name="list" class="list" multiple>

    </select><p></p>
    <button class="button2" id="btnRemove">Remove from List</button>
    <br>
    <label class="container">
    <input type="checkbox">I Agree to all the terms & conditions & hereby confirm that all the information provided by me is correct .
    <span class="checkmark"></span>
    </label>
    <br>
    <button onclick="getLocation()" class="button3">My Location</button>
    <p id="Location" class="text2"></p>
    <input type="submit" value="Submit"> 
    </form>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card2">

      <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">STEPS TO ADD FOOD ITEMS</div>
          <img src="images/donate-raw-food/Screenshot 1.png" class="simage">
          <h2 class="text">PROCEDURE TO ADD FOOD ITEMS TO THE LIST 
            (STEPS)</h2>
        </div>
        
        <div class="mySlides fade"> 
          <div class="numbertext">1 / 6</div>
          <img src="images/donate-raw-food/Screenshot 2.png" class="simage">
          <h2 class="text">Add the food item name along with the quantity (Example:weight in kg you wish to donate in the field provided 
            below the label Food Items.
          </h2>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 6</div>
          <img src="images/donate-raw-food/note.png" class="simage">
          <h2 class="text">NOTE : Only single item name along with weight at a time.</h2>
        </div>
        
        <div class="mySlides fade"> 
          <div class="numbertext">3 / 6</div>
          <img src="images/donate-raw-food/Screenshot 3.png" class="simage">
          <h2 class="text">Click on "Add to List" button to add the entered food item to the list or press "ENTER" .
          </h2>
        </div>

        <div class="mySlides fade"> 
          <div class="numbertext">4 / 6</div>
          <img src="images/donate-raw-food/Screenshot 4.png" class="simage">
          <h2 class="text">Now you can see the added item into the list. Add the items to the list as much as you want.
          </h2>
        </div>

        <div class="mySlides fade"> 
          <div class="numbertext">5 / 6</div>
          <img src="images/donate-raw-food/Screenshot 5.png" class="simage">
          <h2 class="text">To Delete an item from the list select that item or you can also select multiple items.
          </h2>
        </div>

        <div class="mySlides fade"> 
          <div class="numbertext">6 / 6</div>
          <img src="images/donate-raw-food/Screenshot 6.png" class="simage">
          <h2 class="text">Click on "Remove from List" button to remone the selected items from the list. 
          </h2>
        </div>
        
      </div>
    </div>

    <div class="card">
      <h2> Number of people donated food till now</h2>
      <p>3000+ people's donated various food items</p>
    </div>
    <div class="card">
      <h2>Food Items donated till now</h2>
      <h3>Rice : </h3>
      <h3>Wheat : </h3>
      <h3>Various Dals : </h3>
      <h3>Various Pulses : </h3>
      <h3>Oil : </h3>
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
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlides, 8000); // Changes image every 8 seconds
  }

  const btnAdd = document.querySelector('#btnAdd');
        const btnRemove = document.querySelector('#btnRemove');
        const sb = document.querySelector('#list');
        const name = document.querySelector('#name');

        btnAdd.onclick = (e) => {
            e.preventDefault();

            // Check whether any entry is done or not
            if (name.value == '') {
                alert('Please Enter the Food items along with their weights in kg and then click on add to list button.');
                return;
            }
            // Create a new option
            const option = new Option(name.value, name.value);
            // Add food item  to the list
            sb.add(option, undefined);

            // Reset the values
            name.value = '';
            name.focus();
        };

        // Remove selected Food Item
        btnRemove.onclick = (e) => {
            e.preventDefault();

            // Save the selected option
            let selected = [];

            //to select multiple food items from list
            for (let i = 0; i < sb.options.length; i++) {
                selected[i] = sb.options[i].selected;
            }

            // Remove all selected option
            let index = sb.options.length;
            while (index--) {
                if (selected[index]) {
                    sb.remove(index);
                }
            }
        };

var x = document.getElementById("Location");  
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
  </script>

</body>
</html>

<?php
if(isset($_POST['submit']))
{
  $name=$_POST['donators_name'];
  $em=$_POST['email'];
  $cn=$_POST['contact'];
  $ct=$_POST['city'];
  $add=$_POST['address'];
  $li=$_POST['list'];

  $query="INSERT INTO raw VALUES ('$name','$em','$cn','$ct','$add','$li')";
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