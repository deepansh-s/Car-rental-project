<?php
    error_reporting(0);
$server_name="localhost";
$username="root";
$password="";
$database_name="responsiveform4";

$conn = mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
}

    