<?php
	  include "session.php";
	  ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Laman Utama</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Html5TemplatesDreamweaver.com">
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW"> <!-- Remove this Robots Meta Tag, to allow indexing of site -->

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

    <link href="scripts/carousel/style.css" rel="stylesheet" type="text/css" />
    <link href="scripts/camera/css/camera.css" rel="stylesheet" type="text/css" />

    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">

    <link href="styles/custom.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#apDiv1 {
	position:absolute;
	width:181px;

	height:65px;
	z-index:1;
	left: 71px;
	top: 2px;
}
</style>
</head>
<body id="pageBody">

<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divPanel notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo" class="pull-left">
                      <div id="apDiv1"><img src="images/logo_kursusmy.png" width="183" height="61"></div>
          <br />
                        <a href="index.php" id="divTagLine">Portal Kursus Malaysia</a>
                  </div>
 <div class="bar" align = "right" >
      <div class="links">
      <?php 
	     if ( ! isset($_SESSION['username']) ){?>
          <a href="/training.my/login.php">Masuk</a>
          <span class="vertical_bar">&#124;</span>
          <a href="/training.my/registerUser.php">Daftar</a>
       <?php } else {?>
       	Selamat Datang <?php echo $_SESSION["username"];?>! 
        <a href="/training.my/logout.php">Daftar Keluar</a>
       <?php } ?>
</div>
                    <div id="divMenuRight" class="pull-right">
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                            <li class="active"><a href="index.php">Laman Utama</a></li>
                            <li><a href="tentangkami.php">Tentang Kami</a></li>
							
						    <li><a href="kalendar.php">Direktori</a></li>
						    <li><a href="pendaftaran.php">Pendaftaran</a></li>
						    <li><a href="contact.php">Hubungi Kami</a></li>
                            </ul>
                            </div>
                    </div>
                    </div>

                </div>
            </div>

           
    </div>

    <div class="contentArea">

        <div class="divPanel notop page-content">
            

            <div class="row-fluid">
            <!--Edit Main Content Area here-->
			<br>
			
			<div style = "width: 50%; left:25%" id="camera_wrap">
		
  <div data-src="slider-images/1.jpg" ></div>
  <div data-src="slider-images/2.jpg" ></div>
  <div data-src="slider-images/3.jpg" ></div>
 
</div>

                <div class="span12" id="divMain">
                    <table style = "width:90%" border="1" class="tb-listing">
 <tr bgcolor="#FFA500">
  <th width="28">Kod</th>
  <th width="205" class="title">Kursus/Bengkel</th>
  <th width="135">Tahap</th>
  <th width="52">Masa</th>
  <th width="43">Tarikh</th>
  <th width="118">Tempat</th>
  <th width="61" class="price">Harga</th>
 </tr>
 <tr class="header">
  <td colspan="6" class="month"><h3>JANUARI</h3></td>
  
  <td colspan="1"><a href="pendaftaran.php">Tekan Sini Untuk Mendaftar</a><
 </tr>
 

 <tr class="odd" onclick="window.location='/detailfor/1149/PHP---MySQL--Fast-Track-'" >
 
  <td><span style="color:
    ">PHX</span></td>
    
  <td class="title"><a href="/detailfor/1149/PHP---MySQL--Fast-Track-">PHP & MySQL (Fast-Track)</a>
      </td>
      
  <td><span style="color:
    ">  
    Basic - Intermediate</span></td>
    
  <td><span style="color:
    ">4 days</span></td>
    
  <td><span style="color:">
    
    
    12 - 15
    </span></td>
    
  <td><span style="color:
    ">Training.My, Bangi</span></td>
    
  <td><span style="color:">
    
    
    RM1,900
    </span></td>
 </tr>
 <tr class="even" onclick="window.location='/detailfor/1140/Ruby-On-Rails--Fast-Track-'" >
 
  <td><span style="color:
    ">RBY</span></td>
    
  <td class="title"><a href="/detailfor/1140/Ruby-On-Rails--Fast-Track-">Ruby On Rails (Fast-Track)</a>
      
      <EM><STRONG><FONT face='Verdana, Arial, Helvetica, sans-serif' color=#000099 size=1>New</FONT></STRONG></EM>
      </td>
      
  <td><span style="color:
    ">  
    Basic - Intermediate</span></td>
    
  <td><span style="color:
    ">4 days</span></td>
    
  <td><span style="color:">
    
    
    19 - 22
    </span></td>
    
  <td><span style="color:
    ">Training.My, Bangi</span></td>
    
  <td><span style="color:">
    
    
    RM1,900
    </span></td>
 </tr>
</table>



                  <p>&nbsp;</p>
                  <table style = "width:90%" border="1" class="tb-listing">
 <tr bgcolor="#FFA500">
  <th>Kod</th>
  <th class="title">Kursus/Bengkel</th>
  <th>Tahap</th>
  <th>Masa</th>
  <th>Tarikh</th>
  <th>Tempat</th>
  <th class="price">Harga</th>
 </tr>
 <tr class="header">
  <td colspan="6" class="month"><h3>FEBRUARI</h3></td>
  
  <td colspan="1"><a href="pendaftaran.php">Tekan Sini Untuk Mendaftar</a></td>
 </tr>
 

 <tr class="odd" onclick="window.location='/detailfor/1159/IT-Security---Mastering-IT-Security-Tools'" >
 
  <td><span style="color:
    ">NSM</span></td>
    
  <td class="title"><a href="/detailfor/1159/IT-Security---Mastering-IT-Security-Tools">IT Security & Mastering IT Security Tools</a>
      
      <EM><STRONG><FONT face='Verdana, Arial, Helvetica, sans-serif' color=#000099 size=1>New</FONT></STRONG></EM>
      </td>
      
  <td><span style="color:
    ">  
    Basic - Intermediate</span></td>
    
  <td><span style="color:
    ">3 days</span></td>
    
  <td><span style="color:">
    
    
    09 - 11
    </span></td>
    
  <td><span style="color:
    ">Training.My, Bangi</span></td>
    
  <td><span style="color:">
    
    
    RM2,500
    </span></td>
 </tr>
 <tr class="even" onclick="window.location='/detailfor/1163/PHP---MySQL--Fast-Track-'" >
 
  <td><span style="color:
    ">PHX</span></td>
    
  <td class="title"><a href="/detailfor/1163/PHP---MySQL--Fast-Track-">PHP & MySQL (Fast-Track)</a>
      </td>
      
  <td><span style="color:
    ">  
    Basic - Intermediate</span></td>
    
  <td><span style="color:
    ">4 days</span></td>
    
  <td><span style="color:">
    
    
    23 - 26
    </span></td>
    
  <td><span style="color:
    ">Training.My, Bangi</span></td>
    
  <td><span style="color:">
    
    
    RM1,900
    </span></td>
 </tr>
 <tr class="odd" onclick="window.location='/detailfor/1173/HTML5-Multi-platform-Mobile-App-using-PhoneGap'" >
 
  <td><span style="color:
    ">HTM</span></td>
    
  <td class="title"><a href="/detailfor/1173/HTML5-Multi-platform-Mobile-App-using-PhoneGap">HTML5 Multi-platform Mobile App using PhoneGap</a>
      </td>
      
  <td><span style="color:
    ">  
    Basic - Intermediate</span></td>
    
  <td><span style="color:
    ">4 days</span></td>
    
  <td><span style="color:">
    
    
    23 - 26
    </span></td>
    
  <td><span style="color:
    ">Training.My, Bangi</span></td>
    
  <td><span style="color:">
    
    
    RM2,900
    </span></td>
 </tr>
 <tr class="even" onclick="window.location='/detailfor/1145/Linux---Redhat---CentOS--Fast-Track-'" >
 
  <td><span style="color:
    ">LRC</span></td>
    
  <td class="title"><a href="/detailfor/1145/Linux---Redhat---CentOS--Fast-Track-">Linux - Redhat / CentOS (Fast-Track)</a>
      
      <EM><STRONG><FONT face='Verdana, Arial, Helvetica, sans-serif' color=#000099 size=1>New</FONT></STRONG></EM>
      </td>
      
  <td><span style="color:
    ">  
    Basic - Intermediate</span></td>
    
  <td><span style="color:
    ">4 days</span></td>
    
  <td><span style="color:">
    
    
    23 - 26
    </span></td>
    
  <td><span style="color:
    ">Training.My, Bangi</span></td>
    
  <td><span style="color:">
    
    
    RM1,900
    </span></td>
 </tr>
</table>



                  <p>&nbsp;</p>
                  <table style = "width:90%" border="1" class="tb-listing">
 <tr bgcolor="#FFA500">
  <th>Kod</th>
  <th class="title">Bengkel/Kursus</th>
  <th>Tahap</th>
  <th>Masa</th>
  <th>Tarikh</th>
  <th>Tempat</th>
  <th class="price">Harga</th>
 </tr>
 <tr class="header">
  <td colspan="6" class="month"><h3>Mac</h3></td>

  <td colspan="2"><a href="pendaftaran.php">Tekan Untuk Mendaftar</a></td>
 </tr>
 

 <tr class="odd" onclick="window.location='/detailfor/1166/Web-Design-with-Cascading-Style-Sheets--CSS--'" >
 
  <td><span style="color:
    ">CSS</span></td>
    
  <td class="title"><a href="/detailfor/1166/Web-Design-with-Cascading-Style-Sheets--CSS--">Web Design with Cascading Style Sheets (CSS) </a>
      
      <EM><STRONG><FONT face='Verdana, Arial, Helvetica, sans-serif' color=#000099 size=1>New</FONT></STRONG></EM>
      </td>
      
  <td><span style="color:
    ">  
    Basic - Intermediate</span></td>
    
  <td><span style="color:
    ">2 days</span></td>
    
  <td><span style="color:">
    
    
    02 - 03
    </span></td>
    
  <td><span style="color:
    ">Training.My, Bangi</span></td>
    
  <td><span style="color:">
    
    
    RM1,500
    </span></td>
 </tr>
 <tr class="even" onclick="window.location='/detailfor/1171/Practical-Photography'" >
 
  <td><span style="color:
    ">PTY</span></td>
    
  <td class="title"><a href="/detailfor/1171/Practical-Photography">Practical Photography</a>
      
      <EM><STRONG><FONT face='Verdana, Arial, Helvetica, sans-serif' color=#000099 size=1>New</FONT></STRONG></EM>
      </td>
      
  <td><span style="color:
    ">  
    Fundamental</span></td>
    
  <td><span style="color:
    ">1 day</span></td>
    
  <td><span style="color:">
    
    
    02
    </span></td>
    
  <td><span style="color:
    ">Training.My, Bangi</span></td>
    
  <td><span style="color:">
    
    
    RM990
    </span></td>
 </tr>
 <tr class="odd" onclick="window.location='/detailfor/1157/Web-Application-Security'" >
 
  <td><span style="color:
    ">WES</span></td>
    
  <td class="title"><a href="/detailfor/1157/Web-Application-Security">Web Application Security</a>
      
      <EM><STRONG><FONT face='Verdana, Arial, Helvetica, sans-serif' color=#000099 size=1>New</FONT></STRONG></EM>
      </td>
      
  <td><span style="color:
    ">  
    Basic - Intermediate</span></td>
    
  <td><span style="color:
    ">2 days</span></td>
    
  <td><span style="color:">
    
    
    02 - 03
    </span></td>
    
  <td><span style="color:
    ">Training.My, Bangi</span></td>
    
  <td><span style="color:">
    
    
    RM1,900
    </span></td>
 </tr>
 <tr class="even" onclick="window.location='/detailfor/1167/IT-Security---Penetration-Testing--Pentest----Fast-Track'" >
 
  <td><span style="color:
    ">PEN</span></td>
    
  <td class="title"><a href="/detailfor/1167/IT-Security---Penetration-Testing--Pentest----Fast-Track">IT Security - Penetration Testing (Pentest) : Fast-Track</a>
      
      <EM><STRONG><FONT face='Verdana, Arial, Helvetica, sans-serif' color=#CC0033 size=1>Top</FONT></STRONG></EM>
      </td>
      
  <td><span style="color:
    ">  
    Basic - Intermediate</span></td>
    
  <td><span style="color:
    ">3 days</span></td>
    
  <td><span style="color:">
    
    
    04 - 06
    </span></td>
    
  <td><span style="color:
    ">Training.My, Bangi</span></td>
    
  <td><span style="color:">
    
    
    RM2,500
    </span></td>
 </tr>
 <tr class="odd" onclick="window.location='/detailfor/1155/PHP-Security'" >
 
  <td><span style="color:
    ">PHY</span></td>
    
  <td class="title"><a href="/detailfor/1155/PHP-Security">PHP Security</a>
      </td>
      
  <td><span style="color:
    ">  
    Basic - Intermediate</span></td>
    
  <td><span style="color:
    ">3 days</span></td>
    
  <td><span style="color:">
    
    
    16 - 18
    </span></td>
    
  <td><span style="color:
    ">Training.My, Bangi</span></td>
    
  <td><span style="color:">
    
    
    RM1,900
    </span></td>
 </tr>
 <tr class="even" onclick="window.location='/detailfor/1179/PHP---MySQL--Fast-Track-'" >
 
  <td><span style="color:
    ">PHX</span></td>
    
  <td class="title"><a href="/detailfor/1179/PHP---MySQL--Fast-Track-">PHP & MySQL (Fast-Track)</a>
      </td>
      
  <td><span style="color:
    ">  
    Basic - Intermediate</span></td>
    
  <td><span style="color:
    ">4 days</span></td>
    
  <td><span style="color:">
    
    
    24 - 27
    </span></td>
    
  <td><span style="color:
    ">Training.My, Bangi</span></td>
    
  <td><span style="color:">
    
    
    RM1,900
    </span></td>
 </tr>
 <tr class="odd" onclick="window.location='/detailfor/1141/Ruby-On-Rails--Fast-Track-'" >
 
  <td><span style="color:
    ">RBY</span></td>
    
  <td class="title"><a href="/detailfor/1141/Ruby-On-Rails--Fast-Track-">Ruby On Rails (Fast-Track)</a>
      
      <EM><STRONG><FONT face='Verdana, Arial, Helvetica, sans-serif' color=#000099 size=1>New</FONT></STRONG></EM>
      </td>
      
  <td><span style="color:
    ">  
    Basic - Intermediate</span></td>
    
  <td><span style="color:
    ">4 days</span></td>
    
  <td><span style="color:">
    
    
    24 - 27
    </span></td>
    
  <td><span style="color:
    ">Training.My, Bangi</span></td>
    
  <td><span style="color:">
    
    
    RM1,900
    </span></td>
 </tr>
 <tr class="even" onclick="window.location='/detailfor/1175/Android-Application-Development-'" >
 
  <td><span style="color:
    ">AND</span></td>
    
  <td class="title"><a href="/detailfor/1175/Android-Application-Development-">Android Application Development </a>
      
      <EM><STRONG><FONT face='Verdana, Arial, Helvetica, sans-serif' color=#000099 size=1>New</FONT></STRONG></EM>
      </td>
      
  <td><span style="color:
    ">  
    Basic - Intermediate</span></td>
    
  <td><span style="color:
    ">4 days</span></td>
    
  <td><span style="color:">
    
    
    24 - 27
    </span></td>
    
  <td><span style="color:
    ">Training.My, Bangi</span></td>
    
  <td><span style="color:">
    
    
    RM2,900
    </span></td>
 </tr>
 <tr class="odd" onclick="window.location='/detailfor/1181/Linux-for-Web-Server-Crash-Course-'" >
 
  <td><span style="color:
    ">LWW</span></td>
    
  <td class="title"><a href="/detailfor/1181/Linux-for-Web-Server-Crash-Course-">Linux for Web Server Crash-Course </a>
      
      <EM><STRONG><FONT face='Verdana, Arial, Helvetica, sans-serif' color=#CC0033 size=1>Promo</FONT></STRONG></EM>
      </td>
      
  <td><span style="color:
    ">  
    Basic - Intermediate</span></td>
    
  <td><span style="color:
    ">2 days</span></td>
    
  <td><span style="color:">
    
    
    28 - 29
    </span></td>
    
  <td><span style="color:
    ">Training.My, Bangi</span></td>
    
  <td><span style="color:">
    
    
    RM290
    </span></td>
 </tr>
</table>



                    <br />                   
                    <br />                 

	
                    

    <div class="row-fluid">
            <div class="span3">
                    <h5 class="text-info">Linux </h5>
                    <img src="images/home-image.jpg" class="img-polaroid" style="margin:5px 0px 15px;" alt="">                
                    
            </div>
            <div class="span3">                
                    <h5 class="text-info">Php MySQL</h5>
                    <img src="images/01.jpg" class="img-polaroid" style="margin:5px 0px 15px;" alt="">  
                    
            </div>
            <div class="span3">                
                    <h5 class="text-info">Ruby On Rails</h5>
                    <img src="images/02.jpg" class="img-polaroid" style="margin:5px 0px 15px;" alt="">  
                    
            </div>
			<div class="span3">
                    <h5 class="text-info">IT Security</h5>
                    <img src="images/03.jpg" class="img-polaroid" style="margin:5px 0px 15px;" alt="">                
                    
            </div>
    </div>  

                </div>
            <!--End Main Content-->
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
                        <a href="mailto:info@yourdomain.com" title="Email">admin@serai.org</a>
                    </li>
                    <li>
                        <i class="general foundicon-home icon" style="margin-bottom:50px"></i>
                        <span class="field">Alamat:</span>
                        <br />
                        No. 41-1-1A, Jalan Medan PB 2B, Seksyen 9, Selangor,<br />
                        43650 Bandar Baru Bangi<br />
                        Selangor
                    </li>
                    </ul>

                </div>
            </div>

            <br /><br />
            <div class="row-fluid">
                <div class="span12">
                    <p class="copyright">
                        Copyright © 2013 Serai Solution. All Rights Reserved.
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


<script src="scripts/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script><script type="text/javascript">$('#list_photos').carouFredSel({ responsive: true, width: '100%', scroll: 2, items: {width: 320,visible: {min: 2, max: 6}} });</script><script src="scripts/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="scripts/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script type="text/javascript">function startCamera() {$('#camera_wrap').camera({ fx: 'scrollLeft', time: 2000, loader: 'none', playPause: false, navigation: true, height: '35%', pagination: true });}$(function(){startCamera()});</script>


</body>
</html>