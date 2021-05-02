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
      
      /* Create two equal columns that floats next to each other */
      /* Left column */
      .leftcolumn {   
        float: left;
        width: 50%;
      }
      
      /* Right column */
      .rightcolumn {
        float: left;
        width: 50%;
        background-color: inherit;
        padding-left: 20px;
      }
      
      
      /* Add a card effect for articles */

      .card {
        text-align: center;
        margin: 24px 0 12px 0;
        block-size: 700px;
        background-color: white;
        padding: 20px;
      }


      h1{
        text-align: center;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

      }
      .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        block-size: 350px;
      }

      
      img.pic1 {
        padding-top: 260px;
        padding: 20px;
        text-align: center;
        width: 450px;
        height: 450px;
        border-radius: 50%;

      }
  
     

      .img.pic2{
        border-radius: 50%;
        text-align: center;
        padding: 20px;
        z-index: 1;
        margin-top: 20px;
      }
      
      .text{
        font-size: 23;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font: bolder;
        text-align: center;
        margin-top: 20px;
      }

      
      
      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }

     
    </style>
</head>  
<body>
    <?php
    include_once('header.html');
    ?>
      
      <div class="navbar">
        <a href="index.php"><image src="images/home/home.jpg" width="30" height="30" class="navimage"></image></a>
        <div class="dropdown">
          <button class="dropbutton">Donation</button>
          <div class="dropdown-content">
            <a href="donate-food.php">Food</a>
            <a href="#">Money</a>
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
        <a href="#">Provide Info</a>
      </div>

      <div class="row">
        <div class="leftcolumn">
          <div class="card">
            <h1>RAW FOOD ITEMS</h1>
            <div class="imagecontainer">
            <a href="donate-raw-food.php"><img class="pic1" src="images/donate-food/rawfood.jpg" border="3px"></img></a>
            </div>
            <p class="text">
              You can donate raw food items like Rice, Wheat etc.<br>
              We will Deliver it to the needy in form of Packets.<br>You can pack it for us or we will provide
              <br> you the packets.</p>
          </div>
        </div>
        <div class="rightcolumn">
          <div class="card">
            <h1>COOKED FOOD ITEMS</h1>
            <div class="imagecontainer">
             <a href="donate-cooked-food.php"><img class="pic1" src="images/donate-food/cookedfood.jpg" border="3px"></img></a>
             </div>
             <p class="text">
              You can donate Cooked food items like cooked Rice , Chapati etc. <br>
              We will Deliver it to the needy in form of Packets.<br>You can pack it for us or we will provide <br>
              you the packets.</p>
        </div>
      </div>

      
</body>    
</html>