<?php
//$connection=mysqli_connect(dbserver,dbuser,dbpass,dbname);

$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='userdb';


$connection=mysqli_connect('localhost','root','','userdb');

//Checking the connection
if (mysqli_connect_errno()) {
	die('Database Connection Failed.'.mysqli_connect_error());
}



?>