<!DOCTYPE html>
<html>
	<head>
		<title>Log_in</title>
	</head>
	
	<body background ="bg_silver_noise_grey.jpg" style=" height:100%;background-position: center; background-repeat: no-repeat;background-size: cover; text-align:center;">
	
		<div style=" padding:70px 0px; ">
				<h1><i>Welcome Back</i></h1> 
<?php
				 
			     if(sizeof($_GET)==0)exit("error");	 
				 foreach($_GET as $k=>$v)
				 {
					 $name=$k;
				 }
                 
				 echo "<h2>".$name."</h2>";
                 				 
				?>
				<hr/>
				<form action="balance.php" method="get" style="float:center">
					<input style="width:200px;font-size:30px"    type="submit" value="Order"/><br/>
				</form>
				<form action="withdraw.php" method="post" style="float:center">
					<input style="width:200px;font-size:30px"type="submit" value="Cancel Order" /><br/>
				</form>
				<form action="withdraw_log.php" method="post" style="float:center">
					<input style="width:200px;font-size:30px"type="submit" value="New Order" /><br/>
				</form>
				<form action="login.php" method="post" >
					
					<input style="width:150px; font-size:30px"type="submit" value="Logout"/>
				
				</form>
		</div>
		
	</body>
</html>