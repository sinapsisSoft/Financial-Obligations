<?php
#Author: LAURA GRISALES
#Date: 15/08/2019
#Description : Is DAO Consting
include "../class/connectionDB.php";
class DaoCosting
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
    #Description: Function for create a new Costing
    public function newCosting($objCosting)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                $dataCosting = $objCosting->__getQId() . "," . $objCosting->__getTotalValue(). ",'" . $objCosting->__getAttach() . "'," . $objCosting->__getPagValue(). "," 
                . $objCosting->__getImpQuantity(). "," . $objCosting->__getImpValue(). "," . $objCosting->__getPhoQuantity(). "," . $objCosting->__getPhoValue(). "," 
                . $objCosting->__getIssnQuantity(). "," . $objCosting->__getIssnValue(). "," . $objCosting->__getSendQuantity(). "," . $objCosting->__getSendValue(). "," 
                . $objCosting->__getStuValue(). "," . $objCosting->__getAdmin(). "," . $objCosting->__getUtility(). "," . $objCosting->__getIncid(). ","
                . $objCosting->__getPerQuantity(). "," . $objCosting->__getPerValue(). "," . $objCosting->__getFinalValue(). ","
                . $objCosting->__getDaysQuantity(). "," . $objCosting->__getDaysValue(). ",'" . $objCosting->__getDescription() . "'," . $objCosting->__getStuValue1();
                echo $dataCosting;
                if ($con->query("CALL sp_costing_insert_update (" . $dataCosting . ")")) {
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

    #Description : Function for select Costing
    public function selectCosting($dataCosting)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                if ($result = $con->query("CALL sp_costing_select_one (".$dataCosting.")")) {
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
}