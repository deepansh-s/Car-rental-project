<?php
include("connection.php");
error_reporting(0);

$fname = $_GET['rn'];
$query = "DELETE FROM datastored WHERE fname = '$fname' ";

$data = mysqli_query($conn, $query);


 
?>