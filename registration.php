
<?php
require_once('config.php');
?>

<!doctype html>
<html>
<head>
  <title>User Registration | PHP </title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="pg2.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div>
    <?php 
    if(isset($_POST['create'])){
     $firstname    =$_POST['firstname'];
     $lastname     =$_POST['lastname'];
     $email        =$_POST['email'];
     $password     =$_POST['password'];
     $sql="INSERT INTO users(firstname,lastname,email,password) VALUES(?,?,?,?)";
     $stmtinsert= $db->prepare($sql);
     $result=$stmtinsert->execute([$firstname,$lastname,$email,$password]);
     if($result)
     {
        echo "Successfully Saved";
     }
     else
     {
        echo "errors";
     }
     
    }
   ?>
</div>
<div id="header">
<h1 class="hd" id="ch">Restopress</h1>

<ul>
  <li><a href="newlogin.php" >Home</a></li>
  <li><a href="" >About Us</a></li>
  <li><a href="" >Contact Us</a></li>
  <li><a href="" >Help</a></li>
</ul>
</div>
<form action="registration.php" method="post">
    <div id="frmch">
 <div class="container">
    <div class="row">
      <div class="col-sm-3">
   <h1> Registration</h1>
    <p>Fill up the form with correct values</p> 
    <label for="firstname"><b>FirstName</b></label>
    <input class="form-control" type="text" name="firstname" required>
    
    <label for="lastname"><b>LastName</b></label>
    <input class="form-control" type="text" name="lastname" required>
    
    <label for="email"><b>Email</b></label>
    <input class="form-control" type="email" name="email" required>
    
    <label for="password"><b>Password</b></label>
    <input class="form-control" type="password" name="password" required>
  <br>
   <input class="btn btn-primary" type="submit" name="create" value="Sign Up">
 </div>
</div>
</div>
</div>
</form>
</div>
<section id="varieties">
<div id="container">
<div id="box1">

<img class="menu" src="food1.jpg" class="image" height="280px" width="400px">
</div>


<div id="box2">
<img class="menu" src="food2.jpg" height="280px" width="400px">
</div>



<div id="box3">
<img class="menu" src="food3.jpg" height="280px" width="400px">
</div>


</div>

</section>

<center><button class="btn btn-primary" >Today's Specials</button><br><br>
</center>
<div id="div1"><img class="tsp" src="of1.png" height="250" width="300"></div>
<br>
<div id="div2"><img class="tsp" src="of2.png" height="300" width="300"></div>
<br>
<div id="div3"><img class="tsp" src="of5.jpg" height="300" width="300"></div>


<div id="footer">
<ul id="icons">
   <li> <a href="#" class="fa fa-facebook"></a></li>
<li><a href="#" class="fa fa-twitter"></a></li>
<li><a href="#" class="fa fa-google"></a></li>
<li><a href="#" class="fa fa-linkedin"></a></li>
<li><a href="#" class="fa fa-youtube"></a></li>
<li><a href="#" class="fa fa-instagram"></a></li>
<li><a href="#" class="fa fa-yahoo"></a></li>
<li><a href="#" class="fa fa-reddit"></a></li>

</ul>
<ul>

<li>Advertise With Us</li> 
<li>Sitemap</li>

<li>Contact Us</li>

<li>Terms of Use</li>

<li>Privacy Policy</li>
</ul>

Copyright &copy 2008-2019 Powered By Software Pvt.All rights Reserved
</div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#div1").fadeToggle();
    $("#div2").fadeToggle("slow");
    $("#div3").fadeToggle(3000);
  });
});
</script>

</html>


    




