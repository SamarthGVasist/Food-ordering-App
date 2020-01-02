<?php 
 
      session_start();
      $con=mysqli_connect("localhost","root","","useraccounts");
      //mysqli_select_db($con,"login");
      $username=$_POST["user"];
      $password=$_POST["pass"];
      echo $username.$password;
 
      $s="select * from users where firstname = '$username' and password = '$password'";
      echo $s;
      $result=mysqli_query($con,$s);
      $num=mysqli_num_rows($result);
      $k="select * from users where firstname = '$username' and password = '$password'";
       
      if($num==1 && $username=="root")
      {
      	 $_SESSION['username']=$username;
      	 $_SESSION['role']="Admin";
      	 $_SESSION['email']=mysqli_fetch_object($result)->email;

      	 header('location:admin.php');
      }
      else if($num==1)
      {
      	 header('location:cust.php');
      	 $_SESSION['username']=$username;
      	 $_SESSION['role']="Customer";
      	 $_SESSION['email']=mysqli_fetch_object($result)->email;
      }
      else
      {
      	 echo "wrong";
      }

     
?>
