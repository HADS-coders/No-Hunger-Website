<?php
include("connection.php");
error_reporting(0)
?>

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


/* ADDING CARD TO THE PAGE */
.card1{
  background-color:inherit;
  margin-top: 20px;
  height:80%;
  width: 50%;
}
.card {
  border-radius: 5%;
  background-color: white;
  z-index: 1;
  padding: 2%;
  margin-top: 20px;
  color: black;
}
.cimage
{
  border: 3px solid black;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 30%;
  height:40%;
   
}
.cimage2
{
  border: 3px solid black;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 60%;
  height:40%;
   
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* FOOTER STYLE */
.footer {
  background-color: white;
  padding: 2%;
  text-align: center;
  color: black;
  margin-top: 2%;
  block-size: 55%;
}

.footer .fimage1
{
  border-radius:50%;
    width: 15%;
    height: 25%;
    position:absolute;
    left:7%;
    top: 237%;
}

.fimage2
{
  border-radius:50%;
    width: 15%;
    height: 25%;
    position:absolute;
    left:33%;
    top: 237%;
}

.fimage3
{
  border-radius:50%;
    width: 15%;
    height: 25%;
    position:absolute; 
    left:55%;
    top: 237%;
}

.fimage4
{
  border-radius:50%;
    width: 15%;
    height: 25%;
    position:absolute;
    left:77%;
    top: 237%;
}

.txt1
{
    font-size: 170%;
    position: absolute;
    color: black;
    left:7%;
    top: 265%;
}

.txt2
{
    font-size: 170%;
    position: absolute;
    color:black;
    left:33%;
    top: 265%;

}

.txt3
{
    font-size: 170%;
    position: absolute;
    color: black;
    left:57%;
    top: 265%;

}


.txt4
{
    font-size: 170%;
    position: absolute;
    color: black;
    left:79%;
    top: 265%;

}


.cf3 {
  position:absolute;
  height:20%;
  width:40%;
  margin:0 auto;
}

.cf3 img {
  border-radius: 5%;
  position:absolute;
  top: 1%;
  -webkit-transition: opacity 1s ease-in-out;
  -moz-transition: opacity 1s ease-in-out;
  -o-transition: opacity 1s ease-in-out;
  transition: opacity 1s ease-in-out;
}

@keyframes cf3FadeInOut {
  0% {
  opacity:1;
}
45% {
opacity:1;
}
55% {
opacity:0;
}
100% {
opacity:0;
}
}

.cf3 img.top {
  width:180%;
  height: 370%;
  float: left;
animation-name: cf3FadeInOut;
animation-timing-function: ease-in-out;
animation-iteration-count: infinite;
animation-duration: 10s;
animation-direction: alternate;
}

.cf3 img.bottom {
  width:180%;
  height: 370%;
  float: left;
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
  border-radius: 5%;
  font-size: 21px;
 color:black;
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
  background-color: rgb(214, 209, 209);
  padding-right: 15px;
  padding-top: 5px;
  padding-bottom: 5px;
  padding-left: 5px;
  
}

/* Responsive layout */
@media screen and (max-width: 1000px) {

.header .h1
{
  font-size: 200%;
}
.header .h2
{
  font-size: 170%;
  position: absolute;
  top: 17%;
}
.header .img
{
  width: 20%;
  height: 20%;
  position:absolute;
  left:7%;
}

.footer .fimage1
{
  border-radius:50%;
    width: 15%;
    height: 20%;
    position:absolute;
    left:7%;
    top: 247%;
}

.fimage2
{
  border-radius:50%;
    width: 15%;
    height: 20%;
    position:absolute;
    left:33%;
    top: 247%;
}

.fimage3
{
  border-radius:50%;
    width: 15%;
    height: 20%;
    position:absolute; 
    left:55%;
    top: 247%;
}

.fimage4
{
  border-radius:50%;
    width: 15%;
    height: 20%;
    position:absolute;
    left:77%;
    top: 247%;
}


.txt1
{
    font-size: 80%;
    position: absolute;
    color: black;
    left:5%;
    top: 270%;
}

.txt2
{
    font-size: 80%;
    position: absolute;
    color:black;
    left:31%;
    top: 270%;

}

.txt3
{
    font-size: 80%;
    position: absolute;
    color: black;
    left:55%;
    top: 270%;

}


.txt4
{
    font-size: 80%;
    position: absolute;
    color: black;
    left:77%;
    top: 270%;

}

}

/* MODAL STYLING START */

/* Input field styling*/
input[type=text]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type=password]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/*Cancel button style*/
.cancelbtn {
  font-size: 23;
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center's the image container*/
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  block-size: 350px;
}

/*Image styling and positioning*/
img.avatar1 {
  padding-top: 260px;
  padding: 20px;
  text-align: center;
  width: 30%;
  height: 80%;
  border-radius: 50%;

}

img.avatar2 {
  padding:20px;
  text-align: center;
  width: 30%;
  height: 80%;
  border-radius: 50%;

}

img.avatar3 {
  padding: 20px;
 text-align: right;
  width: 30%;
  height:80%;
  border-radius: 50%;

}

img.avatar4 {
  width: 30%;
  height:100%;
  border-radius: 50%;
}


/*Container padding */
.container {
  padding: 16px;
}

.container2 {
  padding: 16px;
  background-color: white;
}


/* Background of the modal*/
.modal1 {
  display: none; /*Hidden by default*/
  position: absolute; 
  z-index: 1; /*Displays on the top of the screen*/
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; /* Enable scroll if needed*/
  background-color: rgba(0,0,0,0.4); /*Gives background opacity with black colour*/
  padding-top: 60px;
}

/* Modal content box*/
.modal1-content {
  background-color: white;
  margin: 5% auto 15% auto; 
  border: 1px solid #888; 
  color: white;
  width: 80%;
  height: 80%;
}
.modal1 .modal1-dailog
{
  position:absolute;
  left:15%;
  width: 80%;
  height:70%;
}

/*Modal text sytling*/
.mtxt
{
  font-size: 180%;
  text-align: center;
  color: black;
}


/* Close button Style (x) */
.close {
  position: absolute;
  right: 11%;
  top: 13%;
  color:black;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/*Button styling*/
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/*Cancel button style */
.cancelbtn {
  width: 30%;
  padding: 10px 18px;
  background-color: #f44336;
}


span.psw{
  color: black;
  float: right;
  padding-top: 16px;
}

span.psw a{
  color:black;
  float: right;
  padding-left: 5px;
}

/* Refer the previous modal to understand the functioning of these classes*/
.modal2 {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%;
  height: 100%; 
  overflow: auto; 
  background-color: rgba(0,0,0,0.4);
  padding-top: 60px;
}


.modal2-content {
  background-color: white;
  margin: 5% auto 15% auto; 
  border: 1px solid #888;
  width: 80%;
}

.close2 {
  position:absolute;
  right: 13%;
  top: 14%;
  color: black;
  font-size: 35px;
  font-weight: bold;
}

.close2:hover,
.close2:focus {
  color: red;
  cursor: pointer;
}


.modal3 { 
  display: none;
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%;
  height: 100%; 
  overflow: auto; 
  background-color: rgba(0,0,0,0.4); 
  padding-top: 60px;
}


.modal3-content {
  background-color: white;
  margin: 5% auto 15% auto; 
  border: 1px solid #888;
  width: 80%; 
}

.modal4 {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.4); 
  padding-top: 60px;
}


.modal4-content {
  background-color: white;
  margin: 5% auto 15% auto;
  border: 1px solid #888;
  width: 80%; 
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 1000px) {
.psw {
     display: block;
     float: none;
     color: black;
  }
  .cancelbtn {
     width: 100%;
  }

  img.avatar1
  {
    width: 30%;
    height: 60%;
  }

  img.avatar2
  {
    width: 30%;
    height: 60%;
  }

  img.avatar3
  {
    width: 30%;
    height: 60%;
  }

  img.avatar4
  {
    width: 50%;
    height: 90%;
  }

  .mtxt
  {
    font-size: 110%;
  }

  .close
  {
    top: 7%;
    right: 13%;
  }
}
/*MODAL END*/

</style>
</head>
<body>

<div class="header">
  <h1 class="h1">THE NO HUNGER WEBSITE</h1>
  <image src="home/logo.jpg" class="img"></image> 
  <h2 class="h2">the motive line</h2>
  <marquee class="marquee"><h3>Welcome to The No Hunger Website!</h3></marquee>
</div>

<div class="navbar">
  <a href="home.html"><image src="home/home.jpg" class="navimage" ></image></a>
  <div class="dropdown">
    <button class="dropbutton">Donation</button>
    <div class="dropdown-content">
      <a href="donate-food.html">Food</a>
      <a href="#">Money</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbutton">Registration</button>
    <div class="dropdown-content">
      <a href="registration-volunteer.html">Volunteer</a>
      <a href="registration-ngo.html">NGO</a>
      <a href="registration-hotel.html">Hotel</a>
    </div>
  </div>   
  <a href="#">Provide Info</a>
  <div class="navbar-right"> 
    <a onclick="document.getElementById('id01').style.display='block'"><image src="home/avatar.jpg" width=70px height=70px></a>
  </div> 
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card1">
      <div class="cf3">
        <image class="bottom" src="home/pic2.jpg" ></image>
        <image class="top" src="home/pic1.jpg"></image>
      </div>
    </div>
    <div class="card">
      <h2 align= center>THE NO HUNGER PROJECT</h2>
      <h3 align=right >Start Date, Jan 11, 2021</h3>
      <img src="home/logo.jpg" class="cimage"></img>
      <p><h3>The aim behind this project is :</h3></p>
      
      <h4>1.To reduce the food wasted in our country.</h4>
      <h4>2.Provide food to as many as needy people as possible</h4>
      <h4>3.To create a non-profitabe organisation that works for the betterment of society</h4>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Team</h2>
      <image src="home/ourlogo.png" class="cimage2"></image>
      <p>This project was started by the group of HADS coders.</p>
    </div>
    <div class="card">
      <h3>NGO's working with us</h3>
      <p><a class="button1" href="">1.NGO</a></p>
      <p><a class="button1" href="">2.NGO</a></p>
      <p><a class="button1" href="">3.NGO</a></p>
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

<div class="footer">
  <h2 clhass="">OUR TEAM</h2>
  <image class="fimage1" src="footer/coder1.jpeg"></image>
  <h class="txt1">SUFYAN DAWNAK</h>
  <image class="fimage2" src="footer/coder2.jpeg"></image>
  <h class="txt2">DANIYAL DOLARE</h>
  <image class="fimage3" src="footer/coder3.jpeg"></image>
  <h class="txt3">HAARISH KHAN</h>
  <image class="fimage4" src="footer/coder4.jpeg"></image>
  <h class="txt4">AZAD ANSARI</h>
</div>

<!--MODAL-->

<div id="id01" class="modal1">
  <div class="modal1-dailog">
  <form class="modal1-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <a onclick="document.getElementById('id02').style.display='block'">
        <img src="modal/volunteer.jpg"  class="avatar1"></a>
      <a onclick="document.getElementById('id03').style.display='block'">  
      <img src="modal/hotel.jpg" alt="Avatar" class="avatar2"></a>
      <a onclick="document.getElementById('id04').style.display='block'">
      <img src="modal/ngo.png" alt="Avatar" class="avatar3"></a>
      <h1 class="mtxt">CHOOSE YOUR LOGIN TYPE</h1>
    </div>
    </div>
  </form>
  </div>
</div>

<!-- #modal 2 -->
<div id="id02" class="modal2">
  
  <form class="modal2-content" method="POST">
    <div class="imgcontainer animate">
      <span onclick="document.getElementById('id02').style.display='none'" class="close2 animate" title="Close Modal">&times;</span>
      <img src="modal/volunteer.jpg"" alt="Avatar" class="avatar4 animate">
    </div>

    <div class="container animate">
      <label for="uname" class="text"><b>Username</b></label>
      <p></p>
      <input class="text" type="text" placeholder="Enter Username" name="uname" required>
      <p></p>
      <label class="text" for="psw"><b>Password</b></label>
      <p></p>
      <input class="text" type="password" placeholder="Enter Password" name="psw" required>
      <p></p>  
      <input class="text" type="submit" name="submit" value="Login">Login</input>
      <p></p>
      <label class="text">
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <p></p>
    </div>

    <div class="container2">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot  <a href="#">password?</a></span>
    </div>
  </form>
</div>


<!-- #modal 3 -->
<div id="id03" class="modal3">
  
  <form class="modal3-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer animate">
      <span onclick="document.getElementById('id03').style.display='none'" class="close2 animate" title="Close Modal">&times;</span>
      <img src="modal/hotel.jpg"" alt="Avatar" class="avatar4">
    </div>

    <div class="container">
      <label for="uname" class="text"><b>Username</b></label>
      <p></p>
      <input class="text" type="text" placeholder="Enter Username" name="uname" required>
      <p></p>
      <label class="text" for="psw"><b>Password</b></label>
      <p></p>
      <input class="text" type="password" placeholder="Enter Password" name="psw" required>
      <p></p>  
      <button class="text" type="submit">Login</button>
      <p></p>
      <label class="text">
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <p></p>
    </div>

    <div class="container2">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot  <a href="#">password?</a></span>
    </div>
  </form>
</div>


<!-- #modal 4 -->
<div id="id04" class="modal4">
  
  <form class="modal4-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer animate">
      <span onclick="document.getElementById('id04').style.display='none'" class="close2 animate" title="Close Modal">&times;</span>
      <img src="modal/ngo.png"" alt="Avatar" class="avatar4">
    </div>

    <div class="container">
      <label for="uname" class="text"><b>Username</b></label>
      <p></p>
      <input type="text" placeholder="Enter Username" name="uname" required>
      <p></p>
      <label class="text" for="psw"><b>Password</b></label>
      <p></p>
      <input class="text" type="password" placeholder="Enter Password" name="psw" required>
      <p></p>  
      <button class="text" type="submit">Login</button>
      <p></p>
      <label class="text">
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <p></p>
    </div>

    <div class="container2">
      <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot  <a href="#">password?</a></span>
    </div>
  </form>
</div>
<!--MODAL END-->

</body>
</html>

<?php
if(isset($_POST['submit']))
{
  $uname=$_POST['uname'];
  $psw=$_POST['psw'];
  echo $uname.$psw;

  $query="SELECT * FROM vol WHERE EMAIL='$uname' && password='$psw' ";
  $data=mysqli_query($conn,$query);

  $total=mysqli_num_rows($data);
  echo $total;

  if($total == 1)
  {
  echo "login OK";
  try{
  header('Location:index.php');
  }catch(Exception $e){
    echo "Exception".$e->getMessage();
  }
  }
  else
  {
   echo "Login Failed";
   header('Location:error.php');
  }
}

?>