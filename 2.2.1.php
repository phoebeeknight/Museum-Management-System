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
                            <span class="txt_darkgrey">ADD ARTEFACT</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
  <body bgcolor="white">
  
</div> 
                            <div class="height30"></div>
                            <td colspan="1">
                    <p align="center">
					  <a class="btn btn-lg btn-orange" href="2.2.php" role="button">   BACK   </a>   
                    </p>
                   </td>                         
                            <div class="height30"></div>
                            
  <strong><form class="artefactinsert" action="2.2.1.php" method="POST" enctype="multipart/form-data"> 
      
            <p>&nbsp;</p>
            <table border="0" align="center" width="720">
                <tr>
                
                <tr>
                <div class="input-container">
                 <td width="233"><strong>Artefact ID</strong></td>
                 <td width="10">:</td>
                 <td width="213"><input type="text" id="artefact_id" name="artefact_id" required/></td> <!-- add name attribute -->					
				<div class="bar"></div>
				</tr>
                	
                <tr>
                <div class="input-container">
                 <td width="233"><strong>Artefact Name</strong></td>
                 <td width="10">:</td>
                 <td width="213"><input type="text" id="artefact_name" name="artefact_name" required/></td> <!-- add name attribute -->					
				<div class="bar"></div>
				</tr>	
					      
                <tr>
                <div class="input-container">
                 <td width="233"><strong>Artefact Description</strong></td>
                 <td width="10">:</td>
                 <td width="213"><textarea rows="3" cols="20"id="artefact_desc" name="artefact_desc" required/></textarea></td> <!-- add name attribute -->					
				<div class="bar"></div>
				</tr>					
					
                <tr>
                <div class="input-container">
                 <td width="233"><strong>Artefact Type</strong></td>
                 <td width="10">:</td>
                 <td width="213"><select name="artefact_type">
					<option value="">Choose Artefact Type</option>
					<option value="Human Remains">Human Remains</option>
					<option value="Religious Relic">Religious Relic</option>
                    <option value="Ancient Pottery">Ancient Pottery</option>
                    <option value="Royal Treasure">Royal Treasure</option>
                    <option value="Egyptian Artefact">Egyptian Artefact</option></select>

</td> <!-- add name attribute -->					
				<div class="bar"></div>
				</tr>
                
                <tr>
                <div class="input-container">
                 <td width="233"><strong>Artefact Status</strong></td>
                 <td width="10">:</td>
                 <td width="213"><select name="artefact_status">
					<option value="">Choose Artefact Status</option>
					<option value="Available">Available</option>
					<option value="NotAvailable">Not Available</option>
                    <option value="Broken">Broken</option></select>
</td> <!-- add name attribute -->					
				<div class="bar"></div>
				</tr>
                
                <tr>
                <div class="input-container">
                 <td width="233"><strong>Artefact Receive Date</strong></td>
                 <td width="10">:</td>
                 <td width="213"><input type="date" id="artefact_receivedate" name="artefact_receivedate" required/></td> <!-- add name attribute -->					
				<div class="bar"></div>
				</tr>
                
                <tr>
                <div class="input-container">
                 <td width="233"><strong>Artefact Year</strong></td>
                 <td width="10">:</td>
                 <td width="213"><input type="number" id="artefact_year" name="artefact_year" required/></td> <!-- add name attribute -->					
				<div class="bar"></div>
				</tr>
                
                <tr>
                <div class="input-container">
        		<td width="233"><strong>Artefact Images</strong></td>
        		<td width="10">:</td>
        		<td width="213"><input type="file" id="artefact_images" name="artefact_images" required/></td>
                <div class="bar"></div>
   			  </tr>
               
               	  <tr>
                   <td colspan="5">
                  <p align="justify">&nbsp;</p>
                    <p align="center">
					  <input type="submit" name="submit" value="SUBMIT" class="btn_loadmore btn btn-lg btn-orange"></input>   
                    </p>
                   </td>
                   </tr>
                   
                </ul>
              </table>
   </form>
   
       
    
<?php 
if (isset($_POST['submit']))
			  {
require 'cont1.php';

	$artefact_id=$_POST['artefact_id'];
	$artefact_name=$_POST['artefact_name'];
	$artefact_desc=$_POST['artefact_desc'];
	$artefact_type=$_POST['artefact_type'];
	$artefact_status=$_POST['artefact_status'];
	$artefact_receivedate=$_POST['artefact_receivedate'];
	$artefact_year=$_POST['artefact_year'];
	$artefact_images=$_POST['artefact_images'];
	
	
	echo $artefact_id;
	echo $artefact_name;
	echo $artefact_desc;
	echo $artefact_type;
	echo $artefact_status;
	echo $artefact_receivedate;
	echo $artefact_year;
	
	
	$query=pg_query($conn,"INSERT INTO artefact(artefact_id,artefact_name,artefact_description,artefact_type,artefact_status,artefact_receiveDate,artefact_year) VALUES('".$artefact_id."','".$artefact_name."','".$artefact_desc."','".$artefact_type."','".$artefact_status."','".$artefact_receivedate."','".$artefact_year."')");

			  if($query)
			  {
			 echo'<script>alert("Success")</script>';
			 echo '<META http-equiv="refresh" content="0.001;
			 URL=2.2.php">';
			  }
			  else
			 
			 {
				 echo'<script>alert("Failed")</script>';
			 //echo '<META http-equiv="refresh" content="0.001;
			 //URL=4.2.1.php">';
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
                            <a class="btn btn-lg btn-orange" href="2.2.1.php" role="button">Back To Top</a>
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