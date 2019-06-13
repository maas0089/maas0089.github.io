function init() {

    // Set the values for each input field
    const nameInput = document.getElementById('name');
    const nameTitle = "Voer hier uw naam in.";
    const nameContent = "Bijvoorbeeld: 'Jan Jansen'.";

    const emailInput = document.getElementById('email');
    const emailTitle = "Voer hier uw e-mail adres in.";
    const emailContent = "Bijvoorbeeld: 'iemand@example.com'.";

    const passwordInput = document.getElementById('password');
    const passwordTitle = "Maak een wachtwoord aan.";
    const passwordContent = "Dit wachtwoord moet minimaal 6 tekens bevatten.";

    const passwordConfirmationInput = document.getElementById('password-confirm');
    const passwordConfirmationTitle = "Herhaal uw wachtwoord.";
    const passwordConfirmationContent = "Dit wachtwoord moet overeenkomen met het bovenstaande wachtwoord.";

    // Initialize the popovers for each input field
    showPopover('name', validateNameInput, nameTitle, nameContent);
    showPopover('email', validateEmailInput, emailTitle, emailContent);
    showPopover('password', validatePasswordInput, passwordTitle, passwordContent);
    showPopover('password-confirm', validatePasswordConfirmInput, passwordConfirmationTitle, passwordConfirmationContent);

    //Focus input field based on error message
    focusInputField(nameInput, emailInput, passwordInput, passwordConfirmationInput);

    // Initialize the validation check for each input field when
    // focus is lost and a change was made
    nameInput.addEventListener("change", function(){
        validateNameInput(nameInput)
    });

    emailInput.addEventListener("change", function(){
        validateEmailInput(emailInput)
    });

    passwordInput.addEventListener("change", function(){
        validatePasswordInput(passwordInput)
    });

    passwordConfirmationInput.addEventListener("change", function(){
        validatePasswordConfirmInput(passwordInput.value, passwordConfirmationInput)
    });
}

// Show popover when input field is focused
function showPopover(inputFieldID, validationFunction, popTitle = 'Title', popContent = 'Content', trigger = 'focus') {
    $(`#${inputFieldID}`)
        .popover({
            delay: 100,
            title: popTitle,
            content: popContent,
            trigger: trigger
        })
}

// Focus the first input field that contains an error message
function focusInputField(nameInput, emailInput, passwordInput, passwordConfirmInput) {

    if(nameInput.parentElement.contains(document.getElementById('invalid-feedback'))){
        console.log('name input error!');
        nameInput.focus();
    }
    else if(emailInput.parentElement.contains(document.getElementById('invalid-feedback'))){
       console.log('email iput error!');
        emailInput.focus();
    }
    else if(passwordInput.parentElement.contains(document.getElementById('invalid-feedback'))){
        console.log('password input error!');
        passwordInput.focus();
    }
    else if(passwordConfirmInput.parentElement.contains(document.getElementById('invalid-feedback'))){
        console.log('password confirmation error!');
        passwordConfirmInput.focus();
    }
}

// Validate name input
function validateNameInput(nameInput) {
    console.log('validating name input...')
        if(nameInput.value !== ""){
            nameInput.classList.remove('is-invalid');
            nameInput.classList.add('is-valid');
            console.log('name is valid');
        }
        else{
            nameInput.classList.remove('is-valid');
            nameInput.classList.add('is-invalid');
            console.log('name is invalid');
        }
}

// Validate email input
function validateEmailInput(emailInput) {
    console.log('validating email input...')

    const emailRegEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if(emailRegEx.test(emailInput.value)){
        emailInput.classList.remove('is-invalid');
        emailInput.classList.add('is-valid');
        console.log('email is valid');
    }
    else{
        emailInput.classList.remove('is-valid');
        emailInput.classList.add('is-invalid');
        console.log('email is invalid');
    }
}

// Validate password input
function validatePasswordInput(passwordInput) {
    console.log('validating password input...')

    if(passwordInput.value !== "" && passwordInput.value.length >= 6){
        passwordInput.classList.remove('is-invalid');
        passwordInput.classList.add('is-valid');
        console.log('password is valid');
    }
    else{
        passwordInput.classList.remove('is-valid');
        passwordInput.classList.add('is-invalid');
        console.log('password is invalid');
    }
}

// Validate password confirmation input
function validatePasswordConfirmInput(passwordInput, passwordConfirmInput) {
    console.log('validating password confirmation input...')

    if(passwordConfirmInput.value !== ""
        && passwordConfirmInput.value.length >= 6
        && passwordConfirmInput.value === passwordInput){

        passwordConfirmInput.classList.remove('is-invalid');
        passwordConfirmInput.classList.add('is-valid');

        console.log('password confirmation is valid');
    }
    else{
        passwordConfirmInput.classList.remove('is-valid');
        passwordConfirmInput.classList.add('is-invalid');

        console.log('password confirmation is invalid');
    }
}


window.addEventListener("load", init());