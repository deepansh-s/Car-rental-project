const form1 = document.querySelector('.form1')
let body = document.querySelector('body')
const adminUsername = document.querySelector('#admin_username')
const adminPassword = document.querySelector('#admin_password')



form1.addEventListener('submit' , (e)=>{
  e.preventDefault()
  const username = "abhi17";
  const password = "Abhi2002";

  if(username === adminUsername.value || password === adminPassword.value ){
    window.location = "display.php"
  }else{
    window.alert("Invalid Credentials")
  }


})