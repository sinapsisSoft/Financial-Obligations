<?php
require "../bo/bo_creditForm.php";
header("Content-type: application/json; charset=utf-8");

$Arrayrequest = array("Nuevo","Novación","Modificación");
$Arrayproduct = array("Deudor","Codeudor");
$ArraytypeId = array("CC","CE","RC","TI","PAS");
$ArraytypeId2 = array("CC","CE","PAS");
$ArraycivilStatus = array("Soltero","Separado","Casado","Unión Libre","Divorciado","Viudo");
$Arraygener = array("Masculino","Femenino");
$Arraystudy = array("Primaria","Secundaria","Universitario","Técnico/Tecnólogo","Postgrado","Ninguno");
$ArraytypeHome = array("Propia","Arrendada","Familiar");
$ArraysendCorr = array("E-mail personal","E-mail laboral","Dirección de residencia");
$ArraytransacType = array("Importaciones","Préstamos","Inveriones","Giros","Exportaciones","Pago Servicios","Remesas","Otras");
$Arrayaccount = array("Ahorros","Corriente");
$Arrayyesno = array("Si","No");


if(isset($_GET['Cre_id'])) {  
  $objBo = new BoCredit();
  $Cre_id = $_GET['Cre_id'];
  
  $json = json_decode($objBo->selectCredit($Cre_id),true);
  
  $requestDate = $json[0]['Cre_requestDate'];
  if(empty($requestDate)){
    $requestDate = "0000-00-00";
  }
  $newrequestDate = explode("-",$requestDate);
  $City = $json[0]['Cre_city'];
  //Infopara el crédito
  $requestType = $json[0]['Cre_requestType'];  
  for ($i = 0; $i < count($Arrayrequest); $i++) {
    $variable =  "requestType" . $i;
    if ($Arrayrequest[$i] == $requestType) {     
      $$variable = "checked=checked";
    } else {
      $$variable = "";
    }
  }
  ////check($Arrayrequest,"requestType",$requestType);
  
  $creditProduct = $json[0]['Cre_creditProduct'];
  for ($i = 0; $i < count($Arrayproduct); $i++) {
    $variable =  "creditProduct" . $i;
    if ($Arrayproduct[$i] == $creditProduct) {     
      $$variable = "checked=checked";
    } else {
      $$variable = "";
    }
  }
  ////check($Arrayproduct,"creditProduct",$creditProduct);
  $amount = $json[0]['Cre_amount'];
  $creditline = $json[0]['Cre_creditLine'];
  $pickUp = $json[0]['Cre_pickUp'];
  for ($i = 0; $i < count($Arrayyesno); $i++) {
    $variable =  "pickUp" . $i;
    if ($Arrayyesno[$i] == $pickUp) {     
      $$variable = "checked=checked";
    } else {
      $$variable = "";
    }
  }
  ////check($Arrayyesno,"pickUp",$pickUp);
  $term = $json[0]['Cre_term'];
  //Información básica solicitante
  $pLastname1 = $json[0]['Cre_pLastname1'];
  $pLastname2 = $json[0]['Cre_pLastname2'];
  $pName1 = $json[0]['Cre_pName1'];
  $pName2 = $json[0]['Cre_pName2'];
  $pDocType = $json[0]['Cre_pDocType'];
  for ($i = 0; $i < count($ArraytypeId); $i++) {
    $variable =  "pDocType" . $i;
    if ($ArraytypeId[$i] == $pDocType) {     
      $$variable = "checked=checked";
    } else {
      $$variable = "";
    }
  }
  //check($ArraytypeId,"pDocType",$pDocType);
  $pIdentification = $json[0]['Cre_pIdentification'];
  $pExpDate = $json[0]['Cre_pExpDate'];
  if(empty($pExpDate)){
    $pExpDate = "0000-00-00";
  }
  $newpExpDate = explode("-",$pExpDate);
  $pExpPlace = $json[0]['Cre_pExpPlace'];
  $pBornDate = $json[0]['Cre_pBornDate'];
  if(empty($pBornDate)){
    $pBornDate = "0000-00-00";
  }
  $newpBornDate = explode("-",$pBornDate);  
  $pDepartment = $json[0]['Cre_pDepartment'];
  $pTownship = $json[0]['Cre_pTownship'];
  $pNacionality = $json[0]['Cre_pNacionality'];
  $pCivilStatus = $json[0]['Cre_pCivilStatus'];
  for ($i = 0; $i < count($ArraycivilStatus); $i++) {
    $variable =  "pCivilStatus" . $i;
    if ($ArraycivilStatus[$i] == $pCivilStatus) {     
      $$variable = "checked=checked";
    } else {
      $$variable = "";
    }
  }
  //check($ArraycivilStatus,"pCivilStatus",$pCivilStatus);
  $pGender = $json[0]['Cre_pGender'];
  for ($i = 0; $i < count($Arraygener); $i++) {
    $variable =  "pGender" . $i;
    if ($Arraygener[$i] == $pGender) {     
      $$variable = "checked=checked";
    } else {
      $$variable = "";
    }
  }
  //check($Arraygener,"pGender",$pGender);
  $pDependents = $json[0]['Cre_pDependents'];
  $pProfession = $json[0]['Cre_pProfession'];
  $pEducationLevel = $json[0]['Cre_pEducationLevel'];
  for ($i = 0; $i < count($Arraystudy); $i++) {
    $variable =  "pEducationLevel" . $i;
    if ($Arraystudy[$i] == $pEducationLevel) {     
      $$variable = "checked=checked";
    } else {
      $$variable = "";
    }
  }
  //check($Arraystudy,"pEducationLevel",$pEducationLevel);
  $pLivingplaceType = $json[0]['Cre_pLivingplaceType'];
  for ($i = 0; $i < count($ArraytypeHome); $i++) {
    $variable =  "pLivingplaceType" . $i;
    if ($ArraytypeHome[$i] == $pLivingplaceType) {     
      $$variable = "checked=checked";
    } else {
      $$variable = "";
    }
  }
  //check($ArraytypeHome,"pLivingplaceType",$pLivingplaceType);
  $pResAddress = $json[0]['Cre_pResAddress'];
  $pResTel = $json[0]['Cre_pResTel'];
  $pCell = $json[0]['Cre_pCell'];
  $Department = $json[0]['Cre_department'];
  $pResCity = $json[0]['Cre_pResCity'];
  $pCorrespondence = $json[0]['Cre_pCorrespondence'];
  for ($i = 0; $i < count($ArraysendCorr); $i++) {
    $variable =  "pCorrespondence" . $i;
    if ($ArraysendCorr[$i] == $pCorrespondence) {     
      $$variable = "checked=checked";
    } else {
      $$variable = "";
    }
  }
  //check($ArraysendCorr,"pCorrespondence",$pCorrespondence);
  $pCellNotify = $json[0]['Cre_pCellNotify'];
  for ($i = 0; $i < count($Arrayyesno); $i++) {
    $variable =  "pCellNotify" . $i;
    if ($Arrayyesno[$i] == $pCellNotify) {     
      $$variable = "checked=checked";
    } else {
      $$variable = "";
    }
  }
  //check($Arrayyesno,"pCellNotify",$pCellNotify);
  $pEmail = $json[0]['Cre_pEmail'];  
//Datos del cónyugue
  $sLastname1 = $json[0]['Cre_sLastname1'];
  $sLastname2 = $json[0]['Cre_sLastname2'];
  $sName1 = $json[0]['Cre_sName1'];
  $sName2 = $json[0]['Cre_sName2'];
  $sDocType = $json[0]['Cre_sDocType'];
  for ($i = 0; $i < count($ArraytypeId2); $i++) {
    $variable =  "sDocType" . $i;
    if ($ArraytypeId2[$i] == $sDocType) {     
      $$variable = "checked=checked";
    } else {
      $$variable = "";
    }
  }
  //check($ArraytypeId2,"sDocType",$sDocType);
  $sIdentification = $json[0]['Cre_sIdentification'];
  $sCell = $json[0]['Cre_sCell'];
//Información laboral
  $wCompName = $json[0]['Cre_wCompName'];
  $wCompTel = $json[0]['Cre_wCompTel'];
  $wCompTelExt = $json[0]['Cre_wCompTelExt'];
  $wCompFax = $json[0]['Cre_wCompFax'];
  $wDepartment = $json[0]['Cre_wDepartment'];
  $wCity = $json[0]['Cre_wCity'];
  $wCompDir = $json[0]['Cre_wCompDir'];
  $wAdmiDate = $json[0]['Cre_wAdmiDate'];
  if(empty($wAdmiDate)){
    $wAdmiDate = "0000-00-00";
  }
  $newwAdmiDate = explode("-",$wAdmiDate);
  $wContractType = $json[0]['Cre_wContractType'];
  $wCharge = $json[0]['Cre_wCharge'];
  $wCivilServant = $json[0]['Cre_wCivilServant'];
  for ($i = 0; $i < count($Arrayyesno); $i++) {
    $variable =  "wCivilServant" . $i;
    if ($Arrayyesno[$i] == $wCivilServant) {     
      $$variable = "checked=checked";
    } else {
      $$variable = "";
    }
  }
  //check($Arrayyesno,"wCivilServant",$wCivilServant);
  $wPubResourAdmin = $json[0]['Cre_wPubResourAdmin'];
  for ($i = 0; $i < count($Arrayyesno); $i++) {
    $variable =  "wPubResourAdmin" . $i;
    if ($Arrayyesno[$i] == $wPubResourAdmin) {     
      $$variable = "checked=checked";
    } else {
      $$variable = "";
    }
  }
  //check($Arrayyesno,"wPubResourAdmin",$wPubResourAdmin);
  $wPubPerson = $json[0]['Cre_wPubPerson'];
  for ($i = 0; $i < count($Arrayyesno); $i++) {
    $variable =  "wPubPerson" . $i;
    if ($Arrayyesno[$i] == $wPubPerson) {     
      $$variable = "checked=checked";
    } else {
      $$variable = "";
    }
  }
  //check($Arrayyesno,"wPubPerson",$wPubPerson);
  $wCIIUDesc = $json[0]['Cre_wCIIUDesc'];
  $wCIIUCode = $json[0]['Cre_wCIIUCode'];
//Información financiera
  $monthlyInc = $json[0]['Cre_monthlyInc'];
  $monthlyEgr = $json[0]['Cre_monthlyEgr'];
  $immovabAssets = $json[0]['Cre_immovabAssets'];
  $othersInc = $json[0]['Cre_othersInc'];
  $descEgr = $json[0]['Cre_descEgr'];
  $vehiclesAssets = $json[0]['Cre_vehiclesAssets'];
  $othersDescInc = $json[0]['Cre_othersDescInc'];
  $totalEgr = $json[0]['Cre_totalEgr'];
  $othersAssets = $json[0]['Cre_othersAssets'];
  $totalInc = $json[0]['Cre_totalInc'];
  $totalAssets = $json[0]['Cre_totalAssets'];
  $totalLiabilities = $json[0]['Cre_totalLiabilities'];
  $totalHeritage = $json[0]['Cre_totalHeritage'];
  $lpType = $json[0]['Cre_lpType'];
  for ($i = 0; $i < count($ArraytypeHome); $i++) {
    $variable =  "lpType" . $i;
    if ($ArraytypeHome[$i] == $lpType) {     
      $$variable = "checked=checked";
    } else {
      $$variable = "";
    }
  }
  //check($ArraytypeHome,"lpType",$lpType);
  $lpOwner = $json[0]['Cre_lpOwner'];
  $lpValue = $json[0]['Cre_lpValue'];
  $lpMortgage = $json[0]['Cre_lpMortgage'];
  for ($i = 0; $i < count($Arrayyesno); $i++) {
    $variable =  "lpMortgage" . $i;
    if ($Arrayyesno[$i] == $lpMortgage) {     
      $$variable = "checked=checked";
    } else {
      $$variable = "";
    }
  }
  //check($Arrayyesno,"lpMortgage",$lpMortgage);
  $lpInFavorOf = $json[0]['Cre_lpInFavorOf'];
  $vehicle = $json[0]['Cre_vehicle'];
  for ($i = 0; $i < count($Arrayyesno); $i++) {
    $variable =  "vehicle" . $i;
    if ($Arrayyesno[$i] == $vehicle) {     
      $$variable = "checked=checked";
    } else {
      $$variable = "";
    }
  }
  //check($Arrayyesno,"vehicle",$vehicle);
  $vBrand = $json[0]['Cre_vBrand'];
  $vModel = $json[0]['Cre_vModel'];
  $vPlate = $json[0]['Cre_vPlate'];
  $vType = $json[0]['Cre_vType'];
  $vGarment = $json[0]['Cre_vGarment'];
  for ($i = 0; $i < count($Arrayyesno); $i++) {
    $variable =  "vGarment" . $i;
    if ($Arrayyesno[$i] == $vGarment) {     
      $$variable = "checked=checked";
    } else {
      $$variable = "";
    }
  }
  //check($Arrayyesno,"vGarment",$vGarment);
  $vFavorOf = $json[0]['Cre_vFavorOf'];
  $vComercialValue = $json[0]['Cre_vComercialValue'];
//Operaciones en moneda extranjera
  $fctransactions = $json[0]['Cre_fctransactions'];
  for ($i = 0; $i < count($Arrayyesno); $i++) {
    $variable =  "fctransactions" . $i;
    if ($Arrayyesno[$i] == $fctransactions) {     
      $$variable = "checked=checked";
    } else {
      $$variable = "";
    }
  }
  //check($Arrayyesno,"fctransactions",$fctransactions);
  $fcWhich = $json[0]['Cre_fcWhich'];
  $fcAccount = $json[0]['Cre_fcAccount'];
  for ($i = 0; $i < count($Arrayyesno); $i++) {
    $variable =  "fcAccount" . $i;
    if ($Arrayyesno[$i] == $fcAccount) {     
      $$variable = "checked=checked";
    } else {
      $$variable = "";
    }
  }
  //check($Arrayyesno,"fcAccount",$fcAccount);
  $fcAccountNumber = $json[0]['Cre_fcAccountNumber'];
  $fcBank = $json[0]['Cre_fcBank'];
  $fcCurrency = $json[0]['Cre_fcCurrency'];
  $fcCity = $json[0]['Cre_fcCity'];
  $fcCountry = $json[0]['Cre_fcCountry'];  
  $fcTransactionType = $json[0]['Cre_fcTransactionType'];
  for ($i = 0; $i < count($ArraytransacType); $i++) {
    $variable =  "fcTransactionType" . $i;
    if ($ArraytransacType[$i] == $fcTransactionType) {     
      $$variable = "checked=checked";
    } else {
      $$variable = "";
    }
  }
  //check($ArraytransacType,"fcTransactionType",$fcTransactionType);
  $fcWichTransac = $json[0]['Cre_fcWichTransac'];
//Referencias familiares
  $frName = $json[0]['Cre_frName'];
  $frCity = $json[0]['Cre_frCity'];
  $frPhone = $json[0]['Cre_frPhone'];
  $frRelationship = $json[0]['Cre_frRelationship'];
//Referencias personales
  $prName = $json[0]['Cre_prName'];
  $prCity = $json[0]['Cre_prCity'];
  $prTel = $json[0]['Cre_prTel'];
  $prCel = $json[0]['Cre_prCel'];
//Desembolso
  $oName = $json[0]['Cre_oName'];
  $oAccount = $json[0]['Cre_oAccount'];
  for ($i = 0; $i < count($Arrayaccount); $i++) {
    $variable =  "oAccount" . $i;
    if ($Arrayaccount[$i] == $oAccount) {     
      $$variable = "checked=checked";
    } else {
      $$variable = "";
    }
  }
  //check($Arrayaccount,"oAccount",$oAccount);
  $oEntity = $json[0]['Cre_oEntity'];
  $oAccountNumber = $json[0]['Cre_oAccountNumber'];
  $oCheckFor = $json[0]['Cre_oCheckFor'];
  $oIdentification = $json[0]['Cre_oIdentification'];
  $oValue = $json[0]['Cre_oValue'];
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
    <img src='../../img/forms/header2.png' class='header' style='height: 150px'>
  </div>
  <!--End Header-->
  <!--Start Content-->
  <div class='container'>
    <!--Line 0-->
    <div class='section-2'>
      <table class='tableSection-1'>
        <tr class='td-tall'>
          <td class='td-4'>fecha solicitud</td>
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
      <img src='../../img/forms/line_9.png' class='header' alt=''>
      <table class='tableSection-2'>
        <tr>
          <td class='td-5' >nuevo<input type='radio' name='requestType' $requestType0> novación
            <input type='radio' name='requestType' $requestType1> Modificación<input type='radio' name='requestType' $requestType2> 
          </td>
          <td class='td-8'>para producto de crédito - deudor <input type='radio' name='creditProduct' $creditProduct0> codeudor
          <input type='radio' name='creditProduct' $creditProduct1></td>
          <td style='width: 203px;'>monto solicitado $<label>$amount</label></td>
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr>
          <td class='td-8'>línea de crédito <label>$creditline</label></td>
          <td class='td-5'>recoge - si <input type='radio' name='pickUp' $pickUp0> no
          <input type='radio' name='pickUp' $pickUp1></td>
          <td style='width: 203px;'>Plazo(en meses) <label>$term</label></td>
        </tr>
      </table>
    </div>
    <!--Line 2-->
    <div class='section-2'>
      <img src='../../img/forms/line_10.png' class='header' alt=''>
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
          <input type='radio' name='pDocType' $pDocType1> r.c.<input type='radio' name='pDocType'$pDocType2>
          t.i.<input type='radio' name='pDocType' $pDocType3> pas<input type='radio' name='pDocType'$pDocType4> 
           </td>
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
          <td class='td-4-5'>lugar expedicion <label>$pExpPlace</label></td>          
          <td class='td-2'>fecha de nacimiento</td>
          <td class='td-1 center'><label>$newpBornDate[2]</label></td>
          <td class='td-1 center'><label>$newpBornDate[1]</label></td>
          <td class='td-1 center'><label>$newpBornDate[0]</label></td>
          <td style='width: 155px;'>ciudad <label>$pTownship</label></td>
          <td class='td-4'>departamento <label>$pDepartment</label></td> 
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr>         
          <td style='width: 188px;'>nacionalidad <label>$pNacionality</label></td>
          <td style='width: 403px;'>estado civil - soltero<input type='radio' name='pCivilStatus' $pCivilStatus0> separado<input
              type='radio' name='pCivilStatus' $pCivilStatus1> casado<input type='radio' name='pCivilStatus' $pCivilStatus2> unión libre<input type='radio'
              name='pCivilStatus' $pCivilStatus3> divorciado<input type='radio' name='pCivilStatus' $pCivilStatus4> viudo<input type='radio' name='pCivilStatus' 
              $pCivilStatus5></td>          
          <td style='width: 132px;'>sexo m<input type='radio' name='pGender' $pGender0> f<input type='radio' name='pGender' $pGender1></td>
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr>
          <td class='td-3'>núm. personas a cargo <label>$pDependents</label></td>
          <td style='width: 123px;'>profesión <label>$pProfession</label></td>
          <td class='td-12'>nivel de estudios - primaria<input type='radio' name='pEducationLevel' $pEducationLevel0>
            secundaria<input type='radio' name='pEducationLevel' $pEducationLevel1> universitario<input type='radio' name='pEducationLevel' $pEducationLevel2>
            técnico/tecnológico<input type='radio' name='pEducationLevel' $pEducationLevel3> postgrado<input type='radio' name='pEducationLevel' $pEducationLevel4>
            ninguno<input type='radio' name='pEducationLevel' $pEducationLevel5></td>         
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr>
          <td class='td-4 center'>tipo de vivienda - propia<input type='radio' name='pLivingplaceType' $pLivingplaceType0>
            arrendada<input type='radio' name='pLivingplaceType' $pLivingplaceType1> familiar<input type='radio' name='pLivingplaceType' $pLivingplaceType2>
          </td>
          <td style='width: 510px;'>dirección recidencia <label>$pResAddress</label></td>          
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr class='td-tall'>
          <td class='td-4-5'>teléfono residencia <label>$pResTel</label></td>
          <td style='width: 176px;'>teléfono móvil <label>$pCell</label></td>
          <td class='td-4-5'>departamento <label>$Department</label></td>
          <td class='td-4-5'>ciudad/municipio <label>$pResCity</label></td>
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr>
          <td style='width: 570px;'>envío correspondencia - E-mail personal<input type='radio' name='pCorrespondence' $pCorrespondence0>
            E-mail laboral<input type='radio' name='pCorrespondence' $pCorrespondence1> Dirección de residencia<input type='radio' name='pCorrespondence' $pCorrespondence2>
          </td>      
          <td class='td-4'>Vía celular - si<input type='radio' name='pCellNotify' $pCellNotify0>
            no<input type='radio' name='pCellNotify' $pCellNotify1>
          </td>     
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr class='td-tall'>
          <td style='width: 737px;'>e-mail personal <label>$pEmail</label></td>
        </tr>
      </table>
    </div>
    <!--Line 3-->
    <div class='section-2'>
      <img src='../../img/forms/line_11.png' class='header' alt=''>
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
          <td class='td-7'>tipo de documento de identificación - c.c.<input type='radio' name='sDocType' $sDocType0> c.e.<input type='radio'
          name='sDocType' $sDocType1> pas<input type='radio' name='sDocType' $sDocType2> </td>
          <td class='td-6'>identificación no. <label>$sIdentification</label></td>
          <td style='width: 203px;'>no. Celular. <label>$sCell</label></td>
        </tr>
      </table>
    </div>
    <!--Line 4-->
    <div class='section-2'>
      <img src='../../img/forms/line_12.png' class='header' alt=''>
      <table class='tableSection-2'>
        <tr class='td-tall'>
          <td class='td-9'>Nombre empresa/Negocio <label>$wCompName</label></td>
          <td class='td-5'>Teléfono empresa <label>$wCompTel</label></td>
          <td class='td-1'>Ext. <label>$wCompTelExt</label></td>
          <td style='width: 116px;'>fax <label>$wCompFax</label></td>
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr class='td-tall'>          
          <td style='width: 175px;'>departamento <label>$wDepartment</label></td>
          <td class='td-4'>ciudad/municipio <label>$wCity</label></td>
          <td class='td-4-5'>dirección empresa/oficina <label>$wCompDir</label></td>
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
          <td style='width: 203px;'>funcionario público - si<input type='radio' name='wCivilServant' $wCivilServant0> no <input type='radio'
            name='wCivilServant' $wCivilServant1></td>
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr>
          <td class='td-9'>administra recursos públicos - si<input type='radio' name='wPubResourAdmin' $wPubResourAdmin0>
            no <input type='radio' name='wPubResourAdmin' $wPubResourAdmin1></td>
          <td style='width: 370px;'>persona públicamente expuesta - si<input type='radio'
              name='wPubPerson' $wPubPerson0> no <input type='radio' name='wPubPerson' $wPubPerson1></td>
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr class='td-tall'>
          <td style='width: 570px;'>descripción actividad económica <label>$wCIIUDesc</label></td>
          <td class='td-4'>CIIU <label>$wCIIUCode</label></td>
        </tr>
      </table>
    </div>
    <!--Line 5-->
    <div class='section-2'>
      <img src='../../img/forms/line_13.png' class='header' alt=''>
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
      <table class='tableSection-4'>
        <tr>
          <td style='width: 250px;'>tipo de vivienda - propia<input type='radio' name='lpType' $lpType0>
          arrendada<input type='radio' name='lpType' $lpType1> familiar<input type='radio' name='lpType' $lpType2>
          </td>
          <td class='td-12'>nombre del propietario <label>$lpOwner</label></td>
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr>
          <td class='td-5'>valor comercial $<label>$lpValue</label></td>
          <td class='td-5'>hipoteca - si<input type='radio' name='lpMortgage' $lpMortgage0>
          no<input type='radio' name='lpMortgage' $lpMortgage1></td>
          <td style='width: 323px;'>a favor de <label>$lpInFavorOf</label></td>        
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr>
          <td class='td-3-4'>posee vehículo - si<input type='radio' name='vehicle' $vehicle0>
            no<input type='radio' name='vehicle' $vehicle1></td>
          <td class='td-3-4'>marca <label>$vBrand</label></td>        
          <td style='width: 149px;'>modelo <label>$vModel</label></td>  
          <td class='td-3-4'>placa <label>$vPlate</label></td>  
          <td class='td-3-4'>tipo <label>$vType</label></td>  
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr>
          <td class='td-3-4'>prenda - si<input type='radio' name='vGarment' $vGarment0>
            no<input type='radio' name='vGarment' $vGarment1></td>
          <td class='td-10'>a favor de <label>$vFavorOf</label></td>   
          <td style='width: 183px;'>valor comercial <label>$vComercialValue</label></td>      
        </tr>
      </table>
    </div>    
    <!--Footer-->
    <div class='footer'>    
      <!--Line 8-->
      <div class='section-2'>
        <img src='../../img/forms/line_15.png' class='header' alt=''>
        <table class='tableSection-4'>
          <tr class='td-tall'>
            <td class='td-6'>nombres y apellidos <label>$frName</label></td>
            <td class='td-4'>ciudad/municipio <label>$frCity</label></td>
            <td class='td-4'>teléfono fijo/móvil <label>$frPhone</label></td>
            <td style='width: 156px;'>parentesco <label>$frRelationship</label></td>
          </tr>
        </table>  
      </div>
    <!--Line 9-->
    <div class='section-2'>
      <img src='../../img/forms/line_16.png' class='header' alt=''>
      <table class='tableSection-4 section-2'>
        <tr class='td-tall'>
          <td class='td-6'>nombres y apellidos <label>$prName</label></td>
          <td class='td-4'>ciudad/municipio <label>$prCity</label></td>
          <td class='td-4'>teléfono fijo <label>$prTel</label></td>
          <td style='width: 156px;'>teléfono móvil <label>$prCel</label></td>
        </tr>
      </table>     
      <img src='../../img/forms/logo_super.png' class='header' style='height:40px; margin-top: 30px;'>
      </div>
    </div>
  </div>
  <!--End Content-->
  <!--Start Header-->
  <div>
    <img src='../../img/forms/header2.png' class='header' alt=''>
  </div>
  <!--End Header-->
  <!--Start Content-->
  <div class='container'>
    <!--General Info-->
    <div class='general-info'>
      <img src='../../img/forms/line_24.png' class='header' alt=''>
      <table class='tableSection-3' style='margin:auto'>
        <tr>
          <td style='width: 753px;' class='td-18 general'>
            DECLARACIÓN DE ORIGEN DE FONDOS<br>
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
                          type='//checkbox'>
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
    </div>
    <div class='creditInfo'>
      <img src='../../img/forms/line_22.png' class='header' alt=''>
      <table class='tableSection-4'>
        <tr class='td-tall'>
          <td style='width: 756px;' class='general'>
            Si esta solicitud es aprobada me comprometo a presentar de manera oportuna todos los documentos necesarios para el trámite de la garantía exigida, igualmente autorizo a
            COOMINOBRAS a realizar las inspecciones necesarias a los bienes registrados como destino de este crédito.
          </td>
       </tr>        
      </table>
    </div>
    <div class='disburInfo'>
      <img src='../../img/forms/line_23.png' class='header' alt=''>
      <table class='tableSection-4'>
        <tr class='td-tall'>
          <td style='width: 588px;'>autorizo realizar el desembolso a <label>$oName</label></td>
          <td class='td-4'>cuenta - ahorros<input type='radio' name='oAccount' $oAccount0> corriente <input
            type='radio' name='oAccount' $oAccount1></td>
        </tr>
      </table>
      <table class='tableSection-4'>
        <tr class='td-tall'>
          <td class='td-4'>entidad <label> $oEntity</label></td>
          <td class='td-3'>no. cuenta <label> $oAccountNumber</label></td>
          <td class='td-6'>cheque a nombre de <label> $oCheckFor</label></td>
          <td class='td-3'>identificación <label> $oIdentification</label></td>
          <td style='width: 87px;'>valor $<label> $oValue</label></td>
        </tr>
      </table>
      <table class='tableSection-7'>
        <tr>
          <td class='td-10 td-s'>En costancia de haber leído, entiendido y aceptado firmo la presente solicitud.
          <br>
          <label style='margin-top: 100px;'>firma</label>
          <hr/>
          <label>número de identificación</label>
          </td>
          <td class='td-5 td-s center'>
            <label style='margin-top: 120px;'>IMPRESIÓN DACTILAR</label>
          </td>          
          <td style='width: 141px;' class='td-s tdClearBorder-y1 center'> 
          <hr/><label>INDICAR CUAL FUE EL DEDO DE IMPRESIÓN</label>
          </td>
        </tr>        
      </table>
      <table class='tableSection-7'>
        <tr>
          <td style='width: 756px;' class='center textNormal tdClearBorder'>Los campos o espacios deben ser completamente diligenciados. La recepción de este formulario no implica compromiso para COOMINOBRAS<br>
          de aprobación de productos y una vez aprobado es indispensable que la empresa autorice el descuento por nómina.</td>
        </tr>        
      </table>
      <table class='tableSection-4'>
      <tr class='td-tall'>
        <td style='width: 756px;'>nombre de quien recepcionó documentación</td>
      </tr>        
    </table>
      <table class='tableSection-4'>
        <tr>
          <td class='td-2'>hora</td>
          <td class='td-2-3 center textNormal'>HH</td> 
          <td class='td-2-3 center textNormal'>MM</td>
          <td class='td-2 textNormal center'>am <input type='radio' name='hour'> pm <input
            type='radio' name='hour'></td>
          <td style='width: 368px;'>resultado - aceptada <input type='radio' name='accept'> rechazada <input
            type='radio' name='accept'></td>
        </tr>        
      </table>
      <table class='tableSection-4'>
        <tr class='td-tall'>
          <td class='td-9'>nombre de quien tramita</td>
          <td style='width: 389px;'>nombre de quien recibe y graba</td>
        </tr>        
      </table>
      <table class='tableSection-4'>
        <tr class='td-tall'>
          <td class='td-9'>nombre de quien verifica</td>
          <td style='width: 389px;'>nombre de quien aprueba</td>
        </tr>        
      </table>
      <table class='tableSection-4'>
        <tr class='td-tall'>
          <td class='tdClearBorder td-10'></td>
          <td class='td-2'>fecha y hora</td>
          <td style='width: 261px;'></td>
        </tr>        
      </table>
      <table class='tableSection-4'>
        <tr class='td-tall'>
          <td style='width: 756px;'>observaciones</td>
        </tr> 
      </table>
      <table class='tableSection-7'>
        <tr class='td-tall'>
          <td style='width: 756px;' class='tdClearBorder center textNormal'>Autorizamos de manera expresa e irrevocable a COOMINOBRAS, o a quien represente sus derechos, a consultar, solicitar, suministrar, reportar,<br>
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
        <label>FOCO 003 Formato de solicitud de crédito, revisión 002, Fecha 01-05-2020</label>        
      </div>
  </div>
</body>

</html>"
?>
<?php
require '../vendor/autoload.php';

$html;
$nameFile = $pIdentification.'_credit_form.pdf';

use Spipu\Html2Pdf\Html2Pdf;
//ob_start();
// require_once 'templatePHP.php';
// $html = ob_get_clean();
ob_end_clean();
$size = [216, 356];
$html2pdf = new Html2Pdf('p', $size, 'es', 'true', 'UTF-8', [0, 0, 0, 0]);
$html2pdf->writeHTML($html);
$type = $_GET['Type'];
if($type == "V"){
  $html2pdf->output($nameFile);
}
else if($type == "D"){
  $html2pdf->output($nameFile,"D");
}
?>