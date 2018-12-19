<?php
session_start();
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="not_success"){
	echo "My private message : 'WRONG_SUCCESS'";
	//echo "<br><a href='logout.php'>Logout</a>";
   
} else {
	
	echo "My private message : 'WRONG Try Again'";
    header("Location: login.html");
}

?>








<!DOCTYPE html>
<html>
<head>

<title> Bakery </title>

</head>
<body background ="dude.png" style = " height: 100%;background-position: center; background-repeat: no-repeat;background-size: cover;" >


<table align= "right" style="border-collapse: collapse;width:500px; margin : 0px auto">
<tr>
<td>
 <h1 style="text-align:center;">Wrong Password or Username</h1>
<hr/>
<h2 style="text-align:center;"> Please Try Again  </b></h2>
<hr/>
<style>
table, th, td {
    border: 1px solid black;
	
    
}
th, td {
    padding: 5px;
    text-align: center;    
}
</style>
<table style=" width:100% ">


<input type="button" class="button_active" onclick="location.href='login.html';" value="Return"/>
  
  
</table>



</body>
</html>



