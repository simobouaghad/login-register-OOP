const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const confirmpassword = document.getElementById('confirmpassword');


// Show error
function ShowError(input, message) {
    const formValidation = input.parentElement;
    formValidation.className = 'form-validation error';
    const errorMessage = formValidation.querySelector('p');
    errorMessage.innerText = message;
}

// Show valid message
function showValid(input) {
    const formValidation = input.parentElement;
    formValidation.className = 'form-validation valid';
}



// get Field Name
function getFieldName(input) {
    return input.name.charAt(0).toUpperCase() + input.name.slice(1);
}

//
function checkRequired(inputArr) {
    inputArr.forEach(function(input) {
        if (input.value.trim() === '') {
            ShowError(input, `${getFieldName(input)} is required`);
        } else {
            showValid(input);
        }
    })
}

// Check password Match
function passwordMatch(input1, input2) {
    if (input1.value !== input2.value) {
        ShowError(input2, 'Password do not match');
    }
}

// Check input length
function checkLength(input, min, max) {
    if (input.value.length < min) {
        ShowError(input, `${getFieldName(input)} must be at least ${min} characters`);
    } else if (input.value.length > max) {
        ShowError(input, `${getFieldName(input)} must be less then ${max} characters`);
    } else {
        showValid(input);
    }
}

// Submit
form.addEventListener('submit', function handle(e) {
    e.preventDefault();
    checkRequired([username, password, confirmpassword]);
    checkLength(username, 3, 30);
    checkLength(password, 6, 15);
    checkLength(confirmpassword, 6, 15);
    passwordMatch(password, confirmpassword);
})