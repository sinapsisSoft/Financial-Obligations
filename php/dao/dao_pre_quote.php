<?php
#Author: DIEGO CASALLAS
#Date: 15/08/2019
#Description : Is DAO PreQuote
include "../class/connectionDB.php";
class DaoPreQuote
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

    #Description: Function for create a new PreQuote
    public function newPreQuoteWeb($client_id, $pre_quo_consec, $pre_quo_height, $pre_quo_width, $pre_quo_quantity, $pre_quo_project, $pre_quo_inserts, $pre_quo_bw, $pre_quo_plast, $pre_quo_coverFinish, $pre_quo_top, $stat_id, $pre_quo_color, $pre_quo_format,$quo_observ,$pre_quo_delivPlace)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                $dataPreQuote = $client_id . ",'" . $pre_quo_consec . "','" . $pre_quo_height . "','" . $pre_quo_width . "','" . $pre_quo_quantity . "','" . $pre_quo_project . "','" . $pre_quo_inserts . "','" . $pre_quo_bw . "','" . $pre_quo_plast . "','" . $pre_quo_coverFinish . "','" . $pre_quo_top . "'," . $stat_id . ",'" . $pre_quo_color . "','" . $pre_quo_format . "','".$quo_observ."','".$pre_quo_delivPlace."'";
                if ($con->query("CALL insert_pre_quote (" . $dataPreQuote . ")")) {
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
#Description: Function for create a new PreQuote
    public function newPreClient($name, $identification, $address, $tel, $email, $contactName, $contactTitle, $contactTel, $contactCel, $contactEmail, $stat)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                $query = "'" . $name . "','" . $identification . "','" . $address . "','" . $tel . "','" . $email . "','" . $contactName . "','" . $contactTitle . "','" . $contactTel . "','" . $contactCel . "','" . $contactEmail . "'," . $stat;

                if ($con->query("CALL sp_pre_client_insert_update (" . $query . ")")) {
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
    #Description : Function for select Quote
    public function selectQuoteCode()
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                if ($result = $con->query("CALL sp_get_pre_code_quote()")) {
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
    #Description : Function for select PreQuote
    public function selectPreQuote($dataPreQuote)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                if ($result = $con->query("CALL sp_PreQuote_select_one (" . $dataPreQuote . ")")) {
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
    #Description : Function for select PreQuote
    public function selectPreQuoteAll($dataSearch)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                if ($result = $con->query("CALL sp_pre_quote_select_all('" . $dataSearch . "')")) {
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
    #Description : Function for select PreQuote
    public function selectPreCliente($dataSearch)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                if ($result = $con->query("CALL sp_pre_client_select('" . $dataSearch . "')")) {
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
    #Description : Function for select PreQuote
    public function selectPreQuoteCode()
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                if ($result = $con->query("CALL sp_get_pre_code_quote()")) {
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
    #Description : Function for select PreQuote
    public function selectPreQuoteId($id)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                if ($result = $con->query("CALL sp_pre_quote_select_one(" . $id . ")")) {
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

    #Description : Function for select PreQuote by status
    public function selectPreQuoteStatus($dataPreQuote)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                if ($result = $con->query("CALL sp_PreQuote_select_status (" . $dataPreQuote . ")")) {
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

    #Description : Function for select the info for the pdfPreQuote
    public function selectPreQuotePdf($dataPreQuote, $entry)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                if ($result = $con->query("CALL sp_PreQuote_create_pdf ('" . $dataPreQuote . "'," . $entry . ")")) {
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

    #Description: Function for update a PreQuote
    public function updatePreQuote($objPreQuote)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                $dataPreQuote = $objPreQuote->__getClient_id() . ",'"
                . $objPreQuote->__getPre_quo_consec() . "','"
                . $objPreQuote->__getPre_quo_calendar() . "','"
                . $objPreQuote->__getPre_quo_date() . "','"
                . $objPreQuote->__getPre_quo_project() . "','"
                . $objPreQuote->__getPre_quo_year() . "','"
                . $objPreQuote->__getPre_quo_version() . "','"
                . $objPreQuote->__getPre_quo_students() . "','"
                . $objPreQuote->__getPre_quo_quantity() . "','"
                . $objPreQuote->__getPre_quo_width() . "','"
                . $objPreQuote->__getPre_quo_height() . "','"
                . $objPreQuote->__getPre_quo_format() . "','"
                . $objPreQuote->__getPre_quo_color() . "','"
                . $objPreQuote->__getPre_quo_colorPaper() . "','"
                . $objPreQuote->__getPre_quo_colorWeigh() . "','"
                . $objPreQuote->__getPre_quo_bw() . "','"
                . $objPreQuote->__getPre_quo_bwPaper() . "','"
                . $objPreQuote->__getPre_quo_bwWeight() . "','"
                . $objPreQuote->__getPre_quo_inserts() . "','"
                . $objPreQuote->__getPre_quo_guards() . "','"
                . $objPreQuote->__getPre_quo_guardsPaper() . "','"
                . $objPreQuote->__getPre_quo_guardsWeig() . "','"
                . $objPreQuote->__getPre_quo_cover() . "','"
                . $objPreQuote->__getPre_quo_coverPaper() . "','"
                . $objPreQuote->__getPre_quo_coverWeigh() . "','"
                . $objPreQuote->__getPre_quo_top() . "','"
                . $objPreQuote->__getPre_quo_coverFinis() . "','"
                . $objPreQuote->__getPre_quo_plast() . "','"
                . $objPreQuote->__getPre_quo_correction() . "','"
                . $objPreQuote->__getPre_quo_issn() . "','"
                . $objPreQuote->__getPre_quo_observ() . "','"
                . $objPreQuote->__getPre_quo_delivDate() . "','"
                . $objPreQuote->__getPre_quo_delivPlace() . "',"
                . $objPreQuote->__getStat_id() . ",'"
                . $objPreQuote->__getPre_quo_pageTotal() . "','"
                . $objPreQuote->__getPre_quo_insert() . "','"
                . $objPreQuote->__getPre_quo_inserPaper() . "','"
                . $objPreQuote->__getPre_quo_inserWeight() . "','"
                . $objPreQuote->__getclient_identification() . "','"
                . $objPreQuote->__getclient_name() . "','"
                . $objPreQuote->__getclient_address() . "','"
                . $objPreQuote->__getclient_tel() . "','"
                . $objPreQuote->__getclient_email() . "','"
                . $objPreQuote->__getclient_contactName() . "','"
                . $objPreQuote->__getclient_contactTitle() . "','"
                . $objPreQuote->__getclient_contactTel() . "','"
                . $objPreQuote->__getclient_contactCel() . "','"
                . $objPreQuote->__getclient_contactEmail() . "'";
                if ($con->query("CALL sp_pre_quote_update (" . $dataPreQuote . ")")) {
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

    #Description: Function for update a Status PreQuote
    public function updatePreQuoteStatus($objPreQuote)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                $dataPreQuote = $objPreQuote->__getPreQuo_id() . "," . $objPreQuote->__getStat_id();
                if ($result = $con->query("CALL sp_PreQuote_update_status (" . $dataPreQuote . ")")) {
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

    #Description: Function for create a quote from pre-quote
    public function createQuote($client_id, $user_id, $pre_id)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                $dataPreQuote = $client_id . "," . $user_id . "," . $pre_id;
                if ($con->query("CALL sp_clone_client_quote (" . $dataPreQuote . ")")) {
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

    #Description: Function for create a quote from pre-quote
    public function deletePreQuote($client_id, $pre_id)
    {
        try {
            $con = $this->objConntion->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                $dataPreQuote = $client_id . "," . $pre_id;
                if ($con->query("CALL sp_delete_client_quote (" . $dataPreQuote . ")")) {
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
