<?php
include("connection.php");
 $r=$_GET['room'];
 $ci=$_GET['ci'];
 $co=$_GET['co'];

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
		<div style="background-image: url('img/b1.jpg');width:100%;height: 600px;" >
		<div id="header">
			<div id="logo">
				<h1><font color="white"><font size="8" >Hotel Saikot</font></h1> 
			</div>
			<div id="nav">
				<ul>
					<li><a href="index.php">Home</a></li>          
          <li><a href="#">Booking</a></li>
          <li><a href="rrate.php">Room Rent</a></li>
          <li><a href="facilities.php">Facilities</a></li>
          <li><a href="contact.php">About Us</a></li> 
				</ul>
			</div>
		</div>   
		<div id="banner">
      <div id="form">
        <form action="r1.php" method="post">
      <table style="color:yellow;">
        <?php

          $q1="select * from room where status='Un-Book'";
          $run=mysqli_query($a,$q1);
          $row=mysqli_fetch_array($run);
          $rno=$row['rno'];

          $q="select * from room where status='Un-Book'";
          $run=mysqli_query($a,$q);
          $num=mysqli_num_rows($run);
          //echo "Only ";
          //echo $num ;
         // echo " Rooms are Available.Thanks For your Interest.";
          if($r<=$num)
          {
            ?>

             <tr>
          <td>Status</td>
          <td><input type="text" name="Status" value="Available" disabled="disabled" title="Status"></td>
        </tr>
        <tr>
          <td>Name:</td>
          <td><input type="text" name="name" placeholder="Enter Your Name" title="Name"></td>
          <td>Contact NO:</td>
          <td><input type="text" name="idno" placeholder="Enter Your Contact No" title="ID"></td>
        </tr>
        
         <tr>
          <td>Thana:</td>
          <td><select name="thana">
            <option>--select--</option>
            <option>Singra</option>
            <option>Lalpur</option>
            <option>Naogaon</option>
          </select> </td>
        </tr>

        <tr>
          <td>District:</td>
          <td><select name="dis">
            <option>--select--</option>
            <option>Natore</option>
            <option>Rajshahi</option>
            <option>Bogura</option>
          </select> </td>
        </tr>
       
       <tr>
          <td>Division:</td>
          <td><select name="divs">
            <option>--select--</option>
            <option>Rangpur</option>
            <option>Rajshahi</option>
            <option>Dhaka</option>
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
          <td>Enter Members</td>
          <td><input type="text" name="members" placeholder="Enter Members" title="Members"></td>
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
       $m=$_POST['members'];

        

      if(mysqli_query($a,"insert into form(name,thana,dis,email,divs,cidate,codate,m,idno)value('$name','$thana','$dis','$email','$divs','$coin','$coout','$m','$idno')"))

      {
        mysqli_query($a,"update room set status='Booked' where rno=$rno");
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
    
 </div>
</body>
</html>