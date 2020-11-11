//**************************//
//Author: LAURA GRISALES
//Date: 24/08/2019
//Description : funtions data provider
//************GET DATA FORM**************//
//**Function set  Provider **/
function setDataProvider(dataSetProvider) {
  try {
    loadPageView();
    dataSetProvider = '{"POST":"POST",' + dataSetProvider + "}";

    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../../php/bo/bo_provider.php", true);
    xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
    xhttp.onreadystatechange = function () {
      if (this.readyState === 4 && this.status === 200) {
        if (xhttp.responseText != 0) {
          viewModal('providerModal', 1);
          createModalAlert("Operación realizada con éxito", 1, 3000);
          loadView();
          enableScroll();
        } else {
          createModalAlert("Valide la información", 3, 4000);
          enableScroll();
        }
      }
    };
    xhttp.send(dataSetProvider);
  } catch (error) {
    console.error(error);
    enableScroll();
  }
}
//**Function get Provider **/
function getDataProvider(table, dataSetProvider, typeSend) {
  try {
    loadPageView();
    var xhttp = new XMLHttpRequest();
    var arrayCell = new Array("Proveedor", "Nombre", "Teléfono", "Contacto", "Correo", "Editar");
    var JsonData;
    xhttp.open("POST", "../../php/bo/bo_provider.php", true);
    xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
    xhttp.onreadystatechange = function () {

      if (this.readyState === 4 && this.status === 200) {
        var json = JSON.parse(xhttp.responseText);
        if (json.length != 0) {
          if (typeSend == 2) {
            tableProvider = new Table(table, arrayCell, json);
            tableProvider.createTableProviders();
            enableScroll();
          }
          else if (typeSend == 0) {
            setDataForm(json);
            viewModal('providerModal', 0);
            sendDataFile();
            enableScroll();
          }
        } else {
          enableScroll();
        }
      }
    };
    if (typeSend == 0) {
      JsonData = '{"GET":"GET","Pro_id":"' + dataSetProvider + '"}';
    }
    if (typeSend == 1) {
      JsonData = '{"GET":"GET_ALL","Pro_name":"' + dataSetProvider + '"}';
    }
    if (typeSend == 2) {
      JsonData = '{"GET":"GET_SEARCH","Pro_name":"' + dataSetProvider + '"}';
    }

    xhttp.send(JsonData);
  } catch (error) {
    console.error(error);
    enableScroll();
  }
}
//**********************GED EDIT****************************//
function getDataEdit(id) {
  getDataProvider("", id, 0);
  clearFromFile();
}
//**********************END PROVIDER****************************//
function loadView() {
  getListProvider("Stat_id",0);
  loadPageView();
  getDataProvider("tableProvider", "", 2);
  getActionStorage();
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
//************GET DATA FORM**************//
function sendData(idForm, e) {
  let jSon = "";
  if (validatorForm(idForm)) {
    jSon = getDataForm(idForm);
    setDataProvider(jSon);
  } else {
    createModalAlert("Error al realizar el registro", 4, 4000);
  }
  e.preventDefault();
}
//************SEARCH PROVIDER**************//
function searchProviders(e) {
  try {
    var objForm = document.getElementById('formSearchProviders');
    let intLogForm = objForm.querySelectorAll('input').length;
    let jsonData = '';
    for (let i = 0; i < intLogForm; i++) {
      jsonData = objForm[i].value;
    }
    getDataProvider("tableProvider", jsonData, 2);
  }
  catch (error) {
    console.error(error);
  }
  e.preventDefault();
}
//************LOAD FILES**************//
function upload_file(form) {
  let bar_status = form.children[1].children[0],
    span = bar_status.children[0],
    button_cancel = form.children[0].children[1];
  bar_status.classList.remove('bar-green', 'bar-red');
  let xmlHttp = new XMLHttpRequest();
  xmlHttp.upload.addEventListener("progress", (event) => {
    let por = Math.round((event.loaded / event.total) * 100);

    bar_status.style.width = por + '%';
    span.innerHTML = por + '%';
    button_cancel.disabled = false;
  });

  xmlHttp.addEventListener("load", () => {
    bar_status.classList.add('bar-green');
    span.innerHTML = "Proceso Completado";

  });
  xmlHttp.open('POST', '../../php/file/files.php', true);
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
  if (document.getElementById("Pro_identification").value != undefined) {
    let objForm = document.getElementById(form);
    let obj = document.getElementById("Pro_identification");
    if (obj.value.length != 0 || obj.value != "") {
      let objFile = document.getElementById("getFile");
      if (objFile.value.length != 0 || objFile.value != "") {
        document.getElementById("nameFiles").value = obj.value;
        document.getElementById("Pro_attach").value = obj.value + ".pdf";
        upload_file(objForm);
      }
      else {
        alert("Seleccione un PDF");
      }
    } else {
      alert("Valide la información del NIT");
    }
  } else {
    alert("Valide la información del NIT");
  }
  e.preventDefault();

}
function sendDataFile() {
  let nameFile = document.getElementById("Pro_attach").value;
  let objHref_pro_attach = document.getElementById("href_pro_attach");
  if (nameFile.length == 0 || nameFile == "") {
    objHref_pro_attach.removeAttribute('href');
    objHref_pro_attach.disabled = true;
  } else {
    objHref_pro_attach.setAttribute('href', "../../php/file/rut/" + nameFile);
  }

}
function clearFromFile() {
  document.getElementById("bar_status").classList.remove('bar-green', 'bar-red', 'bar-blue');
  document.getElementById("cancel").disabled = true;
  document.getElementById("getFile").value = "";
  document.getElementById("href_pro_attach").removeAttribute('href');
  document.getElementById("spanFile").innerHTML = "";

}
 //**Function get List Status **/
 function getListProvider(idSelect,typeSend) {
  try {
      
      var xhttp = new XMLHttpRequest();
      var JsonData;
      xhttp.open("POST", "../../php/bo/bo_provider.php", true);
      xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
      xhttp.onreadystatechange = function () {
          if (this.readyState === 4 && this.status === 200) {
              var jsonObj = JSON.parse(xhttp.responseText);
              if (jsonObj.length!=0) {

                  if(typeSend==0){
                  selectStatus = new SelectList(idSelect, jsonObj);
                  selectStatus.createListStatus();
              }
             
              }

          }
      };
      if (typeSend == 0) {
          JsonData = '{"GET":"GET_LIST_STATUS","'+idSelect+'":"' + 3+ '"}';
      }
      xhttp.send(JsonData);
  } catch (error) {
      console.error(error);
  }
}
//**********************END CLIENT****************************//
