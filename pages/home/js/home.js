//**Function add quote **/
//**************************//
//Author: DIEGO CASALLAS
//Date: 18/05/2020
//Description : funtions dashboard
/**Function get Client **/
var sendToProvider = false;
function sendData(idForm) {  
    let jSon = "";
    if (validatorFormSend()) {
        if (validatorForm(idForm)) {
            jSon = getDataForm(idForm);
            setDatQuote(jSon);
        } else {
            createModalAlert("Error al realizar el registro", 3, 4000);
        }
    } else {
        createModalAlert("Valide la información de Cliente y el Proveedor", 3, 4000);
    }
    //console.log(jSon);
}
function validatorFormSend() {
    let idClient = document.getElementById("Client_id").value;
    let idPro = document.getElementById("Pro_id").value;
    let idCons = document.getElementById("Quo_consec").value;

    if (idClient.length == 0 || idPro.length == 0 || idCons.length == 0) {
        return false;
    }
    if (idClient == "" || idPro == "" || idCons == "") {
        return false;
    }
    
    return true;
}


//**********************GED EDIT****************************//
function getDataEdit(id) {
    alert(id);
}
//************ LOAD VIEW ******************/
function loadView() {
    loadPageView();
    getActionStorage();
    nobackbutton();    
}
//************ LOAD VIEW STORAGE ******************/
function getActionStorage() {
 
    let obj=new StoragePage();
    let json=JSON.parse(obj.getStorageLogin());
    //console.log(json);
    if (json !== null) {
    getDataUserId(json[0]["User_id"]);
    getNotification(json[0]["User_id"]);
    messageList();
    }else{
        locationLogin();
    }

}
function nobackbutton(){
       window.location.hash="no-back-button";
       window.location.hash="Again-No-back-button" //chrome
       window.onhashchange=function(){window.location.hash="no-back-button";} 
       //window.onbeforeunload = function() {
        //return "¿Estás seguro que deseas salir de la actual página?"
    //}
    }



//************GET VIEW **************//
function getAction() {
    
    let strURl = window.location.href;
    let getData = strURl.substring(strURl.indexOf("?") + 1, strURl.length);
    if (getData.split("=")[1] == 0) {
        //getDataQuotation("", "", 1);
        document.getElementById("btn-action").style.display="none";

    } else {
        let getDataEdit = strURl.substring(strURl.indexOf("&") + 1, strURl.length);
        let jsonArray = getDataEdit.split("=");
        //getDataQuotation("", jsonArray[1], 2);
        
    }
    getActionStorage();
}

//**Function get Quation **/

function sendMail(){
  let message = confirm("Los cambios que no han sido guardados serán descartados. ¿Desea continuar?");
  if (message == true) {
    let indIdProvider=document.getElementById("Pro_id").value;
    let stringQuote=document.getElementById("Quo_consec").value;
    if (sendMailProvider(indIdProvider,stringQuote) != 0){
      jsonData = '"Quo_consec":"'+stringQuote+'","Stat_id":"2"';
      setStatusQuote(jsonData);
    }
  }  
}
/**Function Send Mail Providert **/
function sendMailProvider(idProvider,idQuote) {
    try {
        dataSetQuote = '{"POST":"POST_MAIL","Pro_id":"' + idProvider + '","Quo_consec":"Quo_consec='+idQuote+'&entry=1"}';
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../../php/mail/notification.php", true);
        xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {    
              //debugger;
                if (xhttp.responseText != 0) {
                    createModalAlert("Correo enviado con éxito", 1, 3000);
                    enableScroll();
                } else {
                    createModalAlert("Error al enviar el correo", 3, 4000);
                    enableScroll();
                }
            }
          return xhttp.responseText;
        };
        
    } catch (error) {
        console.error(error);
        createModalAlert("Se presentó un error en el registro", 3, 4000);
        enableScroll();
    }
    xhttp.send(dataSetQuote);
   
    
    
}
//************SEARCH PROVIDER**************//

function locationPage(){
    setTimeout(function () {
        window.location.assign("dashboard.php");
    }, 1200);
}
//************CLOSE**************//
function closeSession(){
    let obj=new StoragePage();
    obj.removeStorageUser();
    window.location.assign("../login/login.html");

}
//************SEARCH PROVIDER AND CLIENT MODAL**************//
var booValidatorCliPro=true;
function changeStatus(data){
    booValidatorCliPro=data;
    //alert(booValidatorCliPro);
}   
function getDataTable(table) {
 var radios = document.getElementsByName('subject');
 let validator=false;
 let value="";
 for (var i = 0, length = radios.length; i < length; i++) {
   if (radios[i].checked) {

     value=i;
     validator=true;
     break;
   } 
 }
 if(validator){
   let objTable=document.getElementById("tableSearch");
   let arrayData=new Array();
   let arrayId=new Array();
   for (let i = 0; i < 3; i++) {
       let id=parseInt(value+1);
       arrayData[i]=objTable.rows[id].cells[i].innerHTML;
   }
   if(booValidatorCliPro){
     arrayId[0]="Client_id";
     arrayId[1]="Client_identification";
     arrayId[2]="Client_name";
   }else{
     arrayId[0]="Pro_id";
     arrayId[1]="Pro_identification";
     arrayId[2]="Pro_name";
   }
   for (let k = 0; k < arrayId.length; k++) {       
       document.getElementById(arrayId[k]).value=arrayData[k];
   }
 }
 document.getElementById('Search_user').value = "";
}
function clearTable(){
    let objTable=document.getElementById("tableSearch");
    objTable.innerHTML="";
    document.getElementById('Search_user').value = "";
}

function sizes(){
  var dimensions = document.getElementById('Quo_dimensions').value;
  if (dimensions == 'Otro'){
    document.getElementById('Quo_width').value = "";
    document.getElementById('Quo_height').value = "";
    document.getElementById('Quo_format').value = "";
  }
  else {
    var newSizes = dimensions.split(",");
    document.getElementById('Quo_width').value = newSizes[0];
    document.getElementById('Quo_height').value = newSizes[1];
    document.getElementById('Quo_format').value = newSizes[2];
  }
  
}

function dimensionsValue(){
  let width = document.getElementById('Quo_width').value;
  let height = document.getElementById('Quo_height').value;
  if ((width == '20.5' && height == '27.5') || (width == '27.5' && height == '20.5') || (width == '21.5' && height == '33') || (width == '33' && height == '21.5') || (width == '20' && height == '20') || (width == '13' && height == '20') || (width == '20' && height == '13')){
    let dimensions = document.getElementById('Quo_width').value+","+document.getElementById('Quo_height').value+","+document.getElementById('Quo_format').value;
    document.getElementById('Quo_dimensions').value = dimensions;    
  }
  else {
    document.getElementById('Quo_dimensions').value = 'Otro';
  }
}

function finalStatus(Quo_consec,idStatus,idSelect){
  let status = "";
  if (idStatus == 4) {
    status = "Aprobado";
  }
  else{
    status = "Anulado";
  }
  let message = confirm("¿Está seguro que desea cambiar al estado "+status+"?");
  if (message == true) {
    jsonStatus = '"Quo_consec":"'+Quo_consec+'","Stat_id":"'+idStatus+'"';
    setStatusQuote(jsonStatus);
    loadView();
  }
  else {
    document.getElementById(idSelect).value = "0";
  }
  
}
function preViewPdf(){
    let code=document.getElementById("Quo_consec").value;
    window.open('../../php/pdf/pre-quote_pdf.php?Quo_consec='+code+'&entry=1', '_blank');
}

function projectType() {
  let project = document.getElementById('Quo_project').value;
  if(project == 'Libro'){
    document.getElementById('Quo_students').value = 0;
    document.getElementById('Quo_students').disabled = true;
  }
  else {
    document.getElementById('Quo_students').disabled = false;
  }
}

