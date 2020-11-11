<?php
#Author: LAURA GRISALES
#Date: 20/05/2020
#Description : Is DAO Membership
include "../class/connectionDB.php";
class DaoMembership
{
  private $objConntion;
  private $arrayResult;
  private $intValidatio;
  private $title;
  private $to;
  private $subject;

  public function __construct()
  {
    $this->objConntion = new Connection();
    $this->arrayResult = array();
    $this->intValidatio;
    $this->company = 1;
    $this->to = "";
  }
  #Description: Function for create a new membership
  public function newMembership($objMembership)
  {
    try {
      $con = $this->objConntion->connect();
      $con->query("SET NAMES 'utf8'");
      if ($con != null) {
        $initialdata = "'" . $objMembership->__getservIp() . "','" .  $objMembership->__gethostHead() . "','" .  $objMembership->__getwebHead() . "','" .  $objMembership->__getrequestIp() . "','" .  $objMembership->__getrequestPort() . "','" .  $objMembership->__getrequestType() . "','" .  $objMembership->__getrequestDate() . "','" .  $objMembership->__getcity() . "','" .  $objMembership->__getassoType() . "','" .  $objMembership->__getpLastname1() . "','" .  $objMembership->__getpLastname2() . "','" .  $objMembership->__getpName1() . "','" .  $objMembership->__getpName2() . "','" .  $objMembership->__getpDocType() . "','" .  $objMembership->__getpIdentification() . "','" .  $objMembership->__getpExpDate() . "','" .  $objMembership->__getpExpPlace() . "','" .  $objMembership->__getpGender() . "','" .  $objMembership->__getpBornDate() . "','" .  $objMembership->__getpNacionality() . "','" .  $objMembership->__getpTownship() . "','" .  $objMembership->__getpDepartment() . "','" .  $objMembership->__getpCivilStatus() . "','" .  $objMembership->__getpLivingplaceType() . "','" .  $objMembership->__getpResAddress() . "','" .  $objMembership->__getpStratum() . "','" .  $objMembership->__getpResTel() . "','" .  $objMembership->__getpCell() . "','" .  $objMembership->__getdepartment() . "','" .  $objMembership->__getpResCity() . "','" .  $objMembership->__getpCorrespondence() . "','" .  $objMembership->__getpEmail() . "','" .  $objMembership->__getpProfession() . "','" .  $objMembership->__getpEducationLevel() . "','" .  $objMembership->__getsLastname1() . "','" .  $objMembership->__getsLastname2() . "','" .  $objMembership->__getsName1() . "','" .  $objMembership->__getsName2() . "','" .  $objMembership->__getsDocType() . "','" .  $objMembership->__getsIdentification() . "','" .  $objMembership->__getsCell() . "','" .  $objMembership->__getwCompName() . "','" .  $objMembership->__getwCompTel() . "','" .  $objMembership->__getwCompTelExt() . "','" .  $objMembership->__getwCompDir() . "','" .  $objMembership->__getwDepartment() . "','" .  $objMembership->__getwCity() . "','" .  $objMembership->__getwAdmiDate() . "','" .  $objMembership->__getwContractType() . "','" .  $objMembership->__getwCharge() . "','" .  $objMembership->__getwCivilServant() . "','" .  $objMembership->__getwPubResourAdmin() . "','" .  $objMembership->__getwPubPerson() . "','" .  $objMembership->__getlRPubPerson() . "','" .  $objMembership->__getwCompFax() . "','" .  $objMembership->__getwEmail() . "','" .  $objMembership->__getwCIIUDesc() . "','" .  $objMembership->__getwCIIUCode() . "','" .  $objMembership->__getmonthlyInc() . "','" .  $objMembership->__getmonthlyEgr() . "','" .  $objMembership->__getimmovabAssets() . "','" .  $objMembership->__getothersInc() . "','" .  $objMembership->__getdescEgr() . "','" .  $objMembership->__getvehiclesAssets() . "','" .  $objMembership->__getothersDescInc() . "','" .  $objMembership->__gettotalEgr() . "','" .  $objMembership->__getothersAssets() . "','" .  $objMembership->__gettotalInc() . "','" .  $objMembership->__gettotalAssets() . "','" .  $objMembership->__gettotalLiabilities() . "','" .  $objMembership->__gettotalHeritage() . "','" .  $objMembership->__getfctransactions() . "','" .  $objMembership->__getfcWhich() . "','" .  $objMembership->__getfcAccount() . "','" .  $objMembership->__getfcAccountNumber() . "','" .  $objMembership->__getfcBank() . "','" .  $objMembership->__getfcCurrency() . "','" .  $objMembership->__getfcCity() . "','" .  $objMembership->__getfcCountry() . "','" .  $objMembership->__getfcTransactionType() . "','" .  $objMembership->__getfcWichTransac() . "'";
        $hash = md5($initialdata);
        $dataMembership = "'" . $objMembership->__getservIp() . "','" .  $objMembership->__gethostHead() . "','" .  $objMembership->__getwebHead() . "','" .  $objMembership->__getrequestIp() . "','" .  $objMembership->__getrequestPort() . "','" .  $hash . "','" .  $objMembership->__getrequestType() . "','" .  $objMembership->__getrequestDate() . "','" .  $objMembership->__getcity() . "','" .  $objMembership->__getassoType() . "','" .  $objMembership->__getpLastname1() . "','" .  $objMembership->__getpLastname2() . "','" .  $objMembership->__getpName1() . "','" .  $objMembership->__getpName2() . "','" .  $objMembership->__getpDocType() . "','" .  $objMembership->__getpIdentification() . "','" .  $objMembership->__getpExpDate() . "','" .  $objMembership->__getpExpPlace() . "','" .  $objMembership->__getpGender() . "','" .  $objMembership->__getpBornDate() . "','" .  $objMembership->__getpNacionality() . "','" .  $objMembership->__getpTownship() . "','" .  $objMembership->__getpDepartment() . "','" .  $objMembership->__getpCivilStatus() . "','" .  $objMembership->__getpLivingplaceType() . "','" .  $objMembership->__getpResAddress() . "','" .  $objMembership->__getpStratum() . "','" .  $objMembership->__getpResTel() . "','" .  $objMembership->__getpCell() . "','" .  $objMembership->__getdepartment() . "','" .  $objMembership->__getpResCity() . "','" .  $objMembership->__getpCorrespondence() . "','" .  $objMembership->__getpEmail() . "','" .  $objMembership->__getpProfession() . "','" .  $objMembership->__getpEducationLevel() . "','" .  $objMembership->__getsLastname1() . "','" .  $objMembership->__getsLastname2() . "','" .  $objMembership->__getsName1() . "','" .  $objMembership->__getsName2() . "','" .  $objMembership->__getsDocType() . "','" .  $objMembership->__getsIdentification() . "','" .  $objMembership->__getsCell() . "','" .  $objMembership->__getwCompName() . "','" .  $objMembership->__getwCompTel() . "','" .  $objMembership->__getwCompTelExt() . "','" .  $objMembership->__getwCompDir() . "','" .  $objMembership->__getwDepartment() . "','" .  $objMembership->__getwCity() . "','" .  $objMembership->__getwAdmiDate() . "','" .  $objMembership->__getwContractType() . "','" .  $objMembership->__getwCharge() . "','" .  $objMembership->__getwCivilServant() . "','" .  $objMembership->__getwPubResourAdmin() . "','" .  $objMembership->__getwPubPerson() . "','" .  $objMembership->__getlRPubPerson() . "','" .  $objMembership->__getwCompFax() . "','" .  $objMembership->__getwEmail() . "','" .  $objMembership->__getwCIIUDesc() . "','" .  $objMembership->__getwCIIUCode() . "','" .  $objMembership->__getmonthlyInc() . "','" .  $objMembership->__getmonthlyEgr() . "','" .  $objMembership->__getimmovabAssets() . "','" .  $objMembership->__getothersInc() . "','" .  $objMembership->__getdescEgr() . "','" .  $objMembership->__getvehiclesAssets() . "','" .  $objMembership->__getothersDescInc() . "','" .  $objMembership->__gettotalEgr() . "','" .  $objMembership->__getothersAssets() . "','" .  $objMembership->__gettotalInc() . "','" .  $objMembership->__gettotalAssets() . "','" .  $objMembership->__gettotalLiabilities() . "','" .  $objMembership->__gettotalHeritage() . "','" .  $objMembership->__getfctransactions() . "','" .  $objMembership->__getfcWhich() . "','" .  $objMembership->__getfcAccount() . "','" .  $objMembership->__getfcAccountNumber() . "','" .  $objMembership->__getfcBank() . "','" .  $objMembership->__getfcCurrency() . "','" .  $objMembership->__getfcCity() . "','" .  $objMembership->__getfcCountry() . "','" .  $objMembership->__getfcTransactionType() . "','" .  $objMembership->__getfcWichTransac() . "'";       
        if ($result = $con->query("CALL sp_membership_form_insert (" . $dataMembership . ")")) {
          while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $this->arrayResult[] = $row;
          };
          mysqli_free_result($result);
          $con->close();
          $con = $this->objConntion->connect();
          $con->query("SET NAMES 'utf8'");
          if ($result = $con->query("CALL sp_broadcast_gxu_all ('" . $objMembership->__getwCompName() . "'," . $this->company . ")")) {
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
              $this->arrayTo[] = $row;
            };
            mysqli_free_result($result);
            for($i = 0; $i < count($this->arrayTo); $i++){
              $this->to .= $this->arrayTo[$i]["User_email"] . ",";
            }
            $this->sendMail($objMembership->__getpLastname1(), $objMembership->__getpLastname2(), $objMembership->__getpName1(), $objMembership->__getpName2(), $objMembership->__getpIdentification(), $objMembership->__getpCell(), $objMembership->__getpEmail(),"Afiliación_" . $this->arrayResult[0]["Mem_id"], $this->to);
          }
        } else {
          $this->arrayResult[] = 0;
        }
      }
      $con->close();      
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
      $this->arrayResult[] = 0;
    }
    return json_encode($this->arrayResult);
  }

  #Description : Function for select all memberships for search
  public function selectMembershipSearch($dataMembership, $user)
  {
    try {
      $con = $this->objConntion->connect();
      $con->query("SET NAMES 'utf8'");
      if ($con != null) {
        if ($result = $con->query("CALL sp_membership_form_all('" . $dataMembership . "',".$user.")")) {
          while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $this->arrayResult[] = $row;
          };
          mysqli_free_result($result);
        }
      }
      $con->close();
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
    }

    return json_encode($this->arrayResult);
  }

  #Description : Function for select security of the membership
  public function selectMembershipSecurity($dataMembership)
  {
    try {
      $con = $this->objConntion->connect();
      $con->query("SET NAMES 'utf8'");
      if ($con != null) {
        if ($result = $con->query("CALL sp_membership_form_security('" . $dataMembership . "')")) {
          while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $this->arrayResult[] = $row;
          };
          mysqli_free_result($result);
        }
      }
      $con->close();
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
    }

    return json_encode($this->arrayResult);
  }

  #Description : Function for select membership
  public function selectMembership($dataMembershipId)
  {
    try {
      $con = $this->objConntion->connect();
      $con->query("SET NAMES 'utf8'");
      if ($con != null) {
        if ($result = $con->query("CALL sp_membership_form_view (" . $dataMembershipId . ")")) {
          while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $this->arrayResult[] = $row;
          };
          mysqli_free_result($result);
        }
      }
      $con->close();
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
    }
    return json_encode($this->arrayResult);
  }

  #Description : Function for select beneficiaries
  public function selectBeneficiaries($dataMembershipId)
  {
    try {
      $con = $this->objConntion->connect();
      $con->query("SET NAMES 'utf8'");
      if ($con != null) {
        if ($result = $con->query("CALL sp_beneficiary_view (" . $dataMembershipId . ")")) {
          while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $this->arrayResult[] = $row;
          };
          mysqli_free_result($result);
        }
      }
      $con->close();
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
    }
    return json_encode($this->arrayResult);
  }

  #Description : Function for select beneficiaries
  public function newBeneficiary($objBeneficiary)
  {
    try {
      $con = $this->objConntion->connect();
      $con->query("SET NAMES 'utf8'");
      if ($con != null) {
        $dataBeneficiary = "'" . $objBeneficiary->__getidentification() . "','" . $objBeneficiary->__getlastName1() . "','" . $objBeneficiary->__getlastName2() . "','" . $objBeneficiary->__getname1() . "','" . $objBeneficiary->__getname2() . "','" . $objBeneficiary->__getrelationship() . "','" . $objBeneficiary->__getpercent() . "'," . $objBeneficiary->__getMem_id();
        if ($con->query("CALL sp_beneficiary_insert (" . $dataBeneficiary . ")")) {
          $this->intValidatio = 1;
        } else {
          $this->intValidatio = 0;
        }
      }
      $con->close();
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
      $this->intValidatio = 0;
    }
    return $this->intValidatio;
  }

  #Description: Function for update a Status Membership Form
  public function updateMembershipStatus($objMembership)
  {
      try {
          $con = $this->objConntion->connect();
          $con->query("SET NAMES 'utf8'");
          if ($con != null) {
              $dataMembership = $objMembership->__getid() . "," . $objMembership->__getStat_id();
              if ($con->query("CALL sp_membership_update_status (" . $dataMembership . ")")) {
                  $this->intValidatio = 1;
              } else {
                  $this->intValidatio = 0;
              }
          }
          $con->close();
      } catch (Exception $e) {
          echo 'Exception captured: ', $e->getMessage(), "\n";
          $this->intValidatio = 0;
      }
      return $this->intValidatio;
  }

  public function sendMail($lastname1, $lastname2, $name1, $name2, $identification, $cell, $email, $docNumber, $emails)
  {
    $this->to = $emails;
    $this->title = 'Creación de formulario';
    $banner = 'https://developer.dendrite.com.co/img/mail/header1.png';
    $footer = 'https://www.sinapsistechnologies.com.co/assets/img/mail/logo_white.png';
    $headerColor = '#027e88';
    $footerColor = '#4e73df';
    $messageBody = '<div class="wrapper">
      <div class="webkit">
        <table class="outer">
          <tbody>
          <tr>
          <td class="full-width-image banner" style="background: ' . $headerColor . '">
          <img src="' . $banner . '"alt="">
          </td>
          </tr>
              <td class="one-column">
                <table width="100%">
                  <tr>
                    <td class="inner contents">
                      <br>
                      <p class="textBanner">Hola, Coominobras</p>
                      <br>
                      <p class="h1">Saludo Cordial,</p>
                      <br>
                      <p>Has recibido un formulario de <strong>afiliación</strong> desde la web con el consecutivo: <strong>'.$docNumber.'</strong></p>
                      <p><strong>Nombre: </strong>' . $lastname1 . " " . $lastname2 . " " . $name1 . " " . $name2 .'</p>
                      <p><strong>Identificación: </strong>' . $identification . '</p>
                      <br>
                      <p>Atentamente,</p>
                      <br>
                      <p>Equipo de comunicaciones</p>
                      <p><strong>Sinapsis Technologies</strong></p>
                      <p><i>Conectando mundos</i></p>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td class="right-sidebar" dir="rtl" style="background: ' . $footerColor . ';">                
                <table class="column right" dir="ltr">
                  <tbody>
                    <tr>
                      <td class="inner contents textFooter">
                        No respondas a este correo, es un mensaje generado automáticamente por el sistema.
                        Si necesitas ayuda, por favor ingresa a <br> <a href="https://www.sinapsistechnologies.com.co"
                          target="_blank">Sinapsis Technologies</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <table class="column left" dir="ltr">
                  <tbody>
                    <tr>
                      <td class="inner contents">
                        <img id="img_left" src="' . $footer . '"
                          width="90" alt="">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    </body>
    </html>';
    $headboard  = 'MIME-Version: 1.0' . "\r\n";
    $headboard .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    $from = 'info@sinapsissoft.com';
    $headboard .= 'From:Dendrite <'.$from.'>'."\r\n";
    $message = '<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Send Main</title>
    <style>
    body {
    margin: 0 !important;
    padding: 0;
    background-color: #ffffff;
    }

    table {
    border-spacing: 0;
    font-family: sans-serif;
    color: #333333;
    }

    td {
    padding: 0;
    }

    img {
    border: 0;
    width: 100%;
    }

    div[style*="margin: 16px 0"] {
    margin: 0 !important;
    }

    .wrapper {
    width: 100%;
    table-layout: fixed;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    }

    .webkit {
    max-width: 600px;
    margin: 0 auto;
    }

    .outer {
    Margin: 0 auto;
    width: 100%;
    max-width: 600px;
    }

    .inner {
    padding: 10px;
    }

    .contents {
    width: 100%;
    }

    p {
    Margin: 0;
    }

    a {
    color: #ee6a56;
    text-decoration: underline;
    }

    .h1 {
    font-size: 21px;
    font-weight: bold;
    Margin-bottom: 18px;
    }

    .h2 {
    font-size: 18px;
    font-weight: bold;
    Margin-bottom: 12px;
    }    

    .full-width-image {
    background-size: cover;
    height: auto;
    width: 100%;
    vertical-align: bottom;
    position: relative;
    display: inline-block;
    text-align: center;    
    }

    .full-width-image img {
      width: 100%;
      max-width: 600px;
      height: auto;  
      }

    /* One column layout */
    .one-column .contents {
    text-align: left;
    }

    .one-column p {
    font-size: 14px;
    Margin-bottom: 10px;
    }

    /*Two column layout*/
    .two-column {
    text-align: center;
    font-size: 0;
    }

    .two-column .column {
    width: 100%;
    max-width: 300px;
    display: inline-block;
    vertical-align: top;
    }

    .two-column .contents {
    font-size: 14px;
    text-align: left;
    }

    .two-column img {
    width: 100%;
    max-width: 280px;
    height: auto;
    }

    .two-column .text {
    padding-top: 10px;
    }

    /*Three column layout*/
    .three-column {
    text-align: center;
    font-size: 0;
    padding-top: 10px;
    padding-bottom: 10px;
    }

    .three-column .column {
    width: 100%;
    max-width: 200px;
    display: inline-block;
    vertical-align: top;
    }

    .three-column img {
    width: 100%;
    max-width: 180px;
    height: auto;
    }

    .three-column .contents {
    font-size: 14px;
    text-align: center;
    }

    .three-column .text {
    padding-top: 10px;
    }

    /* Left sidebar layout */
    .left-sidebar {
    font-size: 0;
    }

    .left-sidebar .column {
    width: 100%;
    display: inline-block;
    vertical-align: middle;
    }

    .left-sidebar .left {
    max-width: 100px;
    }

    .left-sidebar .right {
    max-width: 500px;
    }

    .left-sidebar .img {
    width: 100%;
    max-width: 80px;
    height: auto;
    }

    .left-sidebar .contents {
    font-size: 14px;
    text-align: center;
    }

    .left-sidebar a {
    color: #85ab70;
    }

    /* Right sidebar layout */
    .right-sidebar {
    text-align: center;
    font-size: 0;
    }

    .right-sidebar .column {
    width: 100%;
    display: inline-block;
    vertical-align: middle;
    }

    .right-sidebar .left {
    max-width: 25%;
    }

    .right-sidebar .right {
    max-width: 70%;
    }

    .right-sidebar .img {
    width: 100%;
    max-width: 80px;
    height: auto;
    }

    .right-sidebar .contents {
    font-size: 14px;
    }

    .right-sidebar a {
    color: #0e7644;
    }

    .button {
    text-align: center;
    font-size: 18px;
    font-family: sans-serif;
    font-weight: bold;
    padding: 0 30px 0 30px;
    }

    .button a {
    color: #e51d1d;
    text-decoration: none;
    }

    .textBanner {
    font-size: 20px !important;
    font-weight: 600;
    color: #168d8d;
    top: 50px;
    }

    .textFooter {
    text-align: right;
    font-size: 10px;
    font-weight: 600;
    color: #ffff!important;
    }


    /*Media Queries*/
    @media screen and (max-width: 400px) {

    .two-column .column,
    .three-column .column {
    max-width: 100% !important;
    }

    .two-column img {
    max-width: 100% !important;
    }

    .three-column img {
    max-width: 50% !important;
    }
    }

    @media (max-width: 600px) {
      .full-width-image {
      height: 160px;
      width: 100%;
      }

    .right-sidebar .contents {
      font-size: 10px;
      width: 100%;
      }
    }

    @media (max-width: 331px) {
    .full-width-image {
    height: 108px;
    width: 100%;
    }

    #img_right {
    width: 60px !important;
    }

    #img_left {
    width: 80px !important;
    }
    }

    @media screen and (min-width: 401px) and (max-width: 620px) {
    .three-column .column {
    max-width: 33% !important;
    }

    .two-column .column {
    max-width: 50% !important;
    }
    }
    </style>
    </head>'.$messageBody;
    if (mail($this->to, $this->title, $message, $headboard)) {
      return 1;
    };
    return 0;
  }
}
