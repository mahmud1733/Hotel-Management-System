<?php

include("connection.php");

 session_start();

$ErrorMessage = $RoomType = $noOfRoom = $checkInDate = $checkOutTime = '';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (isset($_POST["roomtype"])) {
      $_SESSION['roomtype'] = $RoomType = $_POST["roomtype"];

    }
    if (isset($_POST["room"])) {
      $_SESSION['noOfRoom'] =$noOfRoom = $_POST["room"];

    }
    if (isset($_POST["ci"])) {
      $_SESSION['ci'] =$checkInDate = $_POST["ci"];
    }
    if (isset($_POST["co"])) {
      $_SESSION['co'] =$checkOutTime = $_POST["co"];
    }

    if (empty($RoomType) || empty($noOfRoom) || empty($checkInDate) || empty($checkOutTime) || empty($RoomType)) {
      global $ErrorMessage;
     
      $ErrorMessage = '<br>'.'<br>'."N.B. - Please Enter All information Correctly";
    }
    else{
      header('Location: registration.php');
    }

}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Hotel Saikot</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="img/LOGO.png" type="img/icon" rel="icon">
</head>

<body bgcolor = "grey">
  <div id="full">
     <div style="background-image: url('img/room.jpg');width:100%;height: 600px;">
    <div id="header">
      <div id="logo">
        <h1><font color="white"><font size="7"><font face="Algerian">Hotel Saikot</font></font></h1> 
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
</font>
</h1>
<p><br><br><br><br><br><br><br><br><br>
<div id = "f1">
  <form action="" method="POST">
      <center> 
        <table>
          <tr>
            <th width="15%" height="50px"><font size="4"><b><font color = "White">Room Type</font></b></font></th>
            <th width="15%" height="50px"><font size="4"><b><font color = "White">Check in Date</font></b></font></th>
            <th width="15%" height="50px"><font size="4"><b><font color = "White">Check out Date</font></b></font></th>
            <th width="13%" height="50px"><font size="4"><b><font color = "White">Room</font></b></font></th>
            <td rowspan="2"><input type="submit" value="Check" name="sub"></td>
          </tr>
          <tr>
            <td width="20%" height="50px"><center>
            <select name="roomtype">
              
              <option>Single AC</option>
              <option>Single Non AC</option>
              <option>Double AC</option>
              <option>Double Non AC</option>
            </select>
          </center></td>
            <td width="20%" height="50px"><center><input type="date" name="ci"></center></td>
            <td width="20%" height="50px"><center><input type="date" name="co"></center></td>
            <td width="20%" height="50px">
            <center>
            <select name="room">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </center>
            </td>
          </tr>
       </table></center>
     </form>

     <?php 
     echo '<br>'.'<br>'. $ErrorMessage;   
     ?>
  </div> 
</div>
 <div id = "copywrt">
  <font><center>© 2019 Hotel Saikot. All rights reserved.</center></font>
 </div>
 </div>
</body>
</html>