<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home-Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
	<link href="img/logo.png" type="img/icon" rel="icon">
</head>
<body>
	<div id="full">
		<div style="background-image: url('img/ahome.jpeg');background-size:100% 700px;  width:100%;height: 710px;" >
		<div id="header">
			<div id="logo">
				<h1><font color="white"><font size="8" >Hotel Saikot</font></h1> 
			</div>
      
			<div id="nav">
				<ul >
					<li><a href="#"><font size="4"><b>Home</b></font></a></li>
          <li><a href="#"><font size="4"><b>Reservation</b></font></a></li>
          <li><a href="#"><font size="4"><b>Rents</b></font></a></li>
          <li><a href="#"><font size="4"><b>Facilities</b></font></a></li>
          <li><a href="#"><font size="4"><b>About Us</b></font></a></li>
				</ul>
			</div>
		</div>   
		<div id="banner"><br><br><br><br><br><br><br><br><br><br><br><br>
      <center><div style="background: rgba(255,255,255,.5);width: 80%">
        <form action="" method="post" >
      <table>
        <tr>
          <td style="color:red; width="50%" height="50px">Username</td>
          <td><input type="text" name="un" placeholder="Enter Username"title="Enter Username"></td>
        </tr>
        <tr>
          <td style="color:red; width="50%" height="50px">Password</td>
          <td><input type="password" name="ps" placeholder="Enter Password"title="Enter Password"></td>
        </tr>
         <tr>
          <td colspan="2"><input type="submit" name="sub" value="Login" style="width: 100px;height: 30px;border-radius: 30px;color: red; opacity: 1.5"> </td>
        </tr>
      </table>
    </form>
    <?php
    if(isset($_POST['sub']))
    {
      $un=$_POST['un'];
      $ps=$_POST['ps'];
      $q1="select * from admin";
      $run=mysqli_query($a,$q1);
      $row=mysqli_fetch_array($run);
      $u=$row['un'];
      $p=$row['ps'];

      if($un==$u && $ps==$p)
      {
        header("Location:ahome.php");
      }
      else
      {
        header("Location:index.php?Wrong User");
      }
     
    }
    

    ?>      
  </div></center>
      
    </div>	
    <center>
     
  </center>
  </div>
  <div id = "copywrt">
  <font><center>© 2019 Hotel Saikot. All rights reserved.</center></font>
 </div>
 </div>
</body>
</html>



 