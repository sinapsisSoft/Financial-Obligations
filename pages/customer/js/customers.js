//**************************//
//Author: DIEGO CASALLAS
//Date: 24/08/2019
//Description : funtions data Client
//************GET DATA FORM**************//
//**Function add Client **/
function setDataClient(dataSetCliente) {
  try {
    loadPageView();
    dataSetCliente = '{"POST":"POST",' + dataSetCliente + "}";
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../../php/bo/bo_client.php", true);
    xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
    xhttp.onreadystatechange = function () {
      if (this.readyState === 4 && this.status === 200) {
        if (xhttp.responseText != 0) {
          enableScroll();
          viewModal("customerModal", 1);
          createModalAlert("Operación realizada con éxito", 1, 3000);
          loadView();          
        } else {
          enableScroll();
          createModalAlert("Valide la información", 3, 4000);
        }
      }
    }
    xhttp.send(dataSetCliente);
  } catch (error) {
    enableScroll();
    console.error(error);
  }
}
//**Function get Client **/
function getDataClient(table, dataSetCliente, typeSend) {
  try {
    loadPageView();
    var xhttp = new XMLHttpRequest();
    var arrayCell = new Array("Cliente", "Nombre", "Teléfono", "Correo", "Contacto", "Editar");
    var JsonData;
    xhttp.open("POST", "../../php/bo/bo_client.php", true);
    xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");    
    xhttp.onreadystatechange = function () {
      if (this.readyState === 4 && this.status === 200) {
        var jsonObj = JSON.parse(xhttp.responseText);
        if (jsonObj.length != 0) {
          enableScroll();
          if (typeSend == 2) {
            tableCustomers = new Table(table, arrayCell, jsonObj);
            tableCustomers.createTableCustomers();
          } else if (typeSend == 0) {
            setDataForm(jsonObj);
            viewModal('customerModal', 0);
          }
        }else{
          enableScroll();
        }
      }
    };
    if (typeSend == 0) {
      JsonData = '{"GET":"GET_ID","Client_id":"' + dataSetCliente + '"}';
    }
    if (typeSend == 1) {
      JsonData = '{"GET":"GET_ALL","Client_name":"' + dataSetCliente + '"}';
    }
    if (typeSend == 2) {
      JsonData = '{"GET":"GET_SEARCH","Client_name":"' + dataSetCliente + '"}';
    }
    xhttp.send(JsonData);
  } catch (error) {
    console.error(error);
    enableScroll();
  }
}
//**********************GED EDIT****************************//
function getDataEdit(id) {
  getDataClient("",id,0);
}
//**********************END CLIENT****************************//
function loadView() {
  getListProvider("Stat_id",0);
  loadPageView();
  getDataClient("tableCustomers", "", 2);
  getActionStorage() ;
}
//************ LOAD VIEW STORAGE ******************/
function getActionStorage() {
  let obj=new StoragePage();
  let json=JSON.parse(obj.getStorageLogin());0
  if (json !== null) {
  //console.log(json);
  getDataUserId(json[0]["User_id"]);
  }else{
      locationLogin();
  }

}
//************GET DATA FORM**************//
function sendData(idForm, e) {
  let jSon = "";
  if (validatorForm(idForm)) {
    jSon = getDataForm(idForm);
    setDataClient(jSon);

  } else {
    createModalAlert("Error al realizar el registro", 4, 4000);
  }
  e.preventDefault();

}
//************ LOAD VIEW ******************/
function searchCustomer(e) {
  try {
      var objForm = document.getElementById('formSearchCustomer');
      let intLogForm = objForm.querySelectorAll('input').length;
      let jsonData = '';
      for (let i = 0; i < intLogForm; i++) {
          jsonData = objForm[i].value;
      }
      getDataClient("tableCustomers", jsonData, 2);
  }
  catch (error) {
      console.error(error);
  }
  e.preventDefault();
}

function newClient(){
  document.getElementById('Client_id').value = "0";
}
 //**Function get List Status **/
 function getListProvider(idSelect,typeSend) {
  try {
      
      var xhttp = new XMLHttpRequest();
      var JsonData;
      xhttp.open("POST", "../../php/bo/bo_client.php", true);
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