$(document).ready(function(){
   $('#forgot_password').hide();
});

function showLoginBox() {
    $('#forgot_password').hide();
    $('#login_container').show();
}

function showForgotPasswordBox() {
    $('#login_container').hide();
    $('#forgot_password').show();
}

function loginFormCheck() {
    alert('in the form check');
    return true;
}

function passwordForgotFormCheck() {
    alert('in the password forgot check');
    return true;
}