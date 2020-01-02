<?php
	if(isset($_POST['additem']))
	{	
		$item = $_POST['item'];
		$price = $_POST['price'];
		if($item == "" || $price == "")
		{
			echo "cant be empty";
		}
		else
		{
			$conn = mysqli_connect("localhost",'root','','admin');
	  		if(!$conn)
	  			print "error";
	  		$query = "INSERT INTO menu (item, price)
			VALUES ('$item', '$price');";
			mysqli_query($conn, $query);
		}
	}
?>
<html>
<head>
	<title>Admin Menu</title>
</head>
<style>
	@import "https://fonts.googleapis.com/css?family=Lato:400,700";
	#header{
	margin:10px;
	background-color:#1c8adb;
	height:90px;
	}
	body{
  	background-color: #eee;
  	font-family: 'Lato', sans-serif;
	}
	.hd{
		text-align: center;
		padding-top: 20px;
	}
	#admin_photo{
		float: left;
		margin: 3px 0px 0px 10px;
		width: 75;
		height: 75;
		border: solid black;
		border-radius: 0px;
	}
	#admin_desc{
		float: left;
		margin: 3px 0px 0px 5px;
		padding: 28px;
		border: solid black;
		text-align: center;
	}
	ul{
		float: left;
		list-style-type: none;
		margin: 3px;
	}
	.btns{
	background-color: blue;
  	border: none;
  	color: white;
  	padding: 15px 0px 15px 0px;
  	width: 100;
  	text-align: center;
  	text-decoration: none;
  	display: inline-block;
  	font-size: 16px;
  	margin: 4px 2px;
  	}
	.btns1{
	background-color: #d6cece;
	border: none;
  	color: black;
  	padding: 15px 0px 15px 0px;
  	width: 100;
  	text-align: center;
  	text-decoration: none;
  	display: inline-block;
  	font-size: 16px;
  	margin: 4px 2px;
  	cursor: pointer;
	}
	#menu{
		border:solid;
		border-left-color: blue;
		border-left-width: 10px;
		margin: 3px;
		padding: 20px;
		padding-top: 10px;
		height: 300;
		overflow: auto;
		float: left;
	}
	table{
		border-collapse: collapse;
	}
	th{
		border: 1px solid #ddd;
		height: 25px;
		padding: 15px;
		text-align: center;
		vertical-align: middle;
		background-color: #4CAF50;
	}
	td{
		border: 1px solid #ddd;
		height: 25px;
		padding: 8px;
		width: 200px;
		padding-left: 90px;
		padding-right: 90px;
		text-align: center;
		vertical-align: middle;
	}
	
	tr:hover{
		background-color: #ddd;
	}
	td>img{
		height: 30;
		width: 30;
	}
	#modify{
		float: right;
		margin-right: 180px; 
		border-radius: 20px;
		padding: 10px 0px 10px 0px;
		cursor: pointer;
	}
	#add{
		margin-left: 200;
	}
	#additem{
		padding: 10px 0px 10px 0px;
		cursor: pointer;
	}
</style>
<body>
	<div id = "header">
        <h1 class="hd" id="ch">/*header*/</h1>
    </div>
    <div>
    	<img src="admin1.png" id="admin_photo">
    	<p id="admin_desc">
   			Admin
  		</p>
  	</div>
  	<br>
  	<br>
  	<br>
  	<br>
  	<br>
  	<ul id="buttons">
  		<li><input type="button" class = "btns" value="MENU"></li>
  		<li><a href="" class="btns1">ORDERS</a></li>
  		<li><a href="" class="btns1">USERS</a></li>
  	</ul>
  	<div id="info">
	  	<div id="menu">
	  	<table border="border">
	  		<caption style="padding-bottom: 10px;"><font size="5"><strong>Food Menu</strong></font></caption>
	  		<tr>
	  			<th>Name</th>
	  			<th>Price</th>
	  			<th>Availability</th>
	  		</tr>
	  		<?php
	  		$conn = mysqli_connect("localhost",'root','','admin');
	  		if(!$conn)
	  			print "error";
	  		$result = mysqli_query($conn,'SELECT * FROM menu');
	  		$num_fields = mysqli_num_fields($result);
	  		$num_rows = mysqli_num_rows($result);
	  		for($row_num = 1; $row_num <= $num_rows; $row_num++)
	  		{
	  			$row = mysqli_fetch_array($result);
	  			print "<tr>";
	  			print "<td>".htmlspecialchars($row['item'])."</td>";
	  			print "<td>".htmlspecialchars($row['price'])."</td>";
	  			$avail = htmlspecialchars($row['availibility']);
	  			if($avail)
	  				print "<td><img src='tick.jpg'></td>";
	  			else
	  				print "<td><img src='cross.jpg'></td>";
	  			print "</tr>";
	  		}
	  		?>
	  	</table>
	  	</div>
  	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  	<input id = "modify" type="button" class="btns" value="MODIFY" onclick="">
  	<br><br><br>
  </div>
  <div id="add">
	  	<form action="admin_menu.php" method="post">
	  		<input type="text" name="item" placeholder="Enter item here">
	  		<br>
	  		<input type="text" name="price" placeholder="Enter price here">
	  		<br>
	  		<input type="submit" id="additem" class = "btns" name="additem" value="ADD ITEM">
	  	</form>
	</div>
</body>
</html>