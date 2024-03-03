<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>HOPE DATABASE</title>
      <link rel="icon" type="image/x-icon" href="/img/logo.png">
      <link rel="stylesheet" href="index.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;500&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,900;1,100;1,300;1,400&family=Shadows+Into+Light&display=swap" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   </head>
<body style="background-color:   background: rgb(2, 15, 30);">
<script>
    const body =document.querySelector('body')
    const dlt = document.querySelector('.dlt')

    function dltTodo(e){
    if(e.target.className.includes('dlt'))
    {
    //  let li = e.target.parentElement
     removeChild(button)
    }
 }
 
</script>
</body>
</html>

<?php
include("connection.php");
include("delete.php");

$query = "SELECT * FROM `datastored`";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

// echo $result["fname"] ." ". $result["lname"]. " ".$result["email"]. " ".$result["Phone"] . " "
//     .$result["Address"]." ".$result["City"]. " ". $result["Password"] . "   ";




if ($total != 0) {
?>

    <table class="table table-dark table-hover">
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>City</th>
        <th>Password</th>
        <th>Operations</th>
        </tr>


    <?php


    while ($result = mysqli_fetch_assoc($data)) {
        echo "
        <tr>
            <td>".$result["fname"]."</td>
            <td>".$result["lname"]."</td>
            <td>".$result["email"]."</td>
            <td>".$result["Phone"]."</td>
            <td>".$result["Address"]."</td>
            <td>".$result["City"]."</td>
            <td>".$result["Password"]."</td>
            <td>
            <a href = 'delete.php?rn=$result[fname]'>
            <button  class='dlt' style='width: 100px; height: 40px; border-radius: 5px; background: #fa373b; 
            border: none; color: #fff;'>Delete</button>
            </a></td>
        </tr>
            ";
    }
}
?>
    </table>
<!-- 
    echo $result["fname"] . " " . $result["lname"] . " " . $result["email"] . " " . $result["Phone"] . " "
            . $result["Address"] . " " . $result["City"] . " " . $result["Password"] . "<br>"; -->