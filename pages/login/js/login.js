//**************************//
//Author: DIEGO CASALLAS
//Date: 23/08/2019
//Description : funtions data Login
//************GET DATA FORM**************//
enableScroll();
function sendData(idForm) {
    let objForm = document.getElementById(idForm);
    let jSon = "";
    loadPageView();
    if (validatorForm(idForm)) {

        jSon = getDataForm(idForm);
        setLogin(jSon);
    } else {
        createModalAlert("Error al realizar el registro", 3, 4000);
        enableScroll();
    }
    // console.log(jSon);
}
//************GET DATA SERVER**************//
function setLogin(dataSetUser) {
    try {

        dataSetUser = '{"POST":"LOGIN",' + dataSetUser + "}";
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../../php/bo/bo_user.php", true);
        xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                var jsonObj = JSON.parse(xhttp.responseText);
                //console.log(jsonObj);
                if (jsonObj[0]["User_id"] != undefined) {

                    createModalAlert("Bienvenido", 1, 6000);
                    let storage = new StoragePage();
                    storage.setData(jsonObj);
                    storage.loginStorage(jsonObj);
                    //storage.getStorage();
                    locationPage("../home/home.php",1000);
                } else {
                    createModalAlert("Valide la información", 3, 4000);
                    enableScroll();
                }

            }
        };

        xhttp.send(dataSetUser);
    } catch (error) {
        console.error(error);
        enableScroll();
    }
}
//************SET DATA STORAGE**************//

function locationPage(url,time) {

    setTimeout(function () {
        enableScroll();
        window.location.assign(url);
    }, time);
    //console.log(json);
}
//************GET DATA EMAIL RECOVERY**************//
function getSendData(idForm) {
    loadPageView();
    let objForm = document.getElementById(idForm);
    let jSon = "";
    if (validatorForm(idForm)) {

        jSon = getDataForm(idForm);
        setRecoveryPassword(jSon);

    } else {
        createModalAlert("Error al realizar el registro", 3, 4000);
        enableScroll();
    }
}
//************SEND DATA NEW PASSWORD**************//
function sendNewPassqword(idForm) {
    loadPageView();
    let objForm = document.getElementById(idForm);
    let jSonSrt = "";
    let jSon="";
    let objJson=null;
    if (validatorForm(idForm)) {

        jSonSrt = getDataForm(idForm);
        jSon = "{"+ jSonSrt + "}";
        objJson=JSON.parse(jSon);
        if(objJson.User_password===objJson.passwordCheck){
           
            jSonSrt+=',"User_id":"'+document.getElementById("User_id").value+'"';
             sendRecoveryPassword(jSonSrt);

        }else{
            createModalAlert("Las contraseñas no coinciden", 3, 2000);
        }

    } else {
        createModalAlert("Error al realizar el registro", 3, 4000);
        enableScroll();
    }
    
}


//************SET DATA EMAIL RECOVERY**************//
function setRecoveryPassword(dataSetUser) {
    try {
        let url =  getUrl();
        dataSetUser = '{"POST":"RECOVERY_PASSWORD",' + dataSetUser + ',"Url":"' + url + '"}';
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../../php/bo/bo_user.php", true);
        xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
               var jsonObj = JSON.parse(xhttp.responseText);
                console.log(jsonObj);
                if ((jsonObj[0]["User_id"] != undefined) && (jsonObj[0]["User_id"]!="0")) {

                    createModalAlert("Se ha enviado un correo electrónico para el cambio de contraseña", 1, 6000);
                    locationPage("../login/login.html",2000);
                  
                } else {
                    createModalAlert("Valide la información, correo no registrado", 3, 4000);
                    enableScroll();
                }

            }
        };

        xhttp.send(dataSetUser);
    } catch (error) {
        console.error(error);
        enableScroll();
    }
}
//************GET URL VALIDATE**************//
function loadView(){
    
    let strUrl=window.location.href;
    let strQuery=strUrl.indexOf("?");
    let strHast=strUrl.substring(strQuery+1,strUrl.length);
    let jSon="";
    if(strHast==""){
        validationView(true);
    }else{
        jSon = '"Login_hash":"'+strHast+'"';
        getRecoveryPassword(jSon);
    } 
}
function validationView(dataValidation){
    if(dataValidation){
        document.getElementById("contMessage").style.display="block";
    }else{
        document.getElementById("contNewPassword").style.display="block";
    }

}
//************GET DATA HASH RECOVERY**************//
function getRecoveryPassword(dataSetUser) {
    try {

        dataSetUser = '{"POST":"GET_HASH",' + dataSetUser + "}";
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../../php/bo/bo_user.php", true);
        xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                var jsonObj = JSON.parse(xhttp.responseText);
                if (jsonObj[0]["User_id"] != undefined) {
                    validationView(false);
                    document.getElementById("User_id").value=jsonObj[0]["User_id"];
                } else {
                    validationView(true);
                    enableScroll();
                }

            }
        };

        xhttp.send(dataSetUser);
    } catch (error) {
        console.error(error);
        enableScroll();
    }
    
}
//************SEND DATA UPDATE PASSWORD**************//
function sendRecoveryPassword(dataSetUser) {
    try {

        dataSetUser = '{"POST":"NEW_PASSWORD",' + dataSetUser + "}";
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../../php/bo/bo_user.php", true);
        xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                var jsonObj = JSON.parse(xhttp.responseText);
                console.log(jsonObj);
                if (jsonObj[0]["Id_row"] != undefined) {
                    createModalAlert("Se actualizo la contraseña", 1, 6000);
                    locationPage("../login/login.html",2000);
                } else {
                    createModalAlert("Error al actualizar la contraseña", 3, 4000);
                    enableScroll();
                }

            }
        };

        xhttp.send(dataSetUser);
    } catch (error) {
        console.error(error);
        enableScroll();
    }
    
}

$('#defaultUnchecked').click(function () {
    
    if ($('#defaultUnchecked').is(':checked')) {
      $('.pass').attr('type', 'text');
      $('.viewI').html('visibility');
      
    } else {
      $('.pass').attr('type', 'password');
      $('.viewI').html('visibility_off');
     
    }
  });

