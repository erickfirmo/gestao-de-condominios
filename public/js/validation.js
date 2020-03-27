Object.keys(errors_response).forEach(function(name) {
    let elem = document.getElementsByName(name)[0];
    elem.className += ' error';
    elem.previousElementSibling.innerText = errors_response[name];
});

$('.error').onkeyup = function() {
    if($(this).val() != '') {
        $(this).removeClass('error');
        $(this).prev().text('');
    }
};

//show form after load
setTimeout(function() {
    $('.lds-ring').addClass('d-none')
    $('.main-form').removeClass('d-none');
}, 100);

