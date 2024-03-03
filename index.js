document.getElementById('closebtn').onclick=function(){
    document.getElementById('details').style.display = "none"
    document.getElementById('blurdull').style.filter = "none"
}
document.getElementById('btnrent1').onclick=function(){
    document.getElementById('details').style.display = "block"
    document.getElementById('blurdull').style.filter = "blur(2px)"
    document.getElementById('blurdull').style.filter = "brightness(30%)"
}
document.getElementById('closebtn2').onclick=function(){
    document.getElementById('details2').style.display = "none"
    document.getElementById('blurdull').style.filter = "none"
}
document.getElementById('btnrent2').onclick=function(){
    document.getElementById('details2').style.display = "block"
    document.getElementById('blurdull').style.filter = "blur(2px)"
    document.getElementById('blurdull').style.filter = "brightness(30%)"
}
document.getElementById('closebtn3').onclick=function(){
    document.getElementById('details3').style.display = "none"
    document.getElementById('blurdull').style.filter = "none"
}
document.getElementById('btnrent3').onclick=function(){
    document.getElementById('details3').style.display = "block"
    document.getElementById('blurdull').style.filter = "blur(2px)"
    document.getElementById('blurdull').style.filter = "brightness(30%)"
}



const form = document.querySelector('form');
const databtn = document.querySelector('.btnreg');
const nameInput = document.querySelector('#name');



form.addEventListener('submit', function(event) {
  if (!nameInput.checkValidity()) {
    event.preventDefault();
  }
});

const phoneInput = document.querySelector('#phone');

form.addEventListener('submit', function(event) {
  if (!phoneInput.checkValidity()) {
    event.preventDefault();
  }
});


// form.addEventListener('submit' , (e)=>{
//   e.preventDefault()
//   const username = "abhi17";
//   const password = "Abhi2002";

//   if(username === adminUsername.value || password === adminPassword.value ){
//     window.location = "display.php"
//   }else{
//     window.alert("Invalid Credentials")
//   }


// })



const passwordInput = document.querySelector('#Password_box');

const passwordPattern = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;

form.addEventListener('submit', function(event) {
  if (!passwordPattern.test(passwordInput.value)) {
    event.preventDefault();
    window.location="cars.html"
  }
});

  const emailInput = document.querySelector("Email");
  const emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  form.addEventListener('submit',function(event){
    if (!emailpattern.test(emailInput.value)) {
      event.preventDefault();
  }
});

// const form1 = document.querySelector('form');
// const userInput = document.querySelector('#user-id');

// const userPattern = /abhi__17/;
// form1.addEventListener('submit', function(event) {
//   if (!userInput.checkValidity()) {
//     event.preventDefault();
//   }
// });

// const passInput = document.querySelector('#password');

// // const passwordPattern = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
// const passPattern = /Abhi2002/;
// form1.addEventListener('submit', function(event) {
//   if (!passPattern.test(passInput.value)) {
//     event.preventDefault();
//   }
// });
// const form1 = document.getElementsByClassName('form1')
// let body = document.querySelector('body')
// const Inputdata = document.querySelector('input')
// const loginbtn = document.getElementById('logbtn')
 

// function login()
// {
//   var username = abhi17;
//   var password = Abhi2002;
//     if (username === "abhi_17" && password === "Abhi2002") {
//       alert("Login successful");
//       document.getElementsByClassName("login_data").style.display = "none";
// 				document.getElementById("datastore-button").style.display = "block";
//       // window.location.href = "Display.php";
//       return true;
     
//     } else {
//       document.getElementById("message").innerHTML = "Incorrect username or password";
//       return false;
//     }
//   }



 
