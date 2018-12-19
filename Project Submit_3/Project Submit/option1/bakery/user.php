<?php
//$_MARKS=array("raju"=>"A+","mina"=>"A++");
echo "<pre>";print_r($GLOBALS);echo "</pre>";
//echo $_MARKS["raju"];
echo "<br>";

$na = $_POST["firstname"];
$ps = $_POST["password"];
$userlist = file ('record.txt');



echo "<br>";
echo $_POST["firstname"];
echo "<br>";
echo $_POST["password"];
echo "<br>";


echo  "entered username $na ";
echo  " entered pass $ps ";


echo "<br>";


$myfile = fopen("record.txt", "r") or die("Unable to open file!");

//echo fgets($myfile);
//echo "<br>";
//echo fgets($myfile);
//echo "<br>";
//$auth=array();

/*while($c=fgets($myfile)){
	//echo $c."<br>";
	$a=explode(" ",$c);
	//$auth[$a[0]]=trim($a[1]);

}
echo "<pre>";print_r($auth);echo "</pre>";

echo "<br>";
echo "<br>";*/

$success ;
session_start();

while ($c =fgets($myfile)) {
    $a = explode('-', trim($c));
	
    if ($a[0] == $na &&  $a[1] == $ps) 
	{
	//print_r $na;
	$success = true ;
	break ;
        
    }
	else
	{
		$success = false ;
	}
}

if ( $success == true)
    {

      $_SESSION["flag"]="success";
	  header("Location: right.php");
       
    }
	
	else 
	{
	$_SESSION["flag"]="not_success";
    header("Location: wrong.php");
        
    }


?>