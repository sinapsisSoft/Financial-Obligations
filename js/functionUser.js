window.onload = loadView("users");
$(document).ready(function () {
    passwordDataForm(1);
});
//************UNBLOCK DATA FORM**************//
function passwordDataForm(option) {
    try {
        var pass = document.getElementsByClassName('pass');
        if (option == 1) {
            for (let i = 0; i < pass.length; i++) {
                pass[i].required = 'true';
            }
            $(".password").fadeIn();
        } else {
            for (let i = 0; i < pass.length; i++) {
                pass[i].removeAttribute('required');
            }
            $(".password").fadeOut();
        }
    } catch (error) {
        console.error(error);
    }
}

function confirmPass(id, e, type) {
    //console.log(bolValidatoEdit);
    try {
        if (bolValidatoEdit) {
            var Login_password = document.getElementById("Login_password").value;
            var Confirm_password = document.getElementById("Repeat_password").value;
            if (Login_password != Confirm_password) {
                alert('Las contraseñas no coinciden');
            }
            else {
                getData(id, e, 0);
            }
        }
        else {
            getData(id, e, 0);
        }
    } catch (error) {
        console.error(error);
    }
}