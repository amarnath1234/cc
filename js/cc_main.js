
$(document).ready(function() {
    $('#forgot_password').hide();
    $('.error_msg').hide();
    $('#showLoginBox').click(function() {
        showLoginBox();
    });
    $('#showForgotPasswordBox').click(function() {
        showForgotPasswordBox();
    });
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
    if($('#login_container').find('#password').val() != '') {
    var passwordEncoded = hex_md5($('#login_container').find('#password').val());
    $('#login_container').find('#password').val(passwordEncoded);
    }
    $('.error_msg').hide();
    var error_msg = '';

    serializedData = $('#login_container input').serialize();
    alert(serializedData);
    var url = baseurl+'account';
    $.ajax({
        url: url,
        type: "post",
        data: serializedData,
        // callback handler that will be called on success
        success: function(response, textStatus, jqXHR) {
           console.log(response);
            
           
            //$.each(response, function(key, val) {   });
					
           
        },
       
        error: function(jqXHR, textStatus, errorThrown) {

        },
        
        complete: function() {
         
        }
    });

return false;
}

function passwordForgotFormCheck() {
    alert('in the password forgot check');
    return true;
}
