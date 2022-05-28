// var nameError = document.getElementById('nameerror'); 
// var emailError = document.getElementById('emailerror'); 
// var passwordError = document.getElementById('passworderror'); 
 
// function validateName()
// {
//     var name=document.getElementById('contactname').value;
//     if(name.lenght==0)
//     {
//         nameError.innerHTML = 'Name is required ';
//         return false;
//     }
//     if(!name.match(/^[A-Za-Z]*\s{1}{A-Za-Z}*$/))
//     {
//         nameError.innerHTML = 'Write full name ';
//         return false;
//     }
//     nameError.innerHTML='<i class="fas fa-check-circle"></i>';
//     return true;
// }
// function validateEmail()
// {
//     var name=document.getElementById('contactemail').value;
//     if(email.lenght ==0)
//     {
//         emailError.innerHTML = "Email is required";
//          return false;

//     }
//     if(!email.match(/^[A-Za -z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/))

//     {
//        emailError.innerHTML='Email Invalid' 
//        return false;
//     }
//     emailError.innerHTML = '<i class="fas fa-check-circle"></i>';
//     return false;
// }
// SELECTING ALL TEXT ELEMENTS
var name = document.forms['vform']['name'];
var email = document.forms['vform']['email'];
var passw = document.forms['vform']['passw'];
var repassw = document.forms['vform']['repassw'];

// SELECTING ALL ERROR DISPLAY ELEMENTS
var name_error = document.getElementById('nameerror');
var email_error = document.getElementById('emailerror');
var password_error = document.getElementById('passworderror');

// SETTING ALL EVENT LISTENERS
name.addEventListener('blur', nameVerify, true);
email.addEventListener('blur', emailVerify, true);
passw.addEventListener('blur', passwordVerify, true);

// validation function
function Validate() {
  // validate username
  if (name.value == "") {
    username.style.border = "1px solid red";
    document.getElementById('namediv').style.color = "red";
    nameerror.textContent = "name is required";
    name.focus();
    return false;
  }
  // validate username
  if (username.value.length < 3) {
    name.style.border = "1px solid red";
    document.getElementById('namediv').style.color = "red";
    nameerror.textContent = "Username must be at least 3 characters";
    name.focus();
    return false;
  }
  // validate email
  if (email.value == "") {
    email.style.border = "1px solid red";
    document.getElementById('emaildiv').style.color = "red";
    emailerror.textContent = "Email is required";
    email.focus();
    return false;
  }
  // validate password
  if (password.value == "") {
    passw.style.border = "1px solid red";
    document.getElementById('passwdiv').style.color = "red";
    passw.style.border = "1px solid red";
    passworderror.textContent = "Password is required";
    passw.focus();
    return false;
  }
  // check if the two passwords match
  if (passw.value != repassw.value) {
    password.style.border = "1px solid red";
    document.getElementById('pass_confirm_div').style.color = "red";
    repassw.style.border = "1px solid red";
    passworderror.innerHTML = "The two passwords do not match";
    return false;
  }
}
// event handler functions
function nameVerify() {
  if (username.value != "") {
   name.style.border = "1px solid #5e6e66";
   document.getElementById('namediv').style.color = "#5e6e66";
   nameerror.innerHTML = "";
   return true;
  }
}
function emailVerify() {
  if (email.value != "") {
  	email.style.border = "1px solid #5e6e66";
  	document.getElementById('email_div').style.color = "#5e6e66";
  	emailerror.innerHTML = "";
  	return true;
  }
}
function passwordVerify() {
  if (password.value != "") {
  	password.style.border = "1px solid #5e6e66";
  	document.getElementById('pass_confirm_div').style.color = "#5e6e66";
  	document.getElementById('password_div').style.color = "#5e6e66";
  	passworderror.innerHTML = "";
  	return true;
  }
  if (password.value === repassw.value) {
  	passw.style.border = "1px solid #5e6e66";
  	document.getElementById('repasswdiv').style.color = "#5e6e66";
  	passworderror.innerHTML = "";
  	return true;
  }
}