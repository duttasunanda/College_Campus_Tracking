<?php
$dbhost="127.0.0.1";
$dbuser="root";
$dbpass="";
$dbname="tables";
$dbport="3306";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname,$dbport);
if(!$conn){
	echo"database connected is not established";
}
?>