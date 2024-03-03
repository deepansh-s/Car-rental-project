<?php include('connection.php') ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="icon" type="image/x-icon" href="/img/logo.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;500&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,900;1,100;1,300;1,400&family=Shadows+Into+Light&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="index.css" type="text/css">
        <script src="https://kit.fontawesome.com/052249e8a8.js" crossorigin="anonymous"></script>

        <style>

          select option{
            color: black;
          }
        </style>
     </head>
<body>
  <a href="index.html" class="backbtn"><b><i class="fa-solid fa-arrow-left"></i></b></a>
   <center>
      <div class="Register_card" style="position:relative; padding:40px; margin-top:70px;">
        
                
        <form action="registerfform.php" method="post">

          <div id="nameInput">  
            <input class="otherinp" pattern="[a-zA-Z]+" title="Please enter alphabets only"  name="fname"  placeholder="Name" >
          </div> 

          <div id="last_namebox">  
            <input class="otherinp" pattern="[a-zA-Z]+" title="Please enter alphabets only" name="lname" placeholder="Last name">
          </div> 
          

          <div id="Email">  
            <input class="otherinp" type="text" pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$"  name="email" placeholder="Email" title="Please enter valid email" required>
            <p id="error-message"></p>
          </div> 

          <div id="Phone_box" style="margin-right:300px;  position:absolute; right:-410px; " > 
          
            <div class="code" style="height: 140px " >
            <select  name="" id="" style="margin-left:160px; height: 42px; width:70px; background:none; border:none;  border-bottom: 3px solid  rgba(255, 255, 255, 0.497) ; margin-top: 3px; color:rgba(255, 255, 255, 0.497); font-size: 18px">
              <option value="(+91)">(+91)</option>
              <option value="(+93) Afganistan">(+93)</option>
              <option value="(+1)	USA">(+1)</option>
              <option value="(+86)	China">(+86)</option>
              <option value="(+81 )Japan">(+81)</option>
              <option value="(+44)	UK">(+44)</option>
              <option value="(+55)	Brazil">(+55)</option>
              <option value="(+33)	France">(+33)</option>
              <option value="(+975)	Bhutan">(+975)</option>
              <option value="(+60)	Malaysia">(+60)</option>
              <option value="(+66)	Thailand">(+66)</option>
              <option value="(+92)	Pakistan">(+92)</option>
              <option value="(+33)	France">(+33)</option>
              <option value="(+49)	Germany">(+49)</option>
              <option value="(+7)	Russia">(+7)</option>
              <option value="(+971)	UAE">(+971)</option>
              <option value="(+880)	Bangladesh">(+880)</option>
              <option value="(+61)	Australia">(+61)</option>
              <option value="(+64)	New Zealand">(+64) </option>
            </select>
            </div>

            <div class="Phone">
            <input type="tel" pattern="[0-9]{10}" name="phone" title="Please enter 10 digit number" placeholder="Contact Number" style="width: 275px; background:none; border-bottom: 3px solid  rgba(255, 255, 255, 0.497); font-size: 18px; margin-right:7px; color:white;"  >
            </div>
           
          </div> 
          <br>
          <br>

          <div id="Address_box">  
            <input class="otherinp" type="text" name="address" placeholder="Address">
          </div> 

          <div id="City_box">
            <input class="otherinp" type="text" name="city" placeholder="City">
          </div>

          <div id="Password_box">
            <input class="otherinp" type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters " required>
          </div>

          <div id="btn_register">
           <input class="btnreg" type="submit" value="SUBMIT" name="submit">
          </div>

        </form>

     </div>
     

</div>


    </center>

    <!-- <a href="display.php" target="_blank"><button class="btnbase">DATABASE</button></a> -->

</body>
</html>

<?php 
    error_reporting(0);

    if($_POST['submit'])
    {
         $fnm = $_POST['fname'];
         $lnm = $_POST['lname'];
         $iml = $_POST['email'];
         $phn = $_POST['phone'];
         $pwd = $_POST['password'];
         $adr = $_POST['address'];
         $city = $_POST['city'];

      $query =  "INSERT INTO datastored (fname,lname,email,Phone,Address,City,Password) values
      ('$fnm','$lnm','$iml','$phn','$adr','$city','$pwd')";

  $data = mysqli_query($conn,$query);


     }
?>