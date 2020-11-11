<?php
#Author: DIEGO CASALLAS
#Date: 15/08/2019
#Description : Is DAO Quote
include "../class/connectionDB.php";
class DaoQuote
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
    #Description: Function for create a new Quote
    public function newQuote($objQuote)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                $dataQuote = $objQuote->__getClient_id() . ",'" . $objQuote->__getQuo_consec()
                . "','" . $objQuote->__getQuo_calendar()
                . "','" . $objQuote->__getQuo_date()
                . "','" . $objQuote->__getQuo_project()
                . "','" . $objQuote->__getQuo_year()
                . "','" . $objQuote->__getQuo_version()
                . "','" . $objQuote->__getQuo_students()
                . "','" . $objQuote->__getQuo_quantity()
                . "','" . $objQuote->__getQuo_width()
                . "','" . $objQuote->__getQuo_height()
                . "','" . $objQuote->__getQuo_format()
                . "','" . $objQuote->__getQuo_color()
                . "','" . $objQuote->__getQuo_colorPaper()
                . "','" . $objQuote->__getQuo_colorWeigh()
                . "','" . $objQuote->__getQuo_bw()
                . "','" . $objQuote->__getQuo_bwPaper()
                . "','" . $objQuote->__getQuo_bwWeight()
                . "','" . $objQuote->__getQuo_inserts()
                . "','" . $objQuote->__getQuo_guards()
                . "','" . $objQuote->__getQuo_guardsPape()
                . "','" . $objQuote->__getQuo_guardsWeig()
                . "','" . $objQuote->__getQuo_cover()
                . "','" . $objQuote->__getQuo_coverPaper()
                . "','" . $objQuote->__getQuo_coverWeigh()
                . "','" . $objQuote->__getQuo_top()
                . "','" . $objQuote->__getQuo_coverFinis()
                . "','" . $objQuote->__getQuo_plast()
                . "','" . $objQuote->__getQuo_correction()
                . "','" . $objQuote->__getQuo_issn()
                . "','" . $objQuote->__getQuo_observ()
                . "','" . $objQuote->__getQuo_delivDate()
                . "','" . $objQuote->__getQuo_delivPlace() 
                . "'," . $objQuote->__getUser_id() 
                . "," . $objQuote->__getPro_id() 
                . "," . $objQuote->__getStat_id() 
                . ",'" . $objQuote->__getQuo_pageTotal() 
                . "','" . $objQuote->__getQuo_inser() 
                . "','" . $objQuote->__getQuo_inserPaper() 
                . "','" . $objQuote->__getQuo_inserWeight()."'";
                
                 if ($con->query("CALL sp_quote_insert_upate (".$dataQuote.")")) {
                     $this->intValidatio = 1;
                 } else {
                   $this->intValidatio = 0;
                 }
                //$this->intValidatio = $dataQuote;

            }
            $con->close();
        } catch (Exception $e) {
           // echo 'Exception captured: ', $e->getMessage(), "\n";
            $this->intValidatio = 0;
        }
        return $this->intValidatio;
    }

    #Description : Function for select Quote
    public function selectQuote($dataQuote)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                if ($result = $con->query("CALL sp_quote_select_one (" . $dataQuote . ")")) {
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
    #Description : Function for select Quote
    public function selectQuoteAll($dataSearch)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                if ($result = $con->query("CALL sp_quote_select_all('" . $dataSearch . "')")) {
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
    #Description : Function for select Quote
    public function selectQuoteCode()
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                if ($result = $con->query("CALL sp_get_code_quote()")) {
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
    #Description : Function for select Quote
    public function selectQuoteId($id)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                if ($result = $con->query("CALL sp_quote_select_one(".$id.")")) {
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
    

    #Description : Function for select Quote by status
    public function selectQuoteStatus($dataQuote)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                if ($result = $con->query("CALL sp_quote_select_status (" . $dataQuote . ")")) {
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

    #Description : Function for select the info for the pdfQuote
    public function selectQuotePdf($dataQuote, $entry)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                if ($result = $con->query("CALL sp_quote_create_pdf ('" . $dataQuote . "'," . $entry . ")")) {
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

    #Description: Function for update a Quote
    public function updateQuote($objQuote)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                $dataQuote = $objQuote->__getQuo_id() . ",'" . $objQuote->__getQuo_consec() . "','" . $objQuote->__getQuo_date() . "','" . $objQuote->__getQuo_project() . "'," . $objQuote->__getQuo_year() . "," . $objQuote->__getQuo_version() . "," . $objQuote->__getQuo_students() . "," . $objQuote->__getQuo_quantity() . "," . $objQuote->__getQuo_width() . "," . $objQuote->__getQuo_height() . "," . $objQuote->__getQuo_format() . "," . $objQuote->__getQuo_color() . "," . $objQuote->__getQuo_colorPaper() . "," . $objQuote->__getQuo_bw() . ", " . $objQuote->__getQuo_bwPaper() . "," . $objQuote->__getQuo_2Inks() . "," . $objQuote->__getQuo_2Paper() . "," . $objQuote->__getQuo_inserts() . "," . $objQuote->__getQuo_insertsPaper() . "," . $objQuote->__getQuo_guards() . "," . $objQuote->__getQuo_guardsPaper() . "," . $objQuote->__getQuo_cover() . " ," . $objQuote->__getQuo_coverPaper() . "," . $objQuote->__getQuo_top() . "," . $objQuote->__getQuo_coverFinish() . "," . $objQuote->__getQuo_plast() . "," . $objQuote->__getQuo_correction() . "," . $objQuote->__getQuo_issn() . ",'" . $objQuote->__getQuo_observ() . "','" . $objQuote->__getQuo_delivDate() . "','" . $objQuote->__getQuo_delivPlace() . "'," . $objQuote->__getQuo_place() . "," . $objQuote->__getStat_id();
                if ($result = $con->query("CALL sp_quote_update (" . $dataQuote . ")")) {
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

    #Description: Function for update a Status Quote
    public function updateQuoteStatus($objQuote)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                $dataQuote = "'" . $objQuote->__getQuo_consec() . "'," . $objQuote->__getStat_id();
                if ($con->query("CALL sp_quote_update_status (" . $dataQuote . ")")) {
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

}
