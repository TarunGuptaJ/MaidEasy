<?php
$hostname="localhost";
$user="id11646649_root";
$pass="password";
$database="id11646649_maideasy";


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//Connecting to the Server
try
{
	$connect=mysqli_connect($hostname,$user,$pass);
}catch(Exception $ex)
{ echo 'Sorry, Couldn\'t Connect'; }


//Selecting the database
if(mysqli_select_db($connect,$database))
{
	echo "<script>console.log('Database selected');</script>";
}  

// closing connection
//mysqli_close($connect);
?>