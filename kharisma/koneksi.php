<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_mhs";

//Create connection
$connect = mysqli_connect("localhost","root","","data_mhs");

//Check connection
if (!$connect) {
	echo("Connection failed");
}
echo "Connected successfully";
?>