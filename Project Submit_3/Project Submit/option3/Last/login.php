<!DOCTYPE html>
<html>
	<head>
		<title>Log_in</title>
	</head>
	
	<body background ="bg_silver_noise_grey.jpg" style=" height:100%;background-position: center; background-repeat: no-repeat;background-size: cover; text-align:center;">
	
		<div style=" padding:200px 0px; ">
				<h1>Login Page</h1> 
				<h3>Please enter correct username and password</h3>
				<hr/>
				<form action="login_auth_xml.php" method="post" style="float:center">
					username: <br/>
					<input type="text" name="uname"> <br/>
					password: <br/>
					<input type = "password" name="password"> <br/><br/>
					<input type = "submit" value="log in"> 
				</form>
				<form action="signup.php" method="post">
					<p>OR</p>
					<input type="submit" value="sign up"/>
				
				</form>
		</div>
		
	</body>
</html>