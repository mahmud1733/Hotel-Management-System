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
		<div  >
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
     		<th style="color: red" width="25%" height="50px">Room No</th>
     		<th style="color: red" width="25%" height="50px">Room Type</th>
     		<th style="color: red" width="25%" height="50px">Rate</th>
     		<th style="color: red" width="25%" height="50px">Status</th> 
            <th style="color: red" width="25%" height="50px">Option</th>    		
     	</tr>

        <?php
         $q1="select * from room";
         $run=mysqli_query($a,$q1);
         while($row=mysqli_fetch_array($run))
         {
            $rno=$row['rno'];
            $type=$row['type'];
            $rate=$row['rate'];
            $status=$row['status'];
            
         ?>

     	<tr>
     		<td style="color: black" width="25%" height="50px" ><center><?php echo $rno;?></center></td>
     		<td style="color: black" width="25%" height="50px" ><center><?php echo $type;?></center></td>
     		<td style="color: black" width="25%" height="50px" ><center><?php echo $rate;?></center></td>
     		<td style="color: black" width="25%" height="50px" ><center><?php echo $status;?></center></td>
            <td><a style="color: black" href="co.php? rno=<?php echo $rno;?>">Check Out</td>
     		
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