//return json with input values from form by id
function getFormDataById(formId)
{
    let formData = {};
    let form = document.getElementById(formId);
    let inputs = form.getElementsByTagName('input');
    inputs.concat((form.getElementsByTagName('textarea')))
    inputs.map(function(input) {
        formData[input.name] = input.value; 
    });
    // console.log(formData);
    return formData;
}