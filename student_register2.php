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
                        <li><a href="index.html" >Home</a></li>
                        
                        <li > <a href="librarian.php"> Librarian</a></li>
                           
                           <li > <a href="student_login.php" class="active"> Student</a></li>
                     
                       
                        
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

    <form action="student_register2.php" method="post" enctype="multipart/form-data"> 
                  <ul style=" list-style-type: none;
  color: white;
  font-size: 20px;">
                      <h2 class="text-center" style="color:white;">Student Registration</b></h2>
                      <li style=" margin: 10px;">Name</li>
                      <li style=" margin: 10px;" ><input type="textbox" name="c_name" required  placeholder="Enter your name" class="form-control form2" ></li>
                      <div class="clear"></div> 
                     
                       <div class="clear"></div>
                      <li style=" margin: 10px;">Semester</li>
                      <li style=" margin: 10px;"><input type="textbox" name="c_semester" required placeholder="Enter your Semester" class="form-control form2"></li>
                       <div class="clear"></div>
                     
                       <div class="clear"></div>
                      <li style=" margin: 10px;">Email-Id</li>
                      <li style=" margin: 10px;"><input type="text" name="c_email" required placeholder="Enter your Email-Id" class="form-control form2" ></li>
                       <div class="clear"></div>
                      <li style=" margin: 10px;">Password</li>
                      <li style=" margin: 10px;"><input type="password"  name="c_pass" required placeholder="Enter your password" class="form-control form2"></li>
                       <li style=" margin: 10px;">Branch</li>
                      <li style=" margin: 10px;"><select name="c_branch" required class="form-control ">
            <option>Select a Branch</option>
            <option>Computer Science</option>
            <option>Information Technology</option>
            <option>Electrical</option>
            <option>Electronics and Communication</option>
            <option>Electronics and Computer</option>
            <option>Electronics and Eelctrical</option>
            <option>Mechanical</option>
            <option>Chemical</option>
            <option>Civil</option>
             <option>Production and Industrial</option>
              <option>Mining</option>
            <option>Building and Construction</option>
            </select></li>

             <li style=" margin: 10px;">Category</li>
                      <li style=" margin: 10px;" >
            <select name="c_category" required class="form-control ">
            <option>Select a Category</option>
            <option>GENERAL</option>
            <option>SC</option>
            <option>ST</option>
            
            </select>
           
            </select></li>
                       <div class="clear"></div>
                      <li style=" margin: 10px;"><input type="submit"  name="register"  value="Register" style="margin-top: 30px;
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
                <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>

<?php
  if(isset($_POST['register'])){
  
    $c_name=$_POST['c_name'];
    $c_email=$_POST['c_email'];
    $c_pass=$_POST['c_pass'];
 
    $c_branch=$_POST['c_branch'];
    $c_category=$_POST['c_category'];
    $c_semester=$_POST['c_semester'];
    


    

    $insert_c = "insert into student_register (
    student_name,student_email,student_pass,student_branch,category,student_semester) values ('$c_name','$c_email','$c_pass','$c_branch','$c_category','$c_semester')";

    $run_c = mysqli_query($con,$insert_c);

    if($run_c)
    {
    $_SESSION['email']=$c_email;

      echo "<script>alert('Account has been created Successfully, Thanks!')</script>";
      
      echo "<script>window.open('student_profile.php','_self')</script>";
    
    }

    

  }




?>