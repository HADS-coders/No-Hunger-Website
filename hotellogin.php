<?php
include("connection.php");
?>
<style>
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  block-size: 350px;
}
img.avatar4 {
  width: 30%;
  height:100%;
  border-radius: 50%;
}

</style>
<div class="imgcontainer animate">
 <img src="modal/hotel.jpg"" alt="Avatar" class="avatar4">
<form action="" method="POST"  >
 <label><b> Email</b></label><br><br>
 <input type="text" name="email"><br><br>
 <label><b>Password</b></label><br><br>
<input type="text" name="password"><br><br>
<input  type="submit" name="submit" value="Login"><br><br>
</form>
</div>
<?php
if(isset($_POST['submit']))
{
  $uname=$_POST['email'];
  $psw=$_POST['password'];

  $query="SELECT * FROM HOTEL WHERE EMAIL='$uname' && password='$psw' ";
  $data=mysqli_query($conn,$query);

  $total=mysqli_num_rows($data);
  echo $total;

  if($total == 1)
  {
  // echo "login OK";
 header('location:home.php');
  }
  else
  {
   // echo "<font color ='red'>login Failed <br> <h3>plz enter correct email and password</h3></font>";
   header('location:error.php');
  }
}

?>