<!DOCTYPE html>
<html>
	<head>
		<title>Log_in_auth</title>
	</head>
	<body>
		<?php 
		    
			$uname = $_POST["uname"];
			$password = $_POST["password"];
			$ar=array();
			include("load_xml.php");
			
             
            
            loadArray();
            foreach($ar as $k=>$v)
			{
				if($k==$uname&&$v==$password)
				{
					$found = true;
					header("location:login_successful.php?$uname");
					exit();
				}
			}			
			$found = false;
			
		    if(!$found)
			{
				header("location:login.php");
			}
	        
		   
        
			
			
		?>
		
	</body>
</html>