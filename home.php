<!DOCTYPE php>
<html>
<head>
	<title>eLibrary</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script type="text/javascript">
		function validate()
		{
			if(document.getElementById('email').value=="admin@gmail.com"&&document.getElementById('pass').value=="admin123")
			{
				 alert('Admin successfully login!!');
				 window.open("librarian.php");
			}
			else
			{
				alert('Login again!!');
			}
		}
	</script>
</head>
<body>
<div class="main">
	<div class="nav">
		<div class="nav-menu elib"><i>eLibrary</i></div>
		<div class="nav-menu"><a href="home.php">Home</a></div>
		<div class="nav-menu"><a href="librarian.php"> Librarian</a></div>
		<div class="nav-menu"><a href="logout.php"> Logout</a></div>
	</div>
	<div class="clear"></div>
	<h2 class="elib">eLibrary</h2>
	<div class="main-cntnt">
		<div class="main-cntnt-inner"><h2><u>Admin Login</u></h2>
		<form method="post"  role="">
			<ul>
				<li>Email Address</li>
				<li><input type="text" name="" value="" id="email"></li>
				<div class="clear"></div>
				<li>Password</li>
				<li><input type="Password" name="" id="pass"></li>
				<div class="clear"></div>
				<li><a href="librarian.php"><input onclick="validate()" type="submit" name="" class="button" value="Login"/></a></li>
			</ul>
			</form>
		</div>
		<div class="main-cntnt-inner"><h2><u>Student Login</u></h2>
		<form method="post"  role="">
			<ul>
				<li>Email Address</li>
				<li><input type="text" name="" value="" id="email"></li>
				<div class="clear"></div>
				<li>Password</li>
				<li><input type="Password" name="" id="pass"></li>
				<div class="clear"></div>
				<li><input type="submit" name="" class="button" value="Login"/></li>
			</ul>
			</form>
		</div>
		
	</div>
	
</div>

</body>
</html>