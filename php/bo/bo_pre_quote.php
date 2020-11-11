<?php
#Author: DIEGO CASALLAS
#Date: 13/06/2019
#Description : Is BO PreQuote
include "../dto/dto_pre_quote.php";
include "../dao/dao_pre_quote.php";
header("Content-type: application/json; charset=utf-8");
class BoPreQuote
{
    private $objPreQuote;
    private $objDao;
    private $intValidate;

    public function __construct()
    {
    $this->objPreQuote = new DtoPreQuote();
    $this->objDao = new DaoPreQuote();
    }

#Description : Function for add one new PreQuote
    public function newPreClient($name,$identification,$address,$tel,$email,$contactName,$contactTitle,$contactTel,$contactCel,$contactEmail,$stat)
    {
        try {
        
        $intValidate = $this->objDao->newPreClient($name,$identification,$address,$tel,$email,$contactName,$contactTitle,$contactTel,$contactCel,$contactEmail,$stat);
        } catch (Exception $e) {
          echo 'Exception captured: ', $e->getMessage(), "\n";
        $intValidate = 0;
        }
        return $intValidate;
    }
    #Description : Function for add one new PreQuote
    public function newPreQuote($client,$consec,$calendar,$PreQuoteDate,$project,$PreQuoteYear,$version,$students,$quality,$width,$height,$format,$color,$colorPaper,$colorWeight,$bw,$bwPaper,$bwWeight,$serts,$guards,$guardsPaper,$guardsWeight,$cover,$coverPaper,$coverWeight,$top,$coverFish,$plast,$correction,$issn,$observ,$delivDate,$delivPlace,$user_id,$prov,$stat,$pageTotal)
    {
        try {
        $this->objPreQuote->__setPreQuote($client,$consec,$calendar,$PreQuoteDate,$project,$PreQuoteYear,$version,$students,$quality,$width,$height,$format,$color,$colorPaper,$colorWeight,$bw,$bwPaper,$bwWeight,$serts,$guards,$guardsPaper,$guardsWeight,$cover,$coverPaper,$coverWeight,$top,$coverFish,$plast,$correction,$issn,$observ,$delivDate,$delivPlace,$user_id,$prov,$stat,$pageTotal);
        $intValidate = $this->objDao->newPreQuote($this->objPreQuote);
        } catch (Exception $e) {
          echo 'Exception captured: ', $e->getMessage(), "\n";
        $intValidate = 0;
        }
        return $intValidate;
    }
    #Description : Function for add one new PreQuote
    public function newPreQuoteWeb($client_id,$pre_quo_consec,$pre_quo_height,$pre_quo_width,$pre_quo_quantity,$pre_quo_project,$pre_quo_inserts,$pre_quo_bw,$pre_quo_plast,$pre_quo_coverFinish,$pre_quo_top,$stat_id,$pre_quo_color,$pre_quo_format,$quo_observ,$pre_quo_delivPlace)
    {
        try {
        
        $intValidate = $this->objDao->newPreQuoteWeb($client_id,$pre_quo_consec,$pre_quo_height,$pre_quo_width,$pre_quo_quantity,$pre_quo_project,$pre_quo_inserts,$pre_quo_bw,$pre_quo_plast,$pre_quo_coverFinish,$pre_quo_top,$stat_id,$pre_quo_color,$pre_quo_format,$quo_observ,$pre_quo_delivPlace);
        } catch (Exception $e) {
          echo 'Exception captured: ', $e->getMessage(), "\n";
        $intValidate = 0;
        }
        return $intValidate;
    }

#Description : Function for show a PreQuote
    public function selectPreQuote($quo_id)
    {
        try {
          echo $this->objDao->selectPreQuote($quo_id);
        } catch (Exception $e) {
          echo 'Exception captured: ', $e->getMessage(), "\n";
        }
    }
#Description : Function for show a PreQuote all
public function selectPreQuoteAll($dataSearch)
{
    try {
        echo $this->objDao->selectPreQuoteAll($dataSearch);
    } catch (Exception $e) {
        echo 'Exception captured: ', $e->getMessage(), "\n";
    }
}
#Description : Function for show a PreQuote all
public function selectPreCliente($dataSearch)
{
    try {
        echo $this->objDao->selectPreCliente($dataSearch);
    } catch (Exception $e) {
        echo 'Exception captured: ', $e->getMessage(), "\n";
    }
}
#Description : Function for show a PreQuote code id
public function selectPreQuoteCode()
{
    try {
        echo $this->objDao->selectPreQuoteCode();
    } catch (Exception $e) {
        echo 'Exception captured: ', $e->getMessage(), "\n";
    }
}
#Description : Function for show a PreQuote  id
public function selectPreQuoteId($id)
{
    try {
        echo $this->objDao->selectPreQuoteId($id);
    } catch (Exception $e) {
        echo 'Exception captured: ', $e->getMessage(), "\n";
    }
}


#Description : Function for show a PreQuote
    public function selectPreQuoteStatus($stat_id)
    {
        try {
          echo $this->objDao->selectPreQuoteStatus($stat_id);
        } catch (Exception $e) {
          echo 'Exception captured: ', $e->getMessage(), "\n";
        }
    }

    #Description : Function for select the info for the pdfPreQuote
    public function selectPreQuotePdf($consec,$entry)
    {
        try {
          return $this->objDao->selectPreQuotePdf($consec,$entry);
        } catch (Exception $e) {
          echo 'Exception captured: ', $e->getMessage(), "\n";
        }
    }

#Description: Function for update a PreQuote
    public function updatePreQuote($client,$consec,$calendar,$Pre_quoteDate,$project,$Pre_quoteYear,$version,$students,$quality,$width,$height,$format,$color,$colorPaper,$colorWeight,$bw,$bwPaper,$bwWeight,$serts,$guards,$guardsPaper,$guardsWeight,$cover,$coverPaper,$coverWeight,$top,$coverFish,$plast,$correction,$issn,$observ,$delivDate,$delivPlace,$stat,$pageTotal,$inser,$inserPaper,$inserWeight,$client_identification,$client_name,$client_address,$client_tel,$client_email,$client_contactName,$client_contactTitle,$client_contactTel,$client_contactCel,$client_contactEmail)
    {
        try {
        $this->objPreQuote->__setUpdatePreQuote($client,$consec,$calendar,$Pre_quoteDate,$project,$Pre_quoteYear,$version,$students,$quality,$width,$height,$format,$color,$colorPaper,$colorWeight,$bw,$bwPaper,$bwWeight,$serts,$guards,$guardsPaper,$guardsWeight,$cover,$coverPaper,$coverWeight,$top,$coverFish,$plast,$correction,$issn,$observ,$delivDate,$delivPlace,$stat,$pageTotal,$inser,$inserPaper,$inserWeight,$client_identification,$client_name,$client_address,$client_tel,$client_email,$client_contactName,$client_contactTitle,$client_contactTel,$client_contactCel,$client_contactEmail);
        $intValidate = $this->objDao->updatePreQuote($this->objPreQuote);
        } catch (Exception $e) {
          echo 'Exception captured: ', $e->getMessage(), "\n";
        $intValidate = 0;
        }
        return $intValidate;
    }

#Description: Function for update a status PreQuote
    public function updatePreQuoteStatus($quo_id, $stat_id)
    {
        try {
        $this->objPreQuote->__setUpdatePreQuoteStatus($quo_id, $stat_id);
        $intValidate = $this->objDao->updatePreQuoteStatus($this->objPreQuote);
        } catch (Exception $e) {
          echo 'Exception captured: ', $e->getMessage(), "\n";
        $intValidate = 0;
        }
        return $intValidate;
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

    #Description : Function for create a quote from pre-quote
    public function createQuote($cli_id,$user_id,$quo_id)
    {
        try {        
        $intValidate = $this->objDao->createQuote($cli_id,$user_id,$quo_id);
        } catch (Exception $e) {
          echo 'Exception captured: ', $e->getMessage(), "\n";
            $intValidate = 0;
        }
        return $intValidate;
    }

    #Description : Function for create a quote from pre-quote
    public function deletePreQuote($cli_id,$quo_id)
    {
        try {        
        $intValidate = $this->objDao->deletePreQuote($cli_id,$quo_id);
        } catch (Exception $e) {
          echo 'Exception captured: ', $e->getMessage(), "\n";
            $intValidate = 0;
        }
        return $intValidate;
    }

}
$obj = new BoPreQuote();
/// We get the json sent
$getData = file_get_contents('php://input');
$data = json_decode($getData);

/**********CREATE ************/
if (isset($data->POST)) {
    if ($data->POST == "POST_PRE_CLIENT") {      
        echo $obj->newPreClient($data->Name,"",$data->Address,$data->Tel,$data->Email,$data->NameContact,"","","","",6);        
    }
    if ($data->POST == "POST_PRE_QUOTE") {
        
        echo $obj-> newPreQuoteWeb($data->Pre_client_id,$data->Pre_quo_consec,$data->Pre_quo_height,$data->Pre_quo_width,$data->Pre_quo_quantity,$data->Pre_quo_project,$data->Pre_quo_inserts,$data->Pre_quo_bw,$data->Pre_quo_plast,$data->Pre_quo_coverFinish,$data->Pre_quo_top,1,$data->Pre_quo_color,$data->Pre_quo_format,$data->Quo_observ,$data->Pre_quo_delivPlace);
        
    }
    if ($data->POST == "POST_UPDATE_PRE_QUOTE") {
        
      echo $obj-> updatePreQuote($data->Pre_client_id,$data->Pre_quo_consec,$data->Pre_quo_calendar,$data->Pre_quo_date,$data->Pre_quo_project,$data->Pre_quo_year,$data->Pre_quo_version,$data->Pre_quo_students,$data->Pre_quo_quantity,$data->Pre_quo_width,$data->Pre_quo_height,$data->Pre_quo_format,$data->Pre_quo_color,$data->Pre_quo_colorPaper,$data->Pre_quo_colorWeight,$data->Pre_quo_bw,$data->Pre_quo_bwPaper,$data->Pre_quo_bwWeight,$data->Pre_quo_inserts,$data->Pre_quo_guards,$data->Pre_quo_guardsPaper,$data->Pre_quo_guardsWeight,$data->Pre_quo_cover,$data->Pre_quo_coverPaper,$data->Pre_quo_coverWeight,$data->Pre_quo_top,$data->Pre_quo_coverFinish,$data->Pre_quo_plast,$data->Pre_quo_correction,$data->Pre_quo_issn,$data->Pre_quo_observ,$data->Pre_quo_delivDate,$data->Pre_quo_delivPlace,$data->Stat_id,$data->Pre_quo_pageTotal,$data->Pre_quo_inser,$data->Pre_quo_inserPaper,$data->Pre_quo_inserWeight,$data->Pre_client_identification,$data->Pre_client_name,$data->Pre_client_address,$data->Pre_client_tel,$data->Pre_client_email,$data->Pre_client_contactName,$data->Pre_client_contactTitle,$data->Pre_client_contactTel,$data->Pre_client_contactCel,$data->Pre_client_contactEmail);
    }
    if ($data->POST == "POST_CREATE_QUOTE") {
      echo $obj-> createQuote($data->Pre_client_id,$data->User_id,$data->Pre_quo_id);
    }
}

/**********READ AND CONSULT ************/
if (isset($data->GET)) {
    if ($data->GET == "GET_ALL") {
      echo $obj->selectPreQuoteAll($data->DataSearch);
    }
    if ($data->GET == "GET_CONSEC") {
        echo $obj->selectPreQuoteCode();
     }
     if ($data->GET == "GET_ON") {
        echo $obj->selectPreQuoteCode();
     }
     if ($data->GET == "GET_ID") {
        echo $obj->selectPreQuoteId($data->Quo_id);
     }
    if ($data->GET == "GET_PDF"){
    }
    if ($data->GET == "GET_PRE_CODE"){
        echo $obj->selectPreQuoteCode();
      }
      if ($data->GET == "GET_PRE_CLIENT"){
        echo $obj->selectPreCliente($data->Email);
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
      echo $obj->deletePreQuote($data->Pre_client_id,$data->Pre_quo_id);
    }
    
}

/**********************/
//echo $obj->newPreQuote('7','2','A','2019-07-23','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','37','28','29','30','31','32','tolima', 1, 2, 1,'37');

//echo $obj->selectPreQuoteAll("");

//echo $obj-> newPreClient("Tatiana Rodriguez","","Calle ","7800733","TatiananitaRod","aCina2","","","","",6);

//echo $obj->newPreClient("Diego Casallas","","Calle ","123456","diego@gmail.com","Sinapsis Soft","","","","",6);
//echo $obj->updatePreQuote(3,"PRE_2","A","2019-08-08","libro","2019","2","22","130","27.5","20.5","Vertical","1","Propalcote","90","130","Propalcote","220","No","","Propalcote","90","","Propalcote","90","Dura","Ninguo","Brillo uv","No","No","","2019-01-01","Barranca",1,"135","","Propalcote","90","1030633992","Laura Gomez","","","gomez.laura@hotmail.com","Laura Gomez","Directora","","","");
//echo $obj->newPreQuoteWeb(15,"PRE_4","27.5","20.5","120","Agenda","No","10","Brillante","Brillo uv","Rústica",1,"40","Horizontal","Cosido","Cll 2D 78B 13");
