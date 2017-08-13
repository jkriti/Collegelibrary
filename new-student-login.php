<!DOCTYPE html>
<?php 


include("db.php");
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from demo.themecanyon.org/html/construct/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Apr 2016 05:20:32 GMT -->
<head lang="en">
    <meta charset="UTF-8">
    <title>eLibrary</title>
    <!-- Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
   <!-- All Css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/et-fonts.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <!-- Slider -->
    <link rel="stylesheet" type="text/css" href="css/settings.css">
    <link rel="stylesheet" type="text/css" href="css/static-captions.css">
    <link rel="stylesheet" type="text/css" href="css/dynamic-captions.css">
    <link rel="stylesheet" type="text/css" href="css/preset1.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <!-- portfolios -->
    <link rel="stylesheet" type="text/css" href="css/featherlight.min.css">
    <link rel="stylesheet" type="text/css" href="css/spsimpleportfolio.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    	
   <style>
   .lib-button
{
    padding-top:35px;
    font-family: "TW Cen MT";
    font-size: 30px;
    border: none;
	width:09em;
    height: 03em;
    margin-top: 65px;
	margin-left:77px;
    box-shadow: 0 0 6px rgba(0,0,0,.2);
    /*background: rgba(255,255,255,.4);*/
    background: white;
    transition: ease-out .1s;
    border-radius: 10px;
    color: black;
    float: left;
    text-align: center;
    margin-left: 150px;
}

   </style>

</head>
<header >
    <nav class="navbar"  data-spy="affix" data-offset-top="55" id="slide-nav">
       <!-- <div class="container">-->
            <div class="row">
                <!--Brand and toggle get grouped for better mobile display-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html"><img src="images/eLibrary_logo.jpg" alt="Site logo" width="210" height="70" /></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse" id="menu_nav">
                    <ul class="nav navbar-nav">
                        <li><a href="index2.html" class="active">Home</a></li>
                        
                        <li > <a href="librarian_login.php"> Librarian</a></li>
                           
                           <li > <a href="student_login2.php"> Student</a></li>
                     
                       
                        
                    </ul>
                <!--</div>-->
             </div>
        </div>
        <!--
         /.navbar-collapse
         -->
    </nav>
</header>
<body style="background:black;">
<!--Top Bar-->

<!-- header-->

<div class="clear"></div>
	<div class="clear"></div>
	<div class="lib-button"><a href="student_viewallbooks.php">View All Book</a></div>
	 <div class="lib-button"><a href="student_issuedbooks.php">View Issued Book</a></div>
	<!-- <div class="lib-button">Add book</div>
	<div class="lib-button">Issue Book</div>
	<div class="lib-button">Return Book</div> -->
	<div class="clear"></div> 

</body>
</html>