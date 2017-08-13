 <!DOCTYPE html>
<?php 
session_start();

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
                        <li><a href="index2.html" >Home</a></li>
                        
                        <li > <a href="librarian_login.php"> Librarian</a></li>
                           
                           <li > <a href="student_login2.php" class="active"> Student</a></li>
                     
                       
                        
                    </ul>
                </div>
             </div>
        </div>
        <!--
         /.navbar-collapse
         -->
    </nav>
</header>
<!--Top Banner-->
<div class="clear"></div>
<div class="container-fluid form">
        <div class="container">
            <div class="row" style="margin-left: 200px;">
                <div class="col-md-8">

    <form action="student_login2.php" method="post" enctype="multipart/form-data"> 
                  <ul style=" list-style-type: none;
  color: white;
  font-size: 20px;">
                      <h2 class="text-center" style="color:white;">STUDENT LOGIN!!</b></h2>
                   
                     
                       <div class="clear"></div>
                      <li style=" margin: 10px;">Email-Id</li>
                      <li style=" margin: 10px;"><input type="text" name="email"  placeholder="Enter your Email-Id" class="form-control form2" ></li>
                       <div class="clear"></div>
                      <li style=" margin: 10px;">Password</li>
                      <li style=" margin: 10px;"><input type="password"  name="pass"  placeholder="Enter your password" class="form-control form2"></li>
                      

             
                       <div class="clear"></div>
                      <li style=" margin: 10px; "><input type="submit"  name="login"  value="Login" style="margin-top: 30px;
  width: 25%;
  height: 7%;
  background: green;
  text-align: center;
  color: white;
  border-radius: 20px;" /></li>





   </form>
             
                      <div class="clear"></div>

                                  <li style=" margin: 10px;"><a href="student_register2.php" ><input type="button"  value="New? Register Here !!" style="margin-top: 30px;
  
  height: 7%;
  background: green;
  text-align: center;
  color: white;
  border-radius: 20px;" /></a></li>
                      <div class="clear"></div>   


                  </ul>
                 
                  
                 
                    
                    
                </div>
                <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</div>
</div>
</div>
</div>


</body>
</html>

<?php
  if(isset($_POST['login'])){

    $c_email = $_POST['email'];
    $c_pass = $_POST['pass'];

    $sel_c = "select * from student_register where student_pass='$c_pass' AND student_email='$c_email'";

    $run_c = mysqli_query($con, $sel_c);
    //checking whether we have the customer or not
    $check_customer = mysqli_num_rows($run_c);
    if($check_customer==0)
    {
      echo "<script>alert('Password or email is incorrect, please try again !')</script>";
      exit();
    }

    else
    {
      $_SESSION['email']=$c_email;
      //header("Location: student_profile.php");

      echo "<script>alert('You logged in Successfully, Thanks!')</script>";
      //incase theres no product or no item in cart redirect the person to cart page
      echo "<script>window.open('new-student-login.php','_self')</script>";
    }
  }
  ?>

