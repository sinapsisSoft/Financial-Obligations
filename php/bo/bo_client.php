<?php
#Author: DIEGO CASALLAS
#Date: 15/08/2019
#Description : Is BO Client
include "../dto/dto_client.php";
include "../dao/dao_client.php";
header("Content-type: application/json; charset=utf-8");
class BoClient
{
    private $objClient;
    private $objDao;
    private $intValidate;

    public function __construct()
    {
        $this->objClient = new DtoClient();
        $this->objDao = new DaoClient();
    }

#Description: Function for create a new Client
    public function newClient($id,$name, $identification, $address, $tel, $email, $contactName, $contactTitle, $contactTel, $contactCel, $contactEmail,$state)
    {
        try {
            $this->objClient->__setClient($id,$name, $identification, $address, $tel, $email, $contactName, $contactTitle, $contactTel, $contactCel, $contactEmail,$state);
            $intValidate = $this->objDao->newClient($this->objClient);
        } catch (Exception $e) {
            echo 'Exception captured: ', $e->getMessage(), "\n";
            $intValidate = 0;
        }
        return $intValidate;
    }

#Description: Function for select Clients
    public function selectClients($dataClient)
    {
        try {
            echo $this->objDao->selectClients($dataClient);
        } catch (Exception $e) {
            echo 'Exception captured: ', $e->getMessage(), "\n";
        }
    }

    #Description: Function for select all Clients for search
    public function selectClientSearch($dataClient)
    {
        try {
            echo $this->objDao->selectClientSearch($dataClient);
        } catch (Exception $e) {
            echo 'Exception captured: ', $e->getMessage(), "\n";
        }
    }
    
#Description: Function for select Client
public function selectClient($clientId)
{
    try {
        echo $this->objDao->selectClient($clientId);
    } catch (Exception $e) {
        echo 'Exception captured: ', $e->getMessage(), "\n";
    }
}
#Description: Function for select Client Identificacion
public function selectClientIdentification($clientIdentification)
{
    try {
        echo $this->objDao->selectClientIdentification($clientIdentification);
    } catch (Exception $e) {
        echo 'Exception captured: ', $e->getMessage(), "\n";
    }
}

#Description: Function for update an Client
    public function updateClient()
    {
        try {
            echo $this->objDao->updateClient();
            $intValidate = 1;
        } catch (Exception $e) {
            echo 'Exception captured: ', $e->getMessage(), "\n";
            $intValidate = 0;
        }
        return $intValidate;
    }
#Description: Function lis user
public function selectStatusCustomer($id)
{
  try {
    $this->objClient->__setStat_id($id);
    $intValidate = $this->objDao->selectStatusCustomer($this->objClient);
  } catch (Exception $e) {
    echo 'Exception captured: ', $e->getMessage(), "\n";
    $intValidate = 0;
  }
  return $intValidate;
}

}

$obj = new BoClient();
/// We get the json sent
$getData = file_get_contents('php://input');
$data = json_decode($getData);

/**********CREATE ************/
if (isset($data->POST)) {
    if ($data->POST == "POST") {
        echo $obj->newClient($data->Client_id,$data->Client_name, $data->Client_identification, $data->Client_address,$data->Client_tel, $data->Client_email, $data->Client_contactName, $data->Client_contactTitle,$data->Client_contactTel, $data->Client_contactCel, $data->Client_contactEmail,$data->Stat_id);
    }
}

/**********READ AND CONSULT ************/
if (isset($data->GET)) {    
    if ($data->GET == "GET_ID") {
        echo $obj->selectClient($data->Client_id); 
    }
    if ($data->GET == "GET_ALL") {
        echo $obj->selectClients($data->Client_name); 
    }
    if ($data->GET == "GET_IDENTIFICATION") {
        echo $obj->selectClientIdentification($data->Client_identification); 
    }
    if ($data->GET == "GET_SEARCH") {
      echo $obj->selectClientSearch($data->Client_name); 
    }
     /********** LIST STATUS  ************/
  if ($data->GET == "GET_LIST_STATUS") {
    echo $obj->selectStatusCustomer($data->Stat_id);
  }
}

/********** UPDATE ************/
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
//echo $obj->newClient('Colegio Palermo', '123456789', 'Cr 1 25 30', '1234567', 'michael@gmail.com', 'Manuela Gracia', 'Representante de estudiantes', '9876543', '3203457654', 'manuela@gmail.com');
//echo $obj->selectClient(10); 
//$obj->selectClients("");
