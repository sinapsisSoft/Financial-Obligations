<?php
#Author: LAURA GRISALES
#Date: 26/05/2020
#Description : Is BO Credit
include "../dto/dto_creditForm.php";
include "../dao/dao_creditForm.php";
include "../../system/config.php";
header("Content-type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: https://coominobras.coop");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Access-Control-Allow-Origin, X-Requested-With");

class BoCredit
{
  private $objCredit;
  private $objDao;
  private $intValidate;

  public function __construct()
  {
    $this->objCredit = new DtoCredit();
    $this->objDao = new DaoCredit();
  }

  #Description: Function for create a new Credit
  public function newCredit($servIp, $hostHead, $webHead, $requestIp, $requestPort, $hash, $requestDate, $city, $requestType, $creditProduct, $amount, $creditLine, $pickUp, $term, $pLastname1, $pLastname2, $pName1, $pName2, $pDocType, $pIdentification, $pExpDate, $pExpPlace, $pBornDate, $pTownship, $pDepartment, $pNacionality, $pCivilStatus, $pGender, $pDependents, $pProfession, $pEducationLevel, $pLivingplaceType, $pResAddress, $pResTel, $pCell, $department, $pResCity, $pCorrespondence, $pCellNotify, $pEmail, $sLastname1, $sLastname2, $sName1, $sName2, $sDocType, $sIdentification, $sCell, $wCompName, $wCompTel, $wCompTelExt, $wCompFax, $wDepartment, $wCity, $wCompDir, $wAdmiDate, $wContractType, $wCharge, $wCivilServant, $wPubResourAdmin, $wPubPerson, $wCIIUDesc, $wCIIUCode, $monthlyInc, $monthlyEgr, $immovabAssets, $othersInc, $descEgr, $vehiclesAssets, $othersDescInc, $totalEgr, $othersAssets, $totalInc, $totalAssets, $totalLiabilities, $totalHeritage, $lpType, $lpOwner, $lpValue, $lpMortgage, $lpInFavorOf, $vehicle, $vBrand, $vModel, $vPlate, $vType, $vGarment, $vFavorOf, $vComercialValue, $frName, $frCity, $frPhone, $frRelationship, $prName, $prCity, $prTel, $prCel, $fctransactions, $fcWhich, $fcAccount, $fcAccountNumber, $fcBank, $fcCurrency, $fcCity, $fcCountry, $fcTransactionType, $fcWichTransac, $oName, $oAccount, $oEntity, $oAccountNumber, $oCheckFor, $oIdentification, $oValue)
  {
    try {
      $this->objCredit->__setCredit($servIp, $hostHead, $webHead, $requestIp, $requestPort, $hash, $requestDate, $city, $requestType, $creditProduct, $amount, $creditLine, $pickUp, $term, $pLastname1, $pLastname2, $pName1, $pName2, $pDocType, $pIdentification, $pExpDate, $pExpPlace, $pBornDate, $pTownship, $pDepartment, $pNacionality, $pCivilStatus, $pGender, $pDependents, $pProfession, $pEducationLevel, $pLivingplaceType, $pResAddress, $pResTel, $pCell, $department, $pResCity, $pCorrespondence, $pCellNotify, $pEmail, $sLastname1, $sLastname2, $sName1, $sName2, $sDocType, $sIdentification, $sCell, $wCompName, $wCompTel, $wCompTelExt, $wCompFax, $wDepartment, $wCity, $wCompDir, $wAdmiDate, $wContractType, $wCharge, $wCivilServant, $wPubResourAdmin, $wPubPerson, $wCIIUDesc, $wCIIUCode, $monthlyInc, $monthlyEgr, $immovabAssets, $othersInc, $descEgr, $vehiclesAssets, $othersDescInc, $totalEgr, $othersAssets, $totalInc, $totalAssets, $totalLiabilities, $totalHeritage, $lpType, $lpOwner, $lpValue, $lpMortgage, $lpInFavorOf, $vehicle, $vBrand, $vModel, $vPlate, $vType, $vGarment, $vFavorOf, $vComercialValue, $frName, $frCity, $frPhone, $frRelationship, $prName, $prCity, $prTel, $prCel, $fctransactions, $fcWhich, $fcAccount, $fcAccountNumber, $fcBank, $fcCurrency, $fcCity, $fcCountry, $fcTransactionType, $fcWichTransac, $oName, $oAccount, $oEntity, $oAccountNumber, $oCheckFor, $oIdentification, $oValue);
      $intValidate = $this->objDao->newCredit($this->objCredit);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
      $intValidate = 0;
    }
    return $intValidate;
  }

  #Description: Function for select all credits for search
  public function selectCreditSearch($dataCredit, $user)
  {
    try {
      echo $this->objDao->selectCreditSearch($dataCredit, $user);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
    }
  }

  #Description: Function for select security of the credit
  public function selectCreditSecurity($creditId)
  {
    try {
      echo $this->objDao->selectCreditSecurity($creditId);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
    }
  }

  #Description: Function for select Credit
  public function selectCredit($creditId)
  {
    try {
      return $this->objDao->selectCredit($creditId);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
    }
  }

  #Description: Function for select all entities
  public function selectEntities($comp_id)
  {
    try {
      echo $this->objDao->selectEntities($comp_id);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
    }
  }

  #Description: Function for update a status creditForm
  public function updateCreditStatus($id, $stat_id)
  {
      try {
          $this->objCredit->__setCreditstatus($id, $stat_id);
          $intValidate = $this->objDao->updateCreditStatus($this->objCredit);
      } catch (Exception $e) {
          echo 'Exception captured: ', $e->getMessage(), "\n";
          $intValidate = 0;
      }
      return $intValidate;
  }

}

$obj = new BoCredit();
/// We get the json sent
$getData = file_get_contents('php://input');
$data = json_decode($getData);

/**********CREATE ************/
if (isset($data->POST)) {
  if ($data->POST == "POST") {
    echo $obj->newCredit(IP_SERVER, NAME_BROWSER, HOST_HEADBOARD, IP_USER, REMOTE_PORT, @$data->Cre_hash, @$data->Cre_requestDate, @$data->Cre_city, @$data->Cre_requestType, @$data->Cre_creditProduct, @$data->Cre_amount, @$data->Cre_creditLine, @$data->Cre_pickUp, @$data->Cre_term, @$data->Cre_pLastname1, @$data->Cre_pLastname2, @$data->Cre_pName1, @$data->Cre_pName2, @$data->Cre_pDocType, @$data->Cre_pIdentification, @$data->Cre_pExpDate, @$data->Cre_pExpPlace, @$data->Cre_pBornDate, @$data->Cre_pTownship, @$data->Cre_pDepartment, @$data->Cre_pNacionality, @$data->Cre_pCivilStatus, @$data->Cre_pGender, @$data->Cre_pDependents, @$data->Cre_pProfession, @$data->Cre_pEducationLevel, @$data->Cre_pLivingplaceType, @$data->Cre_pResAddress, @$data->Cre_pResTel, @$data->Cre_pCell, @$data->Cre_department, @$data->Cre_pResCity, @$data->Cre_pCorrespondence, @$data->Cre_pCellNotify, @$data->Cre_pEmail, @$data->Cre_sLastname1, @$data->Cre_sLastname2, @$data->Cre_sName1, @$data->Cre_sName2, @$data->Cre_sDocType, @$data->Cre_sIdentification, @$data->Cre_sCell, @$data->Cre_wCompName, @$data->Cre_wCompTel, @$data->Cre_wCompTelExt, @$data->Cre_wCompFax, @$data->Cre_wDepartment, @$data->Cre_wCity, @$data->Cre_wCompDir, @$data->Cre_wAdmiDate, @$data->Cre_wContractType, @$data->Cre_wCharge, @$data->Cre_wCivilServant, @$data->Cre_wPubResourAdmin, @$data->Cre_wPubPerson, @$data->Cre_wCIIUDesc, @$data->Cre_wCIIUCode, @$data->Cre_monthlyInc, @$data->Cre_monthlyEgr, @$data->Cre_immovabAssets, @$data->Cre_othersInc, @$data->Cre_descEgr, @$data->Cre_vehiclesAssets, @$data->Cre_othersDescInc, @$data->Cre_totalEgr, @$data->Cre_othersAssets, @$data->Cre_totalInc, @$data->Cre_totalAssets, @$data->Cre_totalLiabilities, @$data->Cre_totalHeritage, @$data->Cre_lpType, @$data->Cre_lpOwner, @$data->Cre_lpValue, @$data->Cre_lpMortgage, @$data->Cre_lpInFavorOf, @$data->Cre_vehicle, @$data->Cre_vBrand, @$data->Cre_vModel, @$data->Cre_vPlate, @$data->Cre_vType, @$data->Cre_vGarment, @$data->Cre_vFavorOf, @$data->Cre_vComercialValue, @$data->Cre_frName, @$data->Cre_frCity, @$data->Cre_frPhone, @$data->Cre_frRelationship, @$data->Cre_prName, @$data->Cre_prCity, @$data->Cre_prTel, @$data->Cre_prCel, @$data->Cre_fctransactions, @$data->Cre_fcWhich, @$data->Cre_fcAccount, @$data->Cre_fcAccountNumber, @$data->Cre_fcBank, @$data->Cre_fcCurrency, @$data->Cre_fcCity, @$data->Cre_fcCountry, @$data->Cre_fcTransactionType, @$data->Cre_fcWichTransac, @$data->Cre_oName, @$data->Cre_oAccount, @$data->Cre_oEntity, @$data->Cre_oAccountNumber, @$data->Cre_oCheckFor, @$data->Cre_oIdentification, @$data->Cre_oValue);
  }  
  if ($data->POST == "ENTITIES") {
    echo $obj->selectEntities($data->Comp_id);
  }
  if ($data->POST == "STATUS") {
    echo $obj->updateCreditStatus($data->Cre_id, $data->Stat_id);
  }
}

/**********READ AND CONSULT ************/
if (isset($data->GET)) {
  // if ($data->GET == "GET") {
  //   echo $obj->selectCredit(@$data->Cre_id);
  // }
  if ($data->GET == "GET_SEARCH") {
    echo $obj->selectCreditSearch(@$data->Cre_name, $data->User_id);
  }
  if ($data->GET == "GET_SECURITY") {
    echo $obj->selectCreditSecurity(@$data->Cre_id);
  }  
}

/********** UPDATE ************/
if (isset($data->PUT)) {
  if ($data->PUT == "PUT") { }
}

/********** DELETE  ************/
if (isset($data->DELETE)) {
  if ($data->DELETE == "DELETE") { }
}
/**********************/
//echo $obj->newCredit(IP_SERVER, NAME_BROWSER, HOST_HEADBOARD, IP_USER, REMOTE_PORT, '', '2020-05-09', 'Bogotá', 'Nuevo', 'Codeudor', '3000000', 'Libranza', 'No', '36', 'Nuñez', 'Pereira', 'Lucas', 'Antonio', 'CC', '1018479734', '2013-10-15', 'Bogotá', '1995-10-05', 'Bogotá', 'Bogotá', 'Colombiana', 'Casado', 'Femenino', '0', 'Estudiante', 'Postgrado', 'Familiar', 'Call 70A 96 - 32 Int 8 Apto 202', '1234567', '3005263698', 'Bogotá D.C.', 'Bogotá D.C.', 'E-mail personal', 'No', 'lucasantoniopereira@hotmail.com', 'Roncancio', 'Moreno', 'Martha', 'Fernanda', 'PAS', 'ACJZ45612', '3012583697', 'Contadores Ltda', '4523698', '2', '4523698', 'Bogotá D.C.', 'Bogotá D.C.', 'Av 89 12 35 Sur', '2015-06-01', 'Término indefinido', 'Contador público', 'No', 'No', 'No', 'Actividades de contaduría', '4312', '6500000', '4200000', '43000000', '200000', 'Gastos personales de alimentación, comida y trasnporte', '100000000', 'Teabajos de contaduría por días', '4200000', '0', '6700000', '530000000', '530000000', '0', 'Familiar', 'Miguel Lugo Contreras', '430000000', 'No', NULL, 'Si', 'Mercedes', '2020', 'AJG123', 'Vehículo', 'No', NULL, '100000000', 'Camilo Romero', 'Bogotá D.C.', '3056321458', 'Primo', 'Nicolás Martinez', 'Bogotá D.C.', '3123659878', '3123659878', 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lugo', 'Corriente', 'Bancolombia', '12365487515-96', 'Lugo Perenjano', '123456789', '5000000');
//echo $obj->selectCreditSearch('',3);
// echo $obj->selectCredit(1);
//echo $obj->selectCreditIdentification('830678098');
//echo $obj->selectEntities(1);
//echo $obj->updateCreditStatus(1,11);
