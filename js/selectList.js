//**************************//
//Author: DIEGO CASALLAS
//Date: 23/05/2020
//Description : Class Select 
//************CLASS TABLE**************//

class SelectList {

  constructor(id, jSon) {
    this.id = id;
    this.jSon = jSon;
  }
  //**Method create Select Type Status User**/
  createListStatus() {

    var objSelect = document.getElementById(this.id);
    let objOption = ' <option disabled selected value> -- Seleccione una opción -- </option> ';


    for (let i = 0; i < this.jSon.length; i++) {

      objOption += '<option value=' + this.jSon[i].Stat_id + '>' + this.jSon[i].Stat_name + '</option>';
    }

    objSelect.innerHTML = objOption;
  }
  //**Method create Select Role User**/
  createListUserRole() {

    var objSelect = document.getElementById(this.id);
    let objOption = ' <option disabled selected value> -- Seleccione una opción -- </option> ';


    for (let i = 0; i < this.jSon.length; i++) {

      objOption += '<option value=' + this.jSon[i].Role_id + '>' + this.jSon[i].Role_name + '</option>';
    }

    objSelect.innerHTML = objOption;
  }
    //**Method create Select Role User**/
    createListUserSecurityGroup() {

      var objSelect = document.getElementById(this.id);
      let objOption = ' <option disabled selected value> -- Seleccione una opción -- </option> ';
  
  
      for (let i = 0; i < this.jSon.length; i++) {
  
        objOption += '<option value=' + this.jSon[i].Sgroup_id + '>' + this.jSon[i].Sgroup_name + '</option>';
      }
  
      objSelect.innerHTML = objOption;
    }
     //**Method create Select Type Status Provider**/
  createListProviderStatus() {

    var objSelect = document.getElementById(this.id);
    let objOption = ' <option disabled selected value> -- Seleccione una opción -- </option> ';


    for (let i = 0; i < this.jSon.length; i++) {

      objOption += '<option value=' + this.jSon[i].Stat_id + '>' + this.jSon[i].Stat_name + '</option>';
    }

    objSelect.innerHTML = objOption;
  }
     //**Method create Select Type Status Client**/
     createListClientStatus() {

      var objSelect = document.getElementById(this.id);
      let objOption = ' <option disabled selected value> -- Seleccione una opción -- </option> ';
  
  
      for (let i = 0; i < this.jSon.length; i++) {
  
        objOption += '<option value=' + this.jSon[i].Stat_id + '>' + this.jSon[i].Stat_name + '</option>';
      }
  
      objSelect.innerHTML = objOption;
    }
    //**Method create Select Bank**/
  createListBank() {

    var objSelect = document.getElementById(this.id);
    let objOption = ' <option disabled selected value> -- Seleccione una opción -- </option> ';


    for (let i = 0; i < this.jSon.length; i++) {

      objOption += '<option value=' + this.jSon[i].Bank_id + '>' + this.jSon[i].Bank_name + '</option>';
    }

    objSelect.innerHTML = objOption;
  }
  //**Method create Select Client Maximo**/
  createListMaximo() {

    var objSelect = document.getElementById(this.id);
    let objOption = ' <option disabled selected value> -- Seleccione una opción -- </option> ';


    for (let i = 0; i < this.jSon.length; i++) {

      objOption += '<option value=' + this.jSon[i].Client_nit + '>'+ this.jSon[i].Client_nit + " | " + this.jSon[i].Client_name + '</option>';
    }

    objSelect.innerHTML = objOption;
  }
  
  //**Method create Select Client Contract Maximo**/
  createListContractMaximo() {

    var objSelect = document.getElementById(this.id);
    let objOption = ' <option disabled selected value> -- Seleccione una opción -- </option> ';


    for (let i = 0; i < this.jSon.length; i++) {

      objOption += '<option value=' + this.jSon[i].Contract_id + '>' + this.jSon[i].Contract_id + " |  "+ this.jSon[i].Contract_name + '</option>';
    }

    objSelect.innerHTML = objOption;
  }
}


   
