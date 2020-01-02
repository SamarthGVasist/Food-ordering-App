<!doctype html>
<html>
<head>
  <title>User Registration | PHP </title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="pg2.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div>
</div>
<div id="header">
<h1 class="hd" id="ch">Restopress</h1>

<ul>
  <li><a href="newlogin.php" >Home
  </a></li>
  <li><a href="" >About Us</a></li>
  <li><a href="" >Contact Us</a></li>
  <li><a href="" >Help</a></li>
</ul>
</div>
<form action="edit.php" method="POST">
    <div id="frmch">
 <div class="container">
    <div class="row">
      <div class="col-sm-3">
   <h1> Edit here</h1>
    <p>Fill up the form with correct values</p>
    <label for="id"><b>Id</b></label>
    <input class="form-control" type="text" name="id" required>
     
    <label for="firstname"><b>FirstName</b></label>
    <input class="form-control" type="text" name="firstname" required>
    
    <label for="lastname"><b>LastName</b></label>
    <input class="form-control" type="text" name="lastname" required>
    
    <label for="email"><b>Email</b></label>
    <input class="form-control" type="email" name="email" required>
    
    <label for="password"><b>Password</b></label>
    <input class="form-control" type="password" name="password" required>
  <br>
   <input class="btn btn-primary" type="submit" name="submit" value="Update">
 </div>
</div>
</div>
</div>
</form>
</div>
<?php 
$connection=mysqli_connect("localhost","root","","useraccounts");
   if(isset($_POST['submit']))
   {
      $fn=$_POST['firstname'];
      $ln=$_POST["lastname"];
      $mail=$_POST["email"];
      $ps=$_POST['password'];
       $id=$_POST['id'];
        $name=$_POST['firstname'];
       $query="UPDATE users SET firstname='$_POST[firstname]',lastname='$_POST[lastname]',email='$_POST[email]', password='$_POST[password]' where id='$_POST[id]' ";
       $query_run=mysqli_query($connection,$query);
       if($query_run)
       {
          echo '<script>alert("updated")</script>';
       }

       else
       {
         echo 'not updated';
       }
   
      
       
   }
?>

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
</html>


    
