<?php
  require "../bo/bo_membershipForm.php";
  header("Content-type: application/json; charset=utf-8");

  $Arrayrequest = array("Asociación","Actualización");
  $ArrayasoType = array("Primera Vez","Reintegro","Referido");
  $Arrayproduct = array("Deudor","Codeudor");
  $ArraytypeId = array("CC","CE","PAS","RC","TI");
  $ArraytypeId2 = array("CC","CE","PAS");
  $ArraycivilStatus = array("Soltero","Separado","Casado","Unión Libre","Divorciado","Viudo");
  $Arraygener = array("Masculino","Femenino");
  $Arraystudy = array("Primaria","Secundaria","Universitario","Técnico/Tecnólogo","Postgrado","Ninguno");
  $ArraytypeHome = array("Propia","Arrendada","Familiar");
  $ArraysendCorr = array("Residencia","Empresa/Negocio","Correo Eletrónico");
  $ArraytransacType = array("Importaciones","Préstamos","Inveriones","Giros","Exportaciones","Pago Servicios","Remesas","Otras");
  $Arrayaccount = array("Ahorros","Corriente");
  $Arrayyesno = array("Si","No");

  if(isset($_GET['Mem_id'])) {  
    $objBo = new BoMembership();
    $Mem_id = $_GET['Mem_id'];
    $json = json_decode($objBo->selectMembership($Mem_id),true);
    $requestType = $json[0]['Mem_requestType'];  
    for ($i = 0; $i < count($Arrayrequest); $i++) {
      $variable =  "requestType" . $i;
      if ($Arrayrequest[$i] == $requestType) {     
        $$variable = "checked=checked";
      } else {
        $$variable = "";
      }
    }
    $requestDate = $json[0]['Mem_requestDate'];
    if(empty($requestDate)){
      $requestDate = "0000-00-00";
    }
    $newrequestDate = explode("-",$requestDate);
    $City = $json[0]['Mem_city'];
    //Tipo de asociado
    $assoType = $json[0]['Mem_assoType'];
    for ($i = 0; $i < count($ArrayasoType); $i++) {
      $variable =  "assoType" . $i;
      if ($ArrayasoType[$i] == $assoType) {     
        $$variable = "checked=checked";
      } else {
        $$variable = "";
      }
    }
    //Datos generales
    $pLastname1 = $json[0]['Mem_pLastname1'];
    $pLastname2 = $json[0]['Mem_pLastname2'];
    $pName1 = $json[0]['Mem_pName1'];
    $pName2 = $json[0]['Mem_pName2'];
    $pDocType = $json[0]['Mem_pDocType'];
    for ($i = 0; $i < count($ArraytypeId); $i++) {
      $variable =  "pDocType" . $i;
      if ($ArraytypeId[$i] == $pDocType) {     
        $$variable = "checked=checked";
      } else {
        $$variable = "";
      }
    }
    $pIdentification = $json[0]['Mem_pIdentification'];
    $pExpDate = $json[0]['Mem_pExpDate'];
    if(empty($pExpDate)){
      $pExpDate = "0000-00-00";
    }
    $newpExpDate = explode("-",$pExpDate);
    $pExpPlace = $json[0]['Mem_pExpPlace'];
    $pGender = $json[0]['Mem_pGender'];
    for ($i = 0; $i < count($Arraygener); $i++) {
      $variable =  "pGender" . $i;
      if ($Arraygener[$i] == $pGender) {     
        $$variable = "checked=checked";
      } else {
        $$variable = "";
      }
    }
    $pBornDate = $json[0]['Mem_pBornDate'];
    if(empty($pBornDate)){
      $pBornDate = "0000-00-00";
    }
    $newpBornDate = explode("-",$pBornDate);
    $pNacionality = $json[0]['Mem_pNacionality'];
    $pTownship = $json[0]['Mem_pTownship'];
    $pDepartment = $json[0]['Mem_pDepartment'];
    $pCivilStatus = $json[0]['Mem_pCivilStatus'];
    for ($i = 0; $i < count($ArraycivilStatus); $i++) {
      $variable =  "pCivilStatus" . $i;
      if ($ArraycivilStatus[$i] == $pCivilStatus) {     
        $$variable = "checked=checked";
      } else {
        $$variable = "";
      }
    }
    $pLivingplaceType = $json[0]['Mem_pLivingplaceType'];
    for ($i = 0; $i < count($ArraytypeHome); $i++) {
      $variable =  "pLivingplaceType" . $i;
      if ($ArraytypeHome[$i] == $pLivingplaceType) {     
        $$variable = "checked=checked";
      } else {
        $$variable = "";
      }
    }
    $pResAddress = $json[0]['Mem_pResAddress'];
    $pStratum = $json[0]['Mem_pStratum'];
    $pResTel = $json[0]['Mem_pResTel'];
    $pCell = $json[0]['Mem_pCell'];
    $Department = $json[0]['Mem_department'];
    $pResCity = $json[0]['Mem_pResCity'];
    $pCorrespondence = $json[0]['Mem_pCorrespondence'];    
    for ($i = 0; $i < count($ArraysendCorr); $i++) {
      $variable =  "pCorrespondence" . $i;
      if ($ArraysendCorr[$i] == $pCorrespondence) {     
        $$variable = "checked=checked";
      } else {
        $$variable = "";
      }
    }
    $pEmail = $json[0]['Mem_pEmail'];
  //Nivel de estudios
    $pProfession = $json[0]['Mem_pProfession'];
    $pEducationLevel = $json[0]['Mem_pEducationLevel'];
    for ($i = 0; $i < count($Arraystudy); $i++) {
      $variable =  "pEducationLevel" . $i;
      if ($Arraystudy[$i] == $pEducationLevel) {     
        $$variable = "checked=checked";
      } else {
        $$variable = "";
      }
    }
  //Datos del cónyugue
    $sLastname1 = $json[0]['Mem_sLastname1'];
    $sLastname2 = $json[0]['Mem_sLastname2'];
    $sName1 = $json[0]['Mem_sName1'];
    $sName2 = $json[0]['Mem_sName2'];
    $sDocType = $json[0]['Mem_sDocType'];
    for ($i = 0; $i < count($ArraytypeId2); $i++) {
      $variable =  "sDocType" . $i;
      if ($ArraytypeId2[$i] == $sDocType) {     
        $$variable = "checked=checked";
      } else {
        $$variable = "";
      }
    }
    $sIdentification = $json[0]['Mem_sIdentification'];
    $sCell = $json[0]['Mem_sCell'];
  //Datos laborales
    $wCompName = $json[0]['Mem_wCompName'];
    $wCompTel = $json[0]['Mem_wCompTel'];
    $wCompTelExt = $json[0]['Mem_wCompTelExt'];
    $wCompDir = $json[0]['Mem_wCompDir'];
    $wDepartment = $json[0]['Mem_wDepartment'];
    $wCity = $json[0]['Mem_wCity'];
    $wAdmiDate = $json[0]['Mem_wAdmiDate'];
    if(empty($wAdmiDate)){
      $wAdmiDate = "0000-00-00";
    }
    $newwAdmiDate = explode("-",$wAdmiDate);
    $wContractType = $json[0]['Mem_wContractType'];
    $wCharge = $json[0]['Mem_wCharge'];
    $wCivilServant = $json[0]['Mem_wCivilServant'];
    for ($i = 0; $i < count($Arrayyesno); $i++) {
      $variable =  "wCivilServant" . $i;
      if ($Arrayyesno[$i] == $wCivilServant) {     
        $$variable = "checked=checked";
      } else {
        $$variable = "";
      }
    }
    $wPubResourAdmin = $json[0]['Mem_wPubResourAdmin'];
    for ($i = 0; $i < count($Arrayyesno); $i++) {
      $variable =  "wPubResourAdmin" . $i;
      if ($Arrayyesno[$i] == $wPubResourAdmin) {     
        $$variable = "checked=checked";
      } else {
        $$variable = "";
      }
    }
    $wPubPerson = $json[0]['Mem_wPubPerson'];
    for ($i = 0; $i < count($Arrayyesno); $i++) {
      $variable =  "wPubPerson" . $i;
      if ($Arrayyesno[$i] == $wPubPerson) {     
        $$variable = "checked=checked";
      } else {
        $$variable = "";
      }
    }
    $lRPubPerson = $json[0]['Mem_lRPubPerson'];
    for ($i = 0; $i < count($Arrayyesno); $i++) {
      $variable =  "lRPubPerson" . $i;
      if ($Arrayyesno[$i] == $lRPubPerson) {     
        $$variable = "checked=checked";
      } else {
        $$variable = "";
      }
    }
    $wCompFax = $json[0]['Mem_wCompFax'];
    $wEmail = $json[0]['Mem_wEmail'];
    $wCIIUDesc = $json[0]['Mem_wCIIUDesc'];
    $wCIIUCode = $json[0]['Mem_wCIIUCode'];
  //Información financiera
    $monthlyInc = $json[0]['Mem_monthlyInc'];
    $monthlyEgr = $json[0]['Mem_monthlyEgr'];
    $immovabAssets = $json[0]['Mem_immovabAssets'];
    $othersInc = $json[0]['Mem_othersInc'];
    $descEgr = $json[0]['Mem_descEgr'];
    $vehiclesAssets = $json[0]['Mem_vehiclesAssets'];
    $othersDescInc = $json[0]['Mem_othersDescInc'];
    $totalEgr = $json[0]['Mem_totalEgr'];
    $othersAssets = $json[0]['Mem_othersAssets'];
    $totalInc = $json[0]['Mem_totalInc'];
    $totalAssets = $json[0]['Mem_totalAssets'];
    $totalLiabilities = $json[0]['Mem_totalLiabilities'];
    $totalHeritage = $json[0]['Mem_totalHeritage'];
  //Operaciones en moneda extranjera
    $fctransactions = $json[0]['Mem_fctransactions'];
    for ($i = 0; $i < count($Arrayyesno); $i++) {
      $variable =  "fctransactions" . $i;
      if ($Arrayyesno[$i] == $fctransactions) {     
        $$variable = "checked=checked";
      } else {
        $$variable = "";
      }
    }
    $fcWhich = $json[0]['Mem_fcWhich'];
    $fcAccount = $json[0]['Mem_fcAccount'];
    for ($i = 0; $i < count($Arrayyesno); $i++) {
      $variable =  "fcAccount" . $i;
      if ($Arrayyesno[$i] == $fcAccount) {     
        $$variable = "checked=checked";
      } else {
        $$variable = "";
      }
    }
    $fcAccountNumber = $json[0]['Mem_fcAccountNumber'];
    $fcBank = $json[0]['Mem_fcBank'];
    $fcCurrency = $json[0]['Mem_fcCurrency'];
    $fcCity = $json[0]['Mem_fcCity'];
    $fcCountry = $json[0]['Mem_fcCountry'];
    $fcTransactionType = $json[0]['Mem_fcTransactionType'];
    for ($i = 0; $i < count($ArraytransacType); $i++) {
      $variable =  "fcTransactionType" . $i;
      if ($ArraytransacType[$i] == $fcTransactionType) {     
        $$variable = "checked=checked";
      } else {
        $$variable = "";
      }
    }
    $fcWichTransac = $json[0]['Mem_fcWichTransac'];

    $objBen = new BoMembership();
    $jsonbenefit = json_decode($objBen->selectBeneficiaries($Mem_id),true);
    $dataTableRows = "";
    for($i = 0; $i < count($jsonbenefit); $i++){
      $dataTableRows .= "<tr class='td-tall' textNormal>";
      $dataTableRows .= "<td>" . $jsonbenefit[$i]["Ben_identification"] . "</td>";
      $dataTableRows .= "<td>" . $jsonbenefit[$i]["Ben_lastName1"] . "</td>";
      $dataTableRows .= "<td>" . $jsonbenefit[$i]["Ben_lastName2"] . "</td>";
      $dataTableRows .= "<td>" . $jsonbenefit[$i]["Ben_name1"] . "</td>";
      $dataTableRows .= "<td>" . $jsonbenefit[$i]["Ben_name2"] . "</td>";
      $dataTableRows .= "<td>" . $jsonbenefit[$i]["Ben_relationship"] . "</td>";
      $dataTableRows .= "<td>" . $jsonbenefit[$i]["Ben_percent"] . "</td></tr>";      
    }
  }
?>
<?php
$html = "
<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <meta http-equiv='X-UA-Compatible' content='ie=edge'>
  <title>Formulario Afiliación</title>
  <style>
  html,
  body {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    border: 0;
  }

  .header {
    width: 100%;
    margin: auto;
  }

  .container {
    width: 90%;
    margin: auto;
    text-transform: uppercase;
    font-size: 7px;
    font-weight: bold;
    height: auto;
  }

  .textNormal {
    font-weight: normal;
  }
  label {
    font-size: 8px;
    font-weight: normal;
  }

  .tableSection-0 {
    margin-top: -35px
  }

  .tableSection-0 small {
    color: white;
    font-size: 15px;
    margin-left: 25px;
  }

  .tableSection-0 input {
    color: white;
    font-size: 15px;
  }

  .section-1 {
    width: 100%;
  }

  .section-2 {
    margin-top: 15px;
  }

  .section-3 {
    margin-top: 40px;
  }

  .tableSection-1 {
    margin-top: 15px;
    width: 100%;
  }

  .tableSection-2 input {
    font-size: 12px;
  }

  .tableSection-2 {
    margin-top: 0px;
    width: 100%;
  }

  .tableSection-3 {
    margin-top: 10px;
    width: 100%;
    
  }

  .tableSection-4 {
    width: 100%;
    margin-top: 3px;
  }

  .tableSection-4 input {
    font-size: 12px;
  }

  .tableSection-5 {
    margin-top: 7px;
    width: 100%;
  }

  .tableSection-5 input {
    font-size: 12px;
  }

  .tableSection-6 {
    margin-top: 7px;
    width: 100%;
  }

  .tableSection-6 input {
    font-size: 12px;
  }

  .tableSection-7 {
    margin-top: 7px;
    width: 100%;
  }

  .tableSection-7 input {
    font-size: 12px;
  }

  .tableBody {
    font-weight: normal;
  }

  .rectangle {
    width: 750px; 
    height: 25px; 
    border: 1px solid #555;
}

  .tdScale {
    font-size: 16px;
  }

  .td-0 {
    width: 10px;
  }

  .td-0-1 {
    width: 20px;
  }

  .td-1 {
    width: 40px;
  }

  .td-1-2 {
    width: 60px;
  }

  .td-2 {
    width: 80px;
  }

  .td-2-3 {
    width: 100px;
  }

  .td-3 {
    width: 120px;
  }

  .td-3-4 {
    width: 140px;
  }

  .td-4 {
    width: 160px;
  }

  .td-4-5 {
    width: 180px;
  }

  .td-5 {
    width: 200px;
  }

  .td-5-6 {
    width: 220px;
  }

  .td-6 {
    width: 240px;
  }

  .td-7 {
    width: 280px;
  }

  .td-7-8 {
    width: 300px;
  }

  .td-8 {
    width: 320px;
  }

  .td-9 {
    width: 360px;
  }

  .td-9-10 {
    width: 380px;
  }

  .td-10 {
    width: 400px;
  }

  .td-11 {
    width: 440px;
  }

  .td-12 {
    width: 480px;
  }

  .td-13 {
    width: 520px;
  }

  .td-14 {
    width: 560px;
  }

  .td-15 {
    width: 600px;
  }

  .td-16 {
    width: 640px;
  }

  .td-17 {
    width: 680px;
  }

  .td-18 {
    width: 720px;
  }

  td {
    border: solid 1px black;
    border-top: transparent;
  }

  th {
    border: solid 1px black;
    border-top: transparent;
  }

  .center {
    text-align: center;
  }

  .general {
    text-align: justify;
    font-weight: normal;
    line-height: 10px;
    text-transform: none;
    font-size: 9px;
  }

  .tdClearBorder {
    border: transparent;
  }

  .tdClearBorder-y2 {
    border-left: transparent;
    border-right: transparent;
  }

  .tdClearBorder-y1 {
    border-left: transparent;
    border-right: transparent;
  }

  table {
    border-collapse: collapse;
  }

  .td-tall td,
  th {
    padding-bottom: 7px;
  }

  .td-m {
    height: 50px;
  }

  .td-s {
    height: 130px;
  }

  .td-s hr {
    margin-top: 100px;
    border: 1px solid;
  }

  .div-upper {
    font-size: 7px;
    font-weight: bold;
    text-transform: uppercase;
  }
  </style>
</head>

<body>
  <!--Start Header-->
  <div>
    <img src='../../img/forms/header1.png' class='header' style='height: 150px'>
  </div>
  <!--End Header-->
  <!--Start Content-->
  <div class='container'>
    <!--Line 0-->
    <div class='section-0'>
      <img src='../../img/forms/line_0.png' class='header' alt=''>
      <table class='tableSection-0'>
        <tr>
          <th style='border:none'>
            <small class='form-check-label' for='requestType1'>Asociación</small>
            <input type='radio' name='requestType' $requestType0 value='option1'>
          </th>
          <th style='border:none'>
            <small class='form-check-label' for='requestType2'>Actualización</small>
            <input type='radio' name='requestType' $requestType1 value='option2'>
          </th>
        </tr>
      </table>
      <table class='tableSection-1'>
        <tr class='td-tall'>
          <td class='td-4'>fecha diligenciamiento</td>
          <td class='td-1 center'><label>$newrequestDate[2]</label></td> 
          <td class='td-1 center'><label>$newrequestDate[1]</label></td>
          <td class='td-1 center'><label>$newrequestDate[0]</label></td>
          <td class='td-1 tdClearBorder'></td>
          <td class='td-1'>ciudad</td>
          <td class='td-5 center'><label>$City</label></td>
          <td class='td-3 tdClearBorder center' style='font-size:11px;'>oficina principal</td>
        </tr>
      </table>
    </div>
    <!--Line 1-->
    <div class='section-2'>
      <img src='../../img/forms/line_1.png' class='header' alt=''>
      <table class='tableSection-2'>
        <tr>
          <td class='td-7'>primera vez <input type='radio' name='assoType' $assoType0>reintegro 
          <input type='radio' name='assoType' $assoType1>referido <input type='radio' name='assoType' $assoType2></td>
          <td style='width: 450px;'></td>
        </tr>
      </table>
    </div>
    <!--Line 2-->
    <div class='section-2'>
      <img src='../../img/forms/line_2.png' class='header' alt=''>
      <table class='tableSection-2'>
        <tr class='td-tall'>
          <td class='td-4-5'>1er apellido <label>$pLastname1</label></td>
          <td class='td-4'>2do apellido <label>$pLastname2</label></td>
          <td class='tdClearBorder' style='width: 28px;'></td>
          <td class='td-4-5'>1er nombre <label>$pName1</label></td>
          <td class='td-4'>2do nombre <label>$pName2</label></td>
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr>
          <td class='td-5' >tipo de documento - c.c.<input type='radio' name='pDocType' $pDocType0> c.e.
          <input type='radio' name='pDocType' $pDocType1> pas<input type='radio' name='pDocType'$pDocType2> 
          r.c.<input type='radio' name='pDocType'$pDocType3> t.i.<input type='radio' name='pDocType' $pDocType4></td>
          <td class='td-4'>identificación no. <label>$pIdentification</label></td>
          <td class='tdClearBorder' style='width: 24px;'></td>
          <td class='td-4'>fecha de expedición</td>
          <td class='td-1 center'><label>$newpExpDate[2]</label></td>
          <td class='td-1 center'><label>$newpExpDate[1]</label></td>
          <td class='td-1 center'><label>$newpExpDate[0]</label></td>
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr>
          <td class='td-4-5'>ciudad expedicion <label>$pExpPlace</label></td>
          <td class='td-2 center'>sexo m<input type='radio' name='pGender' $pGender0> f<input type='radio' name='pGender' $pGender1>
          </td>
          <td class='td-2-3 '>fecha de nacimiento</td>
          <td class='td-1 center'><label>$newpBornDate[2]</label></td>
          <td class='td-1 center'><label>$newpBornDate[1]</label></td>
          <td class='td-1 center'><label>$newpBornDate[0]</label></td>
          <td class='tdClearBorder' style='width: 19px;'></td>
          <td style='width: 188px;'>nacionalidad <label>$pNacionality</label></td>
                 
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr>
          <td class='td-4'>departamento <label>$pDepartment</label></td>   
          <td class='td-4'>ciudad nacimiento <label>$pTownship</label></td>
          <td style='width: 403px;'>estado civil - soltero<input type='radio' name='pCivilStatus' $pCivilStatus0> separado<input
              type='radio' name='pCivilStatus' $pCivilStatus1> casado<input type='radio' name='pCivilStatus' $pCivilStatus2> unión libre<input type='radio'
              name='pCivilStatus' $pCivilStatus3> divorciado<input type='radio' name='pCivilStatus' $pCivilStatus4> viudo<input type='radio' name='pCivilStatus' 
              $pCivilStatus5></td>          
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr>
          <td class='td-4 center'>tipo de vivienda - propia<input type='radio' name='pLivingplaceType' $pLivingplaceType0>
            arrendada<input type='radio' name='pLivingplaceType' $pLivingplaceType1> familiar<input type='radio' name='pLivingplaceType' $pLivingplaceType2>
          </td>
          <td class='td-11'>dirección recidencia <label>$pResAddress</label></td>
          <td style='width: 63px;'>estrato <label>$pStratum</label></td>
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr class='td-tall'>
          <td class='td-5'>teléfono residencia <label>$pResTel</label></td>
          <td class='td-5'>teléfono móvil <label>$pCell</label></td>
          <td style='width: 156px;'>departamento <label>$Department</label></td>
          <td class='td-4'>ciudad/municipio <label>$pResCity</label></td>
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr>
          <td class='td-10'>envío correspondencia - residencia<input type='radio' name='pCorrespondence' $pCorrespondence0>
            empresa/negocio<input type='radio' name='pCorrespondence' $pCorrespondence1> correo electrónico<input type='radio' name='pCorrespondence' $pCorrespondence2>
          </td>
          <td style='width: 330px;'>e-mail <label>$pEmail</label></td>
        </tr>
      </table>
    </div>
    <!--Line 3-->
    <div class='section-2'>
      <img src='../../img/forms/line_3.png' class='header' alt=''>
      <table class='tableSection-2'>
        <tr>
          <td style='width: 210px;'>profesión <label>$pProfession</label></td>
          <td class='td-13 center'>nivel de estudios - primaria<input type='radio' name='pEducationLevel' $pEducationLevel0>
            secundaria<input type='radio' name='pEducationLevel' $pEducationLevel1> universitario<input type='radio' name='pEducationLevel' $pEducationLevel2>
            técnico/tecnológico<input type='radio' name='pEducationLevel' $pEducationLevel3> postgrado<input type='radio' name='pEducationLevel' $pEducationLevel4>
            ninguno<input type='radio' name='pEducationLevel' $pEducationLevel5></td>
        </tr>
      </table>
    </div>
    <!--Line 4-->
    <div class='section-2'>
      <img src='../../img/forms/line_4.png' class='header' alt=''>
      <table class='tableSection-2'>
        <tr class='td-tall'>
          <td class='td-4-5'>1er apellido <label>$sLastname1</label></td>
          <td class='td-4'>2do apellido <label>$sLastname2</label></td>
          <td style='width: 28px;' class='tdClearBorder'></td>
          <td class='td-4-5'>1er nombre <label>$sName1</label></td>
          <td class='td-4'>2do nombre <label>$sName2</label></td>
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr>
          <td class='td-7'>tipo de documento - c.c.<input type='radio' name='sDocType' $sDocType0> c.e.<input type='radio'
          name='sDocType' $sDocType1> pas<input type='radio' name='sDocType' $sDocType2> </td>
          <td class='td-6'>identificación no. <label>$sIdentification</label></td>
          <td style='width: 203px;'>no. Celular. <label>$sCell</label></td>
        </tr>
      </table>
    </div>
    <!--Line 5-->
    <div class='section-2'>
      <img src='../../img/forms/line_5.png' class='header' alt=''>
      <table class='tableSection-2'>
        <tr class='td-tall'>
          <td class='td-11'>Nombre empresa/Negocio <label>$wCompName</label></td>
          <td class='td-5'>Teléfono empresa <label>$wCompTel</label></td>
          <td style='width: 83px;'>Ext. <label>$wCompTelExt</label></td>
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr class='td-tall'>
          <td class='td-4-5'>dirección <label>$wCompDir</label></td>
          <td style='width: 175px;'>departamento <label>$wDepartment</label></td>
          <td class='td-4'>municipio <label>$wCity</label></td>
          <td class='td-1-2'>fecha ingreso</td>
          <td class='td-1 center'><label>$newwAdmiDate[2]</label></td>
          <td class='td-1 center'><label>$newwAdmiDate[1]</label></td>
          <td class='td-1 center'><label>$newwAdmiDate[0]</label></td>
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr>
          <td class='td-8'>tipo de contrato <label>$wContractType</label></td>
          <td class='td-5'>cargo <label>$wCharge</label></td>
          <td style='width: 35px;' class='tdClearBorder'></td>
          <td class='td-4 center'>¿es servidor público? - si<input type='radio' name='wCivilServant' $wCivilServant0> no <input type='radio'
            name='wCivilServant' $wCivilServant1></td>
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr>
          <td class='td-9'>¿por su cargo o actividad maneja recursos públicos? - si<input type='radio' name='wPubResourAdmin' $wPubResourAdmin0>
            no <input type='radio' name='wPubResourAdmin' $wPubResourAdmin1></td>
          <td style='width: 28px;' class='tdClearBorder'></td>
          <td class='td-8-9'>¿por su actividad u oficio, goza de reconocimiento público general? - si<input type='radio'
              name='wPubPerson' $wPubPerson0> no <input type='radio' name='wPubPerson' $wPubPerson1></td>
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr>
          <td style='width: 737px;'>¿existe algún vínculo entre usted y una persona considereada públicamente expuesta? -
            si<input type='radio' name='lRPubPerson' $lRPubPerson0> no <input type='radio' name='lRPubPerson' $lRPubPerson1></td>
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr class='td-tall'>
          <td style='width: 170px;'>número de fax <label>$wCompFax</label></td>
          <td class='td-14'>e-mail laboral <label>$wEmail</label></td>
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr class='td-tall'>
          <td style='width: 570px;'>descripción actividad económica <label>$wCIIUDesc</label></td>
          <td class='td-4'>CIIU <label>$wCIIUCode</label></td>
        </tr>
      </table>
    </div>

    <!--Line 6-->
    <div class='section-2'>
      <img src='../../img/forms/line_6.png' class='header' alt=''>      
      <table class='tableSection-3' style='margin:auto'>
        <thead>
          <tr class='td-tall'>
            <th colspan='2' class='center'>ingresos mensuales (Cifras en pesos)</th>
            <th colspan='2' class='center'>egresos mensuales </th>
            <th colspan='2' class='center'>activos</th>
          </tr>
        </thead>
        <tbody>
          <tr class='td-tall'>
            <td style='width: 146px;'>ingresos mensuales</td>
            <td class='td-2-3'>$<label>$monthlyInc</label></td>
            <td style='width: 130px;'>egresos mensuales</td>
            <td class='td-2-3'>$<label>$monthlyEgr</label></td>
            <td style='width: 126px;'>inmuebles</td>
            <td class='td-2-3'>$<label>$immovabAssets</label></td>
          </tr>
          <tr class='td-tall'>
            <td class='td-3'>otros ingresos</td>
            <td class='td-2-3'>$<label>$othersInc</label></td>
            <td colspan='2' rowspan='3' class='td-5-6'>descripción egresos <label>$descEgr</label></td>
            <td class='td-3'>vehículos</td>
            <td class='td-2-3'>$<label>$vehiclesAssets</label></td>
          </tr>
          <tr class='td-tall'>
            <td colspan='2' rowspan='2' class='td-5-6'>descripción otros ingresos <label>$othersDescInc</label></td>
            <td class='td-3'>otros activos </td>
            <td class='td-2-3'>$<label>$othersAssets</label></td>
          </tr>
          <tr class='td-tall'>
            <td class='td-3'>total activos (TA)</td>
            <td class='td-2-3'>$<label>$totalAssets</label></td>
          </tr>
          <tr class='td-tall'>
            <td class='td-3'>total ingresos mensuales</td>
            <td class='td-2-3'>$<label>$totalInc</label></td>
            <td class='td-3'>total egresos mensuales</td>
            <td class='td-2-3'>$<label>$totalEgr</label></td>
            <td class='td-3'>total pasivos (TP)</td>
            <td class='td-2-3'>$<label>$totalLiabilities</label></td>
          </tr>
          <tr class='td-tall'>
            <td colspan='2' class='td-3 tdClearBorder'></td>
            <td colspan='2' style='border-right: 1px solid black;'class='td-3 tdClearBorder'></td>
            <td class='td-3' >total patrimonio (TA - TP)</td>
            <td class='td-2-3'>$<label>$totalHeritage</label></td>
          </tr>
        </tbody>
      </table>       
    </div>   
    <div class='section-3'>
        <table class='tableSection-4 td-m'>
          <tr>
            <td style='width: 740px;' class='textNormal'>en caso de fallecimiento siendo asociado hábil constituyo como beneficiario legítimo del auxilio por muerte a las siguientes personas:</td><br>
          </tr>
        </table>
      </div>
    <!--Line 8-->
    <div class='section-2'>
      <img src='../../img/forms/line_8.png' class='header' alt=''>
      <table class='tableSection-3' style='margin:auto'>
        <thead>
          <tr class='td-tall'>
            <th class='td-2-3 center'>documento No.</th>
            <th class='td-3 center'>primer apellido </th>
            <th class='td-3 center'>segundo apellido</th>
            <th class='td-3 center'>primer nombre</th>
            <th class='td-3 center'>segundo nombre</th>
            <th class='td-2 center'>parentesco</th>
            <th class='td-1-2 center'>%</th>
          </tr>
        </thead>
        <tbody class='tableBody center'>
          $dataTableRows
        </tbody>
      </table>
    </div>
    <!--Footer-->
    <div class='footer'>
      <img src='../../img/forms/logo_super.png' class='header' style='height:40px; margin-top: 30px;'>
    </div>
  </div>
  <!--End Content-->
  <!--Start Header-->
  <div>
    <img src='../../img/forms/header1.png' class='header' alt=''>
  </div>
  <!--End Header-->
  <!--Start Content-->
  <div class='container'>    
    <!--General Info-->
    <div class='general-info'>
      <img src='../../img/forms/line_9.png' class='header' alt=''>
      <table class='tableSection-3' style='margin:auto'>
        <tr>
          <td style='width: 753px;' class='td-18 general'>
            Autorizo a ____________________________________________________________________________________________________________________ para que descuente de
            mi salario el ______ % o $ ____________________________________ con destino a aportes sociales y el 0.5% de un salario mínimo legal mensual vigente
            para el Fondo de Solidaridad.<br>
            CONSULTAS Y REPORTES: Autorizo a COOMINOBRAS para que reporte, conserve, consulte o actualice cualquier información de mi comportamiento financiero y comercial 
            como asociado, así como los saldos que a su favor resulten de todas las operaciones de crédito que bajo cualquier modalidad me otorgue a la central de riesgo correspondiente y 
            a entidades financieras de Colombia o a quien haga sus veces y a los bancos de datos de entidades públicas y privadas.
          </td>
        </tr>
        <tr>
          <td class='td-18 general'>
          DECLARACIÓN DE ORIGEN DE FONDOS: Con el fin de dar cumplimiento a las normas legales vigentes y a los procedimientos de la Cooperativa sobre el Sistema de 
          Administración de Riesgo de Lavado de Activos y Financiación del Terrorismo SARLAFT, de manera voluntaria realizo las siguientes declaraciones:<br>      
          1. Declaro que mis recursos, ingresos y bienes provienen de actividades lícitas y están ligados al desarrollo normal de mis actividades y que por lo tanto, los mismos no provienen
              de ninguna actividad ilícita de las contempladas en el Código Penal Colombianoo en cualquier norma que lo sustituya, adicionen o modifiquen.<br>
          2. Declaro que el origen de los recursos y demás activos proceden del giro ordinario de actividades lícitas y que los recursos que entrego provienen de las siguientes fuentes:<br>
            <div class='rectangle'></div>(detalle ocupación, oficio, actividad o negocio)<br>
          3. Que no admitiré que terceros efectúen depósitos en mis cuentas con fondos provenientes de actividades ilícitas contempladas en el Código Penal Colombiano en cualquier otra 
                norma que lo adicione; ni efectuaré transacciones destinadas a favorecer tales actividades o a favor de personas relacionadas con las mismas.<br>
                <!--Line 6-->
                <div class='section-6 div-upper'>
                  <img src='../../img/forms/line_14.png' class='header' alt=''>
                  <table class='tableSection-2'>
                    <tr>
                      <td class='td-8'>realiza transacciones en moneda extranjera - si<input type='radio' name='fctransactions' $fctransactions0> no <input
                          type='radio' name='fctransactions' $fctransactions1></td>
                      <td style='width: 410px;'>cuáles <label>$fcWhich</label></td>
                    </tr>
                  </table>
                  <table class='tableSection-4'>
                    <tr>
                      <td class='td-8'>posee cuenta en moneda extranjera - si<input type='radio' name='fcAccount' $fcAccount0> no <input
                        type='radio' name='fcAccount' $fcAccount1></td>
                      <td style='width: 410px;'>Número <label>$fcAccountNumber</label></td>
                    </tr>
                  </table>
                  <table class='tableSection-4'>
                    <tr class='td-tall'>
                      <td class='td-6'>Banco <label>$fcBank</label></td>
                      <td class='td-4'>Moneda <label>$fcCurrency</label></td>
                      <td style='width: 156px;'>Ciudad <label>$fcCity</label></td>
                      <td class='td-4'>País <label>$fcCountry</label></td>
                    </tr>
                  </table>
                  <table class='tableSection-4'>
                    <tr>
                      <td class='td-15'>tipo de transacción - importaciones<input type='radio' name='fcTransactionType' $fcTransactionType0>
                        préstamos<input type='radio' name='fcTransactionType' $fcTransactionType1> inversiones<input type='radio' name='fcTransactionType' $fcTransactionType2>
                        giros<input type='radio' name='fcTransactionType' $fcTransactionType3> exportaciones<input type='radio' name='fcTransactionType' $fcTransactionType4>
                        pago de servicios<input type='radio' name='fcTransactionType' $fcTransactionType5>remesas<input type='radio' name='fcTransactionType' $fcTransactionType6>
                        Otras<input type='radio' name='fcTransactionType' $fcTransactionType7></td>
                      <td style='width: 130px;'>¿cuáles? <label>$fcWichTransac</label></td>
                    </tr>
                  </table>
                </div>
                <table class='tableSection-4'>
                  <tr>
                    <td class='tdClearBorder' style='width: 740px; border:none;'>
                      <strong>DECLARO QUE NO REALIZO TRANSACCIONES EN MONEDA EXTRANJERA</strong><input class='tdScale'
                        type='checkbox'>
                    </td>
                  </tr>        
                </table><br>
          4. Que no me ecuentro en las listas internacionales vinculantes para Colombia de conformidad con el derecho internacional ONU (Listas de Naciones Unidas) o en las listas OFAC,
                estando COOMINOBRAS, facultado para efectuar las acciones que considere pertinentes, si verifica que me encuentro en dichas listas.<br>
          5. Autorizo a COOMINOBRAS a tomar las medidas correspondientes en el caso de detectar cualquier inconsistencia en la información consignada en este formulario e
                igualmente me obligo para con la Cooperativa a reportar por lo menos una vez al año la información que solicite la Cooperativa por cada producto o servicio que utilice.<br>
          <b>&nbsp;&nbsp;&nbsp;&nbsp;PROTECCIÓN DE DATOS:</b><br>
            En cumplimiento de la Ley Estatutaria 1581 de 2012 de Protección de Datos y normas concordantes, autorizo como Titular de los datos, para que éstos sean incorporados
            en una base de datos responsabilidad de Coominobras para que sean tratados con la finalidad de realizar gestión administrativa, gestión de estadísticas internas, Gestión
            de cobros y pagos, gestión de facturación, gestión económica y contable, gestión fiscal y envío de comunicaciones en el marco de la relación contractual.<br>
            Asimismo, declaro que cuento con el consentimiento de mis familiares mayores de edad y autorizo el tratamiento de los datos personales de los menores registrados en
            el presente formulario con la finalidad de gestión administrativa y de verificación de datos y referencias, respetando el interés superior del menor y sus derechos
            fundamentales.<br>
            Es de carácter facultativo suministrar información que verse sobre Datos Sensibles, entendidos como aquellos que afectan la intimidad o generen algún tipo de
            discriminación, o sobre menores de edad.<br>
            Como titular de los datos podré ejercitar los derechos de acceso, corrección, supresión, revocación o reclamo por infracción sobre mis datos, mediante un escrito dirigido
            a Coominobras a la dirección de correo electrónico primeroelasociado@coominobras.coop, indicando en el asunto el derecho que desea ejercitar, o mediante correo
            ordinario remitido a la Calle 44 No. 57-28.<br>
            <b>&nbsp;&nbsp;&nbsp;&nbsp;Aceptación de la Reglamentación</b><br>
            Entiendo que la aceptación de mi asociación está sujeta al cumplimiento de los requisitos estipulados en los estatutos vigentes y es prorrogativa de la entidad admitirme
            como afiliado. Declaro que conozco los estatutos los cuales puedo consultar permanentemente en la página www.COOMINOBRAS.coop en donde aparece además, toda
            la reglamentación de la Cooperativa y sus productos. Manifiesto que toda la información suministrada es veraz y autorizo a la Cooperativa para que la verifique. El (los) abajo
            firmante(s) en cumplimiento de la Ley 1266 de 2008 y como titular de mis datos personales consignados en este formulario de afiliación, autorizo a Coominobras o a la
            entidad que como acreedor delegue para representarlo o a su cesionario, endosatario o a quien ostente en el futuro la calidad de acreedor a realizar consulta y reporte en
            centrales de riesgo de mi comportamiento crediticio, financiero y comercial en las entidades legalmente contituidas, tales como (OPERADORES, centrales de riesgo); así
            como, para verificar la información financiera, crediticia y comercial recogida en el presente formulario para la adquisición de créditos.
          </td>
        </tr>
      </table>
      <table class='tableSection-7'>
        <tr>
          <td class='td-10 tdClearBorder-y2 td-s'>
          <hr style='border:none'/>En constancia de haber leído y aceptado lo anterior firmo el presente documento
          </td>
          <td class='td-5 td-s'>
            <hr />FIRMA DEL SOLICITANTE<br>NÚMERO DE IDENTIFICACIÓN
          </td>          
          <td style='width: 136px;' class='td-s tdClearBorder-y1 center'> 
          <hr style='border:none'/>HUELLA
          </td>
        </tr>        
      </table>
      <!--Line CoominobrasSpace-->
      <div class='CoominobrasSpace'>
        <img src='../../img/forms/line_18.png' class='header' alt=''>
        <table class='tableSection-7'>
          <tr class='td-tall'>
            <td rowspan='2' class='td-2'>OBSERVACIONES</td>
            <td style='width: 670px;'></td>   
          </tr> 
        </table>
        <table>
          <tr class='td-tall'>
            <td class='td-4'>fecha realización entrevista</td>
            <td class='td-1 center textNormal'>DD</td> 
            <td class='td-1 center textNormal'>MM</td>
            <td class='td-1 center textNormal'>AAAA</td>
            <td style='width: 449px;'></td>
          </tr>
        </table>
      </div>
      <div class='interview'>
        <img src='../../img/forms/line_19.png' class='header' alt=''>
        <table class='tableSection-4'>
          <tr class='td-tall'>
            <td style='width: 390px;'>nombre </td>
            <td class='td-9' >firma</td>
          </tr>
        </table>
      </div>
      <div class='recolectInfo'>
        <img src='../../img/forms/line_20.png' class='header' alt=''>
        <table class='tableSection-4'>
          <tr class='td-tall'>
            <td style='width: 390px;'>nombre </td>
            <td class='td-9'>firma</td>
          </tr>
        </table>
        <table class='tableSection-4'>
          <tr class='td-tall'>
            <td class='td-4'>fecha verificación información</td>
            <td class='td-1 center textNormal'>DD</td> 
            <td class='td-1 center textNormal'>MM</td>
            <td class='td-1 center textNormal'>AAAA</td>
            <td style='width: 449px;'></td>
          </tr>
        </table>
        <table class='tableSection-4 textNormal'>
          <tr class='td-tall'>
            <td class='td-4 center tdClearBorder' style='border-left:1px solid black;'>documentos anexos:</td>
            <td class='td-6 center tdClearBorder'>fotocopia de la cédula de ciudadanía<input class='tdScale' type='checkbox'></td> 
            <td class='center tdClearBorder' style='width: 337px; border-right:1px solid black;'>fotocopia de los dos últimos desprendibles de pago o certificación laboral<input class='tdScale'
            type='checkbox'></td>
          </tr>
          <tr class='td-tall'>
            <td class='td-4 center tdClearBorder' style='border-left:1px solid black; border-bottom:1px solid black;'>formato plan exequial<input class='tdScale' type='checkbox'></td>
            <td class='td-6 center tdClearBorder' style='border-bottom:1px solid black;'>declaración de renta del último año gravable disponible<input class='tdScale'
            type='checkbox'></td> 
            <td class='center tdClearBorder' style='width: 337px; border-right:1px solid black; border-bottom:1px solid black;'>formato de afiliación persona natural debidamente diligenciado<input class='tdScale'
            type='checkbox'></td>
          </tr>
          <tr class='td-tall'>
            <td colspan='3' >estoy informado de mi obligación de actualizar anualmente la información que solicite la entidad por cada producto o servicio que utilice</td>
          </tr>
          <tr>
            <td colspan='3' class='tdClearBorder'>FOCO 001 Formato de afiliación, revisión 002,Fecha 01-05-2020</td>
          </tr>
          <tr>
            <td colspan='3' class='tdClearBorder center'>Autorizamos de manera expresa e irrevocable a COOMINOBRAS, o a quien represente sus derechos, a consultar, solicitar, suministrar, reportar,<br>
            procesar y divulgar toda la información que se refiere a mi comportamiento crediticio, financiero, comercial y de servicios, a las centrales de información crediticia.</td>
          </tr>
        </table>
      </div>
      <!--Footer-->
      <div class='footer'>
        <img src='../../img/forms/line_21.png' class='header' alt=''>
        <table class='tableSection-7'>
          <tr>
            <td style='width: 341px;'>se consulto en lv - si<input type='radio'> no <input type='radio'></td>
            <td class='td-2'>fecha de consulta</td>
            <td class='td-1 center textNormal'>DD</td> 
            <td class='td-1 center textNormal'>MM</td>
            <td class='td-1 center textNormal'>AAAA</td>
            <td rowspan='4' class='td-4-5' td-m>firma</td>
          </tr>     
          <tr class='td-tall'>
            <td colspan='5'>observaciones</td>
          </tr>   
          <tr class='td-tall'>
            <td colspan='5' rowspan='3'></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</body>

</html>"
?>
<?php
require '../vendor/autoload.php';

$html;
$nameFile = $pIdentification.'_membership_form.pdf';
use Spipu\Html2Pdf\Html2Pdf;
// ob_start();
// require_once 'templatePHP.php';
// $html = ob_get_clean();
ob_end_clean();
$size=[216,356];
$html2pdf = new Html2Pdf('p',$size,'es','true','UTF-8',[0,0,0,0] );
$html2pdf->writeHTML($html);
$type = $_GET['Type'];
if($type == "V"){
  $html2pdf->output($nameFile);
}
else if($type == "D"){
  $html2pdf->output($nameFile,"D");
}
?>