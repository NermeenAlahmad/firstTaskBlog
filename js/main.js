let firstname     = document.getElementById('fname');
let lastname      = document.getElementById('lname');
let email         = document.getElementById('email');
let phone         = document.getElementById('phone');
let password      = document.getElementById('password');
let signup_submit = document.getElementById('signup-submit');

let firstname_span     = document.getElementById('firstname_span');
let lastname_span      = document.getElementById('lastname_span');
let email_span         = document.getElementById('email_span');
let phone_span         = document.getElementById('phone_span');
let password_span      = document.getElementById('password_span');

let regexFirsName = /^[a-zA-Z ]{2,30}$/;
let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
let passwordRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
let mobile_format = (/077[0-9]{7}/gm);

signup_submit.addEventListener('click',(e) => {
    e.preventDefault();

    if (firstname.value.match(regexFirsName)) {
        firstname_span.innerHTML = " First Name Is Valid! " 
        firstname_span.style.color = "green" 
    } else {
        firstname_span.innerHTML = " First Name Not Valid "
        firstname_span.style.color = "red" 
    }

    if (lastname.value.match(regexFirsName)) {
        lastname_span.innerHTML = " Last Name Is Valid! " 
        lastname_span.style.color = "green" 
    } else {
        lastname_span.innerHTML = " Last Name Not Valid "
        lastname_span.style.color = "red" 
    }


    if (email.value.match(mailformat)) {
        email_span.innerHTML = " Email Is Valid! " 
        email_span.style.color = "green" 
    } else {
        email_span.innerHTML = " Email Not Valid "
        email_span.style.color = "red" 
    }


    if (phone.value.match(mobile_format)) {
        phone_span.innerHTML = " Phone Is Valid! " 
        phone_span.style.color = "green" 
    } else {
        phone_span.innerHTML = " Phone Name Not Valid "
        phone_span.style.color = "red" 
    }

    if (password.value.match(passwordRegex)) {
        password_span.innerHTML = " Password Is Valid! " 
        password_span.style.color = "green" 
    } else {
        password_span.innerHTML = " Password  Not Valid "
        password_span.style.color = "red" 
    }


})

var content = document.getElementsByTagName('body')[0];
        var darkMode = document.getElementById('dark-change');
        darkMode.addEventListener('click', function(){
            darkMode.classList.toggle('active');
            content.classList.toggle('night');
        })