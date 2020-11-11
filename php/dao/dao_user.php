<?php
#Author: DIEGO CASALLAS
#Date: 15/08/2019
#Description : Is DAO User
include "../class/connectionDB.php";
class DaoUser
{
  private $objConntion;
  private $arrayResult;
  private $intValidatio;

  public function __construct()
  {
    $this->objConntion = new Connection();
    $this->arrayResult = array();
    $this->intValidatio;
  }
  #Description: Function for create a new user
  public function newUser($objUser)
  {
    try {
      $con = $this->objConntion->connect();
      $con->query("SET NAMES 'utf8'");
      if ($con != null) {  
        $dataUser = "'" . $objUser->__getName() . "','" . $objUser->__getIdentification() . "','" . $objUser->__getEmail() . "','" . $objUser->__getTitle() . "'," . $objUser->__getStat_id() . ",'" . $objUser->__getPassword() . "','" . $objUser->__getTelephone() . "',". $objUser->__getId(). ",". $objUser->__getRole(). ",". $objUser->__getSecurityGroup() . "," . $objUser->__getCompany();
        if ($result = $con->query("CALL sp_user_insert_update (" . $dataUser . ")")) {
          $row = $result->fetch_array(MYSQLI_ASSOC);
          $this->arrayResult[] = $row;
          mysqli_free_result($result);
        } 
      }
      $con->close();
      $con = $this->objConntion->connect();

      if($row["return_value"] == "Update"){
        $this->intValidatio = 2;
      }
      else if($row["return_value"] == "Inactive"){
        $this->intValidatio = 3;
      }
      else if ($row["return_value"] == 'Registered'){
        $this->intValidatio = 4;
      }
      else{
        if($con != null){
          $status = 1;
          $user_id = $row["return_value"];
          $getDate = date("Y-m-d H:i:sa");
          $url = $objUser->__getUrl();
          $email = $objUser->__getEmail();
          $name = $objUser->__getName();
          $hash = md5($user_id . $email . $getDate);
          $dataInsert = $user_id . ",'" . $getDate . "','" . $hash . "'," . $status;
          if($result = $con->query("CALL sp_new_user_insert_update (" . $dataInsert . ")")){
            $this->sendMail($email, $hash, $url, $name, 2);
            $this->intValidatio = 1;
          }
        }        
        $con->close();
      }
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
      $this->intValidatio = 0;
    }
    return $this->intValidatio;
  }

  #Description : Function for select user
  public function selectUser($dataUser)
  {
    try {
      $con = $this->objConntion->connect();
      $con->query("SET NAMES 'utf8'");
      if ($con != null) {
        if ($result = $con->query("CALL sp_user_select_one('" . $dataUser . "')")) {
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

  #Description : Function for select all active users 
  public function selectUsers($dataUser)
  {
    try {
      $con = $this->objConntion->connect();
      $con->query("SET NAMES 'utf8'");
      if ($con != null) {
        if ($result = $con->query("CALL sp_user_select_active('" . $dataUser . "')")) {
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
  #Description: Function for login
  public function login($objLogin)
  {
    try {
      $con = $this->objConntion->connect();
      $con->query("SET NAMES 'utf8'");
      if ($con != null) {
        $dataLogin = "'" . $objLogin->__getEmail() . "','" . $objLogin->__getPassword() . "'";
        if ($result = $con->query("CALL sp_login(" . $dataLogin . ")")) {

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

  #Description: Function for recovery password
  public function recoveryPassword($objUser)
  {
    try {
      $con = $this->objConntion->connect();
      $con->query("SET NAMES 'utf8'");
      if ($con != null) {
        $dataRecoveryPassword = "'" . $objUser->__getEmail() . "'";
        if ($result = $con->query("CALL sp_user_get_email(" . $dataRecoveryPassword . ")")) {
          $row = $result->fetch_array(MYSQLI_ASSOC);
          $this->arrayResult[] = $row;
          mysqli_free_result($result);
        }
      }
      $con->close();
      $con = $this->objConntion->connect();
      if ($row["User_id"] != 0) {
        if ($con != null) {

          $status = 1;
          $getDate = date("Y-m-d H:i:sa");
          $hash = md5($objUser->__getEmail() . $getDate);
          $email = $objUser->__getEmail();
          $url = $objUser->__getUrl();
          $nameUser = $row["User_name"];  
          $dataInsert = $row["User_id"] . ",'" . $getDate . "','" . $hash . "'," . $status;
          if ($result = $con->query("CALL sp_recovery_password_insert(" . $dataInsert . ")")) {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            $this->arrayResult[] = $row;
            mysqli_free_result($result);
          }
        }
        $this->sendMail($email, $hash, $url, $nameUser, 1);
        $con->close();
      }
      
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
    }

    return json_encode($this->arrayResult);
  }
  #Description: Function send mail 
  public function sendMail($email, $hash, $url, $nameUser, $type)
  {
    if($type == 1){
      $title = 'Cambio de contraseña';
      $subject = 'reestablecer tu contraseña';
      $route = '/pages/login/new_password.html';
    }
    else if($type == 2){
      $title = 'Nuevo usuario';
      $subject = 'activar tu usuario en el sistema';
      $route = '/pages/user/new_user.html';
    }
    $headboard  = 'MIME-Version: 1.0' . "\r\n";
    $headboard .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    $for = $email;    
    $to = $email;
    $from = 'developer@sinapsissoft.com';
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
                    <p class="h1">Hola, '. $nameUser .':</p>
                    <p>Hemos recibido una solicitud para ' . $subject . '.</p>
                    <p>Por favor haz clic en "' . $title . '".</p>
                  </td>
                </tr>
                <tr class="button" height="45">
                  <td>
                    <a target="_black" href="'. $url . $route . '?' . $hash . '">' . $title . '</a>
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

    if (mail($for, $title, $message, $headboard)) {
      return 1;
    };
    return 0;
  }
  #Description: Function select hash recovery password
  public function selectHash($objUser)
  {
    try {
      $con = $this->objConntion->connect();
      $con->query("SET NAMES 'utf8'");
      if ($con != null) {
        $dataHash = "'" . $objUser->__getLogin_hash() . "'";
        if ($result = $con->query("CALL sp_recovery_password_select(" . $dataHash . ")")) {
          $row = $result->fetch_array(MYSQLI_ASSOC);
          $this->arrayResult[] = $row;
          mysqli_free_result($result);
        }
      }
      $con->close();
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
    }

    return json_encode($this->arrayResult);
  }
  #Description: Function update password
  public function updatePassword($objUser)
  {
    try {
      $con = $this->objConntion->connect();
      $con->query("SET NAMES 'utf8'");
      if ($con != null) {
        $data = $objUser->__getId() . ",'" . $objUser->__getPassword() . "'";
        if ($result = $con->query("CALL sp_login_update(" . $data . ")")) {
          $row = $result->fetch_array(MYSQLI_ASSOC);
          $this->arrayResult[] = $row;
          mysqli_free_result($result);
        }
      }
      $con->close();
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
    }

    return json_encode($this->arrayResult);
  }

  #Description: Function active new user
  public function activeUser($objUser)
  {
    try {
      $con = $this->objConntion->connect();
      $con->query("SET NAMES 'utf8'");
      if ($con != null) {
        $dataHash = "'" . $objUser->__getLogin_hash() . "'";
        if ($con->query("CALL sp_new_user_active(" . $dataHash . ")")) {
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
   #Description: Function list status user
   #Date:25/05/2020
   #Author:DIEGO CASALLAS
   public function selectStatusUser($objUser)
   {
     try {
       $con = $this->objConntion->connect();
       $con->query("SET NAMES 'utf8'");
       if ($con != null) {
         $dataId =  $objUser->__getStat_id();
         if ($result = $con->query("CALL sp_select_status(" . $dataId . ")")) {

          while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $this->arrayResult[] = $row;
          };
          mysqli_free_result($result);
        }
       }
       $con->close();
     } catch (Exception $e) {
       echo 'Exception captured: ', $e->getMessage(), "\n";
       $this->intValidatio = 0;
     }
     return json_encode($this->arrayResult);
   }
    #Description: Function list role
    public function selectRoleUser()
    {
      try {
        $con = $this->objConntion->connect();
        $con->query("SET NAMES 'utf8'");
        if ($con != null) {
  
          if ($result = $con->query("CALL sp_select_role()")) {
 
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
             $this->arrayResult[] = $row;
           };
           mysqli_free_result($result);
         }
        }
        $con->close();
      } catch (Exception $e) {
        echo 'Exception captured: ', $e->getMessage(), "\n";
        $this->intValidatio = 0;
      }
      return json_encode($this->arrayResult);
    } 
      #Description: Function list status user
      public function selectSecurityGroupUser()
      {
        try {
          $con = $this->objConntion->connect();
          $con->query("SET NAMES 'utf8'");
          if ($con != null) {
    
            if ($result = $con->query("CALL sp_select_security_group()")) {
   
             while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $this->arrayResult[] = $row;
             };
             mysqli_free_result($result);
           }
          }
          $con->close();
        } catch (Exception $e) {
          echo 'Exception captured: ', $e->getMessage(), "\n";
          $this->intValidatio = 0;
        }
        return json_encode($this->arrayResult);
      } 

      #Description: Function list status user
      public function selectNotifications($user)
      {
        try {
          $con = $this->objConntion->connect();
          $con->query("SET NAMES 'utf8'");
          if ($con != null) {
    
            if ($result = $con->query("CALL sp_notification_select_all(" . $user . ")")) {
   
             while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $this->arrayResult[] = $row;
             };
             mysqli_free_result($result);
           }
          }
          $con->close();
        } catch (Exception $e) {
          echo 'Exception captured: ', $e->getMessage(), "\n";
          $this->intValidatio = 0;
        }
        return json_encode($this->arrayResult);
      } 
}

