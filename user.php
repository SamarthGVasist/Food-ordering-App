<!doctype html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="users.css">
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
</div>


</div>
<div class="content">
	<div class="menu">
		<ul class="nav">
			<li><a href="">Menu</a></li>
			<li><a href="">Orders</a></li>
			<li><a href="">Users</a></li>
		</ul>
</div>
</div>
<div>
<?php 
 
      session_start();
      $con=mysqli_connect("localhost","root","","useraccounts");
      //mysqli_select_db($con,"login");
      
     
      $k="select * from users";
      $result=mysqli_query($con,$k);  
      if ($result->num_rows > 0) {
    // output data of each row
      	echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email-id</th>
<th>Role</th>
</tr>";
     while($row = $result->fetch_assoc()) {
     	if($row['firstname']=="root")
     	{
           echo "<tr>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . "Admin" . "</td>";
echo "</tr>";		
     	}
     	else
     	{
     echo "<tr>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . "Customer" . "</td>";
echo "</tr>";
    }}
} else {
    echo "0 results";
}
$con->close();
?>
</div>


</body>
</html>
