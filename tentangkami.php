﻿<?
include "session.php";
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Tentang Kami</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Html5TemplatesDreamweaver.com">

    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">

    <link href="styles/custom.css" rel="stylesheet" type="text/css" />
</head>
<body id="pageBody">

<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divPanel notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo" class="pull-left">
                        <div id="apDiv1"><img src="images/logo_kursusmy.png" width="183" height="61"></div>
                        <a href="index.php" id="divTagLine">Portal Kursus Malaysia</a>
                    </div>

                    <div id="divMenuRight" class="pull-right">
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                        NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                            <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                            <li><a href="index.php">Laman Utama</a></li>
                            <li class="active"><a href="tentangkami.php">Tentang Kami</a></li>
							
						    <li><a href="kalendar.php">Direktori</a></li>
						    <li><a href="pendaftaran.php">Pendaftaran</a></li>						    
                            <li><a href="contact.php">Hubungi Kami</a></li>
                            </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <div id="contentInnerSeparator"></div>
                </div>
            </div>
    </div>

    <div class="contentArea">

        <div class="divPanel notop page-content">

            <div class="breadcrumbs">
                <a href="index.php">Laman Utama</a> &nbsp;/&nbsp; <span>Tentang Kami</span>
            </div>

            <div class="row-fluid">
			<!--Edit Main Content Area here-->
                <div class="span8" id="divMain">

                    <h1>Tentang Kami</h1>
					<hr>
					<h3>Pendekatan Kami</h3>
                    <p><strong>Menyediakan Kursus dengan kadar yang berpatutan.</strong></p>                                 
                    <p>Kursus.my adalah portal kursus untuk rakyat Malaysia. Website ini adalah 'one-stop centre' untuk kursus seperti seminar, bengkel dan juga 'talks'.</p> 
										 
					
					<h3>Team Kami</h3>
                    
			<div class="row-fluid">		
		        <div class="span2">                           
                    <img src="images/img1.jpg" class="img-polaroid" style="margin:5px 0px 15px;" alt="">   </div>          
                <div class="span10">            
                    <p><strong>Pereka Website</strong></p>
					<p>SHAFIQAH BINTI MOKTHAR</p>
                </div>		 
            </div>
			
			<hr>
			
			<div class="row-fluid">		
		        <div class="span2">                           
                    <img src="images/img2.png" class="img-polaroid" style="margin:5px 0px 15px;" alt="">   </div>          
                <div class="span10">              
                    <p><strong>Ketua Pengajar</strong></p>
					<p>Nazrul Hazhan Nazlan</p>
                </div>		 
            </div>
			
			<hr>
			
			<div class="row-fluid">		
		        <div class="span2">                           
                    <img src="images/services-image.jpg" class="img-polaroid" style="margin:5px 0px 15px;" alt="">   </div>          
                <div class="span10">              
                    <p></p>
                </div>		 
            </div>
			 
                </div>
				<!--End Main Content Area here-->
				
				<!--Edit Sidebar Content here-->
                <!--<div class="span4 sidebar">

                    <div class="sidebox">
                        <h3 class="sidebox-title">Sample Sidebar Content</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and <a href="#">typesetting industry</a>.</p>
						<p> Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>     
                    
                        <h4 class="sidebox-title">Sidebar Categories</h4>
                          <ul>
                            <li><a href="#">Quisque diam lorem sectetuer adipiscing</a></li>
                            <li><a href="#">Interdum vitae, adipiscing dapibus ac</a></li>
                            <li><a href="#">Scelerisque ipsum auctor vitae, pede</a></li>
                            <li><a href="#">Donec eget iaculis lacinia non erat</a></li>
                            <li><a href="#">Lacinia dictum elementum velit fermentum</a></li>
                            <li><a href="#">Donec in velit vel ipsum auctor pulvinar</a></li>
                          </ul>					

                   
				       	  <h4 class="sidebox-title">Our Skills</h4>				       
				        	
				            	<h5>Web Design ( 40% )</h5>
				            	<div class="progress progress-info">
                                <div class="bar" style="width: 20%"></div>
                                </div>				          	
				          	
				            	<h5>Wordpress ( 80% )</h5>
				            	<div class="progress progress-success">
                                <div class="bar" style="width: 40%"></div>
                                </div>				          	
				          	
				            	<h5>Branding ( 100% )</h5>
				            	<div class="progress progress-warning">
                                <div class="bar" style="width: 60%"></div>
                                </div>				          	
				          	
				            	<h5>SEO Optmization ( 60% )</h5>
				            	<div class="progress progress-danger">
                                <div class="bar" style="width: 80%"></div>
                                </div>         	
				      	
				   			
                    </div>
                    
                </div>
				<!--End Sidebar Content here-->
            </div>

            <div id="footerInnerSeparator"></div>
        </div>
    </div>

    <div id="footerOuterSeparator"></div>

    <div id="divFooter" class="footerArea">

        <div class="divPanel">

            <div class="row-fluid">
                <div class="span3" id="footerArea1">
                
                    <h3>About Company</h3>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                    
                    <p> 
                        <a href="#" title="Terms of Use">Terms of Use</a><br />
                        <a href="#" title="Privacy Policy">Privacy Policy</a><br />
                        <a href="#" title="FAQ">FAQ</a><br />
                        <a href="#" title="Sitemap">Sitemap</a>
                    </p>

                </div>
                <div class="span3" id="footerArea2">

                    <h3>Recent Blog Posts</h3> 
                    <p>
                        <a href="#" title="">Lorem Ipsum is simply dummy text</a><br />
                        <span style="text-transform:none;">2 hours ago</span>
                    </p>
                    <p>
                        <a href="#" title="">Duis mollis, est non commodo luctus</a><br />
                        <span style="text-transform:none;">5 hours ago</span>
                    </p>
                    <p>
                        <a href="#" title="">Maecenas sed diam eget risus varius</a><br />
                        <span style="text-transform:none;">19 hours ago</span>
                    </p>
                    <p>
                        <a href="#" title="">VIEW ALL POSTS</a>
                    </p>

                </div>
                <div class="span3" id="footerArea3">

                    <h3>Sample Content</h3> 
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s. 
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.
                    </p>

                </div>
                <div class="span3" id="footerArea4">

                    <h3>Get in Touch</h3>  
                                                               
                    <ul id="contact-info">
                    <li>                                    
                        <i class="general foundicon-phone icon"></i>
                        <span class="field">Phone:</span>
                        <br />
                        (123) 456 7890 / 456 7891                                                                      
                    </li>
                    <li>
                        <i class="general foundicon-mail icon"></i>
                        <span class="field">Email:</span>
                        <br />
                        <a href="mailto:info@yourdomain.com" title="Email">info@yourdomain.com</a>
                    </li>
                    <li>
                        <i class="general foundicon-home icon" style="margin-bottom:50px"></i>
                        <span class="field">Address:</span>
                        <br />
                        123 Street<br />
                        12345 City, State<br />
                        Country
                    </li>
                    </ul>

                </div>
            </div>

            <br /><br />
            <div class="row-fluid">
                <div class="span12">
                    <p class="copyright">
                        Copyright © 2013 Your Company. All Rights Reserved.
                    </p>

                    <p class="social_bookmarks">
                        <a href="#"><i class="social foundicon-facebook"></i> Facebook</a>
			<a href=""><i class="social foundicon-twitter"></i> Twitter</a>
			<a href="#"><i class="social foundicon-pinterest"></i> Pinterest</a>
			<a href="#"><i class="social foundicon-rss"></i> Rss</a>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
<br /><br /><br />

<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>





</body>
</html>