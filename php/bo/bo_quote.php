<?php
#Author: DIEGO CASALLAS
#Date: 13/06/2019
#Description : Is BO Quote
include "../dto/dto_quote.php";
include "../dao/dao_quote.php";
header("Content-type: application/json; charset=utf-8");
class BoQuote
{
    private $objQuote;
    private $objDao;
    private $intValidate;

    public function __construct()
    {
        $this->objQuote = new DtoQuote();
        $this->objDao = new DaoQuote();
    }

    #Description : Function for add one new quote
    public function newQuote($client, $consec, $calendar, $quoteDate, $project, $quoteYear, $version, $students, $quality, $width, $height, $format, $color, $colorPaper, $colorWeight, $bw, $bwPaper, $bwWeight, $serts, $guards, $guardsPaper, $guardsWeight, $cover, $coverPaper, $coverWeight, $top, $coverFish, $plast, $correction, $issn, $observ, $delivDate, $delivPlace, $user_id, $prov, $stat, $pageTotal, $Quo_inser, $inserPaper, $inserWeight)
    {
        try {
            $this->objQuote->__setQuote($client, $consec, $calendar, $quoteDate, $project, $quoteYear, $version, $students, $quality, $width, $height, $format, $color, $colorPaper, $colorWeight, $bw, $bwPaper, $bwWeight, $serts, $guards, $guardsPaper, $guardsWeight, $cover, $coverPaper, $coverWeight, $top, $coverFish, $plast, $correction, $issn, $observ, $delivDate, $delivPlace, $user_id, $prov, $stat, $pageTotal, $Quo_inser, $inserPaper, $inserWeight);
            $intValidate = $this->objDao->newQuote($this->objQuote);
        } catch (Exception $e) {
           // echo 'Exception captured: ', $e->getMessage(), "\n";
            $intValidate = 0;
        }
        return $intValidate;
    }

    #Description : Function for show a quote
    public function selectQuote($quo_id)
    {
        try {
            echo $this->objDao->selectQuote($quo_id);
        } catch (Exception $e) {
            echo 'Exception captured: ', $e->getMessage(), "\n";
        }
    }
    #Description : Function for show a quote all
    public function selectQuoteAll($dataSearch)
    {
        try {
            echo $this->objDao->selectQuoteAll($dataSearch);
        } catch (Exception $e) {
            echo 'Exception captured: ', $e->getMessage(), "\n";
        }
    }
    #Description : Function for show a quote code id
    public function selectQuoteCode()
    {
        try {
            echo $this->objDao->selectQuoteCode();
        } catch (Exception $e) {
            echo 'Exception captured: ', $e->getMessage(), "\n";
        }
    }
    #Description : Function for show a quote  id
    public function selectQuoteId($id)
    {
        try {
            echo $this->objDao->selectQuoteId($id);
        } catch (Exception $e) {
            echo 'Exception captured: ', $e->getMessage(), "\n";
        }
    }


    #Description : Function for show a quote
    public function selectQuoteStatus($stat_id)
    {
        try {
            echo $this->objDao->selectQuoteStatus($stat_id);
        } catch (Exception $e) {
            echo 'Exception captured: ', $e->getMessage(), "\n";
        }
    }

    #Description : Function for select the info for the pdfQuote
    public function selectQuotePdf($consec, $entry)
    {
        try {
            return $this->objDao->selectQuotePdf($consec, $entry);
        } catch (Exception $e) {
            echo 'Exception captured: ', $e->getMessage(), "\n";
        }
    }

    #Description: Function for update a quote
    public function updateQuote($quo_id, $quo_consec, $quo_date, $quo_project, $quo_year, $quo_version, $quo_students, $quo_quantity, $quo_width, $quo_height, $quo_format, $quo_color, $quo_colorPaper, $quo_bw, $quo_bwPaper, $quo_2Inks, $quo_2Paper, $quo_inserts, $quo_insertsPaper, $quo_guards, $quo_guardsPaper, $quo_cover, $quo_coverPaper, $quo_coverFinish, $quo_top, $quo_plast, $quo_correction, $quo_issn, $quo_observ, $quo_delivDate, $quo_delivPlace, $quo_place, $stat_id)
    {
        try {
            $this->objQuote->__setUpdateQuote($quo_id, $quo_consec, $quo_date, $quo_project, $quo_year, $quo_version, $quo_students, $quo_quantity, $quo_width, $quo_height, $quo_format, $quo_color, $quo_colorPaper, $quo_bw, $quo_bwPaper, $quo_2Inks, $quo_2Paper, $quo_inserts, $quo_insertsPaper, $quo_guards, $quo_guardsPaper, $quo_cover, $quo_coverPaper, $quo_coverFinish, $quo_top, $quo_plast, $quo_correction, $quo_issn, $quo_observ, $quo_delivDate, $quo_delivPlace, $quo_place, $stat_id);
            $intValidate = $this->objDao->updateQuote($this->objQuote);
        } catch (Exception $e) {
            echo 'Exception captured: ', $e->getMessage(), "\n";
            $intValidate = 0;
        }
        return $intValidate;
    }

    #Description: Function for update a status quote
    public function updateQuoteStatus($quo_consec, $stat_id)
    {
        try {
            $this->objQuote->__setUpdateQuoteStatus($quo_consec, $stat_id);
            $intValidate = $this->objDao->updateQuoteStatus($this->objQuote);
        } catch (Exception $e) {
            echo 'Exception captured: ', $e->getMessage(), "\n";
            $intValidate = 0;
        }
        return $intValidate;
    }
}
$obj = new BoQuote();
/// We get the json sent
$getData = file_get_contents('php://input');
$data = json_decode($getData);

/**********CREATE ************/
if (isset($data->POST)) {
    if ($data->POST == "POST") {
        echo $obj->newQuote($data->Client_id, $data->Quo_consec, $data->Quo_calendar, $data->Quo_date, $data->Quo_project, $data->Quo_year, $data->Quo_version, $data->Quo_students, $data->Quo_quantity, $data->Quo_width, $data->Quo_height, $data->Quo_format, $data->Quo_color, $data->Quo_colorPaper, $data->Quo_colorWeight, $data->Quo_bw, $data->Quo_bwPaper, $data->Quo_bwWeight, $data->Quo_inserts, $data->Quo_guards, $data->Quo_guardsPaper, $data->Quo_guardsWeight, $data->Quo_cover, $data->Quo_coverPaper, $data->Quo_coverWeight, $data->Quo_top, $data->Quo_coverFinish, $data->Quo_plast, $data->Quo_correction, $data->Quo_issn, $data->Quo_observ, $data->Quo_delivDate, $data->Quo_delivPlace, $data->User_id, $data->Pro_id, $data->Stat_id, $data->Quo_pageTotal, $data->Quo_inser, $data->Quo_inserPaper, $data->Quo_inserWeight);
    }
    if ($data->POST == "POST_STATUS") {
      echo $obj->updateQuoteStatus($data->Quo_consec, $data->Stat_id);
  }
}

/**********READ AND CONSULT ************/
if (isset($data->GET)) {
    if ($data->GET == "GET_ALL") {
        echo $obj->selectQuoteAll($data->DataSearch);
    }
    if ($data->GET == "GET_CONSEC") {
        echo $obj->selectQuoteCode();
    }
    if ($data->GET == "GET_ON") {
        echo $obj->selectQuoteCode();
    }
    if ($data->GET == "GET_ID") {
        echo $obj->selectQuoteId($data->Quo_id);
    }
    if ($data->GET == "GET_PDF") {
        //echo $obj->selectQuotePdf($data->Quo_consec);
    }
}

/********** PUT ************/
if (isset($data->PUT)) {
    if ($data->PUT == "PUT") { }
}

/********** DELETE  ************/
if (isset($data->DELETE)) {
    if ($data->DELETE == "DELETE") { }
}
/**********************/
//echo $obj->newQuote('7','2','A','2019-07-23','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','37','28','29','30','31','32','tolima', 1, 2, 1,'37');

//echo $obj->selectQuote(4);
//echo $obj->updateQuote(6, '', '2019-08-01', 'sdfsdf', 2019, 0, 30, 90, 20, 27, 1, 50, 1, 0, 0, 0, 0, 0, 0, 4, 2, 2, 1, 1, 0, 1, 0, 1,'Observacion', '2019-08-31', 'Bogota', 1, 2);
//echo $obj->selectQuoteStatus(2);
//echo $obj->updateQuoteStatus("COT_4",2);
//echo $obj->selectQuoteAll("12");
