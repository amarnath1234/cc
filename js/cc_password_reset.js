$(document).ready(function(){
    $('.error_msg').hide();
});

function passwordResetFormCheck() {
    $('.error_msg').hide();
    var error_msg = '';
    
    if($('#password_reset').find('#password').val() != '') {
        var passwordEncoded = hex_md5($('#password_reset').find('#password').val());
        $('#password_reset').find('#password').val(passwordEncoded);
    }
    if($('#password_reset').find('#retypePassword').val() != '') {
        var passwordEncoded = hex_md5($('#password_reset').find('#retypePassword').val());
        $('#password_reset').find('#retypePassword').val(passwordEncoded);
    }
    var serializedData = $('#password_reset input').serialize();
    var url = baseurl+'account/passwordRecovery';
    $.ajax({
        url: url,
        type: "post",
        data: serializedData,
        dataType: 'json',
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