$('.error').on('keyup', function() {
    if($(this).val() != '') {
        $(this).removeClass('error');
        $(this).prev().text('');
    }
});