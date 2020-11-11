<?php
#Author: LAURA GRISALES
#Date: 25/08/2020
#Description : Is DAO send emails
include "../class/connectionDB.php";
class Massmail
{
  private $objConntion;
  private $arrayResult;
  private $arrayResult1;
  private $intValidatio;

  public function __construct()
  {
    $this->objConntion = new Connection();
    $this->arrayResult = array();
    $this->arrayResult1 = array();
    $this->intValidatio;
  }

  #Description: Function for send mass emails
  public function getForms()
  {
    try {
      $con = $this->objConntion->connect();
      $con->query("SET NAMES 'utf8'");
      if ($con != null) {
        if ($result = $con->query("CALL sp_pending_forms()")) {
          while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $this->arrayResult[] = $row;
            //var_dump($this->arrayResult);
          };
          mysqli_free_result($result);
        }
      }
      $con->close();
      $con = $this->objConntion->connect();
      $cont = 0;
      for($i = 0; $i < count($this->arrayResult); $i++){
        try{
          $con = $this->objConntion->connect();
          $con->query("SET NAMES 'utf8'");
          
          $mails = "";
          if ($con != null) {
            if ($result = $con->query("CALL sp_pending_emails('".$this->arrayResult[$i]["Form_consecutive"]."')")) {   
              while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $this->arrayResult1[] = $row;
                $mails .= $this->arrayResult1[$cont]["User_email"] . ",";
                $cont++;
              };
              $mails = substr($mails,0,strlen($mails)-1);
              mysqli_free_result($result);
              $this->sendMail($mails,$this->arrayResult[$i]["Form_consecutive"]);
            }
          }
        }catch (Exception $e) {
          echo 'Exception captured: ', $e->getMessage(), "\n";
        }
        $con->close();
        $this->intValidatio = 1;
      }//Fin for externo    
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
    }
    return $this->intValidatio;
  }
  #Description: Function send mail 
  public function sendMail($email, $pending)
  {
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $title = 'Te has perdido de algo...';
    $subject = 'Has olvidado revisar algo';
    $headboard  = 'MIME-Version: 1.0' . "\r\n";
    $headboard .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    $for = $email;    
    $to = $email;
    $from = 'Aplicación DENDRITE - <developer@sinapsissoft.com>';
    $headboard .= 'To:' . $to . "\r\n";
    $headboard .= 'From:' . $from . "\r\n";
    $message = '    
    <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
          text-align: center;
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
          max-width: 100px;
        }

        .right-sidebar .right {
          max-width: 500px;
        }

        .right-sidebar .img {
          width: 100%;
          max-width: 80px;
          height: auto;
        }

        .right-sidebar .contents {
          font-size: 14px;
          text-align: center;
        }

        .right-sidebar a {
          color: #70bbd9;
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

        @media screen and (min-width: 401px) and (max-width: 620px) {
          .three-column .column {
            max-width: 33% !important;
          }

          .two-column .column {
            max-width: 50% !important;
          }
        }
      </style>
    </head>
    <div class="wrapper">
      <div class="webkit">
        <!--[if (gte mso 9)|(IE)]>
                <table width="600" align="center">
                <tr>
                <td>
                <![endif]-->
        <table class="outer">
          <tr>
            <td class="full-width-image">
              <img src="http://www.sinapsissoft.com/Trivia/img/email/banner1.png" width="600" alt="" />
            </td>
          </tr>
          <tr>
            <td class="one-column">
              <table width="100%">
                <tr>
                  <td class="inner contents">
                    <p>' . $subject . '.</p>
                    <p>El formulario '.$pending.' no ha sido revisado aún.</p>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td class="left-sidebar">
              <!--[if (gte mso 9)|(IE)]>
                            <table width="100%">
                            <tr>
                            <td width="100">
                            <![endif]-->
              <table class="column left">
                <tr>
                  <td class="inner">
                    <img src="http://www.sinapsissoft.com/Trivia/img/email/icon_note.png" width="60" alt="" />
                  </td>
                </tr>
              </table>
              <!--[if (gte mso 9)|(IE)]>
                            </td><td width="500">
                            <![endif]-->
              <table class="column right">
                <tr>
                  <td class="inner contents">
                    Si has recibido este email por error, por favor haz caso omiso.
                  </td>
                </tr>
              </table>
              <!--[if (gte mso 9)|(IE)]>
                            </td>
                            </tr>
                            </table>
                            <![endif]-->
            </td>
          </tr>
          <tr>
            <td class="right-sidebar" dir="rtl" style="background: #D0DCE5">
              <!--[if (gte mso 9)|(IE)]>
                            <table width="100%" dir="rtl">
                            <tr>
                            <td width="100">
                            <![endif]-->
              <table class="column left" dir="ltr">
                <tr>
                  <td class="inner contents">
                    <img src="http://www.sinapsissoft.com/Trivia/img/email/icon_info.png" width="60" alt="" />
                  </td>
                </tr>
              </table>
              <!--[if (gte mso 9)|(IE)]>
                            </td><td width="500">
                            <![endif]-->
              <table class="column right" dir="ltr">
                <tr>
                  <td class="inner contents">
                    No respondas a éste correo, es un mensaje generado automáticamente por el sistema. Si necesitas más
                    ayuda, por favor ingresa a <a href="www.sinapsistechnologies.com.co">Sinapsis Technologies</a>,
                    en el chat podrás comunicarte con un asesor.
                  </td>
                </tr>
              </table>
              <!--[if (gte mso 9)|(IE)]>
                            </td>
                            </tr>
                            </table>
                            <![endif]-->
            </td>
          </tr>
        </table>
        <!--[if (gte mso 9)|(IE)]>
                </td>
                </tr>
                </table>
                <![endif]-->
      </div>
    </div>
    </body>
    </html>
    ';
    //echo "mail";
    if (mail($for, $title, $message, $headboard)) {
      echo "Ok";
      return 1;
    } else {
      echo "No";
      return 0;
    }    
  }
}
$getData = file_get_contents('php://input');
$data = json_decode($getData);
/**********CREATE ************/
$email = new Massmail();
$email->getForms();      
?>

