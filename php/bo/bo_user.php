<?php
#Author: DIEGO CASALLAS
#Date: 15/08/2019
#Description : Is BO User
include "../dto/dto_user.php";
include "../dao/dao_user.php";
include "../../system/config.php";
header("Content-type: application/json; charset=utf-8");
class BoUser
{
  private $objUser;
  private $objDao;
  private $intValidate;

  public function __construct()
  {
    $this->objUser = new DtoUser();
    $this->objDao = new DaoUser();
  }

  #Description: Function for create a new user
  public function newUser($name, $identification, $email, $title, $stat_id, $password, $tel, $id, $role, $securityGroup, $company, $url)
  {
    try {
      $this->objUser->__setUrl($url);
      $this->objUser->__setUser($name, $identification, $email, $title, $stat_id, md5($password), $tel, $id, $role, $securityGroup, $company);
      $intValidate = $this->objDao->newUser($this->objUser);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
      $intValidate = 0;
    }
    return $intValidate;
  }

  #Description: Function for select user
  public function selectUser($id)
  {
    try {
      echo $this->objDao->selectUser($id);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
    }
  }

  #Description: Function for select all active users
  public function selectUsers($name)
  {
    try {
      echo $this->objDao->selectUsers($name);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
    }
  }

  #Description: Function for login
  public function login($email, $password)
  {
    try {
      $this->objUser->__setLogin($email, md5($password));
      $intValidate = $this->objDao->login($this->objUser);
      if ($intValidate != null || $intValidate != "") {
        session_start();
        $_SESSION['User'] = $intValidate;
      }
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
      $intValidate = 0;
    }
    return $intValidate;
  }
  #Description: Function for recovery password
  public function recoveryPassword($email, $url)
  {
    try {
      $this->objUser->__setEmail($email);
      $this->objUser->__setUrl($url);
      $intValidate = $this->objDao->recoveryPassword($this->objUser);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
      $intValidate = 0;
    }
    return $intValidate;
  }
  #Description: Function select hash
  public function selectHash($hash)
  {
    try {
      $this->objUser->__setLogin_hash($hash);
      $intValidate = $this->objDao->selectHash($this->objUser);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
      $intValidate = 0;
    }
    return $intValidate;
  }
  #Description: Function update password
  public function updatePassword($id, $password)
  {
    try {
      $this->objUser->__setId($id);
      $this->objUser->__setPassword(md5($password));
      $intValidate = $this->objDao->updatePassword($this->objUser);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
      $intValidate = 0;
    }
    return $intValidate;
  }
  #Description: Function active user
  public function activeUser($hash)
  {
    try {
      $this->objUser->__setLogin_hash($hash);
      $intValidate = $this->objDao->activeUser($this->objUser);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
      $intValidate = 0;
    }
    return $intValidate;
  }
  #Description: Function lis user
  public function selectStatusUser($id)
  {
    try {
      $this->objUser->__setStat_id($id);
      $intValidate = $this->objDao->selectStatusUser($this->objUser);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
      $intValidate = 0;
    }
    return $intValidate;
  }
  #Description: Function list role
  public function selectRoleUser()
  {
    try {
     
      $intValidate = $this->objDao->selectRoleUser();
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
      $intValidate = 0;
    }
    return $intValidate;
  }
    #Description: Function list security group
    public function selectSecurityGroupUser()
    {
      try {
       
        $intValidate = $this->objDao->selectSecurityGroupUser();
      } catch (Exception $e) {
        echo 'Exception captured: ', $e->getMessage(), "\n";
        $intValidate = 0;
      }
      return $intValidate;
    }

    #Description: Function notification list
    public function selectNotifications($user)
    {
      try {
       
        $intValidate = $this->objDao->selectNotifications($user);
      } catch (Exception $e) {
        echo 'Exception captured: ', $e->getMessage(), "\n";
        $intValidate = 0;
      }
      return $intValidate;
    }
}

$obj = new BoUser();
/// We get the json sent
$getData = file_get_contents('php://input');
$data = json_decode($getData);

/**********CREATE ************/
if (isset($data->POST)) {
  if ($data->POST == "POST") {
    echo $obj->newUser($data->User_name, $data->User_identification, $data->User_email, $data->User_title, $data->Stat_id, $data->Login_password, $data->User_telephone, $data->User_id,$data->Role_id,$data->Sgroup_id,$data->Comp_id,$data->Url);
  }
  if ($data->POST == "LOGIN") {
    echo $obj->login($data->User_email, $data->Login_password);
  }
  if ($data->POST == "RECOVERY_PASSWORD") {
    echo $obj->recoveryPassword($data->User_email, $data->Url);
  }
  if ($data->POST == "GET_HASH") {
    echo $obj->selectHash($data->Login_hash);
  }
  if ($data->POST == "NEW_PASSWORD") {
    echo $obj->updatePassword($data->User_id, $data->User_password);
  }
  if ($data->POST == "ACTIVE_USER") {
    echo $obj->activeUser($data->User_hash);
  }
  if ($data->POST == "NOTIFICATION") {
    echo $obj->selectNotifications($data->User_id);
  }
}

/**********READ AND CONSULT ************/
if (isset($data->GET)) {
  if ($data->GET == "GET") {
    echo $obj->selectUser($data->User_id);
  }
  if ($data->GET == "GET_ALL") {
    echo $obj->selectUsers($data->User_name);
  }
  /********** LIST STATUS  ************/
  if ($data->GET == "GET_LIST_STATUS") {
    echo $obj->selectStatusUser($data->Stat_id);
  }
  /********** LIST STATUS  ************/
  if ($data->GET == "GET_LIST_ROL") {
    echo $obj->selectRoleUser();
  }
  if ($data->GET == "GET_LIST_GROUP") {
    echo $obj->selectSecurityGroupUser();
  }
}

/********** PUT ************/
if (isset($data->PUT)) {
  if ($data->PUT == "PUT") {
  }
}

/********** DELETE  ************/
if (isset($data->DELETE)) {
  if ($data->DELETE == "DELETE") {
  }
}

/**********************/

//echo $obj->newUser("Felipe Chitiva", "1026292066", "pipechitiva@gmail.com", "Tester",6,"gato0814", "3118304742",0,1,1,1,"http://localhost/projects/Dendrite/");
//echo $obj->selectNotifications(3);



