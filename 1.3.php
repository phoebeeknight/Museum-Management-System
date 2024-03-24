<!DOCTYPE html>
<?php
@ob_start();
session_start();
?>
<html >
<head>
	<meta charset="UTF-8">
	<title>MMS-User Log In</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style_userlog.css">

  
</head>
<body>

<!-- WRONG!!! <form class="login" action="processadmin.php" method="POST">-->
	<div id="header"> </div>

 
<!-- Mixins-->
	<!-- Pen Title-->
	<div class="pen-title">
	  <h1>Login Form</h1>
	  <span>FOR USER
	</div>
	
	<div class="return"><a href="1.1.php">BACK</a></div>

	<div class="container">
		<div class="card"></div>
		
		<div class="card">
			<h1 class="title">Login</h1>
			<form class="login" action="1.3.php" method="POST"> 
				<div class="input-container">
					<input type="text" id="username" name="username" placeholder="Username" required/> <!-- add name attribute -->
					<div class="bar"></div>
				</div>
				<div class="input-container">
					<input type="password" id="password" name="password" placeholder="Password" required/> <!-- add name attribute -->
					<div class="bar"></div>
				</div>
				<div class="button-container">
					<button type="submit" name="submit_login" value="Go" class="btn btn-default"><span>GO</span></button> <!-- add type & name attribute -->					 
				</div>	
			</form>
<?php 

if (isset($_POST['submit_login']))
			 {
require 'cont1.php';

	$user=$_POST['username'];
	$pass=$_POST['password'];
	
	$query=pg_query($conn,"SELECT * FROM staff WHERE staff_id='$user' AND staff_password='$pass'");
	//$query2=pg_query($conn,"SELECT * FROM USER WHERE user_id='$user' AND user_password='$pass'");
			  
			  $result=pg_fetch_assoc($query);
			  //$result2=pg_fetch_assoc($query2);
			  
			  if($result['position']==1)
			  {
				$_SESSION['username']=$user;
				header('Location:2.1.php');  
			  }
			  
			  //elseif($result1['position']==2)
				//{
				//	$_SESSION['username']=$user;
				//	header('Location: 1.1.1.php');	
				//}
				
			  //elseif($result2['position']==3)
				//{
				//	$_SESSION['username']=$user;
				//	header('Location: 1.1.1.php');	
				//}				

				else
				{
					echo"<p align='center'> <font color='red'> INVALID USERNAME OR PASSWORD </font></p>";
				}
				}
				
				?>	  

    <script src="js/index.js"></script>

</body>
</html>
