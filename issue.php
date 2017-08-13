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
                        <li><a href="index.php" >Home</a></li>
                        
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

    <form action="issue.php" method="post" enctype="multipart/form-data"> 
                  <ul style=" list-style-type: none;
  color: white;
  font-size: 20px;">
                      <h2 class="text-center" style="color:white;">Issue Book Form </b></h2>
                      <li style=" margin: 10px;">Book Id</li>
                      <li style=" margin: 10px;" ><input type="textbox" name="b_id" required  placeholder="Enter your name" class="form-control form2" ></li>
                      <div class="clear"></div> 
                     
                       <div class="clear"></div>
                      <li style=" margin: 10px;">Student Id</li>
                      <li style=" margin: 10px;"><input type="textbox" name="s_id" required placeholder="Enter your Semester" class="form-control form2"></li>
                       <div class="clear"></div>
                     
                      
            
                       <div class="clear"></div>
                      <li style=" margin: 10px;"><input type="submit"  name="issue_book"  value="Issue Book" style="margin-top: 30px;
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


	</div>
	</div>
	</div>
</div>

</div>



<script src="./index_files/jquery.js.download"></script>
<script src="./index_files/bootstrap.min.js.download"></script>


</body>
</html>

<?php

if(isset($_POST['issue_book'])){



$book_id = $_POST['b_id'];
		
		
$student_id = $_POST['s_id'];

		
			
		$insert_book = "insert into issue_book (student_id,book_id) values ('$student_id','$book_id')";
		
		//to execute the query
		$insert_book = mysqli_query($con, $insert_book);

$select_category="select `category` from student_register where id='$student_id'";

$run_category = mysqli_query($con,$select_category);



$row=mysqli_fetch_array($run_category);
$value = $row[0];

//echo $value;

$select_issued_books="select `issued_books` from student_register where id='$student_id'";

$run_issued_books = mysqli_query($con,$select_issued_books);



$noofbooks=mysqli_fetch_array($run_issued_books);
$value_books = $noofbooks[0];

//echo $value_books;

$select_available_books="select `book_available` from add_book where id='$book_id'";

$run_available_books = mysqli_query($con,$select_available_books);



$avl_books=mysqli_fetch_array($run_available_books);
$available_books = $avl_books[0];

//echo $available_books;



if($value=='GENERAL' && $value_books>=3)
{
	
	echo "<script>alert('You exceeded your Limit.. Cant Issue Anymore !!!')</script>";

}
else if($value=='SC' && $value_books>=5){

}

else if($value=='ST' && $value_books>=5)
{

}

else
{
	//echo $noofbooks+1;
	$update_issued_books = "update student_register set issued_books=$noofbooks[0] + 1 where id='$student_id'";
	$update_available="update add_book set book_available=$avl_books[0] - 1 where id='$book_id'";
	$run_qty = mysqli_query($con,$update_issued_books);
	$run_qty = mysqli_query($con,$update_available);
}

}
?>