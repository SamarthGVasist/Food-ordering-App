<?php 
  session_start();
  ?>
<!doctype html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div id="header">
		
<h1 class="hd" id="ch">Restopress</h1>

<ul class="t">
  <li><a href="" >Home</a></li>
  <li><a href="" >About Us</a></li>
  <li><a href="" >Contact Us</a></li>
  <li><a href="" >Help</a></li>
</ul>

</div>
<div class="head">
<img id="ad" src="ad.png" height="150" width="150">
<div class="adh">
<h1>Admin</h1>
<p><b>(Administrator)</b></p>
</div>







<div class="dash">
	<h1>Admin Dashboard</h1>
    
</div>
</div>
<div class="content">
	<div class="menu">
		<ul class="nav">
			<li><a href="">Menu</a></li>
			<li><a href="">Orders</a></li>
			<li><a href="user.php">Users</a></li>
		</ul>
</div>
</div>
<div class="main">
<img id="prom" src="food1.jpg">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="info">
<table cellspacing="12">
	<tr>
		<td>Name</td>
		<td><?php echo $_SESSION['username']?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><?php echo $_SESSION['email']?></td>
	</tr>
	<tr>
		<td>Role</td>
		<td><?php echo $_SESSION['role']?></td>
	</tr>
</table>
</div>
</div>
</div>	
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});

</body>
</html>
