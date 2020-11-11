//**Function add User **/
//**************************//
//Author: Edwin Ocampo
//Date: 23/08/2019
//Description : funtions user
/**Function add Usuario**/
var bolValidatoEdit = true;
function setDatUser(dataSetUser) {
    
    try {
        loadPageView();
        let url =  getUrl();
        dataSetUser = '{"POST":"POST",' + dataSetUser + ',"Url":"' + url + '"}';
        //debugger;
        console.log(dataSetUser);
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../../php/bo/bo_user.php", true);
        xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
        xhttp.onreadystatechange = function () {
          if (this.readyState === 4 && this.status === 200) {
            debugger;
            console.log(xhttp.responseText);
           
            if (xhttp.responseText == 1) {
                //debugger;
              viewModal('userModal', 1);
              createModalAlert("Revise su correo electrónico para finalizar el registro del usuario", 1, 5000);
              loadView();
              enableScroll();
            }
            else if (xhttp.responseText == 2) {
                //debugger;
              viewModal('userModal', 1);
              createModalAlert("Operación realizada con éxito", 1, 3000);
              loadView();
              enableScroll();
            }
            else if (xhttp.responseText == 3){
               // debugger;
              viewModal('userModal', 1);
              createModalAlert("El usuario no ha finalizado su registro", 3, 3000);
              loadView();
              enableScroll();
            }
            else if (xhttp.responseText == 4){
             //   debugger;
              viewModal('userModal', 1);
              createModalAlert("El usuario ya se encuentra registrado", 3, 3000);
              loadView();
              enableScroll();
            }
          }else{
           // debugger;
            viewModal('userModal', 1);
            createModalAlert("No se logro procesar la petición ", 3, 3000);
            loadView();
            enableScroll(); 
          }
        }
        //debugger;
        xhttp.send(dataSetUser);
    } catch (error) {
        console.error(error);
    }
}
//**Function get Client **/
function getDataUser(table, dataSetUser, typeSend) {
    try {
        loadPageView();
        var xhttp = new XMLHttpRequest();
        var arrayCell = new Array("Nombre", "Correo", "Cargo", "Editar");
        var JsonData;
        xhttp.open("POST", "../../php/bo/bo_user.php", true);
        xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                var jsonObj = JSON.parse(xhttp.responseText);
               // console.log(jsonObj);
                if (jsonObj.length!=0) {
                    if (typeSend == 1) {
                        tableCliente = new Table(table, arrayCell, jsonObj);
                        tableCliente.createTableUsers();
                        enableScroll();
                    } else if (typeSend == 0) {
                        //console.log(jsonObj);
                        setDataForm(jsonObj);
                        viewModal('userModal', 0);
                        enableScroll();
                    }
                }

            }
        };
        if (typeSend == 0) {
            JsonData = '{"GET":"GET","User_id":"' + dataSetUser + '"}';
        }
        if (typeSend == 1) {
            JsonData = '{"GET":"GET_ALL","User_name":"' + dataSetUser + '"}';
        }
        xhttp.send(JsonData);
    } catch (error) {
        console.error(error);
        enableScroll();
    }
}
//**********************END CLIENT****************************//
//**********************GED EDIT****************************//
function getDataEdit(id) {
    getDataUser("", id, 0);
}
//************ LOAD VIEW ******************/
function loadView() {
    getListUser("Stat_id",0);
    getListUser("Role_id",1);
    getListUser("Sgroup_id",2);
    loadPageView(); 
    getDataUser("tableUsers", "", 1);
    getActionStorage();
}


function loadViewNewUSer(){
    loadPageView();
    let strUrl=window.location.href;
    let strQuery=strUrl.indexOf("?");
    let strHast=strUrl.substring(strQuery+1,strUrl.length);
    let jSon="";
    jSon = '"User_hash":"'+strHast+'"';
    getUserHash(jSon);
}
//************ LOAD VIEW STORAGE ******************/
function getActionStorage() {
    let obj=new StoragePage();
    let json=JSON.parse(obj.getStorageLogin());0
    if (json !== null) {
    getDataUserId(json[0]["User_id"]);
    }else{
        locationLogin();
    }

}
//************GET DATA FORM**************//
function sendData(idForm) {
    let jSon = "";
    let company = document.getElementById("Comp_id").innerHTML;
    if (validatorForm(idForm)) {
        jSon = getDataForm(idForm);
        jSon += ',"Comp_id":"' + company + '"';
        setDatUser(jSon);
    } else {
        createModalAlert("Error al realizar el registro", 4, 4000);
    }
}

//************UNBLOCK DATA FORM**************//
function passwordDataForm(option) {
    try {
        var pass = document.getElementsByClassName('pass');
        if (option == 1) {
            for (let i = 0; i < pass.length; i++) {
                pass[i].required = 'true';
            }
            $(".password").fadeIn();
            document.getElementById('Stat_id').disabled = true;
            document.getElementById('Stat_id').value = 7;

        } else {
            for (let i = 0; i < pass.length; i++) {
                pass[i].removeAttribute('required');
            }
            $(".password").fadeOut();
            document.getElementById('Stat_id').disabled = false;

        }
        
    } catch (error) {
        console.error(error);
    }
}

function confirmPass() {

    try {
        
        let message = document.getElementById("alertPassword"); 
        message.classList.remove("alertHidden");
        if (bolValidatoEdit) {
            var Login_password = document.getElementById("Login_password");
            var Confirm_password = document.getElementById("Repeat_password");
 
            if (Login_password.value!= Confirm_password.value) {                 
                message.classList.add("alertView");
                Login_password.focus();                
            }
            else {
                sendData("form_users");
                message.classList.add("alertHidden");
            }
        }
        else {
            sendData("form_users");
        }
    } catch (error) {
        console.error(error);
    }
}
//************SEARCH PROVIDER**************//
function searchUsers(e) {
    try {
        var objForm = document.getElementById('formSearchUsers');
        let intLogForm = objForm.querySelectorAll('input').length;
        let jsonData = '';
        for (let i = 0; i < intLogForm; i++) {
            jsonData = objForm[i].value;
        }
        getDataUser("tableUsers", jsonData, 1);
    }
    catch (error) {
        console.error(error);
    }
    e.preventDefault();
  }

//************GET DATA HASH RECOVERY**************//
function getUserHash(dataSetUser) {
  try {

      dataSetUser = '{"POST":"ACTIVE_USER",' + dataSetUser + "}";
      var xhttp = new XMLHttpRequest();
      xhttp.open("POST", "../../php/bo/bo_user.php", true);
      xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
      xhttp.onreadystatechange = function () {
          if (this.readyState === 4 && this.status === 200) {
              var jsonObj = JSON.parse(xhttp.responseText);
              if (jsonObj == 1) {
                  validationView(true);
                  enableScroll();
              } else {
                  validationView(false);
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

function validationView(dataValidation){
  let message = "";
  if(dataValidation){
    message = "Su usuario ha sido activado exitosamente";
  }else{
    message = "Hubo un problema activado su usuario";
  }
  document.getElementById("message").innerHTML = message;
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

  //**Function get List Status **/
function getListUser(idSelect,typeSend) {
    try {
        
        var xhttp = new XMLHttpRequest();
        var JsonData;
        xhttp.open("POST", "../../php/bo/bo_user.php", true);
        xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                var jsonObj = JSON.parse(xhttp.responseText);
               
                if (jsonObj.length!=0) {

                    if(typeSend==0){
                    selectStatus = new SelectList(idSelect, jsonObj);
                    selectStatus.createListStatus();
                }
                else if(typeSend==1){
                    selectStatus = new SelectList(idSelect, jsonObj);
                    selectStatus.createListUserRole();
                }
                else if(typeSend==2){
                    selectStatus = new SelectList(idSelect, jsonObj);
                    selectStatus.createListUserSecurityGroup();
                }
                }

            }
        };
        if (typeSend == 0) {
            JsonData = '{"GET":"GET_LIST_STATUS","'+idSelect+'":"' + 1 + '"}';
        }
        if (typeSend == 1) {
            JsonData = '{"GET":"GET_LIST_ROL"}';
        }
        if (typeSend == 2) {
            JsonData = '{"GET":"GET_LIST_GROUP"}';
        }
        xhttp.send(JsonData);
    } catch (error) {
        console.error(error);
    }
}
//**********************END CLIENT****************************//

