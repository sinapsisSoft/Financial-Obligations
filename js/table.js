//**************************//
//Author: DIEGO CASALLAS
//Date: 24/08/2019
//Description : Class Table 
//************CLASS TABLE**************//

class Table {

  constructor(id, arrayCell, jSon) {
    this.id = id;
    this.arrayCell = arrayCell;
    this.jSon = jSon;
  }
  //**Method create Table Customers **/
  createTableCustomers() {
   
    var objTable = document.getElementById(this.id);
    let objThead = '<thead class="text-wine">';
    let objtbody = '<tbody>';
    let table = "";
    for (let j = 0; j < this.arrayCell.length; j++) {
      objThead += '<th>' + this.arrayCell[j] + '</th>';
    }
    for (let k = 0; k < this.arrayCell.length - 1; k++) {
      if (k == 0) {
        objThead += '<tr>';
      }
      objThead += '<th><input type="text" class="form-control bg-light border-0 small" id="myInput' + k + '" onkeyup="searchTable(' + "'" + this.id + "'," + k + ')" placeholder="Search.." title="Search"></th>';
      if (k == this.arrayCell.length) {
        objThead += '</tr>';
      }
    }
    for (let i = 0; i < this.jSon.length; i++) {

      objtbody += '<tr><td>' + this.jSon[i].Client_identification + '</td><td>' + this.jSon[i].Client_name + '</td><td>' + this.jSon[i].Client_tel + '</td><td>' + this.jSon[i].Client_email + '</td><td>' + this.jSon[i].Client_contactName + '</td><td><button onclick="getDataEdit(' + this.jSon[i].Client_id + ');clearForm(' + "'form_customers'" + ', 0);" class="btn btn-primary" style="margin:0; padding:5px" value=""><i class="material-icons">border_color</i></button></td></tr>';
    }
    objtbody += '</tbody>';
    objThead += '</thead>';
    table = objThead + objtbody;
    objTable.innerHTML = table;
  }
  //**Method create Table Provider **/
  createTableProviders() {
    var objTable = document.getElementById(this.id);
    let objThead = '<thead class="text-wine">';
    let objtbody = '<tbody>';
    let table = "";
    for (let j = 0; j < this.arrayCell.length; j++) {
      objThead += '<th>' + this.arrayCell[j] + '</th>';
    }
    for (let k = 0; k < this.arrayCell.length - 1; k++) {
      if (k == 0) {
        objThead += '<tr>';
      }
      objThead += '<th><input type="text" class="form-control bg-light border-0 small" id="myInput' + k + '" onkeyup="searchTable(' + "'" + this.id + "'," + k + ')" placeholder="Search.." title="Search"></th>';
      if (k == this.arrayCell.length) {
        objThead += '</tr>';
      }
    }
    for (let i = 0; i < this.jSon.length; i++) {
      objtbody += '<tr><td>' + this.jSon[i].Pro_identification + '</td><td>' + this.jSon[i].Pro_name + '</td><td>' + this.jSon[i].Pro_tel + '</td><td>' + this.jSon[i].Pro_contactName + '</td><td>' + this.jSon[i].Pro_contactEmail + '</td><td><button onclick="getDataEdit(' + this.jSon[i].Pro_id + ');clearForm(' + "'form_providers'" + ', 0);" class="btn btn-primary" style="margin:0; padding:5px" value=""><i class="material-icons">border_color</i></button></td></tr>';
    }
    objtbody += '</tbody>';
    objThead += '</thead>';
    table = objThead + objtbody;
    objTable.innerHTML = table;
  }
  //**Method create Table Users **/
  createTableUsers() {
    var objTable = document.getElementById(this.id);
    let objThead = '<thead class="text-wine">';
    let objtbody = '<tbody>';
    let table = "";
    for (let j = 0; j < this.arrayCell.length; j++) {
      objThead += '<th>' + this.arrayCell[j] + '</th>';
    }
    for (let k = 0; k < this.arrayCell.length - 1; k++) {

      if (k == 0) {
        objThead += '<tr>';
      }
      objThead += '<th><input type="text" class="form-control bg-light border-0 small" id="myInput' + k + '" onkeyup="searchTable(' + "'" + this.id + "'," + k + ')" placeholder="Search.." title="Search"></th>';
      if (k == this.arrayCell.length) {
        objThead += '</tr>';
      }
    }
    for (let i = 0; i < this.jSon.length; i++) {
      objtbody += '<tr><td>' + this.jSon[i].User_name + '</td><td>' + this.jSon[i].User_email + '</td><td>' + this.jSon[i].User_title + '</td><td><button onclick="getDataEdit(' + this.jSon[i].User_id + ');clearForm(' + "'form_users'" + ', 0);passwordDataForm(0);" class="btn btn-primary" style="margin:0; padding:5px" value=""><i class="material-icons">border_color</i></button></td></tr>';
    }
    objtbody += '</tbody>';
    objThead += '</thead>';
    table = objThead + objtbody;
    objTable.innerHTML = table;
  }
//**Method create Table Customers **/
  createTableSearchClient() {
    var objTable = document.getElementById(this.id);
    let objThead = '<thead class="text-wine">';
    let objtbody = '<tbody>';
    let table = "";
    for (let j = 0; j < this.arrayCell.length; j++) {
      if (j == 0) {
        objThead += '<th style="visibility:collapse">' + this.arrayCell[j] + '</th>';
      }
      objThead += '<th>' + this.arrayCell[j] + '</th>';

    }
    for (let i = 0; i < this.jSon.length; i++) {
      objtbody += '<tr><td style="visibility:collapse">' + this.jSon[i].Client_id + '</td><td scope="row">' + this.jSon[i].Client_identification + '</td><td>' + this.jSon[i].Client_name + '</td><td>' +
        '<input value="' + this.jSon[i].Client_id + '" name="subject" class="subject-list text-center"  style="width: 100%;"type="radio"></td></tr>';
    }
    objtbody += '</tbody>';
    objThead += '</thead>';
    table = objThead + objtbody;
    objTable.innerHTML = table;
  }
    //**Method create Table Provider **/
  createTableSearchProvider() {
    var objTable = document.getElementById(this.id);
    let objThead = '<thead class="text-wine">';
    let objtbody = '<tbody>';
    let table = "";
    for (let j = 0; j < this.arrayCell.length; j++) {
      if (j == 0) {
        objThead += '<th style="visibility:collapse">' + this.arrayCell[j] + '</th>';
      }
      objThead += '<th>' + this.arrayCell[j] + '</th>';
    }
    for (let i = 0; i < this.jSon.length; i++) {
      objtbody += '<tr><td style="visibility:collapse">' + this.jSon[i].Pro_id + '</td><td scope="row">' + this.jSon[i].Pro_identification + '</td><td>' + this.jSon[i].Pro_name + '</td><td>' +
        '<input value="' + this.jSon[i].Pro_id + '" name="subject" class="subject-list text-center"  style="width: 100%;"type="radio"></td></tr>';
    }
    objtbody += '</tbody>';
    objThead += '</thead>';
    table = objThead + objtbody;
    objTable.innerHTML = table;
  }
    //**Method create Table Quote **/
  createTableQuotes() {
    var arrayStyleStatus = new Array();
    arrayStyleStatus[1] = "pre-quote";
    arrayStyleStatus[2] = "initiated";
    arrayStyleStatus[3] = "transit";
    arrayStyleStatus[4] = "approved";
    arrayStyleStatus[5] = "canceled";
    var objTable = document.getElementById(this.id);
    let objThead = '<thead class="text-wine">';
    let objtbody = '<tbody>';
    let table = "";
    for (let j = 0; j < this.arrayCell.length; j++) {
      objThead += '<th>' + this.arrayCell[j] + '</th>';
    }
    for (let i = 0; i < this.jSon.length; i++) {
      objtbody +=
        '<tr><td>' + this.jSon[i].Quo_consec + '</td>' +
        '<td>' + this.jSon[i].Client_name + '</td>' +
        '<td>' + this.jSon[i].Quo_project + '</td>' +
        '<td>' + this.jSon[i].Quo_date + '</td>' +
        '<td> <div class="square ' + arrayStyleStatus[this.jSon[i].stat_id] + ' mx-auto"></div></td>' +
        '</td><td class="text-center"><a href="quotation.html?action=1&Quo_id=' + this.jSon[i].Quo_id + '" class="btn btn-danger" style="margin:0; padding:5px" value=""><i class="material-icons">border_color</i></a></td>' +
        '<td class="text-center"><a href="../costing/costing.html?Quo_id=' + this.jSon[i].Quo_id + '" class="btn btn-primary" style="margin:0; padding:5px" value=""><i class="material-icons">monetization_on</i></a></td>' +
        '<td class="text-center"><a target="_blank" href="../../php/pdf/quote_pdf.php?Quo_consec=' + this.jSon[i].Quo_consec + '&entry=2" class="btn btn-info" style="margin:0; padding:5px" value=""><i class="material-icons">picture_as_pdf</i></a></td>' +
        '<td class="text-center"><select class="custom-select custom-select-sm" id="finalStatus' + i + '" onchange="finalStatus(' + "'" + this.jSon[i].Quo_consec + "'" + ',this.value,this.id)"><option value="0" select>Estado</option><option value="4">Aprobado</option><option value="5">Anulado</option></select></td></tr>';
    }
    objtbody += '</tbody>';
    objThead += '</thead>';
    table = objThead + objtbody;
    objTable.innerHTML = table;
    for (let j = 0; j < this.jSon.length; j++) {
      let selectId = 'finalStatus' + j;
      if (this.jSon[j].stat_id == 4) {
        document.getElementById(selectId).value = 4;
      }
      else if (this.jSon[j].stat_id == 5) {
        document.getElementById(selectId).value = 5;
      }
    }

  }
  //**Method create Table PreQoute **/
  createTablePreQuotes() {
    var arrayStyleStatus = new Array();
    arrayStyleStatus[1] = "pre-quote";
    arrayStyleStatus[2] = "initiated";
    arrayStyleStatus[3] = "transit";
    arrayStyleStatus[4] = "approved";
    arrayStyleStatus[5] = "canceled";
    var objTable = document.getElementById(this.id);
    let objThead = '<thead class="text-wine">';
    let objtbody = '<tbody>';
    let table = "";
    for (let j = 0; j < this.arrayCell.length; j++) {
      objThead += '<th>' + this.arrayCell[j] + '</th>';
    }
    for (let i = 0; i < this.jSon.length; i++) {

      objtbody +=
        '<tr><td>' + this.jSon[i].Pre_quo_consec + '</td>' +
        '<td>' + this.jSon[i].Pre_client_name + '</td>' +
        '<td>' + this.jSon[i].Pre_quo_project + '</td>' +
        '<td>' + this.jSon[i].Pre_quo_date + '</td>' +
        '<td> <div class="square ' + arrayStyleStatus[this.jSon[i].stat_id] + ' mx-auto"></div></td>' +
        '</td><td class="text-center"><a href="quotation.html?action=1&Pre_quo_id=' + this.jSon[i].Pre_quo_id + '" class="btn btn-danger" style="margin:0; padding:5px" value=""><i class="material-icons">border_color</i></a></td></tr>';
    }
    objtbody += '</tbody>';
    objThead += '</thead>';
    table = objThead + objtbody;
    objTable.innerHTML = table;
  }

  createtableCredits() {
    var objTable = document.getElementById(this.id);
    let objThead = '<thead class="text-wine">';
    let objtbody = '<tbody>';
    let table = "";
    for (let j = 0; j < this.arrayCell.length; j++) {
      objThead += '<th>' + this.arrayCell[j] + '</th>';
    }
    for (let k = 0; k < this.arrayCell.length-4; k++) {
     
      if(k==0){
        objThead += '<tr>';
      }
      objThead+='<th><input type="text" class="form-control bg-light border-0 small" id="myInput'+k+'" onkeyup="searchTable('+"'"+this.id+"',"+k+')" placeholder="Search.." title="Search"></th>';
      if(k==this.arrayCell.length){
        objThead += '</tr>';
      }
    }
    for (let i = 0; i < this.jSon.length; i++) {      
      objtbody += '<tr><td>' + this.jSon[i].Cre_consecutive+ '</td><td>' + this.jSon[i].Cre_requestDate + '</td><td>' + this.jSon[i].Cre_pIdentification + '</td><td>' + this.jSon[i].Cre_pName + '</td>' + '<td class="text-center"><select class="custom-select custom-select-sm" id="finalStatus' + i + '" onchange="finalStatusCredit(' + "'" + this.jSon[i].Cre_id + "'" + ',this.value,this.id)"><option value="0" select>Estado</option><option value="10">Diligenciado</option><option value="11">Revisado</option></select></td>' 
      +'</td><td><a href="../../php/pdf/credit_form_pdf.php?Cre_id='+this.jSon[i].Cre_id+'&Type=V" target="_blank" class="btn btn-primary" style="margin:0; padding:5px" value=""><i class="material-icons">visibility</i></a></td><td><a href="../../php/pdf/credit_form_pdf.php?Cre_id='+this.jSon[i].Cre_id+'&Type=D" class="btn btn-success" style="margin:0; padding:5px" value=""><i class="material-icons">print</i></a></td><td><a href target="_blank" class="btn btn-info" style="margin:0; padding:5px" value="" onclick="viewModalCreSecurity('+this.jSon[i].Cre_id+');return false;"><i class="material-icons">security</i></a></td></tr>';
    }
    objtbody += '</tbody>';
    objThead += '</thead>';
    table =  objThead+objtbody;
    objTable.innerHTML =table;
    for (let j = 0; j < this.jSon.length; j++) {
      let selectId = 'finalStatus' + j;
      if (this.jSon[j].Stat_id == 10) {
        document.getElementById(selectId).value = 10;
      }
      else if (this.jSon[j].Stat_id == 11) {
        document.getElementById(selectId).value = 11;
      }
    }
  }

  createtableCreditSecurity() {
    var objTable = document.getElementById(this.id);
    let objThead = '<thead class="text-wine">';
    let objtbody = '<tbody>';
    let table = "";
    for (let j = 0; j < this.arrayCell.length; j++) {
      objThead += '<th>' + this.arrayCell[j] + '</th>';
    }
    for (let i = 0; i < this.jSon.length; i++) {      
      objtbody += '<tr><td>' + this.jSon[i].Cre_servIp+ '</td><td>' + this.jSon[i].Cre_servDate + '</td><td>' + this.jSon[i].Cre_hostHead + '</td><td>' + this.jSon[i].Cre_webHead + '</td><td>' + this.jSon[i].Cre_requestIp + '</td><td>' + this.jSon[i].Cre_requestPort + '</td><td>' + this.jSon[i].Cre_hash + '</td></tr>';
    }
    objtbody += '</tbody>';
    objThead += '</thead>';
    table =  objThead+objtbody;
    objTable.innerHTML =table;
  }
  createtableMemberships() {
    var objTable = document.getElementById(this.id);
    let objThead = '<thead class="text-wine">';
    let objtbody = '<tbody>';
    let table = "";
    for (let j = 0; j < this.arrayCell.length; j++) {
      objThead += '<th>' + this.arrayCell[j] + '</th>';
    }
    for (let k = 0; k < this.arrayCell.length-3; k++) {
     
      if(k==0){
        objThead += '<tr>';
      }
      objThead+='<th><input type="text" class="form-control bg-light border-0 small" id="myInput'+k+'" onkeyup="searchTable('+"'"+this.id+"',"+k+')" placeholder="Search.." title="Search"></th>';
      if(k==this.arrayCell.length){
        objThead += '</tr>';
      }
    }
    for (let i = 0; i < this.jSon.length; i++) {      
      objtbody += '<tr><td>' + this.jSon[i].Mem_consecutive + '</td><td>' + this.jSon[i].Mem_requestDate + '</td><td>' + this.jSon[i].Mem_pIdentification + '</td><td>' + this.jSon[i].Mem_pName + '</td><td class="text-center"><select class="custom-select custom-select-sm" id="finalStatus' + i + '" onchange="finalStatusMembership(' + "'" + this.jSon[i].Mem_id + "'" + ',this.value,this.id)"><option value="0" select>Estado</option><option value="10">Diligenciado</option><option value="11">Revisado</option></select></td>'+
      '<td><a href="../../php/pdf/membership_form_pdf.php?Mem_id='+this.jSon[i].Mem_id+'&Type=V" target="_blank" class="btn btn-primary" style="margin:0; padding:5px" value=""><i class="material-icons">visibility</i></a></td><td><a href="../../php/pdf/membership_form_pdf.php?Mem_id='+this.jSon[i].Mem_id+'&Type=D" class="btn btn-success" style="margin:0; padding:5px" value=""><i class="material-icons">print</i></a></td><td><a href target="_blank" class="btn btn-info" style="margin:0; padding:5px" value="" onclick="viewModalMemSecurity('+this.jSon[i].Mem_id+');return false;"><i class="material-icons">security</i></a></td></tr>';
    }
    objtbody += '</tbody>';
    objThead += '</thead>';
    table =  objThead+objtbody;
    objTable.innerHTML =table;
    for (let j = 0; j < this.jSon.length; j++) {
      let selectId = 'finalStatus' + j;
      if (this.jSon[j].Stat_id == 10) {
        document.getElementById(selectId).value = 10;
      }
      else if (this.jSon[j].Stat_id == 11) {
        document.getElementById(selectId).value = 11;
      }
    }
  }

  createtableMembershipSecurity() {
    var objTable = document.getElementById(this.id);
    let objThead = '<thead class="text-wine">';
    let objtbody = '<tbody>';
    let table = "";
    for (let j = 0; j < this.arrayCell.length; j++) {
      objThead += '<th>' + this.arrayCell[j] + '</th>';
    }
    for (let i = 0; i < this.jSon.length; i++) {      
      objtbody += '<tr><td>' + this.jSon[i].Mem_servIp+ '</td><td>' + this.jSon[i].Mem_servDate + '</td><td>' + this.jSon[i].Mem_hostHead + '</td><td>' + this.jSon[i].Mem_webHead + '</td><td>' + this.jSon[i].Mem_requestIp + '</td><td>' + this.jSon[i].Mem_requestPort + '</td><td>' + this.jSon[i].Mem_hash + '</td></tr>';

    }
    objtbody += '</tbody>';
    objThead += '</thead>';
    table =  objThead+objtbody;
    objTable.innerHTML =table;
  }
}

