if(errors_response) {
    Object.keys(errors_response).forEach(function(name) {
        if(errors_response.hasOwnProperty(name))
        {
            let elem = document.getElementsByName(name)[0];
            if(elem.tagName == 'input') {
                elem.className += ' error';
                elem.previousElementSibling.innerText = errors_response[name];
            } else if(elem.tagName == 'select') {

            }
        }
    });
}

$('.error').keyup(function() {
    if($(this).val() != '') {
        $(this).removeClass('error');
        $(this).prev().text('');
    }
});

//show form after load
setTimeout(function() {
    $('.show-onload').removeClass('d-none');
    $('.lds-ring').addClass('d-none')
}, 0);

