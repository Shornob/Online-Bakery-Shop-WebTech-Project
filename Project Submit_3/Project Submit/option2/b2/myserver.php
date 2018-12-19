<?php
//$_MARKS=array("raju"=>"A+","mina"=>"A++");
//echo "<pre>";print_r($GLOBALS);echo "</pre>";
//echo $_MARKS["raju"];
//echo "<br>";

$na = strlen($_POST["firstname"]);
$ln = strlen($_POST["firstname"]);
$dd = strlen($_POST["DOBDay"]);
$dm = strlen($_POST["DOBMonth"]);
$dy = strlen($_POST["DOBYear"]);
$gn = strlen($_POST["gender"]);
$ph = strlen($_POST["phone"]);
$em = strlen($_POST["Email"]);
$us = strlen($_POST["username"]);
$ps = strlen($_POST["password"]);
$cs = strlen($_POST["confirm_password"]);
$emm = $_POST["Email"];



if ( $na == 0 || $ln == 0 || $dd == 0|| $dm == 0 || $dy == 0 || $gn == 0 || $ph == 0 || $em == 0 || $ps == 0 || $cs == 0 || $us == 0)
{
echo "<b> Empty field </b>";}

else
{
 echo "<b> All Fields Filled</b>";
}

echo " <br>";

 if ( $ph != 11)
 {
echo "<b> invalid phone number </b>";}

else
	
{echo "<b> Phone Number Accepted </b>";}

echo " <br>";

if ( $gn == 0)
 {
echo "<b> Gender not selected </b>";}

else{echo "<b> Gender Accepted</b>";}
 	 
echo " <br>";

if ( $ps > 8 && $ps != $cs)
	 {
echo "<b> password wrong </b>";}

else { echo "<b> Password Accepted</b>";}

echo " <br>";

$str1 = strpos($emm, '@');
$str2 = strpos($emm, '.');

if ( $str1 == null || $str2 < $str1) 
{
    echo '<b> Invalid Email Address <b>';
}
else {
	echo "<b> Email Accepted</b>";
}
	


    

echo "<br>";
echo $_POST["firstname"];
echo "<br>";
echo $_POST["lastname"];
echo "<br>";
echo $_POST["DOBDay"];
echo "<br>";
echo $_POST["DOBMonth"];
echo "<br>";
echo $_POST["DOBYear"];
echo "<br>";
echo $_POST["gender"];
echo "<br>";
echo $_POST["phone"];
echo "<br>";
echo $_POST["Email"];
echo "<br>";
echo $_POST["username"];
echo "<br>";
echo $_POST["password"];
echo "<br>";
echo $_POST["confirm_password"];
echo "<br>";
echo strlen($_POST["lastname"]);
echo "<br>";
echo strpos($_POST["Email"],"@");
echo "<br>";
echo "<br>";












$file=fopen('myfile.txt','a') or die("file open error");


//fwrite($file,"append demo ");
fwrite($file,$_POST["firstname"]);
fwrite($file,"-".$_POST["lastname"]);
fwrite($file,"-".$_POST["DOBDay"]);
fwrite($file,"-".$_POST["DOBMonth"]);
fwrite($file,"-".$_POST["DOBYear"]);
fwrite($file,"-".$_POST["gender"]);
fwrite($file,"-".$_POST["phone"]);
fwrite($file,"-".$_POST["Email"]);
fwrite($file,"-".$_POST["username"]);
fwrite($file,"-".md5($_POST["password"]));
fwrite($file,"-".md5($_POST["confirm_password"]));

fwrite($file,"\r\n");
?>







<!DOCTYPE html>
<html>
<head>

<title> Bakery </title>

</head>
<body background ="bg_silver_noise_grey.jpg" style = " height: 100%;background-position: center; background-repeat: no-repeat;background-size: cover;" >


<table align= "right" style="border-collapse: collapse;width:500px; margin : 0px auto">
<tr>
<td>
 <h1 style="text-align:center;">Welcome To Golden Harvest Bakery</h1>
<hr/>
<h2 style="text-align:center;"> Please Login </b></h2>
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


<input type="button" class="button_active" onclick="location.href='login.html';" value="Login"/>
  
  
</table>



</body>
</html>