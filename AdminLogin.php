
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN | @RENTAWHEELS</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body >
    <center>
    <div class="login_data" style="background: linear-gradient(#2a80dd,#072d53); position: relative; margin: 200px; width: 400px; height: 400px;  border-radius: 10px; box-shadow: 0px 10px 69px -3px rgba(0,0,0,0.1),0px 10px 15px -3px rgba(0,0,0,0.1);">
        <!-- <h2 style="color:rgba(255, 255, 255, 0.497);">ADMIN LOG-IN</h2> -->
        <br>
        <br>
    <form action="" class="form1">
        <div id="user-id">
           
            <input  id="admin_username" class="cred" type="text" name="name" placeholder="Enter your username" title="Please enter correct username" style="left:5px; position: relative; color:rgba(255, 255, 255, 0.497); background: none; 
            border: none;  border-bottom: 3px solid rgba(255, 255, 255, 0.497); font-size: 18px; color: #fff;  outline: none; margin-top: 60px;" required>
          </div>

          <div id="password">
          
            <input id="admin_password" class="cred" type="password" name="password"  placeholder="Password" title="Please enter correct password" style="position:relative; left:5px;" required>
          </div>
          <br>
          <br>
          <!-- <a href="Display.php"> <input class="logbtn" type="submit" value="Log-in"></a> -->
          <!-- <a href="cars.html"> <input class="logbtn" type="submit" value="Log-in"></a> -->
          <a href="display.php"><button id="logbtn">Log-in</button></a> 
    </form>
    <p id="message"></p>
   
</div>

</center>
<script src="login.js"></script>
</body>
</html>