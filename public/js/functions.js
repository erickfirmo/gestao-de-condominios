//return json with input values from form by id
function getFormDataById(formId) {
    var formData = {};
    var inputs = document.getElementById(formId).getElementsByTagName('input');
    var textareas = document.getElementById(formId).getElementsByTagName('textarea');
    for (let i = 0; i < inputs.length; i++) { formData[inputs[i].name] = inputs[i].value; }
    for (let i = 0; i < textareas.length; i++) { formData[textareas[i].name] = textareas[i].value; }
    return formData;
}