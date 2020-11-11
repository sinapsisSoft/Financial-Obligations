<?php
#Author: LAURA GRISALES
#Date: 20/05/2020
#Description : Is DTO Credit
class DtoCredit
{
  private $Cre_id;
  private $Cre_servIp;
  private $Cre_servDate;
  private $Cre_hostHead;
  private $Cre_webHead;
  private $Cre_requestIp;
  private $Cre_requestPort;
  private $Cre_hash;
  private $Cre_requestDate;
  private $Cre_city;
  private $Cre_requestType;
  private $Cre_creditProduct;
  private $Cre_amount;
  private $Cre_creditLine;
  private $Cre_pickUp;
  private $Cre_term;
  private $Cre_pLastname1;
  private $Cre_pLastname2;
  private $Cre_pName1;
  private $Cre_pName2;
  private $Cre_pDocType;
  private $Cre_pIdentification;
  private $Cre_pExpDate;
  private $Cre_pExpPlace;
  private $Cre_pBornDate;
  private $Cre_pTownship;
  private $Cre_pDepartment;
  private $Cre_pNacionality;
  private $Cre_pCivilStatus;
  private $Cre_pGender;
  private $Cre_pDependents;
  private $Cre_pProfession;
  private $Cre_pEducationLevel;
  private $Cre_pLivingplaceType;
  private $Cre_pResAddress;
  private $Cre_pResTel;
  private $Cre_pCell;
  private $Cre_department;
  private $Cre_pResCity;
  private $Cre_pCorrespondence;
  private $Cre_pCellNotify;
  private $Cre_pEmail;
  private $Cre_sLastname1;
  private $Cre_sLastname2;
  private $Cre_sName1;
  private $Cre_sName2;
  private $Cre_sDocType;
  private $Cre_sIdentification;
  private $Cre_sCell;
  private $Cre_wCompName;
  private $Cre_wCompTel;
  private $Cre_wCompTelExt;
  private $Cre_wCompFax;
  private $Cre_wDepartment;
  private $Cre_wCity;
  private $Cre_wCompDir;
  private $Cre_wAdmiDate;
  private $Cre_wContractType;
  private $Cre_wCharge;
  private $Cre_wCivilServant;
  private $Cre_wPubResourAdmin;
  private $Cre_wPubPerson;
  private $Cre_wCIIUDesc;
  private $Cre_wCIIUCode;
  private $Cre_monthlyInc;
  private $Cre_monthlyEgr;
  private $Cre_immovabAssets;
  private $Cre_othersInc;
  private $Cre_descEgr;
  private $Cre_vehiclesAssets;
  private $Cre_othersDescInc;
  private $Cre_totalEgr;
  private $Cre_othersAssets;
  private $Cre_totalInc;
  private $Cre_totalAssets;
  private $Cre_totalLiabilities;
  private $Cre_totalHeritage;
  private $Cre_lpType;
  private $Cre_lpOwner;
  private $Cre_lpValue;
  private $Cre_lpMortgage;
  private $Cre_lpInFavorOf;
  private $Cre_vehicle;
  private $Cre_vBrand;
  private $Cre_vModel;
  private $Cre_vPlate;
  private $Cre_vType;
  private $Cre_vGarment;
  private $Cre_vFavorOf;
  private $Cre_vComercialValue;
  private $Cre_frName;
  private $Cre_frCity;
  private $Cre_frPhone;
  private $Cre_frRelationship;
  private $Cre_prName;
  private $Cre_prCity;
  private $Cre_prTel;
  private $Cre_prCel;
  private $Cre_fctransactions;
  private $Cre_fcWhich;
  private $Cre_fcAccount;
  private $Cre_fcAccountNumber;
  private $Cre_fcBank;
  private $Cre_fcCurrency;
  private $Cre_fcCity;
  private $Cre_fcCountry;
  private $Cre_fcTransactionType;
  private $Cre_fcWichTransac;
  private $Cre_oName;
  private $Cre_oAccount;
  private $Cre_oEntity;
  private $Cre_oAccountNumber;
  private $Cre_oCheckFor;
  private $Cre_oIdentification;
  private $Cre_oValue;
  private $Stat_id;

  public function __construct()
  {
  }
  public function __setCredit($Cre_servIp, $Cre_hostHead, $Cre_webHead, $Cre_requestIp, $Cre_requestPort, $Cre_hash, $Cre_requestDate, $Cre_city, $Cre_requestType, $Cre_creditProduct, $Cre_amount, $Cre_creditLine, $Cre_pickUp, $Cre_term, $Cre_pLastname1, $Cre_pLastname2, $Cre_pName1, $Cre_pName2, $Cre_pDocType, $Cre_pIdentification, $Cre_pExpDate, $Cre_pExpPlace, $Cre_pBornDate, $Cre_pTownship, $Cre_pDepartment, $Cre_pNacionality, $Cre_pCivilStatus, $Cre_pGender, $Cre_pDependents, $Cre_pProfession, $Cre_pEducationLevel, $Cre_pLivingplaceType, $Cre_pResAddress, $Cre_pResTel, $Cre_pCell, $Cre_department, $Cre_pResCity, $Cre_pCorrespondence, $Cre_pCellNotify, $Cre_pEmail, $Cre_sLastname1, $Cre_sLastname2, $Cre_sName1, $Cre_sName2, $Cre_sDocType, $Cre_sIdentification, $Cre_sCell, $Cre_wCompName, $Cre_wCompTel, $Cre_wCompTelExt, $Cre_wCompFax, $Cre_wDepartment, $Cre_wCity, $Cre_wCompDir, $Cre_wAdmiDate, $Cre_wContractType, $Cre_wCharge, $Cre_wCivilServant, $Cre_wPubResourAdmin, $Cre_wPubPerson, $Cre_wCIIUDesc, $Cre_wCIIUCode, $Cre_monthlyInc, $Cre_monthlyEgr, $Cre_immovabAssets, $Cre_othersInc, $Cre_descEgr, $Cre_vehiclesAssets, $Cre_othersDescInc, $Cre_totalEgr, $Cre_othersAssets, $Cre_totalInc, $Cre_totalAssets, $Cre_totalLiabilities, $Cre_totalHeritage, $Cre_lpType, $Cre_lpOwner, $Cre_lpValue, $Cre_lpMortgage, $Cre_lpInFavorOf, $Cre_vehicle, $Cre_vBrand, $Cre_vModel, $Cre_vPlate, $Cre_vType, $Cre_vGarment, $Cre_vFavorOf, $Cre_vComercialValue, $Cre_frName, $Cre_frCity, $Cre_frPhone, $Cre_frRelationship, $Cre_prName, $Cre_prCity, $Cre_prTel, $Cre_prCel, $Cre_fctransactions, $Cre_fcWhich, $Cre_fcAccount, $Cre_fcAccountNumber, $Cre_fcBank, $Cre_fcCurrency, $Cre_fcCity, $Cre_fcCountry, $Cre_fcTransactionType, $Cre_fcWichTransac, $Cre_oName, $Cre_oAccount, $Cre_oEntity, $Cre_oAccountNumber, $Cre_oCheckFor, $Cre_oIdentification, $Cre_oValue)
  {

    $this->Cre_servIp = $Cre_servIp;
    $this->Cre_hostHead = $Cre_hostHead;
    $this->Cre_webHead = $Cre_webHead;
    $this->Cre_requestIp = $Cre_requestIp;
    $this->Cre_requestPort = $Cre_requestPort;
    $this->Cre_hash = $Cre_hash;
    $this->Cre_requestDate = $Cre_requestDate;
    $this->Cre_city = $Cre_city;
    $this->Cre_requestType = $Cre_requestType;
    $this->Cre_creditProduct = $Cre_creditProduct;
    $this->Cre_amount = $Cre_amount;
    $this->Cre_creditLine = $Cre_creditLine;
    $this->Cre_pickUp = $Cre_pickUp;
    $this->Cre_term = $Cre_term;
    $this->Cre_pLastname1 = $Cre_pLastname1;
    $this->Cre_pLastname2 = $Cre_pLastname2;
    $this->Cre_pName1 = $Cre_pName1;
    $this->Cre_pName2 = $Cre_pName2;
    $this->Cre_pDocType = $Cre_pDocType;
    $this->Cre_pIdentification = $Cre_pIdentification;
    $this->Cre_pExpDate = $Cre_pExpDate;
    $this->Cre_pExpPlace = $Cre_pExpPlace;
    $this->Cre_pBornDate = $Cre_pBornDate;
    $this->Cre_pTownship = $Cre_pTownship;
    $this->Cre_pDepartment = $Cre_pDepartment;
    $this->Cre_pNacionality = $Cre_pNacionality;
    $this->Cre_pCivilStatus = $Cre_pCivilStatus;
    $this->Cre_pGender = $Cre_pGender;
    $this->Cre_pDependents = $Cre_pDependents;
    $this->Cre_pProfession = $Cre_pProfession;
    $this->Cre_pEducationLevel = $Cre_pEducationLevel;
    $this->Cre_pLivingplaceType = $Cre_pLivingplaceType;
    $this->Cre_pResAddress = $Cre_pResAddress;
    $this->Cre_pResTel = $Cre_pResTel;
    $this->Cre_pCell = $Cre_pCell;
    $this->Cre_department = $Cre_department;
    $this->Cre_pResCity = $Cre_pResCity;
    $this->Cre_pCorrespondence = $Cre_pCorrespondence;
    $this->Cre_pCellNotify = $Cre_pCellNotify;
    $this->Cre_pEmail = $Cre_pEmail;
    $this->Cre_sLastname1 = $Cre_sLastname1;
    $this->Cre_sLastname2 = $Cre_sLastname2;
    $this->Cre_sName1 = $Cre_sName1;
    $this->Cre_sName2 = $Cre_sName2;
    $this->Cre_sDocType = $Cre_sDocType;
    $this->Cre_sIdentification = $Cre_sIdentification;
    $this->Cre_sCell = $Cre_sCell;
    $this->Cre_wCompName = $Cre_wCompName;
    $this->Cre_wCompTel = $Cre_wCompTel;
    $this->Cre_wCompTelExt = $Cre_wCompTelExt;
    $this->Cre_wCompFax = $Cre_wCompFax;
    $this->Cre_wDepartment = $Cre_wDepartment;
    $this->Cre_wCity = $Cre_wCity;
    $this->Cre_wCompDir = $Cre_wCompDir;
    $this->Cre_wAdmiDate = $Cre_wAdmiDate;
    $this->Cre_wContractType = $Cre_wContractType;
    $this->Cre_wCharge = $Cre_wCharge;
    $this->Cre_wCivilServant = $Cre_wCivilServant;
    $this->Cre_wPubResourAdmin = $Cre_wPubResourAdmin;
    $this->Cre_wPubPerson = $Cre_wPubPerson;
    $this->Cre_wCIIUDesc = $Cre_wCIIUDesc;
    $this->Cre_wCIIUCode = $Cre_wCIIUCode;
    $this->Cre_monthlyInc = $Cre_monthlyInc;
    $this->Cre_monthlyEgr = $Cre_monthlyEgr;
    $this->Cre_immovabAssets = $Cre_immovabAssets;
    $this->Cre_othersInc = $Cre_othersInc;
    $this->Cre_descEgr = $Cre_descEgr;
    $this->Cre_vehiclesAssets = $Cre_vehiclesAssets;
    $this->Cre_othersDescInc = $Cre_othersDescInc;
    $this->Cre_totalEgr = $Cre_totalEgr;
    $this->Cre_othersAssets = $Cre_othersAssets;
    $this->Cre_totalInc = $Cre_totalInc;
    $this->Cre_totalAssets = $Cre_totalAssets;
    $this->Cre_totalLiabilities = $Cre_totalLiabilities;
    $this->Cre_totalHeritage = $Cre_totalHeritage;
    $this->Cre_lpType = $Cre_lpType;
    $this->Cre_lpOwner = $Cre_lpOwner;
    $this->Cre_lpValue = $Cre_lpValue;
    $this->Cre_lpMortgage = $Cre_lpMortgage;
    $this->Cre_lpInFavorOf = $Cre_lpInFavorOf;
    $this->Cre_vehicle = $Cre_vehicle;
    $this->Cre_vBrand = $Cre_vBrand;
    $this->Cre_vModel = $Cre_vModel;
    $this->Cre_vPlate = $Cre_vPlate;
    $this->Cre_vType = $Cre_vType;
    $this->Cre_vGarment = $Cre_vGarment;
    $this->Cre_vFavorOf = $Cre_vFavorOf;
    $this->Cre_vComercialValue = $Cre_vComercialValue;
    $this->Cre_frName = $Cre_frName;
    $this->Cre_frCity = $Cre_frCity;
    $this->Cre_frPhone = $Cre_frPhone;
    $this->Cre_frRelationship = $Cre_frRelationship;
    $this->Cre_prName = $Cre_prName;
    $this->Cre_prCity = $Cre_prCity;
    $this->Cre_prTel = $Cre_prTel;
    $this->Cre_prCel = $Cre_prCel;
    $this->Cre_fctransactions = $Cre_fctransactions;
    $this->Cre_fcWhich = $Cre_fcWhich;
    $this->Cre_fcAccount = $Cre_fcAccount;
    $this->Cre_fcAccountNumber = $Cre_fcAccountNumber;
    $this->Cre_fcBank = $Cre_fcBank;
    $this->Cre_fcCurrency = $Cre_fcCurrency;
    $this->Cre_fcCity = $Cre_fcCity;
    $this->Cre_fcCountry = $Cre_fcCountry;
    $this->Cre_fcTransactionType = $Cre_fcTransactionType;
    $this->Cre_fcWichTransac = $Cre_fcWichTransac;
    $this->Cre_oName = $Cre_oName;
    $this->Cre_oAccount = $Cre_oAccount;
    $this->Cre_oEntity = $Cre_oEntity;
    $this->Cre_oAccountNumber = $Cre_oAccountNumber;
    $this->Cre_oCheckFor = $Cre_oCheckFor;
    $this->Cre_oIdentification = $Cre_oIdentification;
    $this->Cre_oValue = $Cre_oValue;
  }

  public function __setCreditstatus($id, $stat)
  {
    $this->Cre_id = $id;
    $this->Stat_id = $stat;
  }

  public function __getCredit()
  {
    $objCre = new DtoCredit();
    $objCre->__getId();
    $objCre->__getservIp();
    $objCre->__getservDate();
    $objCre->__gethostHead();
    $objCre->__getwebHead();
    $objCre->__getrequestIp();
    $objCre->__getrequestPort();
    $objCre->__getHash();
    $objCre->__getRequestDate();
    $objCre->__getCity();
    $objCre->__getRequestType();
    $objCre->__getCreditProduct();
    $objCre->__getAmount();
    $objCre->__getCreditLine();
    $objCre->__getPickUp();
    $objCre->__getTerm();
    $objCre->__getpLastname1();
    $objCre->__getpLastname2();
    $objCre->__getpName1();
    $objCre->__getpName2();
    $objCre->__getpDocType();
    $objCre->__getpIdentification();
    $objCre->__getpExpDate();
    $objCre->__getpExpPlace();
    $objCre->__getpBornDate();
    $objCre->__getpTownship();
    $objCre->__getpDepartment();
    $objCre->__getpNacionality();
    $objCre->__getpCivilStatus();
    $objCre->__getpGender();
    $objCre->__getpDependents();
    $objCre->__getpProfession();
    $objCre->__getpEducationLevel();
    $objCre->__getpLivingplaceType();
    $objCre->__getpResAddress();
    $objCre->__getpResTel();
    $objCre->__getpCell();
    $objCre->__getdepartment();
    $objCre->__getpResCity();
    $objCre->__getpCorrespondence();
    $objCre->__getpCellNotify();
    $objCre->__getpEmail();
    $objCre->__getsLastname1();
    $objCre->__getsLastname2();
    $objCre->__getsName1();
    $objCre->__getsName2();
    $objCre->__getsDocType();
    $objCre->__getsIdentification();
    $objCre->__getsCell();
    $objCre->__getwCompName();
    $objCre->__getwCompTel();
    $objCre->__getwCompTelExt();
    $objCre->__getwCompFax();
    $objCre->__getwDepartment();
    $objCre->__getwCity();
    $objCre->__getwCompDir();
    $objCre->__getwAdmiDate();
    $objCre->__getwContractType();
    $objCre->__getwCharge();
    $objCre->__getwCivilServant();
    $objCre->__getwPubResourAdmin();
    $objCre->__getwPubPerson();
    $objCre->__getwCIIUDesc();
    $objCre->__getwCIIUCode();
    $objCre->__getmonthlyInc();
    $objCre->__getmonthlyEgr();
    $objCre->__getimmovabAssets();
    $objCre->__getothersInc();
    $objCre->__getdescEgr();
    $objCre->__getvehiclesAssets();
    $objCre->__getothersDescInc();
    $objCre->__gettotalEgr();
    $objCre->__getothersAssets();
    $objCre->__gettotalInc();
    $objCre->__gettotalAssets();
    $objCre->__gettotalLiabilities();
    $objCre->__gettotalHeritage();
    $objCre->__getlpType();
    $objCre->__getlpOwner();
    $objCre->__getlpValue();
    $objCre->__getlpMortgage();
    $objCre->__getlpInFavorOf();
    $objCre->__getvehicle();
    $objCre->__getvBrand();
    $objCre->__getvModel();
    $objCre->__getvPlate();
    $objCre->__getvType();
    $objCre->__getvGarment();
    $objCre->__getvFavorOf();
    $objCre->__getvComercialValue();
    $objCre->__getfrName();
    $objCre->__getfrCity();
    $objCre->__getfrPhone();
    $objCre->__getfrRelationship();
    $objCre->__getprName();
    $objCre->__getprCity();
    $objCre->__getprTel();
    $objCre->__getprCel();
    $objCre->__getfctransactions();
    $objCre->__getfcWhich();
    $objCre->__getfcAccount();
    $objCre->__getfcAccountNumber();
    $objCre->__getfcBank();
    $objCre->__getfcCurrency();
    $objCre->__getfcCity();
    $objCre->__getfcCountry();
    $objCre->__getfcTransactionType();
    $objCre->__getfcWichTransac();
    $objCre->__getoName();
    $objCre->__getoAccount();
    $objCre->__getoEntity();
    $objCre->__getoAccountNumber();
    $objCre->__getoCheckFor();
    $objCre->__getoIdentification();
    $objCre->__getoValue();
    $objCre->__getStat_id();
    return $objCre;
  }
  //SET Credit
  public function __setId($id)
  {
    $this->Cre_id = $id;
  }
  public function __setservIp($servIp)
  {
    $this->Cre_servIp = $servIp;
  }
  public function __setservDate($servDate)
  {
    $this->Cre_servDate = $servDate;
  }
  public function __sethostHead($hostHead)
  {
    $this->Cre_hostHead = $hostHead;
  }
  public function __setwebHead($webHead)
  {
    $this->Cre_webHead = $webHead;
  }
  public function __setrequestIp($requestIp)
  {
    $this->Cre_requestIp = $requestIp;
  }
  public function __setrequestPort($requestPort)
  {
    $this->Cre_requestPort = $requestPort;
  }
  public function __setHash($hash)
  {
    $this->Cre_hash = $hash;
  }
  public function __setRequestDate($requestDate)
  {
    $this->Cre_requestDate = $requestDate;
  }
  public function __setCity($City)
  {
    $this->Cre_city = $City;
  }
  public function __setRequestType($requestType)
  {
    $this->Cre_requestType = $requestType;
  }
  public function __setCreditProduct($creditProduct)
  {
    $this->Cre_creditProduct = $creditProduct;
  }
  public function __setAmount($amount)
  {
    $this->Cre_amount = $amount;
  }
  public function __setCreditLine($creditLine)
  {
    $this->Cre_creditLine = $creditLine;
  }
  public function __setPickUp($pickUp)
  {
    $this->Cre_pickUp = $pickUp;
  }
  public function __setTerm($term)
  {
    $this->Cre_term = $term;
  }
  public function __setpLastname1($pLastname1)
  {
    $this->Cre_pLastname1 = $pLastname1;
  }
  public function __setpLastname2($pLastname2)
  {
    $this->Cre_pLastname2 = $pLastname2;
  }
  public function __setpName1($pName1)
  {
    $this->Cre_pName1 = $pName1;
  }
  public function __setpName2($pName2)
  {
    $this->Cre_pName2 = $pName2;
  }
  public function __setpDocType($pDocType)
  {
    $this->Cre_pDocType = $pDocType;
  }
  public function __setpIdentification($pIdentification)
  {
    $this->Cre_pIdentification = $pIdentification;
  }
  public function __setpExpDate($pExpDate)
  {
    $this->Cre_pExpDate = $pExpDate;
  }
  public function __setpExpPlace($pExpPlace)
  {
    $this->Cre_pExpPlace = $pExpPlace;
  }
  public function __setpBornDate($pBornDate)
  {
    $this->Cre_pBornDate = $pBornDate;
  }
  public function __setpTownship($PTownship)
  {
    $this->Cre_pTownship = $PTownship;
  }
  public function __setpDepartment($pDepartment)
  {
    $this->Cre_pDepartment = $pDepartment;
  }
  public function __setpNacionality($pNacionality)
  {
    $this->Cre_pNacionality = $pNacionality;
  }
  public function __setpCivilStatus($pCivilStatus)
  {
    $this->Cre_pCivilStatus = $pCivilStatus;
  }
  public function __setpGender($pGender)
  {
    $this->Cre_pGender = $pGender;
  }
  public function __setpDependents($pDependents)
  {
    $this->Cre_pDependents = $pDependents;
  }
  public function __setpProfession($pProfession)
  {
    $this->Cre_pProfession = $pProfession;
  }
  public function __setpEducationLevel($pEducationLevel)
  {
    $this->Cre_pEducationLevel = $pEducationLevel;
  }
  public function __setpLivingplaceType($pLivingplaceType)
  {
    $this->Cre_pLivingplaceType = $pLivingplaceType;
  }
  public function __setpResAddress($pResAddress)
  {
    $this->Cre_pResAddress = $pResAddress;
  }
  public function __setpResTel($pResTel)
  {
    $this->Cre_pResTel = $pResTel;
  }
  public function __setpCell($pCell)
  {
    $this->Cre_pCell = $pCell;
  }
  public function __setdepartment($department)
  {
    $this->Cre_department = $department;
  }
  public function __setpResCity($pResCity)
  {
    $this->Cre_pResCity = $pResCity;
  }
  public function __setpCorrespondence($pCorrespondence)
  {
    $this->Cre_pCorrespondence = $pCorrespondence;
  }
  public function __setpCellNotify($pCellNotify)
  {
    $this->Cre_pCellNotify = $pCellNotify;
  }
  public function __setpEmail($pEmail)
  {
    $this->Cre_pEmail = $pEmail;
  }
  public function __setsLastname1($sLastname1)
  {
    $this->Cre_sLastname1 = $sLastname1;
  }
  public function __setsLastname2($sLastname2)
  {
    $this->Cre_sLastname2 = $sLastname2;
  }
  public function __setsName1($sName1)
  {
    $this->Cre_sName1 = $sName1;
  }
  public function __setsName2($sName2)
  {
    $this->Cre_sName2 = $sName2;
  }
  public function __setsDocType($sDocType)
  {
    $this->Cre_sDocType = $sDocType;
  }
  public function __setsIdentification($sIdentification)
  {
    $this->Cre_sIdentification = $sIdentification;
  }
  public function __setsCell($sCell)
  {
    $this->Cre_sCell = $sCell;
  }
  public function __setwCompName($wCompName)
  {
    $this->Cre_wCompName = $wCompName;
  }
  public function __setwCompTel($wCompTel)
  {
    $this->Cre_wCompTel = $wCompTel;
  }
  public function __setwCompTelExt($wCompTelExt)
  {
    $this->Cre_wCompTelExt = $wCompTelExt;
  }
  public function __setwCompFax($wCompFax)
  {
    $this->Cre_wCompFax = $wCompFax;
  }
  public function __setwDepartment($wDepartment)
  {
    $this->Cre_wDepartment = $wDepartment;
  }
  public function __setwCity($wCity)
  {
    $this->Cre_wCity = $wCity;
  }
  public function __setwCompDir($wCompDir)
  {
    $this->Cre_wCompDir = $wCompDir;
  }
  public function __setwAdmiDate($wAdmiDate)
  {
    $this->Cre_wAdmiDate = $wAdmiDate;
  }
  public function __setwContractType($wContractType)
  {
    $this->Cre_wContractType = $wContractType;
  }
  public function __setwCharge($wCharge)
  {
    $this->Cre_wCharge = $wCharge;
  }
  public function __setwCivilServant($wCivilServant)
  {
    $this->Cre_wCivilServant = $wCivilServant;
  }
  public function __setwPubResourAdmin($wPubResourAdmin)
  {
    $this->Cre_wPubResourAdmin = $wPubResourAdmin;
  }
  public function __setwPubPerson($wPubPerson)
  {
    $this->Cre_wPubPerson = $wPubPerson;
  }
  public function __setwCIIUDesc($wCIIUDesc)
  {
    $this->Cre_wCIIUDesc = $wCIIUDesc;
  }
  public function __setwCIIUCode($wCIIUCode)
  {
    $this->Cre_wCIIUCode = $wCIIUCode;
  }
  public function __setmonthlyInc($monthlyInc)
  {
    $this->Cre_monthlyInc = $monthlyInc;
  }
  public function __setmonthlyEgr($monthlyEgr)
  {
    $this->Cre_monthlyEgr = $monthlyEgr;
  }
  public function __setimmovabAssets($immovabAssets)
  {
    $this->Cre_immovabAssets = $immovabAssets;
  }
  public function __setothersInc($othersInc)
  {
    $this->Cre_othersInc = $othersInc;
  }
  public function __setdescEgr($descEgr)
  {
    $this->Cre_descEgr = $descEgr;
  }
  public function __setvehiclesAssets($vehiclesAssets)
  {
    $this->Cre_vehiclesAssets = $vehiclesAssets;
  }
  public function __setothersDescInc($othersDescInc)
  {
    $this->Cre_othersDescInc = $othersDescInc;
  }
  public function __settotalEgr($totalEgr)
  {
    $this->Cre_totalEgr = $totalEgr;
  }
  public function __setothersAssets($othersAssets)
  {
    $this->Cre_othersAssets = $othersAssets;
  }
  public function __settotalInc($totalInc)
  {
    $this->Cre_totalInc = $totalInc;
  }
  public function __settotalAssets($totalAssets)
  {
    $this->Cre_totalAssets = $totalAssets;
  }
  public function __settotalLiabilities($totalLiabilities)
  {
    $this->Cre_totalLiabilities = $totalLiabilities;
  }
  public function __settotalHeritage($totalHeritage)
  {
    $this->Cre_totalHeritage = $totalHeritage;
  }
  public function __setlpType($lpType)
  {
    $this->Cre_lpType = $lpType;
  }
  public function __setlpOwner($lpOwner)
  {
    $this->Cre_lpOwner = $lpOwner;
  }
  public function __setlpValue($lpValue)
  {
    $this->Cre_lpValue = $lpValue;
  }
  public function __setlpMortgage($lpMortgage)
  {
    $this->Cre_lpMortgage = $lpMortgage;
  }
  public function __setlpInFavorOf($lpInFavorOf)
  {
    $this->Cre_lpInFavorOf = $lpInFavorOf;
  }
  public function __setvehicle($vehicle)
  {
    $this->Cre_vehicle = $vehicle;
  }
  public function __setvBrand($vBrand)
  {
    $this->Cre_vBrand = $vBrand;
  }
  public function __setvModel($vModel)
  {
    $this->Cre_vModel = $vModel;
  }
  public function __setvPlate($vPlate)
  {
    $this->Cre_vPlate = $vPlate;
  }
  public function __setvType($vType)
  {
    $this->Cre_vType = $vType;
  }
  public function __setvGarment($vGarment)
  {
    $this->Cre_vGarment = $vGarment;
  }
  public function __setvFavorOf($vFavorOf)
  {
    $this->Cre_vFavorOf = $vFavorOf;
  }
  public function __setvComercialValue($vComercialValue)
  {
    $this->Cre_vComercialValue = $vComercialValue;
  }
  public function __setfrName($frName)
  {
    $this->Cre_frName = $frName;
  }
  public function __setfrCity($frCity)
  {
    $this->Cre_frCity = $frCity;
  }
  public function __setfrPhone($frPhone)
  {
    $this->Cre_frPhone = $frPhone;
  }
  public function __setfrRelationship($frRelationship)
  {
    $this->Cre_frRelationship = $frRelationship;
  }
  public function __setprName($prName)
  {
    $this->Cre_prName = $prName;
  }
  public function __setprCity($prCity)
  {
    $this->Cre_prCity = $prCity;
  }
  public function __setprTel($prTel)
  {
    $this->Cre_prTel = $prTel;
  }
  public function __setprCel($prCel)
  {
    $this->Cre_prCel = $prCel;
  }
  public function __setfctransactions($fctransactions)
  {
    $this->Cre_fctransactions = $fctransactions;
  }
  public function __setfcWhich($fcWhich)
  {
    $this->Cre_fcWhich = $fcWhich;
  }
  public function __setfcAccount($fcAccount)
  {
    $this->Cre_fcAccount = $fcAccount;
  }
  public function __setfcAccountNumber($fcAccountNumber)
  {
    $this->Cre_fcAccountNumber = $fcAccountNumber;
  }
  public function __setfcBank($fcBank)
  {
    $this->Cre_fcBank = $fcBank;
  }
  public function __setfcCurrency($fcCurrency)
  {
    $this->Cre_fcCurrency = $fcCurrency;
  }
  public function __setfcCity($fcCity)
  {
    $this->Cre_fcCity = $fcCity;
  }
  public function __setfcCountry($fcCountry)
  {
    $this->Cre_fcCountry = $fcCountry;
  }
  public function __setfcTransactionType($fcTransactionType)
  {
    $this->Cre_fcTransactionType = $fcTransactionType;
  }
  public function __setfcWichTransac($fcWichTransac)
  {
    $this->Cre_fcWichTransac = $fcWichTransac;
  }
  public function __setoName($oName)
  {
    $this->Cre_oName = $oName;
  }
  public function __setoAccount($oAccount)
  {
    $this->Cre_oAccount = $oAccount;
  }
  public function __setoEntity($oEntity)
  {
    $this->Cre_oEntity = $oEntity;
  }
  public function __setoAccountNumber($oAccountNumber)
  {
    $this->Cre_oAccountNumber = $oAccountNumber;
  }
  public function __setoCheckFor($oCheckFor)
  {
    $this->Cre_oCheckFor = $oCheckFor;
  }
  public function __setoIdentification($oIdentification)
  {
    $this->Cre_oIdentification = $oIdentification;
  }
  public function __setoValue($oValue)
  {
    $this->Cre_oValue = $oValue;
  }
  public function __setStat_id($stat_id)
  {
    $this->Stat_id = $stat_id;
  }
  //GET Credit
  public function __getId()
  {
    return $this->Cre_id;
  }
  public function __getservIp()
  {
    return $this->Cre_servIp;
  }
  public function __getservDate()
  {
    return $this->Cre_servDate;
  }
  public function __gethostHead()
  {
    return $this->Cre_hostHead;
  }
  public function __getwebHead()
  {
    return $this->Cre_webHead;
  }
  public function __getrequestIp()
  {
    return $this->Cre_requestIp;
  }
  public function __getrequestPort()
  {
    return $this->Cre_requestPort;
  }
  public function __getHash()
  {
    return $this->Cre_hash;
  }
  public function __getRequestDate()
  {
    return $this->Cre_requestDate;
  }
  public function __getCity()
  {
    return $this->Cre_city;
  }
  public function __getRequestType()
  {
    return $this->Cre_requestType;
  }
  public function __getCreditProduct()
  {
    return $this->Cre_creditProduct;
  }
  public function __getAmount()
  {
    return $this->Cre_amount;
  }
  public function __getCreditLine()
  {
    return $this->Cre_creditLine;
  }
  public function __getPickUp()
  {
    return $this->Cre_pickUp;
  }
  public function __getTerm()
  {
    return $this->Cre_term;
  }
  public function __getpLastname1()
  {
    return $this->Cre_pLastname1;
  }
  public function __getpLastname2()
  {
    return $this->Cre_pLastname2;
  }
  public function __getpName1()
  {
    return $this->Cre_pName1;
  }
  public function __getpName2()
  {
    return $this->Cre_pName2;
  }
  public function __getpDocType()
  {
    return $this->Cre_pDocType;
  }
  public function __getpIdentification()
  {
    return $this->Cre_pIdentification;
  }
  public function __getpExpDate()
  {
    return $this->Cre_pExpDate;
  }
  public function __getpExpPlace()
  {
    return $this->Cre_pExpPlace;
  }
  public function __getpBornDate()
  {
    return $this->Cre_pBornDate;
  }
  public function __getpTownship()
  {
    return $this->Cre_pTownship;
  }
  public function __getpDepartment()
  {
    return $this->Cre_pDepartment;
  }
  public function __getpNacionality()
  {
    return $this->Cre_pNacionality;
  }
  public function __getpCivilStatus()
  {
    return $this->Cre_pCivilStatus;
  }
  public function __getpGender()
  {
    return $this->Cre_pGender;
  }
  public function __getpDependents()
  {
    return $this->Cre_pDependents;
  }
  public function __getpProfession()
  {
    return $this->Cre_pProfession;
  }
  public function __getpEducationLevel()
  {
    return $this->Cre_pEducationLevel;
  }
  public function __getpLivingplaceType()
  {
    return $this->Cre_pLivingplaceType;
  }
  public function __getpResAddress()
  {
    return $this->Cre_pResAddress;
  }
  public function __getpResTel()
  {
    return $this->Cre_pResTel;
  }
  public function __getpCell()
  {
    return $this->Cre_pCell;
  }
  public function __getdepartment()
  {
    return $this->Cre_department;
  }
  public function __getpResCity()
  {
    return $this->Cre_pResCity;
  }
  public function __getpCorrespondence()
  {
    return $this->Cre_pCorrespondence;
  }
  public function __getpCellNotify()
  {
    return $this->Cre_pCellNotify;
  }
  public function __getpEmail()
  {
    return $this->Cre_pEmail;
  }
  public function __getsLastname1()
  {
    return $this->Cre_sLastname1;
  }
  public function __getsLastname2()
  {
    return $this->Cre_sLastname2;
  }
  public function __getsName1()
  {
    return $this->Cre_sName1;
  }
  public function __getsName2()
  {
    return $this->Cre_sName2;
  }
  public function __getsDocType()
  {
    return $this->Cre_sDocType;
  }
  public function __getsIdentification()
  {
    return $this->Cre_sIdentification;
  }
  public function __getsCell()
  {
    return $this->Cre_sCell;
  }
  public function __getwCompName()
  {
    return $this->Cre_wCompName;
  }
  public function __getwCompTel()
  {
    return $this->Cre_wCompTel;
  }
  public function __getwCompTelExt()
  {
    return $this->Cre_wCompTelExt;
  }
  public function __getwCompFax()
  {
    return $this->Cre_wCompFax;
  }
  public function __getwDepartment()
  {
    return $this->Cre_wDepartment;
  }
  public function __getwCity()
  {
    return $this->Cre_wCity;
  }
  public function __getwCompDir()
  {
    return $this->Cre_wCompDir;
  }
  public function __getwAdmiDate()
  {
    return $this->Cre_wAdmiDate;
  }
  public function __getwContractType()
  {
    return $this->Cre_wContractType;
  }
  public function __getwCharge()
  {
    return $this->Cre_wCharge;
  }
  public function __getwCivilServant()
  {
    return $this->Cre_wCivilServant;
  }
  public function __getwPubResourAdmin()
  {
    return $this->Cre_wPubResourAdmin;
  }
  public function __getwPubPerson()
  {
    return $this->Cre_wPubPerson;
  }
  public function __getwCIIUDesc()
  {
    return $this->Cre_wCIIUDesc;
  }
  public function __getwCIIUCode()
  {
    return $this->Cre_wCIIUCode;
  }
  public function __getmonthlyInc()
  {
    return $this->Cre_monthlyInc;
  }
  public function __getmonthlyEgr()
  {
    return $this->Cre_monthlyEgr;
  }
  public function __getimmovabAssets()
  {
    return $this->Cre_immovabAssets;
  }
  public function __getothersInc()
  {
    return $this->Cre_othersInc;
  }
  public function __getdescEgr()
  {
    return $this->Cre_descEgr;
  }
  public function __getvehiclesAssets()
  {
    return $this->Cre_vehiclesAssets;
  }
  public function __getothersDescInc()
  {
    return $this->Cre_othersDescInc;
  }
  public function __gettotalEgr()
  {
    return $this->Cre_totalEgr;
  }
  public function __getothersAssets()
  {
    return $this->Cre_othersAssets;
  }
  public function __gettotalInc()
  {
    return $this->Cre_totalInc;
  }
  public function __gettotalAssets()
  {
    return $this->Cre_totalAssets;
  }
  public function __gettotalLiabilities()
  {
    return $this->Cre_totalLiabilities;
  }
  public function __gettotalHeritage()
  {
    return $this->Cre_totalHeritage;
  }
  public function __getlpType()
  {
    return $this->Cre_lpType;
  }
  public function __getlpOwner()
  {
    return $this->Cre_lpOwner;
  }
  public function __getlpValue()
  {
    return $this->Cre_lpValue;
  }
  public function __getlpMortgage()
  {
    return $this->Cre_lpMortgage;
  }
  public function __getlpInFavorOf()
  {
    return $this->Cre_lpInFavorOf;
  }
  public function __getvehicle()
  {
    return $this->Cre_vehicle;
  }
  public function __getvBrand()
  {
    return $this->Cre_vBrand;
  }
  public function __getvModel()
  {
    return $this->Cre_vModel;
  }
  public function __getvPlate()
  {
    return $this->Cre_vPlate;
  }
  public function __getvType()
  {
    return $this->Cre_vType;
  }
  public function __getvGarment()
  {
    return $this->Cre_vGarment;
  }
  public function __getvFavorOf()
  {
    return $this->Cre_vFavorOf;
  }
  public function __getvComercialValue()
  {
    return $this->Cre_vComercialValue;
  }
  public function __getfrName()
  {
    return $this->Cre_frName;
  }
  public function __getfrCity()
  {
    return $this->Cre_frCity;
  }
  public function __getfrPhone()
  {
    return $this->Cre_frPhone;
  }
  public function __getfrRelationship()
  {
    return $this->Cre_frRelationship;
  }
  public function __getprName()
  {
    return $this->Cre_prName;
  }
  public function __getprCity()
  {
    return $this->Cre_prCity;
  }
  public function __getprTel()
  {
    return $this->Cre_prTel;
  }
  public function __getprCel()
  {
    return $this->Cre_prCel;
  }
  public function __getfctransactions()
  {
    return $this->Cre_fctransactions;
  }
  public function __getfcWhich()
  {
    return $this->Cre_fcWhich;
  }
  public function __getfcAccount()
  {
    return $this->Cre_fcAccount;
  }
  public function __getfcAccountNumber()
  {
    return $this->Cre_fcAccountNumber;
  }
  public function __getfcBank()
  {
    return $this->Cre_fcBank;
  }
  public function __getfcCurrency()
  {
    return $this->Cre_fcCurrency;
  }
  public function __getfcCity()
  {
    return $this->Cre_fcCity;
  }
  public function __getfcCountry()
  {
    return $this->Cre_fcCountry;
  }
  public function __getfcTransactionType()
  {
    return $this->Cre_fcTransactionType;
  }
  public function __getfcWichTransac()
  {
    return $this->Cre_fcWichTransac;
  }
  public function __getoName()
  {
    return $this->Cre_oName;
  }
  public function __getoAccount()
  {
    return $this->Cre_oAccount;
  }
  public function __getoEntity()
  {
    return $this->Cre_oEntity;
  }
  public function __getoAccountNumber()
  {
    return $this->Cre_oAccountNumber;
  }
  public function __getoCheckFor()
  {
    return $this->Cre_oCheckFor;
  }
  public function __getoIdentification()
  {
    return $this->Cre_oIdentification;
  }
  public function __getoValue()
  {
    return $this->Cre_oValue;
  }
  public function __getStat_id()
  {
    return $this->Stat_id;
  }
}
