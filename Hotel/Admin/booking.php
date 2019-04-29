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
		<div style="background-image: url('img/aadminn.jpg');background-size:100% 700px;  width:100%;height: 710px;" >
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
     <h1 style="color:IndianRed;text-align: center; ">Welcome Admin</h1>
     <div style="background-color: rgba(255,255,255,.1); ">
     <table>
     	<tr>
     		<th style="color: IndianRed" width="10%" height="50px">Name</th>
     		<th style="color: IndianRed" width="10%" height="50px">Contact No</th>
     		<th style="color: IndianRed" width="10%" height="50px">Thana</th>
     		<th style="color: IndianRed" width="10%" height="50px">District</th>
     		<th style="color: IndianRed" width="10%" height="50px">Division</th>
            <th style="color: IndianRed" width="10%" height="50px">Email</th>
     		<th style="color: IndianRed" width="10%" height="50px">Check in Date</th>
     		<th style="color: IndianRed" width="10%" height="50px">Check out Date</th>
            <th style="color: IndianRed" width="10%" height="50px">Room Type</th>
     		<th style="color: IndianRed" width="10%" height="50px">No of Rooms</th>

     	</tr>
     	<?php
         $q1="select * from form";
         $run=mysqli_query($a,$q1);
         while($row=mysqli_fetch_array($run))
         {
         	$name=$row['name'];
         	$idno=$row['idno'];
         	$thana=$row['thana'];
         	$dis=$row['dis'];
         	$divs=$row['divs'];
            $email=$row['email'];
         	$cidate=$row['cidate'];
         	$codate=$row['codate'];
            $roomtype=$row['roomtype'];   
         	$m=$row['m'];
         ?>
        

     	<tr>
     		<td style="color: black" width="10%" height="50px" ><center><?php echo $name;?></center></td>
     		<td style="color: black" width="10%" height="50px" ><center><?php echo $idno;?></center></td>
     		<td style="color: black" width="10%" height="50px" ><center><?php echo $thana;?></center></td>
     		<td style="color: black" width="10%" height="50px" ><center><?php echo $dis;?></center></td>
     		<td style="color: black" width="10%" height="50px" ><center><?php echo $divs;?></center></td>
            <td style="color: black" width="10%" height="50px" ><center><?php echo $email;?></center></td>
     		<td style="color: black" width="10%" height="50px" ><center><?php echo $cidate;?></center></td>
     		<td style="color: black" width="10%" height="50px" ><center><?php echo $codate;?></center></td>
            <td style="color: black" width="10%" height="50px" ><center><?php echo $roomtype;?></center></td>
     		<td style="color: black" width="10%" height="50px" ><center><?php echo $m;?></center></td>
     	</tr>
        <?php
     	 }
     	?>

     </table>
 </div>
    </div>	
    <center>
     
  </center>
  </div>
  
 </div>
</body>
</html>