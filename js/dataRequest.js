//**************************//
//Author: DIEGO CASALLAS
//Date: 15/08/2019
//Description : funtions data Request
//**************************//
var intClientId;
var arrayForm = new Array('form_customers', '', 'form_quotation_client', 'form_quotation_provider', 'form_quotation', 'form_providers', 'form_users', 'formLogin');
var arrayFormModal = new Array('customerModal', 'providerModal', 'userModal');
//**Function Constructor API **/
function selectActionAPI(jsonData, typeSend, form) {
    try {
        let arrayAPI = new Array();
        arrayAPI[0] = '"POST":"POST",';
        arrayAPI[1] = '"GET":"GET",';
        arrayAPI[2] = '"PUT":"PUT"';
        arrayAPI[3] = '"DELETE":"DELETE",';
        let jsonDataSend = '{' + arrayAPI[typeSend] + jsonData + '}';
        switch (form) {
            case arrayForm[0]:
                setDataClient(jsonDataSend, form);
                break;
            case arrayForm[4]:
                setDataQuote(jsonDataSend, form);
                break;
            case arrayForm[5]:
                setDataProvider(jsonDataSend, form);
                break;
            case arrayForm[6]:
                setDataUser(jsonDataSend, form);
                break;
            case arrayForm[7]:
                setDataLogin(jsonData, form);
                break;
        }
        //console.log(jsonDataSend);
    } catch (error) {
        console.error(error);
    }
}
//**Function add Client **/
function setDataClient(dataSetCliente, form) {
    try {
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "php/bo/bo_client.php", true);
        xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                var json = JSON.parse(xhttp.responseText);
                if (json.length != 0) {
                    viewModal(0, 1);
                    alert("Realizado con éxito");
                    getDataClient("tableClient", "", 1);
                    clearForm(form);
                }
            }
        };
    } catch (error) {
        console.error(error);
    }
    xhttp.send(dataSetCliente);
}
//**Function get Client **/
function getDataClient(table, dataSetCliente, typeSend) {
    try {
        var xhttp = new XMLHttpRequest();
        var arrayCell = new Array("Cliente", "Nombre", "Teléfono", "Correo", "Contacto", "Editar");
        var JsonData;
        xhttp.open("POST", "php/bo/bo_client.php", true);
        xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                var json = JSON.parse(xhttp.responseText);
                if (json.length != 0) {
                    if (typeSend == 1) {
                        tableCliente = new Table(table, arrayCell, json);
                        tableCliente.createTableCustomers();
                    } else if (typeSend == 0) {
                        setDataForm(0, 0, json);
                    } else if (typeSend == 2) {
                        setDataForm(1, 1, json);
                    }
                }

            }
        };
        if (typeSend == 0) {
            JsonData = '{"GET":"GET","Client_id":"' + dataSetCliente + '"}';
        }
        if (typeSend == 1) {
            JsonData = '{"GET":"GET_ALL","Client_name":"' + dataSetCliente + '"}';
        }
        if (typeSend == 2) {
            JsonData = '{"GET":"GET_IDENTIFICATION","Client_identification":"' + dataSetCliente + '"}';
        }
        xhttp.send(JsonData);
    } catch (error) {
        console.error(error);
    }
}
//**Function get Client **/
function getDataIdentification(form, dataSet, typeSend) {
    try {
        var xhttp = new XMLHttpRequest();
        if (typeSend == 0) {
            xhttp.open("POST", "php/bo/bo_client.php", true);
        } else if (typeSend == 1) {

            xhttp.open("POST", "php/bo/bo_provider.php", true);
        }
        xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                var json = JSON.parse(xhttp.responseText);
                if (json.length != 0) {
                    if (typeSend == 0) {
                        setDataForm("", "", json);
                    }
                    if (typeSend == 1) {
                        setDataForm("", "", json);
                    }
                } else {
                    alert("Busqueda sin resultados");
                    clearForm(form);
                }
            }
        };

        if (typeSend == 0) {
            JsonData = '{"GET":"GET_IDENTIFICATION","Client_identification":"' + dataSet + '"}';
        }
        if (typeSend == 1) {
            JsonData = '{"GET":"GET_IDENTIFICATION","Pro_identification":"' + dataSet + '"}';
        }
        xhttp.send(JsonData);
    } catch (error) {
        console.error(error);
    }
}
//**********************END CLIENT****************************//
//**Function get Quation **/
function getDataQuotation(table, dataSearch, typeSend) {
    try {
        var xhttp = new XMLHttpRequest();
        var arrayCell = new Array("Cotización", "Razón Social", "Proyecto", "Fecha Cotización", "Estado", "Editar", "Costeo", "PDF");
        var JsonData;
        xhttp.open("POST", "php/bo/bo_quote.php", true);
        xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                var json = JSON.parse(xhttp.responseText);
                if (json.length != 0) {
                    if (typeSend == 0) {
                        tableCliente = new Table(table, arrayCell, json);
                        tableCliente.createTableQuotes();
                        //console.log(tableCliente);
                    } else if (typeSend == 1) {
                        setDataCode(json);

                    } else if (typeSend == 2) {
                        //console.log(json);
                        setDataForm("", "", json);
                        setDataCodeLabel();
                        viewAction(0);
                    } else if (typeSend == 3) {

                    }
                }

            }
        };
        if (typeSend == 0) {
            JsonData = '{"GET":"GET_ALL","DataSearch":"' + dataSearch + '"}';
        }
        if (typeSend == 1) {
            JsonData = '{"GET":"GET_CONSEC"}';

        }
        if (typeSend == 2) {
            JsonData = '{"GET":"GET_ID","Quo_id":" ' + dataSearch + '"}';
        }
        if (typeSend == 3) {

        }

        xhttp.send(JsonData);
    } catch (error) {
        console.error(error);
    }
}
//**Function get PreQuation **/
function getDataPreQuotation(table, dataSearch, typeSend) {
    
        var xhttp = new XMLHttpRequest();
        var arrayCell = new Array("Pre Cotización", "Razón Social", "Proyecto", "Fecha Cotización", "Estado", "Editar");
        var JsonData;
        xhttp.open("POST", "php/bo/bo_pre_quote.php", true);
        xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                var json = JSON.parse(xhttp.responseText);
                if (json.length != 0) {
                    if (typeSend == 0) {
                        tableCliente = new Table(table, arrayCell, json);
                        tableCliente.createTablePreQuotes();
                    
                    } else if (typeSend == 1) {
                        setDataCode(json);

                    } else if (typeSend == 2) {
                        //console.log(json);
                        setDataForm("", "", json);

                        viewAction(1);
                    } else if (typeSend == 3) {

                    }
                }

            }
        };
        if (typeSend == 0) {
            JsonData = '{"GET":"GET_ALL","DataSearch":"' + dataSearch + '"}';
        }
        if (typeSend == 1) {
            JsonData = '{"GET":"GET_CONSEC"}';

        }
        if (typeSend == 2) {
            JsonData = '{"GET":"GET_ID","Quo_id":" ' + dataSearch + '"}';
        }
        if (typeSend == 3) {

        }

        xhttp.send(JsonData);
    
}
//**Function set Quote **/
function setDataQuote(dataSetQuote) {
  
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "php/bo/bo_quote.php", true);
        xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                var json = JSON.parse(xhttp.responseText);
                if (json.length != 0) {
                    alert("Realizado con éxito");
                    window.location.assign("dashboard.html");
                }
            }
        };

        xhttp.send(dataSetQuote);
    
}
//**********************END QUOTE****************************//
//**Function set User **/
function setDataUser(dataSetUser, form) {
    
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "php/bo/bo_user.php", true);
        xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                var json = JSON.parse(xhttp.responseText);
                if (json.length != 0) {
                    viewModal(2, 2);
                    alert("Realizado con éxito");
                    getDataUser("tableUser", "", 1);
                    clearForm(form);
                }
            }
        };
        xhttp.send(dataSetUser);
    
}

//**Function get User **/
function getDataUser(table, dataSetUser, typeSend) {
    
        var xhttp = new XMLHttpRequest();
        var arrayCell = new Array("Nombre", "Correo", "Cargo", "Editar");
        var JsonData;

        xhttp.open("POST", "php/bo/bo_user.php", true);
        xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                var json = JSON.parse(xhttp.responseText);
                if (json.length != 0) {
                    if (typeSend == 1) {
                        tableUser = new Table(table, arrayCell, json);
                        tableUser.createTableUsers();
                    }
                    else if (typeSend == 0) {
                        setDataForm(0, 2, json);
                    }
                }

            }
        };
        if (typeSend == 0) {
            JsonData = '{"GET":"GET","User_email":"' + dataSetUser + '"}';
        }
        if (typeSend == 1) {
            JsonData = '{"GET":"GET_ALL","User_name":"' + dataSetUser + '"}';
        }
        xhttp.send(JsonData);
   
}
//**********************END USER****************************//
//**Function set Login **/
function setDataLogin(dataSetLogin, form) {
  var xhttp = new XMLHttpRequest();
  let JsonData="";
  xhttp.open("POST", "php/bo/bo_user.php", true);
  xhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
  xhttp.onreadystatechange = function () {
      if (this.readyState === 4 && this.status === 200) {
          var json = JSON.parse(xhttp.responseText);  
          console.log(json);  
          if (json[0]["User_id"]!=undefined) {
              clearForm(form);
              window.location.assign("dashboard.html?"+json[0].User_id);
          }else{
              alert("Verifique la información ");
          }
      }
  };

    JsonData = '{"POST":"LOGIN",' + dataSetLogin + '}';
    xhttp.send(JsonData);
}
//**********************LOGIN****************************//