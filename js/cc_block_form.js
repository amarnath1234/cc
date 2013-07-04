$(document).ready(function(){
  
  
  
  //here .. once the validation is done ... perform file uipload first .. 
  //after the data has been saved to the data abse .. 
  //keep displaying the data in the status instead of hte error message
  
  
  
});

function blockFormCheck() {   
    alert('coming here'+$('#block_form_err').html());
    $('.error_msg').hide();
    var error_msg = '';

    if($('#title').val() == '') {
        $('#block_form_err').show();
        $('#block_form_err').html('PLease correct the error s above');
        return false;
    }
    if($('table tbody tr .AjaxUploaderQueueTableRow').html()) {
        alert('the image is uploaded')
    } else {
        $('#block_form_err').show();
        $('#block_form_err').html('PLease upoad some image');
        return false;
    }
    var nicE1 = new nicEditors.findEditor('description');
    $('#description').html(nicE1.getContent());
    var nicE2 = new nicEditors.findEditor('howtouse');
    $('#howtouse').html(nicE2.getContent());
    
    var serializedData = $('#ContributeEditBlockForm input').serialize();
   
    alert('the data is '+serializedData); 
    var somevar = doStart();
    alert('the variable is '+somevar);
    return false;
}