Object.keys(errors_response).forEach(function(name) {
    let elem = document.getElementsByName(name)[0];
    elem.className += ' error';
    elem.previousElementSibling.innerText = errors_response[name];
});

document.getElementsByClassName('error').onkeyup = function() {
    if(this.value != '') {
        this.classList.remove('error');
        this.innerText = '';
    }
};