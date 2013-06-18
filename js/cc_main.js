
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
    
    $('.error_msg').hide();
    var error_msg = '';
    

    if($('#login_container').find('#password').val() != '') {
        var passwordEncoded = hex_md5($('#login_container').find('#password').val());
        $('#login_container').find('#password').val(passwordEncoded);
    }
    serializedData = $('#login_container input').serialize();
   
    var url = baseurl+'account';
    $.ajax({
        url: url,
        type: "post",
        data: serializedData,
        dataType: 'json',
        // callback handler that will be called on success
        success: function(response, textStatus, jqXHR) {
           
            if(response.status == 'error'){
                // server side validation is failed              
                $('#loginErrorMsg').html(response.data);
                $('#loginErrorMsg').fadeIn(100);                
                console.log('it is an error status');
            } else if(response.status == 'success') {
                console.log('it is an success status');
            }
           
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
