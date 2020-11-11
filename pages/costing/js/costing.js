//************GET VIEW **************//
function getAction() {
  let strURl = window.location.href;
  let getData = strURl.substring(strURl.indexOf("?") + 1, strURl.length);
  let jsonArray = getData.split("=");
  getDataCosting(jsonArray[1], 0);
  getActionStorage();
  sendDataFile();

}
/**Function add Client **/
function setDatCosting(dataSetCosting) {
  try {
    loadPageView();
    dataSetCosting = '{"POST":"POST",' + dataSetCosting + "}";
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../../php/bo/bo_costing.php", true);
    xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
    xhttp.onreadystatechange = function () {
      if (this.readyState === 4 && this.status === 200) {
        if (xhttp.responseText != 0) {
          enableScroll();
          createModalAlert("Operación realizada con éxito", 1, 3000);
        } else {
          enableScroll();
          createModalAlert("Valide la información", 3, 4000);
        }
      }
    };
  } catch (error) {
    console.error(error);
    createModalAlert("Se presento un error en le registro", 3, 4000);
    enableScroll();
  }
  xhttp.send(dataSetCosting);
}
//**Function get Quote **/
function getDataCosting(dataSetCosting, typeSend) {
  try {
    loadPageView();
    var xhttp = new XMLHttpRequest();
    var JsonData;
    xhttp.open("POST", "../../php/bo/bo_costing.php", true);
    xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
    xhttp.onreadystatechange = function () {
      if (this.readyState === 4 && this.status === 200) {
        var jsonObj = JSON.parse(xhttp.responseText);
        if (jsonObj != 0) {
          if(jsonObj[0]["Stat_id"]==4 || jsonObj[0]["Stat_id"]==5){
            to_block_form();
        }
          if (typeSend == 0) {
            setDataForm(jsonObj);
            getDataTest();
            sendDataFile(); 
            enableScroll();
          }else{
            enableScroll();
          }
        }
      }
    };
    if (typeSend == 0) {
      JsonData = '{"GET":"GET","Quo_id":"' + dataSetCosting + '"}';
    }
    xhttp.send(JsonData);
  } catch (error) {
    console.error(error);
    enableScroll();
  }
}
function getDataTest() {
  let textArea = document.getElementById('Cost_description').value;
  if(textArea.length > 0){
    for (let i = 0; i < textArea.length; i++){
      textArea = textArea.replace("<br/>", "\n");
    }      
    document.getElementById('Cost_description').value = textArea;
  }
  unsetDecimal();
  let obj = document.getElementById('form_costing_detail');
  let objInput = obj.querySelectorAll('input');
  let intTotal = 0;
  objInput[3].value = objInput[0].value * 3;
  for (let i = 0; i < 18; i++) {
    intTotal += objInput[i + 2].value = parseFloat(objInput[i].value) * parseFloat(objInput[i + 1].value);
    i += 2;
  }
  objInput[18].value = intTotal;
  loadDataView();
}

function sendData(e) {
  unsetDecimal();  
  let jsonData = "";
  let objClass = document.getElementsByClassName('costing');
  for (let j = 0; j < objClass.length; j++) {
    let input = false;
    if (objClass[j].type == "email") {
      input = true;
    }
    if (objClass[j].type == "password") {
      input = true;
    }
    if (objClass[j].type == "text") {
      input = true;
    }
    if (objClass[j].type == "number") {
      input = true;
    }
    if (objClass[j].type == "date") {
      input = true;
    }
    if (objClass[j].type == "hidden") {
      input = true;
    }
    if (objClass[j].type == "file") {
      input = true;
    }
    if (objClass[j].type == "textarea") {
      let textArea = objClass[j].value;
      for (let i = 0; i < textArea.length; i++){
        textArea = textArea.replace("\n", "<br/>");
      }      
      objClass[j].value = textArea;
      input = true;
    }
    if (input) {
      jsonData += '"' + objClass[j].id + '":' + '"' + objClass[j].value + '",';
    }
  }
  jsonData = jsonData.substring(0, jsonData.length - 1);
  e.preventDefault();
  setDatCosting(jsonData);
  setDecimal();
}


function loadDataView() {  
  let mainData = document.getElementById('Cost_totalValue').value;
  let mainTotal = document.getElementById('tot_costing_detail').value;
  document.getElementById('Cost_totalValue1').value = mainData;
  document.getElementById('tot_costing_detail1').value = mainTotal;
  document.getElementById('tot_costing_detail2').value = mainTotal;
  document.getElementById('tot_costing_detail3').value = mainTotal;
  document.getElementById('tot_costing_detail4').value = mainTotal;
  let obj = document.getElementById('form_final_costing');
  let objInput = obj.querySelectorAll('input');
  objInput[2].value = objInput[0].value * objInput[1].value;
  objInput[15].value = objInput[13].value * objInput[14].value;
  objInput[6].value = parseFloat(((mainTotal / (1 - (objInput[4].value / 100))) - mainTotal)).toFixed();
  objInput[9].value = parseFloat(((mainTotal / (1 - (objInput[7].value / 100))) - mainTotal)).toFixed();
  objInput[12].value = parseFloat(((mainTotal / (1 - (objInput[10].value / 100))) - mainTotal)).toFixed();  
  loadPhotography();
}
function loadPhotography() {
  document.getElementById('Quo_students1').value = document.getElementById('Quo_students').value;
  document.getElementById('totStudy').value = document.getElementById('Quo_students1').value * document.getElementById('Cost_stuValue1').value;
  document.getElementById('totDays').value = document.getElementById('Cost_daysQuantity').value * document.getElementById('Cost_daysValue').value;
  document.getElementById('totUtility').value = parseFloat(document.getElementById('totStudy').value) + parseFloat(document.getElementById('totDays').value);
  let totalValue = 0;
  totalValue = (parseFloat(document.getElementById('totalvalue').value)+parseFloat(document.getElementById('tot_costing_detail1').value) 
  + parseFloat(document.getElementById('tot_admin').value) + parseFloat(document.getElementById('tot_utili').value) + parseFloat(document.getElementById('tot_incid').value) 
  + parseFloat(document.getElementById('perTotal').value));
  document.getElementById('Cost_finalValue').value = document.getElementById('totValue').value = totalValue;
  loadResumView();
}

function loadResumView() {
  let obj = document.getElementById('form_resume');
  let objInput = obj.querySelectorAll('input');
  objInput[2].value = parseFloat(document.getElementById('Cost_finalValue').value).toFixed();
  objInput[1].value = (objInput[2].value / objInput[0].value).toFixed();
  let utility = 0;
  let uniValue = parseFloat(document.getElementById('Cost_totalValue1').value);
  let totValue = parseFloat(document.getElementById('totalvalue').value);
  let totedition = parseFloat(document.getElementById('tot_costing_detail1').value);
  let totadmin = parseFloat(document.getElementById('tot_admin').value);
  let totutili = parseFloat(document.getElementById('tot_utili').value);
  utility = (parseFloat(document.getElementById('Cost_finalValue').value).toFixed()) - (document.getElementById('totUtility').value) - (parseFloat(document.getElementById('Cost_totalValue').value).toFixed());
  let totincid = parseFloat(document.getElementById('tot_incid').value);
  document.getElementById('Cost_finalUtility').value = utility;
  setDecimal();
}
function unsetDecimal() {
  let objClass = document.getElementsByClassName('number');
  for (let i = 0; i < objClass.length; i++) {
    let inputLength = parseInt(objClass[i].value.length) / 3;
    for (let j = 0; j < inputLength; j++) {
      var inputValue = objClass[i].value;
      var newValue = inputValue.replace(",","");
      objClass[i].value = newValue;
    }
  }
}

function setDecimal() {
  unsetDecimal();
  let objClass = document.getElementsByClassName('number');
  for (let i = 0; i < objClass.length; i++) {
    objClass[i].value = new Intl.NumberFormat().format(objClass[i].value);
  }
}

//************ LOAD VIEW STORAGE ******************/
function getActionStorage() {
  let obj = new StoragePage();
  let json = JSON.parse(obj.getStorageLogin()); 0
  if (json !== null) {
    // console.log(json);
    getDataUserId(json[0]["User_id"]);
  } else {
    locationLogin();
  }
}
//************LOAD FILES**************//
function upload_file(form) {
  let bar_status = form.children[1].children[0],
    span = bar_status.children[0],
    button_cancel = form.children[2].children[1];

  bar_status.classList.remove('bar-green', 'bar-red');

  let xmlHttp = new XMLHttpRequest();

  xmlHttp.upload.addEventListener("progress", (event) => {
    let por = Math.round((event.loaded / event.total) * 100);
    //console.log(por);
    bar_status.style.width = por + '%';
    span.innerHTML = por + '%';
    button_cancel.disabled = false;
  });

  xmlHttp.addEventListener("load", () => {
    bar_status.classList.add('bar-green');
    span.innerHTML = "Proceso Completado";
  });
  xmlHttp.open('POST', '../../php/file/filesCosting.php', true);
  xmlHttp.send(new FormData(form));
  button_cancel.addEventListener("click", () => {
    xmlHttp.abort();
    bar_status.classList.remove('bar-green');
    bar_status.classList.add('bar-red');
    span.innerHTML = "Proceso Cancelado";
  });
  xmlHttp.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      if (xmlHttp.responseText != 0) {
        bar_status.classList.remove('bar-green', 'bar-red');
      }
    }
  };

}
/*document.addEventListener("DOMContentLoaded",()=>{
  let form=document.getElementById("form-file");
  form.addEventListener("submit",function(event){
    event.preventDefault();
    upload_file(form);
  });
});*/
function validatorBtnFile(form, e) {
  if (document.getElementById("Quo_consec").value != undefined) {
    let objForm = document.getElementById(form);
    let obj = document.getElementById("Quo_consec");
    if (obj.value.length != 0 || obj.value != "") {
      let objFile = document.getElementById("getFile");
      if (objFile.value.length != 0 || objFile.value != "") {
        document.getElementById("nameFiles").value = obj.value;
        document.getElementById("Cost_attach").value = obj.value + ".pdf";
        upload_file(objForm);
      }
      else {
        alert("Seleccione un PDF");
      }
    } else {
      alert("No tiene código");
    }
  } else {
    alert("Valide la información del código");
  }
  e.preventDefault();

}
function sendDataFile() {
  let nameFile = document.getElementById("Cost_attach").value;
  let objHref_pro_attach = document.getElementById("href_pro_attach");
  if (nameFile.length == 0 || nameFile == "") {
    objHref_pro_attach.removeAttribute('href');
    objHref_pro_attach.disabled = true;
  } else {
    objHref_pro_attach.setAttribute('href', "../../php/file/quote/" + nameFile);
  }
}
function clearFromFile() {
  document.getElementById("bar_status").classList.remove('bar-green', 'bar-red', 'bar-blue');
  document.getElementById("cancel").disabled = true;
  document.getElementById("getFile").value = "";
  document.getElementById("href_pro_attach").removeAttribute('href');
  document.getElementById("spanFile").innerHTML = "";
}
