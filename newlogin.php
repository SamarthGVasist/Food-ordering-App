<!doctype html>
<html>
<head>
<title>
</title>
<link rel="stylesheet" type="text/css" href="pg1.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="header">
<h1 class="hd" id="ch">Restopress</h1>

<ul>
  <li><a href="" >Home</a></li>
  <li><a href="" >About Us</a></li>
  <li><a href="" >Contact Us</a></li>
  <li><a href="" >Help</a></li>
</ul>

</div>

<div id="slider">
		<div id="box">
<img id="ima" src="Best-Websites-for-Authentic-Mexican-Food-Recipes.jpg">
</div>
<button class="prew fa fa-chevron-left" onclick="prewImage()"></button>
		<button class="next fa fa-chevron-right" onclick="nextImage()"></button>
</div>
<br>
<br>
<div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
            <form action="process.php" method="POST">
            <p>
                <label>Username</label>
                <input type="text" id="user" name="user" placeholder="Enter Username">
            </p>
            <p>
                <label>Password</label>
                <input type="password" id="pass" name="pass" placeholder="Enter password">
            </p>    
            <p>

                <input type="submit" id="btn" name="Login">
            </p> 
            Don't have an account? <a href="registration.php" style="color:orange">Sign Up </a>       
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




<div id="content">
<section id="features">
<img src="add1.jpg" class="menu" id="ad" height="350" width="500">
 <div id="cont1">
<div id="flip"> <span id="sub">Delics Fast Food</span><br></div> 
<div id="panel"><p id="des"> The journey of a thousand pounds begins with a single burger</p>
</div>
</div>










   <img src="add5.jpg" class="menu" id="ad" height="400" width="500">
<div id="cont2">
<div id="flp"><span id="sub">Creamy Ice Relishes</span><br></div>
<div id="pnel"><p id="des">Summer would not be summer without ice-cream. Ice-cream is the favourite currency of love</p></div>
</div>

<img src="add4.jpg" id="ad" height="400" class="menu" width="450">
<div id="cont3">
<div id="fip"><span id="sub">Fruity Forever</span><br></div>
<div id="pel"><p id="des">A fruit salad is delicious precisely because each fruit maintains its own flavor</p>
</div>
</div>
 



</div>
</section>
</div>
<br><br>
<br><br>
<p id="quote">
"There is one inexhaustible aspect of everyday life that never dulls, namely the simple pleasure of eating and drinking"

</p>
 <p id="and">  - Andre Domine  </p>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script type="text/javascript">

  	var slider_content = document.getElementById('ima');

  	// contain images in an array
    var image = ['ad','ae','ac','af','ag','Best-Websites-for-Authentic-Mexican-Food-Recipes'];

    var i = image.length;


    // function for next slide 

    function nextImage(){
    	if (i<image.length) {
    		i= i+1;
    	}else{
    		i = 1;
    	}
    slider_content.src = image[i-1]+".jpg";
    slider_content.width="800";
    slider_content.height="600";
    
    	  
    }


    // function for prew slide

    function prewImage(){

    	if (i<image.length+1 && i>1) {
    		i= i-1;
    	}else{
    		i = image.length;
    	}
    	  slider_content.src = image[i-1]+".jpg";
    slider_content.width="800";
    slider_content.height="600";

    }

  
  // script for auto image slider



  </script>

  <script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});

$(document).ready(function(){
  $("#flp").click(function(){
    $("#pnel").slideToggle("slow");
  });
});
$(document).ready(function(){
  $("#fip").click(function(){
    $("#pel").slideToggle("slow");
  });
});
</script>





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