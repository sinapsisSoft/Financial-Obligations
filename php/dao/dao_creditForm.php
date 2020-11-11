<?php
#Author: LAURA GRISALES
#Date: 20/05/2020
#Description : Is DAO Credit
include "../class/connectionDB.php";
class DaoCredit
{
    private $objConntion;
    private $arrayResult;
    private $intValidatio;
    private $arrayTo;
    private $company;
    private $to;

    public function __construct()
    {
        $this->objConntion = new Connection();
        $this->arrayResult = array();
        $this->arrayTo = array();
        $this->intValidatio;
        $this->company = 1;
        $this->to = "";
    }
  #Description: Function for create a new provider
  public function newCredit($objCredit)
  {
    try {
      $con = $this->objConntion->connect();
      $con->query("SET NAMES 'utf8'");
      if ($con != null) {
        $initialdata = "'" . $objCredit->__getservIp() . "','" . $objCredit->__gethostHead() . "','" . $objCredit->__getwebHead() . "','" . $objCredit->__getrequestIp() . "','" . $objCredit->__getrequestPort() . "','" . $objCredit->__getRequestDate() . "','" . $objCredit->__getCity() . "','" . $objCredit->__getRequestType() . "','" . $objCredit->__getCreditProduct() . "','" . $objCredit->__getAmount() . "','" . $objCredit->__getCreditLine() . "','" . $objCredit->__getPickUp() . "','" . $objCredit->__getTerm() . "','" . $objCredit->__getpLastname1() . "','" . $objCredit->__getpLastname2() . "','" . $objCredit->__getpName1() . "','" . $objCredit->__getpName2() . "','" . $objCredit->__getpDocType() . "','" . $objCredit->__getpIdentification() . "','" . $objCredit->__getpExpDate() . "','" . $objCredit->__getpExpPlace() . "','" . $objCredit->__getpBornDate() . "','" . $objCredit->__getpTownship() . "','" . $objCredit->__getpDepartment() . "','" . $objCredit->__getpNacionality() . "','" . $objCredit->__getpCivilStatus() . "','" . $objCredit->__getpGender() . "','" . $objCredit->__getpDependents() . "','" . $objCredit->__getpProfession() . "','" . $objCredit->__getpEducationLevel() . "','" . $objCredit->__getpLivingplaceType() . "','" . $objCredit->__getpResAddress() . "','" . $objCredit->__getpResTel() . "','" . $objCredit->__getpCell() . "','" . $objCredit->__getdepartment() . "','" . $objCredit->__getpResCity() . "','" . $objCredit->__getpCorrespondence() . "','" . $objCredit->__getpCellNotify() . "','" . $objCredit->__getpEmail() . "','" . $objCredit->__getsLastname1() . "','" . $objCredit->__getsLastname2() . "','" . $objCredit->__getsName1() . "','" . $objCredit->__getsName2() . "','" . $objCredit->__getsDocType() . "','" . $objCredit->__getsIdentification() . "','" . $objCredit->__getsCell() . "','" . $objCredit->__getwCompName() . "','" . $objCredit->__getwCompTel() . "','" . $objCredit->__getwCompTelExt() . "','" . $objCredit->__getwCompFax() . "','" . $objCredit->__getwDepartment() . "','" . $objCredit->__getwCity() . "','" . $objCredit->__getwCompDir() . "','" . $objCredit->__getwAdmiDate() . "','" . $objCredit->__getwContractType() . "','" . $objCredit->__getwCharge() . "','" . $objCredit->__getwCivilServant() . "','" . $objCredit->__getwPubResourAdmin() . "','" . $objCredit->__getwPubPerson() . "','" . $objCredit->__getwCIIUDesc() . "','" . $objCredit->__getwCIIUCode() . "','" . $objCredit->__getmonthlyInc() . "','" . $objCredit->__getmonthlyEgr() . "','" . $objCredit->__getimmovabAssets() . "','" . $objCredit->__getothersInc() . "','" . $objCredit->__getdescEgr() . "','" . $objCredit->__getvehiclesAssets() . "','" . $objCredit->__getothersDescInc() . "','" . $objCredit->__gettotalEgr() . "','" . $objCredit->__getothersAssets() . "','" . $objCredit->__gettotalInc() . "','" . $objCredit->__gettotalAssets() . "','" . $objCredit->__gettotalLiabilities() . "','" . $objCredit->__gettotalHeritage() . "','" . $objCredit->__getlpType() . "','" . $objCredit->__getlpOwner() . "','" . $objCredit->__getlpValue() . "','" . $objCredit->__getlpMortgage() . "','" . $objCredit->__getlpInFavorOf() . "','" . $objCredit->__getvehicle() . "','" . $objCredit->__getvBrand() . "','" . $objCredit->__getvModel() . "','" . $objCredit->__getvPlate() . "','" . $objCredit->__getvType() . "','" . $objCredit->__getvGarment() . "','" . $objCredit->__getvFavorOf() . "','" . $objCredit->__getvComercialValue() . "','" . $objCredit->__getfrName() . "','" . $objCredit->__getfrCity() . "','" . $objCredit->__getfrPhone() . "','" . $objCredit->__getfrRelationship() . "','" . $objCredit->__getprName() . "','" . $objCredit->__getprCity() . "','" . $objCredit->__getprTel() . "','" . $objCredit->__getprCel() . "','" . $objCredit->__getfctransactions() . "','" . $objCredit->__getfcWhich() . "','" . $objCredit->__getfcAccount() . "','" . $objCredit->__getfcAccountNumber() . "','" . $objCredit->__getfcBank() . "','" . $objCredit->__getfcCurrency() . "','" . $objCredit->__getfcCity() . "','" . $objCredit->__getfcCountry() . "','" . $objCredit->__getfcTransactionType() . "','" . $objCredit->__getfcWichTransac() . "','" . $objCredit->__getoName() . "','" . $objCredit->__getoAccount() . "','" . $objCredit->__getoEntity() . "','" . $objCredit->__getoAccountNumber() . "','" . $objCredit->__getoCheckFor() . "','" . $objCredit->__getoIdentification() . "','" . $objCredit->__getoValue() . "'";
        $hash = md5($initialdata);
        $dataCredit = "'" . $objCredit->__getservIp() . "','" . $objCredit->__gethostHead() . "','" . $objCredit->__getwebHead() . "','" . $objCredit->__getrequestIp() . "','" . $objCredit->__getrequestPort() . "','" . $hash . "','" . $objCredit->__getRequestDate() . "','" . $objCredit->__getCity() . "','" . $objCredit->__getRequestType() . "','" . $objCredit->__getCreditProduct() . "','" . $objCredit->__getAmount() . "','" . $objCredit->__getCreditLine() . "','" . $objCredit->__getPickUp() . "','" . $objCredit->__getTerm() . "','" . $objCredit->__getpLastname1() . "','" . $objCredit->__getpLastname2() . "','" . $objCredit->__getpName1() . "','" . $objCredit->__getpName2() . "','" . $objCredit->__getpDocType() . "','" . $objCredit->__getpIdentification() . "','" . $objCredit->__getpExpDate() . "','" . $objCredit->__getpExpPlace() . "','" . $objCredit->__getpBornDate() . "','" . $objCredit->__getpTownship() . "','" . $objCredit->__getpDepartment() . "','" . $objCredit->__getpNacionality() . "','" . $objCredit->__getpCivilStatus() . "','" . $objCredit->__getpGender() . "','" . $objCredit->__getpDependents() . "','" . $objCredit->__getpProfession() . "','" . $objCredit->__getpEducationLevel() . "','" . $objCredit->__getpLivingplaceType() . "','" . $objCredit->__getpResAddress() . "','" . $objCredit->__getpResTel() . "','" . $objCredit->__getpCell() . "','" . $objCredit->__getdepartment() . "','" . $objCredit->__getpResCity() . "','" . $objCredit->__getpCorrespondence() . "','" . $objCredit->__getpCellNotify() . "','" . $objCredit->__getpEmail() . "','" . $objCredit->__getsLastname1() . "','" . $objCredit->__getsLastname2() . "','" . $objCredit->__getsName1() . "','" . $objCredit->__getsName2() . "','" . $objCredit->__getsDocType() . "','" . $objCredit->__getsIdentification() . "','" . $objCredit->__getsCell() . "','" . $objCredit->__getwCompName() . "','" . $objCredit->__getwCompTel() . "','" . $objCredit->__getwCompTelExt() . "','" . $objCredit->__getwCompFax() . "','" . $objCredit->__getwDepartment() . "','" . $objCredit->__getwCity() . "','" . $objCredit->__getwCompDir() . "','" . $objCredit->__getwAdmiDate() . "','" . $objCredit->__getwContractType() . "','" . $objCredit->__getwCharge() . "','" . $objCredit->__getwCivilServant() . "','" . $objCredit->__getwPubResourAdmin() . "','" . $objCredit->__getwPubPerson() . "','" . $objCredit->__getwCIIUDesc() . "','" . $objCredit->__getwCIIUCode() . "','" . $objCredit->__getmonthlyInc() . "','" . $objCredit->__getmonthlyEgr() . "','" . $objCredit->__getimmovabAssets() . "','" . $objCredit->__getothersInc() . "','" . $objCredit->__getdescEgr() . "','" . $objCredit->__getvehiclesAssets() . "','" . $objCredit->__getothersDescInc() . "','" . $objCredit->__gettotalEgr() . "','" . $objCredit->__getothersAssets() . "','" . $objCredit->__gettotalInc() . "','" . $objCredit->__gettotalAssets() . "','" . $objCredit->__gettotalLiabilities() . "','" . $objCredit->__gettotalHeritage() . "','" . $objCredit->__getlpType() . "','" . $objCredit->__getlpOwner() . "','" . $objCredit->__getlpValue() . "','" . $objCredit->__getlpMortgage() . "','" . $objCredit->__getlpInFavorOf() . "','" . $objCredit->__getvehicle() . "','" . $objCredit->__getvBrand() . "','" . $objCredit->__getvModel() . "','" . $objCredit->__getvPlate() . "','" . $objCredit->__getvType() . "','" . $objCredit->__getvGarment() . "','" . $objCredit->__getvFavorOf() . "','" . $objCredit->__getvComercialValue() . "','" . $objCredit->__getfrName() . "','" . $objCredit->__getfrCity() . "','" . $objCredit->__getfrPhone() . "','" . $objCredit->__getfrRelationship() . "','" . $objCredit->__getprName() . "','" . $objCredit->__getprCity() . "','" . $objCredit->__getprTel() . "','" . $objCredit->__getprCel() . "','" . $objCredit->__getfctransactions() . "','" . $objCredit->__getfcWhich() . "','" . $objCredit->__getfcAccount() . "','" . $objCredit->__getfcAccountNumber() . "','" . $objCredit->__getfcBank() . "','" . $objCredit->__getfcCurrency() . "','" . $objCredit->__getfcCity() . "','" . $objCredit->__getfcCountry() . "','" . $objCredit->__getfcTransactionType() . "','" . $objCredit->__getfcWichTransac() . "','" . $objCredit->__getoName() . "','" . $objCredit->__getoAccount() . "','" . $objCredit->__getoEntity() . "','" . $objCredit->__getoAccountNumber() . "','" . $objCredit->__getoCheckFor() . "','" . $objCredit->__getoIdentification() . "','" . $objCredit->__getoValue() . "'";
        if ($result = $con->query("CALL sp_credit_form_insert (" . $dataCredit . ")")) {
          while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $this->arrayResult[] = $row;
          };
          mysqli_free_result($result);
          $con->close();
          $con = $this->objConntion->connect();
          $con->query("SET NAMES 'utf8'");
          if ($result = $con->query("CALL sp_broadcast_gxu_all ('" . $objCredit->__getwCompName() . "'," . $this->company . ")")) {
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
              $this->arrayTo[] = $row;
            };
            mysqli_free_result($result);
            for($i = 0; $i < count($this->arrayTo); $i++){
              $this->to .= $this->arrayTo[$i]["User_email"] . ",";
            }
            $this->sendMail($objCredit->__getpLastname1(), $objCredit->__getpLastname2(), $objCredit->__getpName1(), $objCredit->__getpName2(), $objCredit->__getpIdentification(), $objCredit->__getpCell(), $objCredit->__getpEmail(),"Crédito_" . $this->arrayResult[0]["Cre_id"], $this->to);
          }          
        } else {
          $this->arrayResult[] = 0;
        }
      }
      $con->close();      
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(),
        "\n";
      $this->arrayResult[] = 0;
    }
    return json_encode($this->arrayResult);
  }

    #Description : Function for select all credits for search
    public function selectCreditSearch($dataCredit, $user)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                if ($result = $con->query("CALL sp_credit_form_all('".$dataCredit."',".$user.")")) {
                    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                        $this->arrayResult[] =$row;
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

  #Description : Function for select security of the credit
  public function selectCreditSecurity($dataCredit)
  {
    try {
      $con = $this->objConntion->connect();
      $con->query("SET NAMES 'utf8'");
      if ($con != null) {
        if ($result = $con->query("CALL sp_credit_form_security('" . $dataCredit . "')")) {
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

    #Description : Function for select provider
    public function selectCredit($dataCreditId)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                if ($result = $con->query("CALL sp_credit_form_view (" . $dataCreditId . ")")) {
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

    #Description : Function for select entities
  public function selectEntities($comp_id)
  {
    try {
      $con = $this->objConntion->connect();
      $con->query("SET NAMES 'utf8'");
      if ($con != null) {
        if ($result = $con->query("CALL sp_broadcast_group_all('" . $comp_id . "')")) {
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

  #Description: Function for update a Status CreditForm
  public function updateCreditStatus($objCredit)
  {
      try {
          $con = $this->objConntion->connect();
          $con->query("SET NAMES 'utf8'");
          if ($con != null) {
              $dataCredit = $objCredit->__getId() . "," . $objCredit->__getStat_id();
              if ($con->query("CALL sp_credit_update_status (" . $dataCredit . ")")) {
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
                      <p>Has recibido un formulario de <strong>crédito</strong> desde la web con el consecutivo: <strong>'.$docNumber.'</strong></p>
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
    $from = 'info@dendrite.com.co';
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
