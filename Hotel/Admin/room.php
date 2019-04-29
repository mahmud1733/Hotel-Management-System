<?php
include("connection.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home-Admin-Room</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
	<link href="img/logo.png" type="img/icon" rel="icon">
</head>
<body>
	<div id="full">
		<div style="background-image: url('img/room.jpg');width:100%;height: 600px;" >
		<div id="header">
			<div id="logo">
				<h1><font color="white"><font size="8" >Hotel Saikot</font></h1> 
			</div>
			<div id="nav">
				<ul>
          <li><a href="ahome.php">Home</a></li>
          <li><a href="room.php">Room Update</a></li>
          <li><a href="booking.php">Booking</a></li>
          <li><a href="rd.php">Room Details</a></li>
          
        </ul>
			</div>
		</div>   
		<div id="banner">
      <center><div id="form">
        <form action="room.php" method="post">
      <table style="color:yellow;">
       
        <tr>
          <td>Room No</td>
          <td><input type="text" name="rno" placeholder="Enter Room No" title="Enter Room No"></td>          
        </tr>
        
         <tr>
          <td>Room Type</td>
          <td><input type="text" name="type" placeholder="Enter Room Type" title="Enter Room Type"></td>          
        </tr>

        <tr>
          <td>Room Rent</td>
          <td><input type="text" name="rate" placeholder="Enter Room Rate" title="Enter Room Rate"></td>          
        </tr>

        
        <td><input style="width: 120px;height: 30px;border-radius: 20px;opacity: 1;color:red;" type="submit" name="submit" value="submit"></td>

      </table>
    </form>

   <?php
     if(isset($_POST['submit']))
     {
      $rno=$_POST['rno'];
      $type=$_POST['type'];
      $p=$_POST['rate'];
      
      if(mysqli_query($a,"insert into room(rno,type,rate)values('$rno','$type','$p')"))
      {

        echo "Data insert";
      }

      else
      {
       echo "Data is not Inserted";
      }

     }
    
   ?>

    
      </div></center>
    </div>
	</div>
</div>
    <div id = "copywrt">
  <font><center>© 2019 Hotel Saikot. All rights reserved.</center></font>
 </div>
 </div>
</body>
</html>