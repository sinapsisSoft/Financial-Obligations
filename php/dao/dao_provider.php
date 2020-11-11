<?php
#Author: LAURA GRISALES
#Date: 23/08/2019
#Description : Is DAO Provider
include "../class/connectionDB.php";
class DaoProvider
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
    #Description: Function for create a new provider
    public function newProvider($objProvider)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                $dataProvider = "'" . $objProvider->__getName() . "','" . $objProvider->__getIdentification() . "','" . $objProvider->__getTel() . "','" . $objProvider->__getAddress() . "','" . $objProvider->__getContactName() . "','" . $objProvider->__getContactEmail() . "','" . $objProvider->__getAttach() . "',". $objProvider->__getStatus() . "";
                if ($con->query("CALL sp_provider_insert_update (" . $dataProvider . ")")) {
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

    #Description : Function for select Providers
    public function selectProviders($dataProvider)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                if ($result = $con->query("CALL sp_provider_active('".$dataProvider."')")) {
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

    #Description : Function for select all providers for search
    public function selectProviderSearch($dataProvider)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                if ($result = $con->query("CALL sp_provider_select_search('".$dataProvider."')")) {
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

    #Description : Function for select provider
    public function selectProvider($dataProviderId)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                if ($result = $con->query("CALL sp_provider_select_one (" . $dataProviderId . ")")) {
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

    #Description : Function for select provider Identification
    public function selectProviderIdentification($dataProviderIdentification)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                if ($result = $con->query("CALL sp_provider_select_identification ('" . $dataProviderIdentification . "')")) {
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
     #Description: Function list status user
   #Date:25/05/2020
   #Author:DIEGO CASALLAS
   public function selectStatusProvider($objProvider)
   {
     try {
       $con = $this->objConntion->connect();
       $con->query("SET NAMES 'utf8'");
       if ($con != null) {
         $dataId =  $objProvider->__getStatus();
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
}
