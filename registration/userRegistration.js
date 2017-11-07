//Variables
var name = document.forms["vform"]["name"];
var email = document.forms["vform"]["email"];
var activation = document.forms["vform"]["activation"];

//GETTING ALL ERROR DISPLAY OBJECTS
var name_error = document.getElementById("name_error");
var email_error = document.getElementById("email_error");
var activation_error = document.getElementById("activation_error");

//Setting all event listeners
name.addEventListener("blur", nameVerify, true);
email.addEventListener("blur", emailVerify, true);
activation.addEventListener("blur", actVerify, true);

//Validation function
function Validate() {
    //Name validation
    if(name.value == "") {
        name.style.border = "lpx solid red";
        name_error.textContent = "Name is required";
        name.focus();
        return false;
    }
    
    //Email validation
    /*if(email.value == "") {
        email.style.border = "lpx solid red";
        email_error.textContent = "Email is required";
        email.focus();
        return false;
    }*/

    //Activation key validation
    /*if(activation.value == "") {
        activation.style.border = "lpx solid red";
        activation_error.textContent = "Activation key is required";
        activation.focus();
        return false;
    }*/

//Event handler functions
function nameVerify() {
    if(name.value != "") {
        name.style.border = "1px solid #5E6E66";
        name_error.innerHTML = "";
        return true;
    }
}

function emailVerify() {
    if(email.value != "") {
        email.style.border = "1px solid #5E6E66";
        email.innerHTML = "";
        return true;
    }
}

function actVerify() {
    if(activation.value != "") {
        activation.style.border = "1px solid #5E6E66";
        activation_error.innerHTML = "";
        return true;
        }
    }
}    
