<?php
#Author: LAURA GRISALES
#Date: 23/08/2019
#Description : Is BO Provider
include "../dto/dto_provider.php";
include "../dao/dao_provider.php";
header("Content-type: application/json; charset=utf-8");
class BoProvider
{
  private $objProvider;
  private $objDao;
  private $intValidate;

  public function __construct()
  {
    $this->objProvider = new DtoProvider();
    $this->objDao = new DaoProvider();
  }

  #Description: Function for create a new provider
  public function newProvider($name, $identification, $tel, $address, $contactName, $contactEmail, $attach, $state)
  {
    try {
      $this->objProvider->__setProvider($name, $identification, $tel, $address, $contactName, $contactEmail, $attach, $state);
      $intValidate = $this->objDao->newProvider($this->objProvider);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
      $intValidate = 0;
    }
    return $intValidate;
  }

  #Description: Function for select providers
  public function selectProviders($dataProvider)
  {
    try {
      echo $this->objDao->selectProviders($dataProvider);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
    }
  }

  #Description: Function for select all providers for search
  public function selectProviderSearch($dataProvider)
  {
    try {
      echo $this->objDao->selectProviderSearch($dataProvider);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
    }
  }

  #Description: Function for select providers
  public function selectProviderMail($dataProvider)
  {
    try {
      return $this->objDao->selectProvider($dataProvider);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
    }
  }

  #Description: Function for select provider
  public function selectProvider($providertId)
  {
    try {
      echo $this->objDao->selectProvider($providertId);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
    }
  }

  #Description: Function for select provider Identificacion
  public function selectProviderIdentification($providerIdentification)
  {
    try {
      echo $this->objDao->selectProviderIdentification($providerIdentification);
    } catch (Exception $e) {
      echo 'Exception captured: ', $e->getMessage(), "\n";
    }
  }
    #Description: Function list status provider
    public function selectStatusProvider($id)
    {
      try {
        $this->objProvider->__setStatus($id);
        $intValidate = $this->objDao->selectStatusProvider($this->objProvider);
      } catch (Exception $e) {
        echo 'Exception captured: ', $e->getMessage(), "\n";
        $intValidate = 0;
      }
      return $intValidate;
    }
}

$obj = new BoProvider();
/// We get the json sent
$getData = file_get_contents('php://input');
$data = json_decode($getData);

/**********CREATE ************/
if (isset($data->POST)) {
  if ($data->POST == "POST") {
    echo $obj->newProvider($data->Pro_name, $data->Pro_identification, $data->Pro_tel, $data->Pro_address, $data->Pro_contactName, $data->Pro_contactEmail, $data->Pro_attach, $data->Stat_id);
  }
}

/**********READ AND CONSULT ************/
if (isset($data->GET)) {
  if ($data->GET == "GET") {
    echo $obj->selectProvider($data->Pro_id);
  }
  if ($data->GET == "GET_ALL") {
    echo $obj->selectProviders($data->Pro_name);
  }
  if ($data->GET == "GET_IDENTIFICATION") {
    echo $obj->selectProviderIdentification($data->Pro_identification);
  }
  if ($data->GET == "GET_SEARCH") {
    echo $obj->selectProviderSearch($data->Pro_name);
  }
   /********** LIST STATUS  ************/
   if ($data->GET == "GET_LIST_STATUS") {
    echo $obj->selectStatusProvider($data->Stat_id);
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
//echo $obj->newProvider('Colores de rojos', '8306123453', '6034565', 'Av Boyaca 12 50', 'Rodrigo Perdomo', 'aries.rodrigo@gmail.com', '', 8)
//echo $obj->selectProviders('')
//echo $obj->selectProvider(2)
//echo $obj->selectProviderIdentification('830678098')