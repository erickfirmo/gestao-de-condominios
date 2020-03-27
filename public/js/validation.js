Object.keys(errors_response).forEach(function(name) {
    $('input[name="'+name+'"]').addClass('error');
    $('input[name="'+name+'"]').prev().text(errors_response[name]);

});

$('.error').on('keyup', function() {
    if($(this).val() != '') {
        $(this).removeClass('error');
        $(this).prev().text('');
    }
});


