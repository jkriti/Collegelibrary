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
    	<link rel="stylesheet" type="text/css" href="css/table.css">

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
                        <li><a href="index2.php" >Home</a></li>
                        
                        <li > <a href="new-librarian-login.php" class="active"> Librarian</a></li>
                           
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
<body style="background: black;">
<!--Top Bar-->

<!-- header-->

<div class="clear"></div>

<div>
<h1></span>View</span> <span class="yellow">View All Students </span></h1>



	<?php
	include("db.php");
	

	$get_c = "select * from `student_register` ";


	$run_c = mysqli_query($con,$get_c);

	$i=0;
	?>
	<table class="container">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Branch</th>
			<th>Category</th>
			<th>Semester</th>
		</tr>
	</thead>
		<?php

	while($row_c = mysqli_fetch_array($run_c)){
		$c_id = $row_c['id'];
		$c_name = $row_c['student_name'];
		$c_email = $row_c['student_email'];
			$c_branch = $row_c['student_branch'];
		$c_category = $row_c['category'];
		$c_semester = $row_c['student_semester'];
		//$c_image = $row_c['student_image'];
		$i++;
	


	?>
	<!--display data dynamiclly-->
	<tbody>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $c_name; ?></td>
		<td><?php echo $c_email; ?></td>
		<td><?php echo $c_branch; ?></td>
		<td><?php echo $c_category; ?></td>
		<td><?php echo $c_semester; ?></td>
		<!-- <td><img src="../customer/customer_images/<?php echo $c_image; ?>" width="50" height="50" /></td> -->
		
	
	</tr>
	<?php } ?>
	</tbody>

</table>
</div>

</div>

