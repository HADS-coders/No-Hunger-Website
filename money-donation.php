<html>
    <head>
    <style>
    * {
      box-sizing: border-box;
    }
    
    /*TO STYLE THE BODY*/
    body {
      font-family: Arial;
      background-image:linear-gradient(to right,rgb(46, 175, 169),rgb(20, 80, 160));
    }
    
    /* Header/Blog Title */
    .header {
      color: black;
      background:inherit;
      block-size:35%;
    }
    
    .header .h1
    {
      font-size: 300%;
      position:absolute;
      left: 32%;
      top: 7%;
    }
    .img
    {
      width: 11%;
      height: 20%;
      position:absolute;
      top:7%;
      left:19%;
    }
    .header .h2
    {
      font-size: 255%;
      position: absolute;
      left: 32%;
      top: 14%;
    }
     .header .marquee
     {
      font-size: 19px;
      position: absolute;
      top: 25%;
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
    
    .navbar-right {
      float: right;
    }
    
    /* Style the topnav links */
    .navbar a {
      font-size: 31px;
      float: left;
      display: block;
      color: black;
      text-align: center;
      padding: 1% 1%;
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
      min-width: 11%;
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
    
    /* THIS MAKES TWO UNEQUAL COLUMNS BESIDES EACH OTHER*/
    /* TO MAKE LEFT COLUMN */
    .leftcolumn {   
      float: left;
      width: 75%;
      padding-right: 0.3%;
    }
    
    /* TO MAKE RIGHT COLUMN */
    .rightcolumn {
      float: left;
      width: 25%;
      background-color: inherit;
      padding-left: 0.3%;
    }
    
    
    /* Add a card effect for articles */
    .card1{
      border-radius: 5%;
      background-color:white;
      padding: 3%;
      margin-top: 3%;
      block-size: 130%;
    }
    .card {
      border-radius: 5%;
      background-color:white;
      padding: 3%;
      margin-top: 3%;
      color: black;
    }
    
    .card2{
      border-radius: 5%;
    width: 10%;
    height:65%;
    padding: 3%;
    margin-top: 3%;
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
    color: black;
    background-color: inherit;
    border:1px solid black;
    }
    
    input[type=submit]
    {
      border-radius: 15px;
      width:20%;
      height: 50px;
      padding: 10px;
      font-size: 120%;
      font: bolder;
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

     .value
     {
         font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 23;
        font: bolder;
        color: black;  
     }
    
    
    /*slideshow*/
    
    /* Slideshow container */
    .slideshow-container {
      border-radius: 5%;
      background-image:linear-gradient(to right,rgb(41, 5, 75),rgb(17, 5, 119));
      width: 24%;
      height:60%;
      position: absolute;
      top: 360px;
      right: 15px;
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
      font-size: 180%;
      font: bolder;
      padding: 8px 12px;
      position: absolute;
      bottom:3%;
      width: 70%;
      right: 10%;
      text-align: center;
    }
    
    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
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
    
    
    /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
    @media screen and (max-width: 400px) {
      .topnav a {
        float: none;
        width: 100%;
      }
    }
    
    .slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background:rgb(221, 219, 219);
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
  background: blue;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background:  blue;
  cursor: pointer;
}
    
    
    </style>
    </head>
    <body>
    
    <div class="header">
      <h1 class="h1">THE NO HUNGER WEBSITE</h1>
      <div class="img"><image src="images/home/logo.jpg"  width="150" height="150" ></image></div> 
      <h2 class="h2">the motive line</h2>
      <marquee class="marquee"><h3>Fill the form below to register your hotel . You Can help hundreds of people daily by donating food </h3></marquee>
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
          <h1 class="new-h1">MONEY DONATION</h1>
        <form method="post">
         <label for="fname"> Name</label>
         <input type="text" id="fname" name="name" placeholder="Enter your Name" required>
         <label for="email">Email</label>
         <input type="email" id="email" name="email" placeholder="Enter your Email ID">
         <label for="Number"> Contact Number</label>
         <input type="number" id="number" name="number" placeholder="Enter your Contact no" required>
           <br>
           <br>
         <div class="slidecontainer">
           <input type="range" min="1" max="100" value="20" name="amount" class="slider" id="myRange">
           <br>
           <p class="value"> DONATION MONEY : <span id="rupees"></span> Rupees </p>
           <p class="value"> NUMBER OF PACKETS : <span id="pack"></span></p>
         </div>
         <input type="submit" value="Donate" name="donate">
        </form>
        </div>
      </div>
      <div class="rightcolumn">
        <div class="card2">
          <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 5</div>
                <img src="images/donate-money/pic1.jpeg" class="simage">
                <h2 class="text">Volunteer's are the root elements of our team.</h2>
              </div>
              
              <div class="mySlides fade">
                <div class="numbertext">2 / 5</div>
                <img src="images/donate-money/pic2.jpeg" class="simage">
                <h2 class="text">Volunteers has to collect the food from hotels.</h2>
              </div>
              
              <div class="mySlides fade">
                <div class="numbertext">3 / 5</div>
                <img src="images/donate-money/pic3.jpeg" class="simage">
                <h2 class="text">Pack the food provided by the hotels.</h2>
              </div>
      
              <div class="mySlides fade">
                <div class="numbertext">4 / 5</div>
                <img src="images/donate-money/pic4.jpeg" class="simage">
                <h2 class="text">Distribute the packets to the needy.</h2>
              </div>
      
              <div class="mySlides fade">
                <div class="numbertext">5 / 5</div>
                <img src="images/donate-money/pic5.jpeg" class="simage">
                <h2 class="text">Distribute the packets to the needy.</h2>
              </div>
            
            </div>
    
        </div>
    
        <div class="card">
          <h3> Number of Volunteers associated with us</h3>
          <p>3000+ volunteer currently working with us</p>
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
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        slides[slideIndex-1].style.display = "block";  
        setTimeout(showSlides, 4000); // Change image every 4 seconds
      }
        var slider = document.getElementById("myRange");
        var output1 = document.getElementById("rupees");
        output1.innerHTML = slider.value*100;

        var output2 = document.getElementById("pack");
        output2.innerHTML = slider.value;

        slider.oninput = function() {
        output1.innerHTML = this.value*100;        
        output2.innerHTML = this.value;
        }
      </script>
    
    </body>
</html>

<?php
// this is connection file name
include_once('connection.php');

if(isset($_POST['donate'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $amount = $_POST['amount']*100;

    $insertquery = " insert into money(name,email,number,amount) values('$name','$email','$number','$amount')";
    $result = mysqli_query($conn,$insertquery);

    if($result){
        ?>
        <script>
            alert("data inserted properly");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("data not inserted");
        </script>
        <?php
    }
}
?>