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

</head>
<body style="background: black;"/>
<!--Top Bar-->

<!-- header-->
<header>
    <nav class="navbar"  data-spy="affix" data-offset-top="55" id="slide-nav">
        <div class="container">
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
                </div>
             </div>
        </div>
        <!--
         /.navbar-collapse
         -->
    </nav>
</header>

<div class="clear"></div>
<div class="container-fluid form">
        <div class="container">
            <div class="row" style="margin-left: 200px;">
                <div class="col-md-8">

    <form action="add.php" method="post" enctype="multipart/form-data"> 
                  <ul style=" list-style-type: none;
  color: white;
  font-size: 20px;">
                      <h2 class="text-center" style="color:white;">ADD BOOK FORM</b></h2>
                      <li style=" margin: 10px;">Book Id</li>
                      <li style=" margin: 10px;" ><input type="textbox" name="b_id" required  placeholder="Enter your name" class="form-control form2" ></li>
                      <div class="clear"></div> 
                     
                       <div class="clear"></div>
                      <li style=" margin: 10px;">Book Name</li>
                      <li style=" margin: 10px;"><input type="textbox" name="b_name" required placeholder="Enter your Semester" class="form-control form2"></li>
                       <div class="clear"></div>
                     
                       <div class="clear"></div>
                      <li style=" margin: 10px;">Book Author</li>
                      <li style=" margin: 10px;"><input type="text" name="b_author" required placeholder="Enter your Email-Id" class="form-control form2" ></li>

                       <li style=" margin: 10px;">Book Publisher</li>
                      <li style=" margin: 10px;" ><input type="textbox" name="b_publisher" required  placeholder="Enter your name" class="form-control form2" ></li>
                      <div class="clear"></div> 
                     
                       <div class="clear"></div>
                      <li style=" margin: 10px;">Book Quantity</li>
                      <li style=" margin: 10px;"><input type="textbox" name="b_quantity" required placeholder="Enter your Semester" class="form-control form2"></li>
                       <div class="clear"></div>
                     
                       <div class="clear"></div>
                      <li style=" margin: 10px;">Book Available</li>
                      <li style=" margin: 10px;"><input type="text" name="b_available" required placeholder="Enter your Email-Id" class="form-control form2" ></li>
                      
           
            
                       <div class="clear"></div>
                      <li style=" margin: 10px;"><input type="submit"  name="save_book"  value="Add Book" style="margin-top: 30px;
  width: 25%;
  height: 7%;
  background: green;
  text-align: center;
  color: white;
  border-radius: 20px;" /></li>
                      <div class="clear"></div>

                  </ul>
                  </form>
                
                  
                 

	</div>
	</div>
	</div>
</div>

	
  
 



</body>
</html>


<?php
	//inserting data using php
  
	if(isset($_POST['save_book'])){
		
		
		
	 
		$b_id = $_POST['b_id'];
		
		
		$b_name = $_POST['b_name'];
		$b_author = $_POST['b_author'];
		$b_publisher = $_POST['b_publisher'];
		$b_quantity = $_POST['b_quantity'];
		$b_available = $_POST['b_available'];
		
		
		
		$insert_book = "insert into add_book (id,book_name,book_author,book_publisher,book_quantity,book_available) values ('$b_id','$b_name','$b_author','$b_publisher','$b_quantity','$b_available')";
		
		//to execute the query
		$insert_pro = mysqli_query($con, $insert_book);
		//two parameters are 1.connection variable and second is the query we like to fire
				
	}
?>



