<?php
#Author: LAURA GRISALES
#Date: 26/05/2020
#Description : Is BO Credit
include "../dto/dto_membershipForm.php";
include "../dao/dao_membershipForm.php";
include "../../system/config.php";
header("Content-type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: https://coominobras.coop");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Access-Control-Allow-Origin, X-Requested-With");

class BoMembership
{
  private $objMembership;
  private $objBeneficiary;
  private $objDao;
  private $intValidate;

  public function __construct()
  {
    $this->objMembership = new DtoMembership();
    $this->objDao = new DaoMembership();
  }

  #Description: Function for create a new Membership
  public function newMembership($servIp, $hostHead, $webHead, $requestIp, $requestPort, $hash, $requestType, $requestDate, $city, $assoType, $pLastname1, $pLastname2, $pName1, $pName2, $pDocType, $pIdentification, $pExpDate, $pExpPlace, $pGender, $pBornDate, $pNacionality, $pTownship, $pDepartment, $pCivilStatus, $pLivingplaceType, $pResAddress, $pStratum, $pResTel, $pCell, $department, $pResCity, $pCorrespondence, $pEmail, $pProfession, $pEducationLevel, $sLastname1, $sLastname2, $sName1, $sName2, $sDocType, $sIdentification, $sCell, $wCompName, $wCompTel, $wCompTelExt, $wCompDir, $wDepartment, $wCity, $wAdmiDate, $wContractType, $wCharge, $wCivilServant, $wPubResourAdmin, $wPubPerson, $lRPubPerson, $wCompFax, $wEmail, $wCIIUDesc, $wCIIUCode, $monthlyInc, $monthlyEgr, $immovabAssets, $othersInc, $descEgr, $vehiclesAssets, $othersDescInc, $totalEgr, $othersAssets, $totalInc, $totalAssets, $totalLiabilities, $totalHeritage, $fctransactions, $fcWhich, $fcAccount, $fcAccountNumber, $fcBank, $fcCurrency, $fcCity, $fcCountry, $fcTransactionType, $fcWichTransac)
  {
    try {
      $this->objMembership->__setMembership($servIp, $hostHead, $webHead, $requestIp, $requestPort, $hash, $requestType, $requestDate, $city, $assoType, $pLastname1, $pLastname2, $pName1, $pName2, $pDocType, $pIdentification, $pExpDate, $pExpPlace, $pGender, $pBornDate, $pNacionality, $pTownship, $pDepartment, $pCivilStatus, $pLivingplaceType, $pResAddress, $pStratum, $pResTel, $pCell, $department, $pResCity, $pCorrespondence, $pEmail, $pProfession, $pEducationLevel, $sLastname1, $sLastname2, $sName1, $sName2, $sDocType, $sIdentification, $sCell, $wCompName, $wCompTel, $wCompTelExt, $wCompDir, $wDepartment, $wCity, $wAdmiDate, $wContractType, $wCharge, $wCivilServant, $wPubResourAdmin, $wPubPerson, $lRPubPerson, $wCompFax, $wEmail, $wCIIUDesc, $wCIIUCode, $monthlyInc, $monthlyEgr, $immovabAssets, $othersInc, $descEgr, $vehiclesAssets, $othersDescInc, $totalEgr, $othersAssets, $totalInc, $totalAssets, $totalLiabilities, $totalHeritage, $fctransactions, $fcWhich, $fcAccount, $fcAccountNumber, $fcBank, $fcCurrency, $fcCity, $fcCountry, $fcTransactionType, $fcWichTransac);
      @$intValidate = $this->objDao->newMembership($this->objMembership);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
      @$intValidate = 0;
    }
    return @$intValidate;
  }

  #Description: Function for select all memberships for search
  public function selectMembershipSearch($dataMembership, $user)
  {
    try {
      echo $this->objDao->selectMembershipSearch($dataMembership, $user);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
    }
  }

  #Description: Function for select security of the Membership
  public function selectMembershipSecurity($membershipId)
  {
    try {
      return $this->objDao->selectMembershipSecurity($membershipId);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
    }
  }

  #Description: Function for select Membership
  public function selectMembership($membershipId)
  {
    try {
      return $this->objDao->selectMembership($membershipId);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
    }
  }

  #Description: Function for create a new Beneficiary
  public function newBeneficiary($identification, $lastname1, $lastname2, $name1, $name2, $relationship, $percent, $mem)
  {
    try {
      $this->objMembership->__setBeneficiary($identification, $lastname1, $lastname2, $name1, $name2, $relationship, $percent, $mem);
      $intValidate = $this->objDao->newBeneficiary($this->objMembership);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
      $intValidate = 0;
    }
    return $intValidate;
  }

  #Description: Function for select Beneficiaries
  public function selectBeneficiaries($membershipId)
  {
    try {
      return $this->objDao->selectBeneficiaries($membershipId);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
    }
  }

  #Description: Function for update a status creditForm
  public function updateMembershipStatus($id, $stat_id)
  {
      try {
          $this->objMembership->__setMembershipstatus($id, $stat_id);
          $intValidate = $this->objDao->updateMembershipStatus($this->objMembership);
      } catch (Exception $e) {
          echo 'Exception captured: ', $e->getMessage(), "\n";
          $intValidate = 0;
      }
      return $intValidate;
  }
}

$obj = new BoMembership();
/// We get the json sent
$getData = file_get_contents('php://input');
@$data = json_decode($getData);

/**********CREATE ************/
if (isset($data->POST)) {
  if ($data->POST == "POST") {
    echo $obj->newMembership(IP_SERVER, NAME_BROWSER, HOST_HEADBOARD, IP_USER, REMOTE_PORT, @$data->Mem_hash, @$data->Mem_requestType, @$data->Mem_requestDate, @$data->Mem_city, @$data->Mem_assoType, @$data->Mem_pLastname1, @$data->Mem_pLastname2, @$data->Mem_pName1, @$data->Mem_pName2, @$data->Mem_pDocType, @$data->Mem_pIdentification, @$data->Mem_pExpDate, @$data->Mem_pExpPlace, @$data->Mem_pGender, @$data->Mem_pBornDate, @$data->Mem_pNacionality, @$data->Mem_pTownship, @$data->Mem_pDepartment, @$data->Mem_pCivilStatus, @$data->Mem_pLivingplaceType, @$data->Mem_pResAddress, @$data->Mem_pStratum, @$data->Mem_pResTel, @$data->Mem_pCell, @$data->Mem_department, @$data->Mem_pResCity, @$data->Mem_pCorrespondence, @$data->Mem_pEmail, @$data->Mem_pProfession, @$data->Mem_pEducationLevel, @$data->Mem_sLastname1, @$data->Mem_sLastname2, @$data->Mem_sName1, @$data->Mem_sName2, @$data->Mem_sDocType, @$data->Mem_sIdentification, @$data->Mem_sCell, @$data->Mem_wCompName, @$data->Mem_wCompTel, @$data->Mem_wCompTelExt, @$data->Mem_wCompDir, @$data->Mem_wDepartment, @$data->Mem_wCity, @$data->Mem_wAdmiDate, @$data->Mem_wContractType, @$data->Mem_wCharge, @$data->Mem_wCivilServant, @$data->Mem_wPubResourAdmin, @$data->Mem_wPubPerson, @$data->Mem_lRPubPerson, @$data->Mem_wCompFax, @$data->Mem_wEmail, @$data->Mem_wCIIUDesc, @$data->Mem_wCIIUCode, @$data->Mem_monthlyInc, @$data->Mem_monthlyEgr, @$data->Mem_immovabAssets, @$data->Mem_othersInc, @$data->Mem_descEgr, @$data->Mem_vehiclesAssets, @$data->Mem_othersDescInc, @$data->Mem_totalEgr, @$data->Mem_othersAssets, @$data->Mem_totalInc, @$data->Mem_totalAssets, @$data->Mem_totalLiabilities, @$data->Mem_totalHeritage, @$data->Mem_fctransactions, @$data->Mem_fcWhich, @$data->Mem_fcAccount, @$data->Mem_fcAccountNumber, @$data->Mem_fcBank, @$data->Mem_fcCurrency, @$data->Mem_fcCity, @$data->Mem_fcCountry, @$data->Mem_fcTransactionType, @$data->Mem_fcWichTransac);
  }
  if ($data->POST == "BENEFICIARY") {
    echo $obj->newBeneficiary(@$data->Ben_identification, @$data->Ben_lastName1, @$data->Ben_lastName2, @$data->Ben_name1, @$data->Ben_name2, @$data->Ben_relationship, @$data->Ben_percent, @$data->Mem_id);
  }
  if ($data->POST == "STATUS") {
    echo $obj->updateMembershipStatus($data->Mem_id, $data->Stat_id);
  }
}

/**********READ AND CONSULT ************/
if (isset($data->GET)) {
  // if ($data->GET == "GET") {
  //   echo $obj->selectCredit($data->Cre_id);
  // }
  if ($data->GET == "GET_SEARCH") {
    echo $obj->selectMembershipSearch(@$data->Mem_name, $data->User_id);
  }
  if ($data->GET == "GET_SECURITY") {
    echo $obj->selectMembershipSecurity(@$data->Mem_id);
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
//echo $obj->newMembership('', '', '', '', '', '', 'Asociación', '2020-05-20', 'Bogota', 'Primera Vez', 'Gripales', 'García', 'Laura', 'Marcela', 'CC', '1030633992', '2011-12-21', 'Bogotá', 'Femenino', '1993-10-02', 'Colombiana', 'Bogotá', 'Bogotá', 'Soltero', 'Familiar', 'Cr 90B 70A 32', '3', '4939192', '3123718175', 'Bogotá', 'Bogotá', NULL, 'lauragarcia@hotmail.com', 'Ingeniera de software', 'Universitario', 'Ocampo', 'Villabón', 'Edwin', 'Evelio', 'CC', '1022967014', '3213260495', 'We work', '1234657', '123', 'We work 99', 'Bogotá', 'Bogotá D.C.', '2020-01-01', 'Indefinido', 'Infraestructura', 'No', 'No', 'No', 'No', '1234567', 'e.ocampo@accenture.com', 'Equipos de cómputo', '62001', '1700000', '1100000', '5000000', '200000', 'Gastos personales', '10000000', 'Mantenimiento de equipos', '500000000', '200000', '19000000', '11000000', '5000000', '600000', 'Si', 'Divisas', 'Si', '12346598524-9', 'Banco Francés', 'Dólares', 'Paris', 'Francia', 'Pago Servicios', 'Lero lero');
//echo $obj->selectMembershipSearch('');
//echo $obj->selectMembership(1);
//echo $obj->selectCreditIdentification('830678098');
//echo $obj->newBeneficiary('1063985214', 'JIMÉNEZ', 'SÁNCHEZ', 'ANDRÉS', 'FELIPE', 'PAPÁ', '20', 4);
//echo $obj->updateMembershipStatus(16,11);

