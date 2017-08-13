
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
                        <li><a href="index2.html" >Home</a></li>
                        
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
<h1></span>View</span> <span class="yellow">Issued Books</span></h1>

<?php
	include("db.php");

	$issue_book = "select * from student_register";
	$issue_book2 = "select * from add_book";
	$run_issue_book = mysqli_query($con,$issue_book);
	$run_issue_book2 = mysqli_query($con,$issue_book2);

	$i=0;
	?>
	<table class="container">
	<thead>
		<tr>
			<th>Book Id</th>
			<th>Name</th>
			<th>Quantity</th>
			<th>Available</th>
			
			
			<th>Student Name</th>
			<th>Category</th>
			<th>Issued Book</th>
		</tr>
	</thead>
		<?php

	while(($row_book = mysqli_fetch_array($run_issue_book)) && ($row_book2 = mysqli_fetch_array($run_issue_book2))){
		
		$b_id = $row_book2['id'];
		$b_name = $row_book2['book_name'];
		$b_quantity = $row_book2['book_quantity'];
		$b_available = $row_book2['book_available'];
		
		$s_name=$row_book['student_name'];
		$s_cat = $row_book['category'];
		$issued_book = $row_book['issued_books'];
		$i++;
		
	


	?>
	<!--display data dynamiclly-->
	<tbody>
	<tr>
		<td><?php echo $b_id; ?></td>
		<td><?php echo $b_name; ?></td>
		
		<td><?php echo $b_quantity; ?></td>
		
		<td><?php echo $b_available; ?></td>

		<!-- <td><?php echo $s_id; ?></td> -->
		
		<td><?php echo $s_name; ?></td>
		
		<td><?php echo $s_cat; ?></td>

		<td><?php echo $issued_book; ?></td>

		
	</tr>
	
	<?php } ?>
	</tbody>

</table>

</div>

</div>

</body>
</html>
