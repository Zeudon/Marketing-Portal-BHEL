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
<?php

$conn = mysqli_connect("localhost","root","","login");



        if(isset($_POST['save']))
{
   
    $filename = $_FILES['myfile']['name'];
    $destination= 'annexure/'.$filename;
    $file  = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    $slno= $_POST['slno'];
    $docname= $_POST['docname'];
    $dateofupload= $_POST['dateofupload'];
    $fname= $_POST['filename'];

    $sql = "INSERT INTO annex(id,slno,docname,dateofupload,filename) VALUES('$filename','$slno','$docname','$dateofupload','$fname')";
     
        move_uploaded_file($file, $destination);
           
            
        mysqli_query($conn,$sql);
           

            
        
}

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Annexure 2 Add Page</title>
        <link href="Top.css" rel="stylesheet" type="text/css"  />
    <link href="Login.css" rel="stylesheet" type="text/css"  />
    <link href="Default.css" rel="stylesheet" type="text/css"  />
    <link href="buttons.css" rel="stylesheet" type="text/css"  />
    </head>
    <body>
         <header class="headers">
    <div >
    <img src="icon1.jpg" class="icon1" alt="Icon 1" />
    <img src="icon2.jpeg" class="icon2" alt="Icon 2" />
    <h1 class="head1">POWER SECTOR-MARKETING</h1>
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
<div style="text-align:center;">
        <form action="upload2.php" method="post" id="upload" and enctype="multipart/form-data">
	<input type="file" name="myfile"><br>


    <label for="slno"><b>Sl.NO</b></label><br>
    <input type="text" placeholder="Enter Sl.no" name="slno" required><br>
    
    <label for="docname"><b>DocName</b></label><br>
    <input type="text" placeholder="Enter docname" name="docname" required><br>
    
    <label for="dateofupload"><b>Date of Upload</b></label><br>
    <input type="text" placeholder="Enter date" name="dateofupload" required><br>
    
    <label for="filename"><b>filename</b></label><br>
    <input type="text" placeholder="Enter filename" name="filename" required><br>
    

        <button type="submit" name="save" class="button4 button2d">Upload</button>
        </form>
        
        <form  action="Annexure2.php">
        <input  type="submit" value="back" class="button2 button2d"/>
        </form>
    </div>
        
    </body>
</html>
