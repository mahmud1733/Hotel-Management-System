<?php

session_start();

include("connection.php");

$roomtype = $noOfRoom = $ci = $co = "";

if (isset($_SESSION['roomtype'])) {
 
$roomtype = $_SESSION['roomtype'];
}


if (isset($_SESSION['noOfRoom'])) {
 $noOfRoom = $_SESSION['noOfRoom'];
}
if (isset($_SESSION['ci'])) {
$ci = $_SESSION['ci'];


}
if (isset($_SESSION['co'])) {
$co = $_SESSION['co'];
}



?>


<!DOCTYPE html>
<html>
<head>
	<title>Home-Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/LOGO.png" type="img/icon" rel="icon">
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
					<li><a href="index.php"><font size="4"><b>Home</b></font></a></li>
                    <li><a href="reservation.php"><font size="4"><b>Reservation</b></font></a></li>
                    <li><a href="rrate.php"><font size="4"><b>Rooms</b></font></a></li>
                    <li><a href="facilities.php"><font size="4"><b>Facilities</b></font></a></li>
                    <li><a href="aboutus.php"><font size="4"><b>About Us</b></font></a></li>
				</ul>
			</div>
		</div>   
		<div id="banner">
      <div id="form">
        <form action="registration.php" method="post">
      <table style="color:yellow;">
        <?php
          $q1="select * from room where status='Un-Book' and type='$roomtype'";
          $temp = $roomtype;
          $run=mysqli_query($a,$q1);
          $row=mysqli_fetch_array($run);   //THIS IS FOR BOOKED
          $rno=$row['rno'];

          $q="select * from room where status='Un-Book' and type='$roomtype'";
          $run=mysqli_query($a,$q);
          $num=mysqli_num_rows($run);
          //echo "Only ";
          echo $num ;
         // echo " Rooms are Available.Thanks For your Interest.";
          if($noOfRoom<=$num)
          {
            ?>

             <tr>
          <td>Status</td>
          <td><input type="text" name="Status" value="Available" disabled="disabled" title="Status"></td>
        </tr>
        <tr>
          <td>Name:</td>
          <td><input type="text" name="name" placeholder="Enter Your Name" title="Name" required></td>
          <td>Contact No:</td>
          <td><input type="text" name="idno" placeholder="Enter Your Contact No" title="ID" required></td>
        </tr>
        
         <tr>
          <td>Thana:</td>
          <td><select name="thana">
            <option>--select--</option>
            <option>Singra</option>
            <option>Lalpur</option>
            <option>Naogaon</option>
            <option>Gurudashpur</option>
            <option>Batiaghata</option>
            
          </select> </td>
        </tr>

        <tr>
          <td>District:</td>
          <td><select name="dis">
            <option>--select--</option>
            <option>Natore</option>
            <option>Rajshahi</option>
            <option>Bogura</option>
            <option>Khulna</option>
            <option>Bagerhat</option>
            <option>Chuadanga</option>
            <option>Jessore</option>
            <option>Jhenaidah</option>
            <option>Magura</option>
            <option>Kushtia</option>
          </select> </td>
        </tr>
       
       <tr>
          <td>Division:</td>
          <td><select name="divs">
            <option>--select--</option>
            <option>Rajshahi</option>
            <option>Rangpur</option>         
            <option>Dhaka</option>
            <option>Barishal</option>
            <option>Chattogram</option>
            <option>Khulna</option>
            <option>Mymensingh</option>
            <option>Sylhet</option>
          </select> </td>
        </tr>

       <tr>
          <td>Enter E-mail:</td>
          <td><input type="text" name="email" placeholder="Enter Your E-mail" title="E-mail"></td>
        </tr>
         
        <tr>
          <td>Check In:</td>
          <td><input type="text" name="coin" value="<?php echo $ci; ?>" title="Check in"></td>
          <td>Check Out:</td>
          <td><input type="text" name="coout" value="<?php echo $co; ?>" title="Check out"></td>
        </tr>
        <tr>
          <td>No of Rooms</td>
          <td><input type="text" name="members" value=" <?php echo $noOfRoom ?> " title="Members" required></td>

          <td>Room Type</td>
          <td><input type="text" name="roomtype" value=" <?php echo $roomtype ?> " title="Room type" required>  </td>
        </tr>

         <td><input style="width: 120px;height: 30px;border-radius: 20px;opacity: 1;color:red;" type="submit" name="submit" value="submit"></td>

      <?php }

         else
         {
          ?>
           <tr>
              <td>Status</td>
              <td><input type="text" name="Status" value="Not-Available" disabled="disabled" title="Status"></td>
          </tr>
          <?php
         }
       ?> 

      </table>
    </form>
    <?php
    if(isset($_POST['submit']))
    {
     
       $name=$_POST['name'];
       $idno=$_POST['idno'];
       $thana=$_POST['thana'];
       $dis=$_POST['dis'];
       $divs=$_POST['divs'];
       $email=$_POST['email'];
       $coin=$_POST['coin'];
       $coout=$_POST['coout'];
       $m= (int)$_POST['members'];
       $roomtype=$_POST['roomtype'];
       echo 'value of room type is '.$roomtype;

        

      if(mysqli_query($a,"insert into form(name,thana,dis,email,divs,cidate,codate,m,idno,roomtype)value('$name','$thana','$dis','$email','$divs','$ci','$co','$m','$idno','$roomtype')"))

      {

        while($m>0)
          {
            mysqli_query($a,"update room set status='Booked' where rno=$rno");
            $m = $m-1;
            echo 'loop working';
             $q1="select * from room where status='Un-Book'  and type='$temp'";
            $run=mysqli_query($a,$q1);
            $row=mysqli_fetch_array($run);   //THIS IS FOR BOOKED
            $rno=$row['rno'];
          }
        
        header("Location:fi.php");
        

        
      }
      else
      {
        echo "Data is not Inserted";
      }

    }
    ?>
      </div>
    </div>
	</div>
</div>
  <div id = "copywrt">
  <font><center>© 2019 Hotel Saikot. All rights reserved.</center></font>
 </div>   
 </div>
</body>
</html>