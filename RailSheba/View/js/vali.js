// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form
function validateForm() {
    // Retrieving the values of form elements
    var f_name = document.signupForm.fname.value;
  

    // Defining error variables with a default value
    var fnameErr= true;

    // Validate first name
    if (f_name == "") {
        printError("fnameErr", "Please enter your feedback");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(f_name) === false) {
            printError("fnameErr", "Please enter your feedback");
        } else {
            printError("fnameErr", "");
            fnameErr = false;
        }
    }

    


    

    // Prevent the form from being submitted if there are any errors
    if ((fnameErr) == true)
     {
        return false;
    }
    else {


    }
};
