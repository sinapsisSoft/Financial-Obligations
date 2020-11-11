<?php
#Author: LAURA GRISALES
#Date: 15/08/2019
#Description : Is BO Costing
include "../dto/dto_costing.php";
include "../dao/dao_costing.php";
header("Content-type: application/json; charset=utf-8");
class BoCosting
{
    private $objCosting;
    private $objDao;
    private $intValidate;

    public function __construct()
    {
        $this->objCosting = new DtoCosting();
        $this->objDao = new DaoCosting();
    }

#Description: Function for create a new Costing
    public function newCosting($Quo_id, $Cost_totalValue, $Cost_attach, $Cost_pagValue, $Cost_impQuantity, $Cost_impValue, $Cost_phoQuantity, $Cost_phoValue, $Cost_issnQuantity, $Cost_issnValue, $Cost_sendQuantity, $Cost_sendValue, $Cost_stuValue, $Cost_admin, $Cost_utili, $Cost_incid, $Cost_perQuantity, $Cost_perValue, $Cost_finalValue, $Cost_daysQuantity, $Cost_daysValue, $Cost_description, $Cost_stuValue1)
    {
        try {
            $this->objCosting->__setCosting($Quo_id, $Cost_totalValue, $Cost_attach, $Cost_pagValue, $Cost_impQuantity, $Cost_impValue, $Cost_phoQuantity, $Cost_phoValue, $Cost_issnQuantity, $Cost_issnValue, $Cost_sendQuantity, $Cost_sendValue, $Cost_stuValue, $Cost_admin, $Cost_utili, $Cost_incid, $Cost_perQuantity, $Cost_perValue, $Cost_finalValue, $Cost_daysQuantity, $Cost_daysValue, $Cost_description, $Cost_stuValue1);
            $intValidate = $this->objDao->newCosting($this->objCosting);
        } catch (Exception $e) {
            echo 'Exception captured: ', $e->getMessage(), "\n";
            $intValidate = 0;
        }
        return $intValidate;
    }

#Description: Function for select Costing
    public function selectCosting($Quo_id)
    {
        try {
            echo $this->objDao->selectCosting($Quo_id);
        } catch (Exception $e) {
            echo 'Exception captured: ', $e->getMessage(), "\n";
        }
    }
}
$obj = new BoCosting();
/// We get the json sent
$getData = file_get_contents('php://input');
$data = json_decode($getData);

/**********CREATE ************/
if (isset($data->POST)) {
    if ($data->POST == "POST") {
      echo $obj->newCosting($data->Quo_id, $data->Cost_totalValue, $data->Cost_attach, $data->Cost_pagValue, $data->Cost_impQuantity, $data->Cost_impValue, $data->Cost_phoQuantity, $data->Cost_phoValue, $data->Cost_issnQuantity, $data->Cost_issnValue, $data->Cost_sendQuantity, $data->Cost_sendValue, $data->Cost_stuValue, $data->Cost_admin, $data->Cost_utili, $data->Cost_incid, $data->Cost_perQuantity, $data->Cost_perValue, $data->Cost_finalValue, $data->Cost_daysQuantity, $data->Cost_daysValue, $data->Cost_description, $data->Cost_stuValue1);
    }
}

/**********READ AND CONSULT ************/
if (isset($data->GET)) {
    if ($data->GET == "GET") {
      echo $obj->selectCosting($data->Quo_id); 
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
//echo $obj->newCosting(5, 5500000, 42000, 348, 260, 5, 250, 0, 0, 3, 20000, 22, 31200, 1, 1200000, 1, 120500, 0, 0, 0, 6958880, "");
//$obj->selectCosting(2);