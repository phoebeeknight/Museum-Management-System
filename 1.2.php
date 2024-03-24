<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>MMS-User Sign Up</title>
	<link rel="styleuserregister" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/styleuserregister.css">

  
</head>
<body>


	<div id="header"> </div>

  
	<!-- Mixins-->
	<!-- Pen Title-->
	<div class="pen-title">
	  <h1>Register Form</h1>
	  <span>FOR USER
	</div>
	
	<div class="rerun"><a href="1.1.php">BACK</a></div>

<div class="container">
		<div class="card"></div>
        <!---------------Form---------------->
		
<div class="card">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form class="login" action="code_exec_register.php" method="POST">
      <div class="input-container">
        <input type="username" id="username" name='username' required/>
        <label for="username">Username</label>
        <div class="bar"></div>
      </div>
       <div class="input-container">
        <input type="password" id="password" name='password' required/>
        <label for="password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
      <input type="phoneNo" id="phoneNo" name='phoneNo' required/>
        <label for="phoneNo">Phone number</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
      <input type="email" id="email" name='email' required/>
        <label for="email">Email</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
      <input type="DOB" id="DOB" name='DOB'required/>
        <label for="DOB">Date of birth</label>
        <div class="bar"></div>
      </div>
     
      <div class="button-container">
        <button type='next' name='register' class="btn btn-default"><span>Next</span></button>
      </div>
    </form>
    
    
    
  </div>
  </div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>

</body>