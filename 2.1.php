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
                                <li class="active"><a href="#home">HOME</a></li>
                                <li><a href="#report">REPORT</a></li>                               
                                <li><a href="#artefact">ARTEFACT</a></li>
                                <li><a href="#event">EVENT</a></li>
                                <li><a href="#ticket">TICKET</a></li>
                                <li><a href="#staff">STAFF</a></li>                                
                                <li><a href="#contact">CONTACT</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>
        
        <div>
<!--------------------------- HOME ------------------------------->
            <div id="templatemo-carousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#templatemo-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#templatemo-carousel" data-slide-to="1"></li>
                    <li data-target="#templatemo-carousel" data-slide-to="2"></li>

                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>WELCOME TO MUSEUM MANAGEMENT SYSTEM</h1>
                                <p>Malaysia Truly Asia</p>                        
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                                <div class="carousel-caption">
                                    	<h1>BUY ONLINE TICKET NOW!</h1>
                                        <p>Now you can buy your museum ticket anytime and everywhere. Hurry Up! Sign up or sign in now!</p>
                                </div>
                        </div>
                    </div><!-- /kiv -->
                        <div class="item">
                            <div class="container">
                                <div class="carousel-caption">
                                	<h1>ABOUT</h1>
                                    <p>Two years after independence, in 1959, the government appointed an architect named Mr. Ho Kok Hoe to design the proposed National Museum on the ruins of the Museum of Selangor. The construction was started in 1962 and on 31 August 1963, the National Museum building was finally fully completed and inaugurated by the 3rd Yang di Pertuan Agong Tuanku Syed Putra Al-Haj Ibni Almarhum Syed Hassan Jamalullail.</p>                                    
                                </div>
                            </div>
                        </div>
                </div>
                <a class="left carousel-control" href="#templatemo-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#templatemo-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>


<!-------------------------/REPORT------------------------------>
        <div id="report">
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header">
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray" />
                            <span class="txt_darkgrey">REPORT</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>
            <div class="report-caption">
       </div>
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
                    <div class="clearfix"></div>
                    <div class="templatemo-gallery-category" style="font-size:16px; margin-top:80px;">
                        <div class="text-center">
                            <a class="active" href=".gallery">All</a> / <a href=".gallery-human">Human Remains </a>/ <a href=".gallery-relic">Religious Relic</a> / <a href=".gallery-pottery">Ancient Pottery</a> / <a href=".gallery-royal">Royal Treasure</a> / <a href=".gallery-egyptian">Egyptian Artefact</a>							
                        </div>
                    </div>
                </div> <!-- /.row -->


                <div class="clearfix"></div>
                <div class="text-center">
                    <ul class="templatemo-project-gallery" >
                    
<form name="artefact" action="2.1.php" enctype="multipart/form-data">
<table border="0">
<?php 
require 'cont1.php';
//ociparse($c,"ajax_demo");
$result=pg_query($conn,"SELECT * FROM artefact");
$trow = 1;	 
while($row=pg_fetch_assoc($result))
		{
?>
<?php if ($trow == 1) { ?>
<tr width="30">
   <?php } ?>
<?php if ($trow <= 4) { ?>
<td>
<a class="colorbox" href="upload/<?php echo $row['artefact_images'];?>" data-group="
		<?php 
			if($result['artefact_type']=='Human Remains')
			  {
				'<a href=".gallery-human">';  
			  }
			 elseif($result['artefact_type']=='Religious Relic')
			 {
				 header('Location:".gallery-relic"');
			 }
			 elseif($result['artefact_type']=='Ancient Pottery')
			 {
				 header('Location:".gallery-pottery"');
			 }
			 elseif($result['artefact_type']=='Royal Treasure')
			 {
				 header('Location:".gallery-royal"');
			 }
			 elseif($result['artefact_type']=='Egyptian Artefact')
			 {
				 header('Location:".gallery-egyptian"');
			 }
		?>">
<div class="templatemo-project-box">
<img src="upload/<?php echo $row['artefact_images'];?>" width="200" height="200" class="img-responsive" alt="gallery" />
<div class="project-overlay">
<h5><?php echo $row['artefact_name'];?></h5>
<hr />
<h4><?php echo $row['artefact_year'];?> YEARS</h4>
<hr />
<h4><?php echo $row['artefact_type'];?></h4>
</div>
</div>
</a>
<p align="center"><?php echo $row['artefact_description'];?></p>
</td>
</form>
<?php $trow++ ?>
<?php } //endif ?>
<?php if ($trow == 5) { $trow = 1; ?>
</tr>
<?php } ?>
<?php } //endwhile ?>
</table>
</form>

                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-royal" >
                            <a class="colorbox" href="images/4 Dokoh Buah Sukun.jpg" data-group="gallery-royal">
                                <div class="templatemo-project-box">
                                    <img src="images/4 Dokoh Buah Sukun.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Royal Treasure</h5>
                                        <hr />
                                        <h4>DOKOH BUAH SUKUN</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-egyptian" >
                            <a class="colorbox" href="images/5 egypt2.jpeg" data-group="gallery-egyptian">
                                <div class="templatemo-project-box">
                                    <img src="images/5 egypt2.jpeg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Egyptian  Artefact</h5>
                                        <hr />
                                        <h4>NEFERTITI</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-inspiration" >
                            <a class="colorbox" href="images/full-gallery-image-6.jpg" data-group="gallery-inspiration">
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-6.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Inspiration</h5>
                                        <hr />
                                        <h4>CABLE TRAIN</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-design" >
                            <a class="colorbox" href="images/full-gallery-image-7.jpg" data-group="gallery-design">
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-7.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Web Design</h5>
                                        <hr />
                                        <h4>CITY</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-creative" >
                            <a class="colorbox" href="images/full-gallery-image-8.jpg" data-group="gallery-creative">
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-8.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Creative</h5>
                                        <hr />
                                        <h4>BIRDS</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-graphic" >
                            <a class="colorbox" href="images/full-gallery-image-9.jpg" data-group="gallery-graphic">
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-9.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Graphic</h5>
                                        <hr />
                                        <h4>NATURE</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-inspiration" >
                            <a class="colorbox" href="images/full-gallery-image-10.jpg" data-group="gallery-inspiration">
                                <div class="templatemo-project-box">
                                    <img src="images/gallery-image-10.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Inspiration</h5>
                                        <hr />
                                        <h4>DOGGY</h4>
                                    </div>
                                </div>
                            </a>
                        </li>

                    </ul><!-- /.gallery -->
                </div>
                <div class="clearfix"></div>
                <div class="row text-center">
                    <a class="btn_loadmore btn btn-lg btn-orange" href="2.2.php" role="button">UPDATE ARTEFACT</a>
                </div>
            </div><!-- /.container -->
        </div> 
<!----------------------------- /EVENT ----------------------------->

        <div id="event">
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey">EVENT</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                    <br class="clearfix"/>
                </div>
                
                <div class="blog_box">
                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4">
                                <a href="#">
                                    <img class="img-responsive" src="images/blog-image-1.jpg" alt="gallery 1" />
                                </a>
                            </li>
                            <li  class="col-md-8">
                                <div class="pull-left">
                                    <span class="blog_header">GRAPHIC DESIGN</span><br/>
                                    <span>Posted by : <a class="link_orange" href="#"><span class="txt_orange">Tracy</span></a></span>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-orange" href="#" role="button">21 February 2084</a>
                                </div>
                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                    Aliquam quis rutrum risus, ut condimentum ipsum. Nullam aliquet libero augue, eget auctor felis vulputate id. Proin a enim eu libero ornare malesuada. Sed iaculis fringilla lacinia. Sed laoreet lectus vitae [...]
                                </p>
                            </li>
                        </ul>
                    </div> <!-- /.blog_post 1 -->
                    
                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4"><a href="#">
                                <img class="img-responsive" src="images/blog-image-2.jpg" alt="gallery 2" /></a>
                            </li>
                            <li class="col-md-8">
                                <div class="pull-left">
                                    <span class="blog_header">WEBSITE TEMPLATE</span><br/>
                                    <span>Posted by : <a class="link_orange" href="#"><span class="txt_orange">Mary</span></a></span>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-orange" href="#" role="button">18 February 2084</a>
                                </div>
                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                        Morbi imperdiet ipsum sit amet dui pharetra, vulputate porta neque tristique. Quisque id turpis tristique, venenatis erat sit amet, venenatis turpis. Ut tellus ipsum, posuere bibendum [...]
                                </p>
                            </li>
                        </ul>	
                    </div><!-- /.blog_post 2 -->
                    
                    <div class="templatemo_clear"></div>
                    
                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4"><a href="#">
                                <img class="img-responsive" src="images/blog-image-2.jpg" alt="gallery 3" /></a>
                            </li>
                            <li class="col-md-8">
                                <div class="pull-left">
                                    <span class="blog_header">WEB DEVELOPMENT</span><br/>
                                    <span>Posted by : <a class="link_orange" href="#"><span class="txt_orange">Julia</span></a></span>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-orange" href="#" role="button">14 February 2084</a>
                                </div>
                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                        Fusce molestie tellus risus, id commodo turpis convallis id. Morbi mattis sapien sapien, vitae lacinia ante interdum sit amet. Praesent eget varius diam, ac tempor est. Mauris at scelerisque magna [...]
                                </p>
                            </li>
                        </ul>	
                    </div><!-- /.blog_post 3 -->
                    
                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4">
                                <a href="#">
                                    <img class="img-responsive" src="images/blog-image-1.jpg"  alt="gallery 4" />
                                </a>
                            </li>
                            <li class="col-md-8">
                                <div class="pull-left">
                                    <span class="blog_header">NEW FLUID LAYOUT</span><br/>
                                    <span>Posted by : <a class="link_orange" href="#"><span class="txt_orange">Linda</span></a></span>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-orange" href="#" role="button">11 February 2084</a>
                                </div>
                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                    In venenatis sodales purus a cursus. Ut consectetur, libero ac elementum tristique, enim ante aliquet mauris, scelerisque congue magna neque ac purus. Aliquam facilisis volutpat odio [...]
                                </p>
                            </li>
                        </ul>
                    </div> <!-- /.blog_post 4 -->
                    
                </div>
            </div>
        </div>
<!-------------------------/TICKET------------------------------>
        <div id="ticket">
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header">
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray" />
                            <span class="txt_darkgrey">TICKET</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>
            <div class="ticket-caption">
       </div>
<!-------------------------/STAFF------------------------------>
        <div id="staff">
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header">
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray" />
                            <span class="txt_darkgrey">STAFF</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>
            <div class=staff-caption">
       </div>
        
<!----------------------------/CONTACT US--------------------------->
        <div id="contact">
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header head_contact">
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/>
                            <span class="txt_darkgrey">CONTACT US</span>
                            <hr class="team_hr team_hr_right hr_gray"/>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="templatemo-contact-map" id="map-canvas"> </div>  
                        <div class="clearfix"></div>
                        <i>You can find us on Hang Tuah Jaya, 76100 Durian Tunggal, <span class="txt_orange"> Melaka</span> in Malaysia.</i>
                    </div>
                    <div class="col-md-4 contact_right">
                        <p>Come and visit our historical museum! Malaysia Truly Asia.</p>
                        <p><img src="images/location.png" alt="icon 1" /> Hang Tuah Jaya, 76100 Durian Tunggal, Melaka, Malaysia</p>
                        <p><img src="images/phone1.png"  alt="icon 2" /> 06-1234567</p>
                        <p><img src="images/globe.png" alt="icon 3" /><a class="link_orange" href="#"><span class="txt_orange">www.mms.com</span></a></p>
                          	
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /#templatemo-contact -->


        <div class="templatemo-tweets">
            <div class="container">
                <div class="row" style="margin-top:20px;">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-1">
                                <img src="images/quote.png" alt="icon" />
                        </div>
                        <div class="col-md-7 tweet_txt" >
                                <span>The National Museum is the national landmark serves as a platform for exhibition and demonstration of national identity through the historical and cultural storytelling of the country.</span>
                                <br/>
                                <span class="twitter_user">Head Director of Jabatan Muzium Negara Malaysia</span>
                        </div>
                        <div class="col-md-2">
                        </div>
                 </div><!-- /.row -->
            </div><!-- /.container -->
        </div>


<!-----------------------------/footer------------------------------>          
        <div class="footer" >
            <div class="container">
                <div class="row">
                    <div class="text-center">

                        <div class="footer_container">

                            <div class="height30"></div>
                            <a class="btn btn-lg btn-orange" href="#home" role="button">Back To Top</a>
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