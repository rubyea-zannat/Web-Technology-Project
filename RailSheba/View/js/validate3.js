
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form
function validateForm() {
    
    var f_name = document.signupForm.fname.value;
    var l_name = document.signupForm.lname.value;
    var mail = document.signupForm.email.value;
    var pcode = document.signupForm.P_Code.value;
    var mobile = document.signupForm.phone.value;
    var add = document.signupForm.Address.value;
    var password = document.signupForm.password.value;
    

    // Defining error variables with a default value
    var fnameErr = lnameErr= emailErr=PErr=phoneErr=addErr=passwordErr = true;

    // Validate first name
    if (f_name == "") {
        printError("fnameErr", "Please enter your first name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(f_name) === false) {
            printError("fnameErr", "Please enter a valid first name");
        } else {
            printError("fnameErr", "");
            fnameErr = false;
        }
    }

    // Validate last name
    if (l_name == "") {
        printError("lnameErr", "Please enter your last name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(l_name) === false) {
            printError("lnameErr", "Please enter a valid last name");
        } else {
            printError("lnameErr", "");
            lnameErr = false;
        }
    }
  
    if (mail == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        var regex = /^\S+@\S+\.\S+$/;
        if (regex.test(mail) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else {
            printError("emailErr", "");
            emailErr = false;
        }
    }

   
    if (pcode == "") {
        printError("PErr", "Please enter your Postal Code");
    } else {
        var regex = /^[0-9]+$/;
        if (regex.test(pcode) === false) {
            printError("PErr", "Please enter a valid postal code");
        } else {
            printError("PErr", "");
            PErr = false;
        }
    }

    if (mobile == "") {
        printError("phoneErr", "Please enter your phone number");
    } else {
        var regex = /^[0-9]+$/;
        if (regex.test(mobile) === false) {
            printError("phoneErr", "Please enter a valid phone number");
        } else {
            printError("phoneErr", "");
            phoneErr = false;
        }
    }
    
    if (add == "") {
        printError("addErr", "Please enter a valid address");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(add) === false) {
            printError("addErr", "Please enter a valid address");
        } else {
            printError("addErr", "");
            lnameErr = false;
        }
    }

    // Validate password
    if (password == "") {
        printError("passwordErr", "Please enter your password");
    } else {
        var regex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
        if (regex.test(password) === false) {
            printError("passwordErr", "Password should contain at least one number, one uppercase character and one special character");
        } else {
            printError("passwordErr", "");
            passwordErr = false;
        }
    }


    if ((fnameErr || lnameErr|| emailErr||PErr||phoneErr||addErr||passwordErr) == true)
     {
        return false;
    }
    
};
