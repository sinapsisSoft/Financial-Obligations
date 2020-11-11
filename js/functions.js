//**************************//
//Author: DIEGO CASALLAS
//Date: 15/08/2019
//Description : funtions data Request
//************GET DATA FORM**************//
var ObjCliente = new Object();
ObjCliente.Client_name = "";
var bolValidatoEdit = true;

function getData(form, e, typeSend) {
    try {
        let jsonData = '';
        var objForm = document.getElementById(form);
        let inputForm = objForm.querySelectorAll('input');
        let selectForm = objForm.querySelectorAll('select');

        ///For input ///
        for (let i = 0; i < inputForm.length; i++) {
            jsonData += '"' + inputForm[i].id + '":' + '"' + inputForm[i].value + '",';
        }
        ///For select ///
        for (let j = 0; j < selectForm.length; j++) {
            let objSelect = document.getElementById(selectForm[j].id);
            jsonData += '"' + selectForm[j].id + '":' + '"' + objSelect.options[objSelect.selectedIndex].value + '",';
        }
        jsonData = jsonData.substring(0, jsonData.length - 1);
        //console.log(jsonData);
        selectActionAPI(jsonData, typeSend, form);
    }
    catch (error) {
        console.error(error);
    }
    e.preventDefault();

}

//************GET DATA EDIT**************//
function getDataEdit(idForm, idSelection) {

    if (idForm == 0) {
        getDataClient("", idSelection, 0);
    }
    if (idForm == 1) {
        getDataProvider("", idSelection, 0);
    }
    if (idForm == 2) {
        getDataQuotation("", idSelection, 0);
    }
    if (idForm == 3) {
        getDataUser("", idSelection, 0);

    }
}
//************SET DATA FORM**************//
function setDataForm(idForm, idFormModal, json) {

    if (idForm == 0) {
        viewModal(idFormModal, 0);

    }
    if (idForm == 1) {
        viewModal(idFormModal, 0);
    }
    let jsonData = json;
    for (let key in jsonData[0]) {
        document.getElementById(key).value = jsonData[0][key];
        //console.log(key+"-"+jsonData[0][key]);
    }
}
//**********SET DATA CODE QUATATIO********//
function setDataCode(json) {

    let jsonData = json;
    for (let key in jsonData[0]) {
        document.getElementById("Quo_consec_label").innerHTML = jsonData[0][key];
        document.getElementById("Quo_consec").value = jsonData[0][key];
    }

}
//**********SET DATA CODE QUATATIO********//
function setDataCodeLabel() {
    document.getElementById("Quo_consec_label").innerHTML = document.getElementById("Quo_consec").value;
}
//**************VIEW MODAL**************/
function viewModal(idFormModal, state) {
    if (state == 0) {
        $("#" + arrayFormModal[idFormModal]).modal("show");
    } else {
        $("#" + arrayFormModal[idFormModal]).modal("hide");
    }
}
//**************VALIDATION TEXT FORM**************/
function validatorText() {
}
//**************DISABLED TEXT FORM**************/
function disableForm(form) {
    var objForm = document.getElementById(form);
    let intLogForm = objForm.querySelectorAll('input').length;

    for (let i = 0; i < intLogForm; i++) {

        objForm[i].disabled = true;
    }
}
//************CLEAR FORM****************/
function clearForm(form, type) {
    try {
      console.log(type);
      if(type == 0){
        var form = form.id;
      }
        var objForm = document.getElementById(form);
        console.log(objForm);        
        let intLogForm = objForm.querySelectorAll('input').length;
        
        for (let i = 0; i < intLogForm; i++) {
            objForm[i].value = "";
            var clase = objForm[i].className;
            if (type == 0 && objForm[i].className === 'read') {
              objForm[i].disabled = 'true';
            }
            else if (type == 1 && objForm[i].className === 'read') {
              objForm[i].removeAttribute('disabled');
            }
        }
    }
    catch (error) {
        console.error(error);
    }
}
//************LOAD VIEW PAGE**************//
function loadView(dataSelect) {
    if (dataSelect == "customers") {
        getDataClient("tableClient", "", 1);
    }
    if (dataSelect == "providers") {
        getDataProvider("tableProvider", "", 1);
    }
    if (dataSelect == "quote") {
        getDataQuotation("tableQuote", "", 0);
    }
    if (dataSelect == "pre_quote") {
        getDataPreQuotation("tablePreQuote", "", 0);
    }
    if (dataSelect == "users") {
        getDataUser("tableUser", "", 1);
    }
}
//************SEARCH CLIENTE**************//
function searchClients(form, e) {
    try {
        var objForm = document.getElementById(form);
        let intLogForm = objForm.querySelectorAll('input').length;
        let jsonData = '';
        for (let i = 0; i < intLogForm; i++) {
            jsonData = objForm[i].value;
        }
        getDataClient("tableClient", jsonData, 1);
    }
    catch (error) {
        console.error(error);
    }
    e.preventDefault();
}
//************SEARCH CLIENTE**************//
function searchQuote(form, e) {
    try {
        var objForm = document.getElementById(form);
        let intLogForm = objForm.querySelectorAll('input').length;
        let jsonData = '';
        for (let i = 0; i < intLogForm; i++) {
            jsonData = objForm[i].value;
        }
        getDataQuotation("tableQuote", jsonData, 0);
    }
    catch (error) {
        console.error(error);
    }
    e.preventDefault();
}
//************SEARCH CLIENTE**************//
function searchPreQuote(form, e) {
    try {
        var objForm = document.getElementById(form);
        let intLogForm = objForm.querySelectorAll('input').length;
        let jsonData = '';
        for (let i = 0; i < intLogForm; i++) {
            jsonData = objForm[i].value;
        }
        
        getDataPreQuotation("tablePreQuote", jsonData, 0);
    }
    catch (error) {
        console.error(error);
    }
    e.preventDefault();
}
//************SEARCH PROVIDER**************//
function searchProviders(from, e) {
    try {
        var objFrom = document.getElementById(from);
        let intLogFrom = objFrom.querySelectorAll('input').length;
        let jsonData = '';
        for (let i = 0; i < intLogFrom; i++) {
            jsonData = objFrom[i].value;
        }

        getDataProvider("tableProvider", jsonData, 1);
    }
    catch (error) {
        console.error(error);
    }
    e.preventDefault();
}
//************SEARCH CLIENTE OR PROVIDER**************//
function searchClientProvider(idForm, identification, e, type) {
    let str = document.getElementById(identification).value;
    getDataIdentification(idForm, str, type);
    e.preventDefault();
}
//************SEARCH USER**************//
function searchUsers(form, e) {
    try {
        var objForm = document.getElementById(form);
        let intLogForm = objForm.querySelectorAll('input').length;
        let jsonData = '';
        for (let i = 0; i < intLogForm; i++) {
            jsonData = objForm[i].value;
        }
        getDataUser("tableUser", jsonData, 1);
    }
    catch (error) {
        console.error(error);
    }
    e.preventDefault();
}

//************SUM PAGE*************//
var intPage0, intPage1, intRes = 0;
function sumPage(id) {
    try {
        if (id == "Quo_color") {
            intPage0 = document.getElementById(id).value;
        } else {
            intPage1 = document.getElementById(id).value;
        }

        if ((intPage0 === undefined) || (intPage0 == "")) {
            intPage0 = 0;
        }
        if ((intPage1 === undefined) || (intPage1 == "")) {
            intPage1 = 0;
        }
        intRes = parseInt(intPage0) + parseInt(intPage1);
        document.getElementById("Quo_pageTotal").value = intRes;
    }
    catch (error) {
        console.error(error);
    }
}
//************ACTION *************//
function viewAction(data) {
    
    let objAction;
    if (data == 0) {
         objAction = document.getElementById("btn-action");
        let strConsec = document.getElementById("Quo_consec").value;

        let newBoton = '<a type="button"target="_blank" href="./php/pdf/pre-quote_pdf.php?Quo_consec=' + strConsec + '&entry=2" title="Ver Pdf" class="btn btn-danger"><i class="material-icons">visibility</i></a><button type="button" title="Enviar Pdf" onclick="sendPDFprovider(' + strConsec + ')" class="btn btn-info"><i class="material-icons">swap_vert</i></button>';
        objAction.innerHTML = newBoton;
    } else {
         objAction = document.getElementById("btn-action-2");
        //let strConsec = document.getElementById("Pre_quo_consec").value;
        
        let newBoton = '<button type="button" onclick="deletePreQuote()" title="Eliminar registro" class="btn btn-danger"><i class="material-icons">delete</i></button><button type="button" title="Crear Cotización" onclick="sendPDFprovider()" class="btn btn-info"><i class="material-icons">compare_arrows</i></button>';
        objAction.innerHTML = newBoton;
    }
}

function validationUser(){

}


