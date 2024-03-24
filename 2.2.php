<!DOCTYPE html>
<?php 

session_start();//function untuk mulakan sesi baru
if (empty($_SESSION['username'])) //jika sesi kosong maka user akan dhantar ke page login iaitu index.php
{
	header('Location:1.1.php');
}
?>
<html lang="en">
    <head>
        <title>Museum Management System</title>
        <meta name="keywords" content="" />
		<meta name="description" content="" />
<!--

Urbanic Template

http://www.templatemo.com/tm-395-urbanic

-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link rel="shortcut icon" href="PUT YOUR FAVICON HERE">-->
        
        <!-- Google Web Font Embed -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
        <link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>   

        <div class="templatemo-top-bar" id="home">
            <div class="container">
                <div class="subheader">                             	
                    	<div id="User" class="pull-right">
                        <ul class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                           <?php
						   
						   		require 'cont1.php';
																
								$username1=$_SESSION['username'];
							
								
								$query=pg_query($conn,"SELECT  * FROM staff WHERE staff_id='".$username1."'");
								
								while($row=pg_fetch_assoc($query))
								{
									echo $row['staff_name'];	
								}
						   ?> 
                           <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="1.4.php"><i class="fa fa-fw fa-user"></i>PROFILE</a> 
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="1.3.1.php"><i class="fa fa-fw fa-power-off"></i>LOG OUT</a> 
                        </li>
                  </ul>
              </ul>
                                                         
                          
                    	</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="templatemo-top-menu">
            <div class="container">
<!-------------------------- Static navbar ------------------------->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a href="2.1.php" class="navbar-brand"><img src="images/logo.png" alt="MUSEUM MANAGEMENT SYSTEM" title="MUSEUM MANAGEMENT SYSTEM" /></a>
                        </div>
                        <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                            <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
                                <li><a href="2.1.php">HOME</a></li>
                                <li><a href="2.1.php">REPORT</a></li>                               
                                <li class="active"><a href="#artefact">ARTEFACT</a></li>
                                <li><a href="2.1.php">EVENT</a></li>
                                <li><a href="2.1.php">TICKET</a></li>
                                <li><a href="2.1.php">STAFF</a></li>                                
                                <li><a href="2.1.php">CONTACT</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>
        
        <div>
<!------------------------- /ARTEFACT ---------------------------->

        <div id="artefact" >
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/>
                            <span class="txt_darkgrey">ARTEFACT</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
  <body bgcolor="white">
  

 <?php

require 'cont1.php';

//ociparse($c,"ajax_demo");
$result=pg_query($conn,"SELECT * FROM artefact");


echo"<table width='1500' align='center' border='1' cellspacing='0.5'>";
echo"<tr>";
echo"<td width='150' align='center' height='25' ><b>ID</b></td>";
echo"<td width='150' align='center' height='25' ><b>Name</b></td>";
echo"<td width='150' align='center' height='25' ><b>Description</b></td>";
echo"<td width='150' align='center' height='25' ><b>Type</b></td>";
echo"<td width='150' align='center' height='25' ><b>Status</b></td>";
echo"<td width='150' align='center' height='25' ><b>Receive Date</b></td>";
echo"<td width='150' align='center' height='25' ><b>Year</b></td>";
echo"<td width='150' align='center' height='25' ><b>Image</b></td>";
echo"<td width='150' align='center' height='25' ><b>Edit</b></td>";
echo"<td width='150' align='center' height='25' ><b>Remove</b></td>";
echo"</tr>";
echo"</table>"; 
	
while($row = pg_fetch_assoc($result))
  {
echo"<table width='1500px' align='center' border='1' cellspacing='0.5'>";
	  
echo"<tr>";
echo"<td width='150' align='center' height='25' >".$row['artefact_id']."</td>";
echo"<td width='150' align='center' height='25' >".$row['artefact_name']."</td>";
echo"<td width='150' align='center' height='25' >".$row['artefact_description']."</td>";
echo"<td width='150' align='center' height='25' >".$row['artefact_type']."</td>";
echo"<td width='150' align='center' height='25' >".$row['artefact_status']."</td>";
echo"<td width='150' align='center' height='25' >".$row['artefact_receivedate']."</td>";
echo"<td width='150' align='center' height='25' >".$row['artefact_year']."</td>";
echo"<td width='150' align='center' height='25' >".$row['artefact_images']."</td>";
echo"<td width='150' align='center' height='25'><a class='btn_loadmore btn btn-lg btn-orange' href='2.2.2.php?artefact_id=".$row['artefact_id']."' name='edit' size='25px'>EDIT</a></td>";
//echo"<td align='center' height='25px' width='150px'><a href='2.2.php?artefact_id=".$row['artefact_id']."'> <img src='images/delete1.png' alt='Delete' height='25px' width='25px' /></a></td>";
echo"<td width='150' align='center' height='25'><a class='btn_loadmore btn btn-lg btn-orange' href='2.2.php?artefact_id=".$row['artefact_id']."' name='remove' size='25px''>Remove</a></td>";
	echo"</tr>";
	echo"</table>";
	  }	  
echo"<br>";	
?>
<div class="clearfix"></div>
<div class="row text-center">
<a class="btn_loadmore btn btn-lg btn-orange" href="2.2.1.php" role="button">ADD ARTEFACT</a>
</div>
</div>

<script type="text/javascript">
/*function delete_id(id)
{
     if(confirm('Sure To Remove This Record ?'))
     {
        window.location.href='2.2.php?delete_id='+id;
     }
}*/
</script>
<?php 

if(isset($_GET['artefact_id']))
{
	require 'cont1.php';
	$artefact_id=$_GET['artefact_id'];
	$result=pg_query($conn, "DELETE FROM artefact WHERE artefact_id='".$artefact_id."'");

			  if($result)
			  {
			 echo'<script>alert("Success")</script>';
			 echo '<META http-equiv="refresh" content="0.001;
			 URL=2.2.php">';
			  }
			  else
			 
			 {
			 echo'<script>alert("Failed")</script>';
			 //echo '<META http-equiv="refresh" content="0.001;
			 //URL=2.2.php">';
			  }
}
?>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>


  </body>

</div>
</div>
</div>

<!-- /.container -->
        </div> 

       
        
<!-----------------------------/footer------------------------------>          
        <div class="footer" >
            <div class="container">
                <div class="row">
                    <div class="text-center">

                        <div class="footer_container">

                            <div class="height30"></div>
                            <a class="btn btn-lg btn-orange" href="2.2.php" role="button">Back To Top</a>
                            <div class="height30"></div>
                        </div>
                        <div class="footer_bottom_content">
                   			<span id="footer-line">Copyright © 2017 <a href="2.1.php">Museum Management System</a></span>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/templatemo_script.js"  type="text/javascript"></script>
		<!-- templatemo 395 urbanic -->
    </body>
</html>