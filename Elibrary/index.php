<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
	<script type="text/javascript">
    function Validate() {
		var password = document.getElementById('txtPassword').value;
        var confirmPassword = document.getElementById('txtConfirmPassword').value;
		if(password != confirmPassword)
	    {
            alert("Passwords do not match.");
            return false;
        }
		return true;
    }
    </script>
</head>
    <body>
     <div>
		<div class="nav">
			<div class="nav-menu elib"><i>eLibrary</i></div>
			<div class="nav-menu">Home</div>
			<div class="nav-menu">Sign-In</div>
			<div class="nav-menu">Sign-Up</div>
		</div>
		<div class="clear"></div>
        <div>		
        <form action="/action_page_post.php" method="post" onClick="return Validate()">
                
                Name<br>
                <input type="text" size="70" id="name" value="" name="name" required><br>
                Student_Id<br>
                <input type="text" id="s_id" value=""  name="s_id" required><br>
                Email<br>
                <input type="email" id="e_id" value="" name="e_id" required><br>
                Password<br>
                <input type="password" id="txtPassword" value="" name="txtPassword" required><br>
                Re-Password<br>
                <input type="password" id="txtConfirmPassword" value="" name="txtConfirmPassword" required><br>
                Branch<br>
                <input type="text" id="branch" value="" name="branch" required><br>
				Category<br>
				<input type="text" id="Cat" value="" name="Cat" required><br>
				<input type="submit" value="Register" id="button">
        </form>
       </div>
    </div>	   
    </body>
</html>