<?php
session_start();

if(!isset($_SESSION['StaffNo']))

{

    echo "<p align='center'>Please Login again ";
    header('Location: Log.php');
  // echo "<a href='index.php'>Click Here to Login</a></p>";

}
else

{

    $now = time();
   // echo $now ."&nbsp";
 // checking the time now when home page starts
  //  echo $_SESSION['start']."&nbsp";;
 //echo $_SESSION['expire']."&nbsp";;
    if($now > $_SESSION['expire'])

    {

        
        header('location:Log.php');
        session_destroy();
        echo "<p align='center'>Your session has expire ! <a href='login.php'>Login Here</a></p>";

    }

}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Page 1</title>
	<link href="Top.css" rel="stylesheet" type="text/css"  />
	<link href="Login.css" rel="stylesheet" type="text/css"  />
</head>
<body>
	<header class="headers">
	<div >
	<img src="icon1.jpg" class="icon1" alt="Icon 1" />
	<img src="icon2.jpeg" class="icon2" alt="Icon 2" />
	<h1 class="head1">POWER SECTOR-MARKETING</h1>
	<br>
	<ul>
		<li class="li1"><a href="ChangePassword.php" class="r1">Change Password</a></li>
		<li class="li1"><a href="UpdateProfile.php" class="r1">Update Profile</a></li>
		<li class="li1"><a href="AddUser.php" class="r1">Add User</a></li>
	</ul>
	<br>
	<button class="button1">HOME</button>
	<button class="button1">ABOUT US</button>
	<button class="button1">OUR CUSTOMERS</button>
	<button class="button1">BUSINESS ENVIRONMENT</button>
	<button class="button1">ONLINE SYSTEM</button>
	<button class="button1">TENDERS</button>
	<button class="button1">CONTRACTS</button>
	<button class="button1">EMPLOYEE CORNER</button>
	


</div>
</header>
<div class="row">
	<div class="col side">
		<div class="login">
                    <br>
		<form method="post" action="Log.php">
			
			<input type="submit" value="Return Back to Login" name="submit" class="submit">
        </form>
                <br>
        <form method="post" action="Default.php">
        	<button class="submit" style="background-color: #DDA0DD">Return to Default Page</button>
        </form>
        <br>

    </div>
	<br>
	<div class="login">
		<h3 class="head2">Quick Links</h3>
		<ul>
			<li><a href="#">Old Website</a></li>
			<li><a href="#">Customer Directory</a></li>
			<li><a href="#">Client Certificate</a></li>
			<li><a href="#">Knowledge Management</a></li>
			<li><a href="#">Telephone Directory</a></li>
			<li><a href="#">Debtor Management System</a></li>
			<li><a href="#">Webmail</a></li>
		</ul>
	</div>
    </div>
	<div class="col middle">
		<h2 class="head3" style="color:black">Tender Data Uploading</h2>
		<p style="font-size:30px;"> Click to proceed to Annexure-1 or Annexure-2</p>
		<a href="Annexure1.php" style="font-size:22px;">Annexure-1(Current Tenders)</a><br><br>
		<a href="Annexure2.php" style="font-size:22px;"> Annexure-2(Tender Doc Submission History)</a>
		
	</div>
</div>
</body>
</html>
