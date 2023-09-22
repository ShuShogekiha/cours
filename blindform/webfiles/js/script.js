"use strict";

let test = document.getElementsByClassName("test")[0];
let inputPassword = document.querySelector("input[type='password']");

test.addEventListener("click", () =>{
    if(inputPassword.type = "password"){
        inputPassword.type = "text";
        console.log(inputPassword);         
    }
    else{
        inputPassword.type = "password";
        console.log(inputPassword);        
    } 
})