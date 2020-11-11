<?php
#Author: LAURA GRISALES
#Date: 03/06/2020
#Description : Is DTO Membership
class DtoMembership
{
  private $Mem_id;
  private $Mem_servIp;
  private $Mem_servDate;
  private $Mem_hostHead;
  private $Mem_webHead;
  private $Mem_requestIp;
  private $Mem_requestPort;
  private $Mem_hash;
  private $Mem_requestType;
  private $Mem_requestDate;
  private $Mem_city;
  private $Mem_assoType;
  private $Mem_pLastname1;
  private $Mem_pLastname2;
  private $Mem_pName1;
  private $Mem_pName2;
  private $Mem_pDocType;
  private $Mem_pIdentification;
  private $Mem_pExpDate;
  private $Mem_pExpPlace;
  private $Mem_pGender;
  private $Mem_pBornDate;
  private $Mem_pNacionality;
  private $Mem_pTownship;
  private $Mem_pDepartment;
  private $Mem_pCivilStatus;
  private $Mem_pLivingplaceType;
  private $Mem_pResAddress;
  private $Mem_pStratum;
  private $Mem_pResTel;
  private $Mem_pCell;
  private $Mem_department;
  private $Mem_pResCity;
  private $Mem_pCorrespondence;
  private $Mem_pEmail;
  private $Mem_pProfession;
  private $Mem_pEducationLevel;
  private $Mem_sLastname1;
  private $Mem_sLastname2;
  private $Mem_sName1;
  private $Mem_sName2;
  private $Mem_sDocType;
  private $Mem_sIdentification;
  private $Mem_sCell;
  private $Mem_wCompName;
  private $Mem_wCompTel;
  private $Mem_wCompTelExt;
  private $Mem_wCompDir;
  private $Mem_wDepartment;
  private $Mem_wCity;
  private $Mem_wAdmiDate;
  private $Mem_wContractType;
  private $Mem_wCharge;
  private $Mem_wCivilServant;
  private $Mem_wPubResourAdmin;
  private $Mem_wPubPerson;
  private $Mem_lRPubPerson;
  private $Mem_wCompFax;
  private $Mem_wEmail;
  private $Mem_wCIIUDesc;
  private $Mem_wCIIUCode;
  private $Mem_monthlyInc;
  private $Mem_monthlyEgr;
  private $Mem_immovabAssets;
  private $Mem_othersInc;
  private $Mem_descEgr;
  private $Mem_vehiclesAssets;
  private $Mem_othersDescInc;
  private $Mem_totalEgr;
  private $Mem_othersAssets;
  private $Mem_totalInc;
  private $Mem_totalAssets;
  private $Mem_totalLiabilities;
  private $Mem_totalHeritage;
  private $Mem_fctransactions;
  private $Mem_fcWhich;
  private $Mem_fcAccount;
  private $Mem_fcAccountNumber;
  private $Mem_fcBank;
  private $Mem_fcCurrency;
  private $Mem_fcCity;
  private $Mem_fcCountry;
  private $Mem_fcTransactionType;
  private $Mem_fcWichTransac;
  private $Stat_id;
  //Beneficiary
  private $Ben_id;
  private $Ben_identification;
  private $Ben_lastName1;
  private $Ben_lastName2;
  private $Ben_name1;
  private $Ben_name2;
  private $Ben_relationship;
  private $Ben_percent;

  public function __construct()
  {
  }
  public function __setMembership($Mem_servIp, $Mem_hostHead, $Mem_webHead, $Mem_requestIp, $Mem_requestPort, $Mem_hash, $Mem_requestType, $Mem_requestDate, $Mem_city, $Mem_assoType, $Mem_pLastname1, $Mem_pLastname2, $Mem_pName1, $Mem_pName2, $Mem_pDocType, $Mem_pIdentification, $Mem_pExpDate, $Mem_pExpPlace, $Mem_pGender, $Mem_pBornDate, $Mem_pNacionality, $Mem_pTownship, $Mem_pDepartment, $Mem_pCivilStatus, $Mem_pLivingplaceType, $Mem_pResAddress, $Mem_pStratum, $Mem_pResTel, $Mem_pCell, $Mem_department, $Mem_pResCity, $Mem_pCorrespondence, $Mem_pEmail, $Mem_pProfession, $Mem_pEducationLevel, $Mem_sLastname1, $Mem_sLastname2, $Mem_sName1, $Mem_sName2, $Mem_sDocType, $Mem_sIdentification, $Mem_sCell, $Mem_wCompName, $Mem_wCompTel, $Mem_wCompTelExt, $Mem_wCompDir, $Mem_wDepartment, $Mem_wCity, $Mem_wAdmiDate, $Mem_wContractType, $Mem_wCharge, $Mem_wCivilServant, $Mem_wPubResourAdmin, $Mem_wPubPerson, $Mem_lRPubPerson, $Mem_wCompFax, $Mem_wEmail, $Mem_wCIIUDesc, $Mem_wCIIUCode, $Mem_monthlyInc, $Mem_monthlyEgr, $Mem_immovabAssets, $Mem_othersInc, $Mem_descEgr, $Mem_vehiclesAssets, $Mem_othersDescInc, $Mem_totalEgr, $Mem_othersAssets, $Mem_totalInc, $Mem_totalAssets, $Mem_totalLiabilities, $Mem_totalHeritage, $Mem_fctransactions, $Mem_fcWhich, $Mem_fcAccount, $Mem_fcAccountNumber, $Mem_fcBank, $Mem_fcCurrency, $Mem_fcCity, $Mem_fcCountry, $Mem_fcTransactionType, $Mem_fcWichTransac)
  {

    $this->Mem_servIp = $Mem_servIp;
    $this->Mem_hostHead = $Mem_hostHead;
    $this->Mem_webHead = $Mem_webHead;
    $this->Mem_requestIp = $Mem_requestIp;
    $this->Mem_requestPort = $Mem_requestPort;
    $this->Mem_hash = $Mem_hash;
    $this->Mem_requestType = $Mem_requestType;
    $this->Mem_requestDate = $Mem_requestDate;
    $this->Mem_city = $Mem_city;
    $this->Mem_assoType = $Mem_assoType;
    $this->Mem_pLastname1 = $Mem_pLastname1;
    $this->Mem_pLastname2 = $Mem_pLastname2;
    $this->Mem_pName1 = $Mem_pName1;
    $this->Mem_pName2 = $Mem_pName2;
    $this->Mem_pDocType = $Mem_pDocType;
    $this->Mem_pIdentification = $Mem_pIdentification;
    $this->Mem_pExpDate = $Mem_pExpDate;
    $this->Mem_pExpPlace = $Mem_pExpPlace;
    $this->Mem_pGender = $Mem_pGender;
    $this->Mem_pBornDate = $Mem_pBornDate;
    $this->Mem_pNacionality = $Mem_pNacionality;
    $this->Mem_pTownship = $Mem_pTownship;
    $this->Mem_pDepartment = $Mem_pDepartment;
    $this->Mem_pCivilStatus = $Mem_pCivilStatus;
    $this->Mem_pLivingplaceType = $Mem_pLivingplaceType;
    $this->Mem_pResAddress = $Mem_pResAddress;
    $this->Mem_pStratum = $Mem_pStratum;
    $this->Mem_pResTel = $Mem_pResTel;
    $this->Mem_pCell = $Mem_pCell;
    $this->Mem_department = $Mem_department;
    $this->Mem_pResCity = $Mem_pResCity;
    $this->Mem_pCorrespondence = $Mem_pCorrespondence;
    $this->Mem_pEmail = $Mem_pEmail;
    $this->Mem_pProfession = $Mem_pProfession;
    $this->Mem_pEducationLevel = $Mem_pEducationLevel;
    $this->Mem_sLastname1 = $Mem_sLastname1;
    $this->Mem_sLastname2 = $Mem_sLastname2;
    $this->Mem_sName1 = $Mem_sName1;
    $this->Mem_sName2 = $Mem_sName2;
    $this->Mem_sDocType = $Mem_sDocType;
    $this->Mem_sIdentification = $Mem_sIdentification;
    $this->Mem_sCell = $Mem_sCell;
    $this->Mem_wCompName = $Mem_wCompName;
    $this->Mem_wCompTel = $Mem_wCompTel;
    $this->Mem_wCompTelExt = $Mem_wCompTelExt;
    $this->Mem_wCompDir = $Mem_wCompDir;
    $this->Mem_wDepartment = $Mem_wDepartment;
    $this->Mem_wCity = $Mem_wCity;
    $this->Mem_wAdmiDate = $Mem_wAdmiDate;
    $this->Mem_wContractType = $Mem_wContractType;
    $this->Mem_wCharge = $Mem_wCharge;
    $this->Mem_wCivilServant = $Mem_wCivilServant;
    $this->Mem_wPubResourAdmin = $Mem_wPubResourAdmin;
    $this->Mem_wPubPerson = $Mem_wPubPerson;
    $this->Mem_lRPubPerson = $Mem_lRPubPerson;
    $this->Mem_wCompFax = $Mem_wCompFax;
    $this->Mem_wEmail = $Mem_wEmail;
    $this->Mem_wCIIUDesc = $Mem_wCIIUDesc;
    $this->Mem_wCIIUCode = $Mem_wCIIUCode;
    $this->Mem_monthlyInc = $Mem_monthlyInc;
    $this->Mem_monthlyEgr = $Mem_monthlyEgr;
    $this->Mem_immovabAssets = $Mem_immovabAssets;
    $this->Mem_othersInc = $Mem_othersInc;
    $this->Mem_descEgr = $Mem_descEgr;
    $this->Mem_vehiclesAssets = $Mem_vehiclesAssets;
    $this->Mem_othersDescInc = $Mem_othersDescInc;
    $this->Mem_totalEgr = $Mem_totalEgr;
    $this->Mem_othersAssets = $Mem_othersAssets;
    $this->Mem_totalInc = $Mem_totalInc;
    $this->Mem_totalAssets = $Mem_totalAssets;
    $this->Mem_totalLiabilities = $Mem_totalLiabilities;
    $this->Mem_totalHeritage = $Mem_totalHeritage;
    $this->Mem_fctransactions = $Mem_fctransactions;
    $this->Mem_fcWhich = $Mem_fcWhich;
    $this->Mem_fcAccount = $Mem_fcAccount;
    $this->Mem_fcAccountNumber = $Mem_fcAccountNumber;
    $this->Mem_fcBank = $Mem_fcBank;
    $this->Mem_fcCurrency = $Mem_fcCurrency;
    $this->Mem_fcCity = $Mem_fcCity;
    $this->Mem_fcCountry = $Mem_fcCountry;
    $this->Mem_fcTransactionType = $Mem_fcTransactionType;
    $this->Mem_fcWichTransac = $Mem_fcWichTransac;
    
  }
  public function __setBeneficiary($Ben_identification, $Ben_lastName1, $Ben_lastName2, $Ben_name1, $Ben_name2, $Ben_relationship, $Ben_percent, $Mem_id)
  {
    $this->Ben_identification = $Ben_identification;
    $this->Ben_lastName1 = $Ben_lastName1;
    $this->Ben_lastName2 = $Ben_lastName2;
    $this->Ben_name1 = $Ben_name1;
    $this->Ben_name2 = $Ben_name2;
    $this->Ben_relationship = $Ben_relationship;
    $this->Ben_percent = $Ben_percent;
    $this->Mem_id = $Mem_id;
  }

  public function __setMembershipstatus($id, $stat)
  {

    $this->Mem_id = $id;
    $this->Stat_id = $stat;
  }

  public function __getMembership()
  {
    $objMem = new DtoMembership();
    $objMem->__getid();
    $objMem->__getservIp();
    $objMem->__getservDate();
    $objMem->__getid();
    $objMem->__getservIp();
    $objMem->__getservDate();
    $objMem->__gethostHead();	
    $objMem->__getwebHead();
    $objMem->__getrequestIp();	
    $objMem->__getrequestPort();
    $objMem->__gethash();	
    $objMem->__getrequestType();
    $objMem->__getrequestDate();	
    $objMem->__getcity();	
    $objMem->__getassoType();	
    $objMem->__getpLastname1();
    $objMem->__getpLastname2();	
    $objMem->__getpName1();	
    $objMem->__getpName2();	
    $objMem->__getpDocType();	
    $objMem->__getpIdentification();
    $objMem->__getpExpDate();	
    $objMem->__getpExpPlace();	
    $objMem->__getpGender();	
    $objMem->__getpBornDate();	
    $objMem->__getpNacionality();	
    $objMem->__getpTownship();	
    $objMem->__getpDepartment();	
    $objMem->__getpCivilStatus();	
    $objMem->__getpLivingplaceType();	
    $objMem->__getpResAddress();	
    $objMem->__getpStratum();	
    $objMem->__getpResTel();	
    $objMem->__getpCell();	
    $objMem->__getdepartment();	
    $objMem->__getpResCity();	
    $objMem->__getpCorrespondence();
    $objMem->__getpEmail();	
    $objMem->__getpProfession();	
    $objMem->__getpEducationLevel();	
    $objMem->__getsLastname1();	
    $objMem->__getsLastname2();	
    $objMem->__getsName1();	
    $objMem->__getsName2();	
    $objMem->__getsDocType();
    $objMem->__getsIdentification();
    $objMem->__getsCell();
    $objMem->__getwCompName();
    $objMem->__getwCompTel();	
    $objMem->__getwCompTelExt();	
    $objMem->__getwCompDir();	
    $objMem->__getwDepartment();	
    $objMem->__getwCity();	
    $objMem->__getwAdmiDate();	
    $objMem->__getwContractType();
    $objMem->__getwCharge();	
    $objMem->__getwCivilServant();	
    $objMem->__getwPubResourAdmin();	
    $objMem->__getwPubPerson();	
    $objMem->__getlRPubPerson();
    $objMem->__getwCompFax();	
    $objMem->__getwEmail();	
    $objMem->__getwCIIUDesc();
    $objMem->__getwCIIUCode();
    $objMem->__getmonthlyInc();	
    $objMem->__getmonthlyEgr();	
    $objMem->__getimmovabAssets();
    $objMem->__getothersInc();
    $objMem->__getdescEgr();
    $objMem->__getvehiclesAssets();	
    $objMem->__getothersDescInc();	
    $objMem->__gettotalEgr();	
    $objMem->__getothersAssets();
    $objMem->__gettotalInc();	
    $objMem->__gettotalAssets();	
    $objMem->__gettotalLiabilities();	
    $objMem->__gettotalHeritage();	
    $objMem->__getfctransactions();	
    $objMem->__getfcWhich();	
    $objMem->__getfcAccount();
    $objMem->__getfcAccountNumber();	
    $objMem->__getfcBank();
    $objMem->__getfcCurrency();	
    $objMem->__getfcCity();	
    $objMem->__getfcCountry();	
    $objMem->__getfcTransactionType();	
    $objMem->__getfcWichTransac();	
    $objMem->__getStat_id();	    
    return $objMem;
  }

  public function __getBeneficiary()
  {
    $objBen = new DtoMembership();
    $objBen->__getidB();	
    $objBen->__getidentification();	
    $objBen->__getlastName1();	
    $objBen->__getlastName2();	
    $objBen->__getname1();	
    $objBen->__getname2();
    $objBen->__getrelationship();	
    $objBen->__getpercent();
    $objBen->__getMem_id();
    return $objBen;
  }
  //SET Membership
  public function __setid($id)
  {
    $this->Mem_id = $id;
  }
  public function __setservIp($servIp)
  {
    $this->Mem_servIp = $servIp;
  }
  public function __setservDate($servDate)
  {
    $this->Mem_servDate = $servDate;
  }
  public function __sethostHead($hostHead)
  {
    $this->Mem_hostHead = $hostHead;
  }
  public function __setwebHead($webHead)
  {
    $this->Mem_webHead = $webHead;
  }
  public function __setrequestIp($requestIp)
  {
    $this->Mem_requestIp = $requestIp;
  }
  public function __setrequestPort($requestPort)
  {
    $this->Mem_requestPort = $requestPort;
  }
  public function __sethash($hash)
  {
    $this->Mem_hash = $hash;
  }
  public function __setrequestType($requestType)
  {
    $this->Mem_requestType = $requestType;
  }
  public function __setrequestDate($requestDate)
  {
    $this->Mem_requestDate = $requestDate;
  }
  public function __setcity($city)
  {
    $this->Mem_city = $city;
  }
  public function __setassoType($assoType)
  {
    $this->Mem_assoType = $assoType;
  }
  public function __setpLastname1($pLastname1)
  {
    $this->Mem_pLastname1 = $pLastname1;
  }
  public function __setpLastname2($pLastname2)
  {
    $this->Mem_pLastname2 = $pLastname2;
  }
  public function __setpName1($pName1)
  {
    $this->Mem_pName1 = $pName1;
  }
  public function __setpName2($pName2)
  {
    $this->Mem_pName2 = $pName2;
  }
  public function __setpDocType($pDocType)
  {
    $this->Mem_pDocType = $pDocType;
  }
  public function __setpIdentification($pIdentification)
  {
    $this->Mem_pIdentification = $pIdentification;
  }
  public function __setpExpDate($pExpDate)
  {
    $this->Mem_pExpDate = $pExpDate;
  }
  public function __setpExpPlace($pExpPlace)
  {
    $this->Mem_pExpPlace = $pExpPlace;
  }
  public function __setpGender($pGender)
  {
    $this->Mem_pGender = $pGender;
  }
  public function __setpBornDate($pBornDate)
  {
    $this->Mem_pBornDate = $pBornDate;
  }
  public function __setpNacionality($pNacionality)
  {
    $this->Mem_pNacionality = $pNacionality;
  }
  public function __setpTownship($pTownship)
  {
    $this->Mem_pTownship = $pTownship;
  }
  public function __setpDepartment($pDepartment)
  {
    $this->Mem_pDepartment = $pDepartment;
  }
  public function __setpCivilStatus($pCivilStatus)
  {
    $this->Mem_pCivilStatus = $pCivilStatus;
  }
  public function __setpLivingplaceType($pLivingplaceType)
  {
    $this->Mem_pLivingplaceType = $pLivingplaceType;
  }
  public function __setpResAddress($pResAddress)
  {
    $this->Mem_pResAddress = $pResAddress;
  }
  public function __setpStratum($pStratum)
  {
    $this->Mem_pStratum = $pStratum;
  }
  public function __setpResTel($pResTel)
  {
    $this->Mem_pResTel = $pResTel;
  }
  public function __setpCell($pCell)
  {
    $this->Mem_pCell = $pCell;
  }
  public function __setdepartment($department)
  {
    $this->Mem_department = $department;
  }
  public function __setpResCity($pResCity)
  {
    $this->Mem_pResCity = $pResCity;
  }
  public function __setpCorrespondence($pCorrespondence)
  {
    $this->Mem_pCorrespondence = $pCorrespondence;
  }
  public function __setpEmail($pEmail)
  {
    $this->Mem_pEmail = $pEmail;
  }
  public function __setpProfession($pProfession)
  {
    $this->Mem_pProfession = $pProfession;
  }
  public function __setpEducationLevel($pEducationLevel)
  {
    $this->Mem_pEducationLevel = $pEducationLevel;
  }
  public function __setsLastname1($sLastname1)
  {
    $this->Mem_sLastname1 = $sLastname1;
  }
  public function __setsLastname2($sLastname2)
  {
    $this->Mem_sLastname2 = $sLastname2;
  }
  public function __setsName1($sName1)
  {
    $this->Mem_sName1 = $sName1;
  }
  public function __setsName2($sName2)
  {
    $this->Mem_sName2 = $sName2;
  }
  public function __setsDocType($sDocType)
  {
    $this->Mem_sDocType = $sDocType;
  }
  public function __setsIdentification($sIdentification)
  {
    $this->Mem_sIdentification = $sIdentification;
  }
  public function __setsCell($Mem_sCell)
  {
    $this->Mem_sCell = $Mem_sCell;
  }
  public function __setwCompName($wCompName)
  {
    $this->Mem_wCompName = $wCompName;
  }
  public function __setwCompTel($wCompTel)
  {
    $this->Mem_wCompTel = $wCompTel;
  }
  public function __setwCompTelExt($wCompTelExt)
  {
    $this->Mem_wCompTelExt = $wCompTelExt;
  }
  public function __setwCompDir($wCompDir)
  {
    $this->Mem_wCompDir = $wCompDir;
  }
  public function __setwDepartment($wDepartment)
  {
    $this->Mem_wDepartment = $wDepartment;
  }
  public function __setwCity($wCity)
  {
    $this->Mem_wCity = $wCity;
  }
  public function __setwAdmiDate($wAdmiDate)
  {
    $this->Mem_wAdmiDate = $wAdmiDate;
  }
  public function __setwContractType($wContractType)
  {
    $this->Mem_wContractType = $wContractType;
  }
  public function __setwCharge($wCharge)
  {
    $this->Mem_wCharge = $wCharge;
  }
  public function __setwCivilServant($wCivilServant)
  {
    $this->Mem_wCivilServant = $wCivilServant;
  }
  public function __setwPubResourAdmin($wPubResourAdmin)
  {
    $this->Mem_wPubResourAdmin = $wPubResourAdmin;
  }
  public function __setwPubPerson($wPubPerson)
  {
    $this->Mem_wPubPerson = $wPubPerson;
  }
  public function __setlRPubPerson($lRPubPerson)
  {
    $this->Mem_lRPubPerson = $lRPubPerson;
  }
  public function __setwCompFax($wCompFax)
  {
    $this->Mem_wCompFax = $wCompFax;
  }
  public function __setwEmail($wEmail)
  {
    $this->Mem_wEmail = $wEmail;
  }
  public function __setwCIIUDesc($wCIIUDesc)
  {
    $this->Mem_wCIIUDesc = $wCIIUDesc;
  }
  public function __setwCIIUCode($wCIIUCode)
  {
    $this->Mem_wCIIUCode = $wCIIUCode;
  }
  public function __setmonthlyInc($monthlyInc)
  {
    $this->Mem_monthlyInc = $monthlyInc;
  }
  public function __setmonthlyEgr($monthlyEgr)
  {
    $this->Mem_monthlyEgr = $monthlyEgr;
  }
  public function __setimmovabAssets($immovabAssets)
  {
    $this->Mem_immovabAssets = $immovabAssets;
  }
  public function __setothersInc($othersInc)
  {
    $this->Mem_othersInc = $othersInc;
  }
  public function __setdescEgr($descEgr)
  {
    $this->Mem_descEgr = $descEgr;
  }
  public function __setvehiclesAssets($vehiclesAssets)
  {
    $this->Mem_vehiclesAssets = $vehiclesAssets;
  }
  public function __setothersDescInc($othersDescInc)
  {
    $this->Mem_othersDescInc = $othersDescInc;
  }
  public function __settotalEgr($othersDescInc)
  {
    $this->Mem_totalEgr = $othersDescInc;
  }
  public function __setothersAssets($othersAssets)
  {
    $this->Mem_othersAssets = $othersAssets;
  }
  public function __settotalInc($totalInc)
  {
    $this->Mem_totalInc = $totalInc;
  }
  public function __settotalAssets($totalAssets)
  {
    $this->Mem_totalAssets = $totalAssets;
  }
  public function __settotalLiabilities($totalLiabilities)
  {
    $this->Mem_totalLiabilities = $totalLiabilities;
  }
  public function __settotalHeritage($totalHeritage)
  {
    $this->Mem_totalHeritage = $totalHeritage;
  }
  public function __setfctransactions($fctransactions)
  {
    $this->Mem_fctransactions = $fctransactions;
  }
  public function __setfcWhich($fcWhich)
  {
    $this->Mem_fcWhich = $fcWhich;
  }
  public function __setfcAccount($fcAccount)
  {
    $this->Mem_fcAccount = $fcAccount;
  }
  public function __setfcAccountNumber($fcAccountNumber)
  {
    $this->Mem_fcAccountNumber = $fcAccountNumber;
  }
  public function __setfcBank($fcBank)
  {
    $this->Mem_fcBank = $fcBank;
  }
  public function __setfcCurrency($fcCurrency)
  {
    $this->Mem_fcCurrency = $fcCurrency;
  }
  public function __setfcCity($fcCity)
  {
    $this->Mem_fcCity = $fcCity;
  }
  public function __setfcCountry($fcCountry)
  {
    $this->Mem_fcCountry = $fcCountry;
  }
  public function __setfcTransactionType($fcTransactionType)
  {
    $this->Mem_fcTransactionType = $fcTransactionType;
  }
  public function __setfcWichTransac($fcWichTransac)
  {
    $this->Mem_fcWichTransac = $fcWichTransac;
  }
  public function __setStat_id($Stat_id)
  {
    $this->Stat_id = $Stat_id;
  }
  //Beneficiary
  public function __setidB($id)
  {
    $this->Ben_id = $id;
  }
  public function __setidentification($identification)
  {
    $this->Ben_identification = $identification;
  }
  public function __setlastName1($lastName1)
  {
    $this->Ben_lastName1 = $lastName1;
  }
  public function __setlastName2($lastName2)
  {
    $this->Ben_lastName2 = $lastName2;
  }
  public function __setname1($name1)
  {
    $this->Ben_name1 = $name1;
  }
  public function __setname2($name2)
  {
    $this->Ben_name2 = $name2;
  }
  public function __setrelationship($relationship)
  {
    $this->Ben_relationship = $relationship;
  }
  public function __setpercent($percent)
  {
    $this->Ben_percent = $percent;
  }
  public function __setMem_id($Mem_id)
  {
    $this->Mem_id = $Mem_id;
  }
  //GET Credit
  public function __getid()
  {
    return $this->Mem_id;
  }  
  public function __getservIp()
  {
    return $this->Mem_servIp;
  }
  public function __getservDate()
  {
    return $this->Mem_servDate;	
  }
  public function __gethostHead()	
  {
    return $this->Mem_hostHead;	
  }
  public function __getwebHead()
  {
  return $this->Mem_webHead;
  }
  public function __getrequestIp()	
  {
    return $this->Mem_requestIp;	
  }
  public function __getrequestPort()
  {
    return $this->Mem_requestPort;
  }
  public function __gethash()	
  {
    return $this->Mem_hash;
  }
  public function __getrequestType()	
  {
    return $this->Mem_requestType;
  }
  public function __getrequestDate()	
  {
    return $this->Mem_requestDate;
  }
  public function __getcity()	
  {
    return $this->Mem_city;	
  }
  public function __getassoType()	
  {
    return $this->Mem_assoType;	
  }
  public function __getpLastname1()
  {
    return $this->Mem_pLastname1;	
  }
  public function __getpLastname2()	
  {
    return $this->Mem_pLastname2;	
  }  
  public function __getpName1()	
  {
    return $this->Mem_pName1;
  }
  public function __getpName2()	
  {
    return $this->Mem_pName2;
  }
  public function __getpDocType()	
  {
    return $this->Mem_pDocType;
  }
  public function __getpIdentification()
  {
    return $this->Mem_pIdentification;
  }	
  public function __getpExpDate()	
  {
    return $this->Mem_pExpDate;	
  }
  public function __getpExpPlace()	
  {
    return $this->Mem_pExpPlace;
  }
  public function __getpGender()	
  {
    return $this->Mem_pGender;
  }
  public function __getpBornDate()	
  {
    return $this->Mem_pBornDate;
  }
  public function __getpNacionality()	
  {
    return $this->Mem_pNacionality;	
  }
  public function __getpTownship()	
  {
    return $this->Mem_pTownship;
  }
  public function __getpDepartment()	
  {
    return $this->Mem_pDepartment;
  }
  public function __getpCivilStatus()	
  {
    return $this->Mem_pCivilStatus;
  }
  public function __getpLivingplaceType()	
  {
    return $this->Mem_pLivingplaceType;
  }
  public function __getpResAddress()	
  {
    return $this->Mem_pResAddress;
  }
  public function __getpStratum()	
  {
    return $this->Mem_pStratum;
  }
  public function __getpResTel()	
  {
    return $this->Mem_pResTel;
  }
  public function __getpCell()	
  {
    return $this->Mem_pCell;
  }
  public function __getdepartment()	
  {
    return $this->Mem_department;
  }
  public function __getpResCity()	
  {
    return $this->Mem_pResCity;
  }
  public function __getpCorrespondence()
  {
    return $this->Mem_pCorrespondence;
  }	
  public function __getpEmail()	
  {
    return $this->Mem_pEmail;	
  }
  public function __getpProfession()	
  {
    return $this->Mem_pProfession;
  }
  public function __getpEducationLevel()	
  {
    return $this->Mem_pEducationLevel;
  }
  public function __getsLastname1()	
  {
    return $this->Mem_sLastname1;
  }
  public function __getsLastname2()	
  {
    return $this->Mem_sLastname2;	
  }
  public function __getsName1()	
  {
    return $this->Mem_sName1;	
  }
  public function __getsName2()	
  {
    return $this->Mem_sName2;
  }
  public function __getsDocType()
  {
    return $this->Mem_sDocType;	
  }	
  public function __getsIdentification()	
  {
    return $this->Mem_sIdentification;	
  }
  public function __getsCell()
  {
    return $this->Mem_sCell;
  }	
  public function __getwCompName()
  {
    return $this->Mem_wCompName;
  }	
  public function __getwCompTel()	
  {
    return $this->Mem_wCompTel;	
  }
  public function __getwCompTelExt()	
  {
    return $this->Mem_wCompTelExt;
  }
  public function __getwCompDir()	
  {
    return $this->Mem_wCompDir;
  }
  public function __getwDepartment()	
  {
    return $this->Mem_wDepartment;
  }
  public function __getwCity()	
  {
    return $this->Mem_wCity;	
  }
  public function __getwAdmiDate()	
  {
    return $this->Mem_wAdmiDate;
  }
  public function __getwContractType()
  {
    return $this->Mem_wContractType;
  }	
  public function __getwCharge()	
  {
    return $this->Mem_wCharge;
  }
  public function __getwCivilServant()	
  {
    return $this->Mem_wCivilServant;
  }
  public function __getwPubResourAdmin()	
  {
    return $this->Mem_wPubResourAdmin;
  }
  public function __getwPubPerson()	
  {
    return $this->Mem_wPubPerson;	
  }
  public function __getlRPubPerson()
  {
    return $this->Mem_lRPubPerson;
  }	
  public function __getwCompFax()	
  {
    return $this->Mem_wCompFax;	
  }
  public function __getwEmail()	
  {
    return $this->Mem_wEmail;	
  }
  public function __getwCIIUDesc()
  {
    return $this->Mem_wCIIUDesc;
  }	
  public function __getwCIIUCode()
  {
    return $this->Mem_wCIIUCode;
  }	
  public function __getmonthlyInc()	
  {
    return $this->Mem_monthlyInc;	
  }
  public function __getmonthlyEgr()	
  {
    return $this->Mem_monthlyEgr;	
  }
  public function __getimmovabAssets()
  {
    return $this->Mem_immovabAssets;	
  }	
  public function __getothersInc()
  {
    return $this->Mem_othersInc;
  }	
  public function __getdescEgr()
  {
    return $this->Mem_descEgr;
  }
  public function __getvehiclesAssets()	
  {
    return $this->Mem_vehiclesAssets;
  }
  public function __getothersDescInc()	
  {
    return $this->Mem_othersDescInc;	
  }
  public function __gettotalEgr()	
  {
    return $this->Mem_totalEgr;	
  }
  public function __getothersAssets()
  {
    return $this->Mem_othersAssets;
  }	
  public function __gettotalInc()	
  {
    return $this->Mem_totalInc;	
  }
  public function __gettotalAssets()	
  {
    return $this->Mem_totalAssets;
  }
  public function __gettotalLiabilities()	
  {
    return $this->Mem_totalLiabilities;
  }
  public function __gettotalHeritage()	
  {
    return $this->Mem_totalHeritage;
  }
  public function __getfctransactions()	
  {
    return $this->Mem_fctransactions;	
  }
  public function __getfcWhich()	
  {
    return $this->Mem_fcWhich;
  }
  public function __getfcAccount()
  {
    return $this->Mem_fcAccount;
  }	
  public function __getfcAccountNumber()	
  {
    return $this->Mem_fcAccountNumber;
  }
  public function __getfcBank()
  {
    return $this->Mem_fcBank;	
  }	
  public function __getfcCurrency()	
  {
    return $this->Mem_fcCurrency;	
  }
  public function __getfcCity()	
  {
    return $this->Mem_fcCity;
  }
  public function __getfcCountry()	
  {
    return $this->Mem_fcCountry;
  }
  public function __getfcTransactionType()	
  {
    return $this->Mem_fcTransactionType;
  }
  public function __getfcWichTransac()	
  {
    return $this->Mem_fcWichTransac;
  }
  public function __getStat_id()	
  {
    return $this->Stat_id;
  }
  //Beneficiary	
  public function __getidB()	
  {
    return $this->Ben_id;	
  }
  public function __getidentification()	
  {
    return $this->Ben_identification;	
  }
  public function __getlastName1()	
  {
    return $this->Ben_lastName1;
  }
  public function __getlastName2()	
  {
    return $this->Ben_lastName2;
  }
  public function __getname1()	
  {
    return $this->Ben_name1;
  }
  public function __getname2()
  {
    return $this->Ben_name2;
  }	
  public function __getrelationship()	
  {
    return $this->Ben_relationship;
  }
  public function __getpercent()
  {
    return $this->Ben_percent;
  }	
  public function __getMem_id()	
  {
    return $this->Mem_id;	
  }
}
