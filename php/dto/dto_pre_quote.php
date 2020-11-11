<?php
#Author: LAURA GRISALES
#Date: 15/08/2019
#Description : Is DTO Pre_quote
class DtoPreQuote
{
    private $Pre_client_identification;
    private $Pre_client_name;
    private $Pre_client_address;
    private $Pre_client_tel;
    private $Pre_client_email;
    private $Pre_client_contactName;
    private $Pre_client_contactTitle;
    private $Pre_client_contactTel;
    private $Pre_client_contactCel;
    private $Pre_client_contactEmail;
    private $Pre_quo_id;
    private $Pre_client_id;
    private $Pre_quo_consec;
    private $Pre_quo_calendar;
    private $Pre_quo_date;
    private $Pre_quo_project;
    private $Pre_quo_year;
    private $Pre_quo_version;
    private $Pre_quo_students;
    private $Pre_quo_quantity;
    private $Pre_quo_width;
    private $Pre_quo_height;
    private $Pre_quo_format;
    private $Pre_quo_color;
    private $Pre_quo_colorPaper;
    private $Pre_quo_colorWeight;
    private $Pre_quo_bw;
    private $Pre_quo_bwPaper;
    private $Pre_quo_bwWeight;
    private $Pre_quo_inserts;
    private $Pre_quo_guards;
    private $Pre_quo_guardsPaper;
    private $Pre_quo_guardsWeight;
    private $Pre_quo_cover;
    private $Pre_quo_coverPaper;
    private $Pre_quo_coverWeight;
    private $Pre_quo_top;
    private $Pre_quo_coverFinish;
    private $Pre_quo_plast;
    private $Pre_quo_correction;
    private $Pre_quo_issn;
    private $Pre_quo_observ;
    private $Pre_quo_delivDate;
    private $Pre_quo_delivPlace;
    private $Stat_id;
    private $Pre_quo_pageTotal;
    private $Pre_quo_inser;
    private $Pre_quo_inserPaper;
    private $Pre_quo_inserWeight;

    public function __construct()
    {

    }
    public function __setUpdatePreQuote($client,$consec,$calendar,$Pre_quoteDate,$project,$Pre_quoteYear,$version,$students,$quality,$width,$height,$format,$color,$colorPaper,$colorWeight,$bw,$bwPaper,$bwWeight,$serts,$guards,$guardsPaper,$guardsWeight,$cover,$coverPaper,$coverWeight,$top,$coverFish,$plast,$correction,$issn,$observ,$delivDate,$delivPlace,$stat,$pageTotal,$inser,$inserPaper,$inserWeight,$client_identification,$client_name,$client_address,$client_tel,$client_email,$client_contactName,$client_contactTitle,$client_contactTel,$client_contactCel,$client_contactEmail) {
        $this->Pre_client_id = $client;
        $this->Pre_client_identification = $client_identification;
        $this->Pre_client_name = $client_name;
        $this->Pre_client_address = $client_address;
        $this->Pre_client_tel = $client_tel;
        $this->Pre_client_email = $client_email;
        $this->Pre_client_contactName = $client_contactName;
        $this->Pre_client_contactTitle = $client_contactTitle;;
        $this->Pre_client_contactTel = $client_contactTel;
        $this->Pre_client_contactCel = $client_contactCel;
        $this->Pre_client_contactEmail = $client_contactEmail;
        $this->Pre_quo_consec = $consec;
        $this->Pre_quo_calendar = $calendar;
        $this->Pre_quo_date = $Pre_quoteDate;
        $this->Pre_quo_project = $project;
        $this->Pre_quo_year = $Pre_quoteYear;
        $this->Pre_quo_version = $version;
        $this->Pre_quo_students = $students;
        $this->Pre_quo_quantity = $quality;
        $this->Pre_quo_width = $width;
        $this->Pre_quo_height = $height;
        $this->Pre_quo_format = $format;
        $this->Pre_quo_color = $color;
        $this->Pre_quo_colorPaper = $colorPaper;
        $this->Pre_quo_colorWeight = $colorWeight;
        $this->Pre_quo_bw = $bw;
        $this->Pre_quo_bwPaper = $bwPaper;
        $this->Pre_quo_bwWeight = $bwWeight;
        $this->Pre_quo_inserts = $serts;
        $this->Pre_quo_guards = $guards;
        $this->Pre_quo_guardsPaper = $guardsPaper;
        $this->Pre_quo_guardsWeight = $guardsWeight;
        $this->Pre_quo_cover = $cover;
        $this->Pre_quo_coverPaper = $coverPaper;
        $this->Pre_quo_coverWeight = $coverWeight;
        $this->Pre_quo_top = $top;
        $this->Pre_quo_coverFinish = $coverFish;
        $this->Pre_quo_plast = $plast;
        $this->Pre_quo_correction = $correction;
        $this->Pre_quo_issn = $issn;
        $this->Pre_quo_observ = $observ;
        $this->Pre_quo_delivDate = $delivDate;
        $this->Pre_quo_delivPlace = $delivPlace;
        $this->Stat_id = $stat;
        $this->Pre_quo_pageTotal = $pageTotal;
        $this->Pre_quo_inser = $inser;
        $this->Pre_quo_inserPaper = $inserPaper;
        $this->Pre_quo_inserWeight = $inserWeight;
    }

    public function __setUpdatePre_quoteStatus($Pre_quo_id, $stat_id)
    {
        $this->Pre_quo_id = $Pre_quo_id;
        $this->Stat_id = $stat_id;
    }
//GET Pre_quote
    public function __getClient_id()
    {return $this->Pre_client_id;}
    public function __getclient_identification()
    {return $this->Pre_client_identification;}
    public function __getclient_name()
    {return $this->Pre_client_name;}
    public function __getclient_address()
    {return $this->Pre_client_address;}
    public function __getclient_tel()
    {return $this->Pre_client_tel;}
    public function __getclient_email()
    {return $this->Pre_client_email;}
    public function __getclient_contactName()
    {return $this->Pre_client_contactName;}
    public function __getclient_contactTitle()
    {return $this->Pre_client_contactTitle;}
    public function __getclient_contactTel()
    {return $this->Pre_client_contactTel;}
    public function __getclient_contactCel()
    {return $this->Pre_client_contactCel;}
    public function __getclient_contactEmail()
    {return $this->Pre_client_contactEmail;}
    public function __getPre_quo_consec()
    {return $this->Pre_quo_consec;}
    public function __getPre_quo_calendar()
    {return $this->Pre_quo_calendar;}
    public function __getPre_quo_date()
    {return $this->Pre_quo_date;}
    public function __getPre_quo_project()
    {return $this->Pre_quo_project;}
    public function __getPre_quo_year()
    {return $this->Pre_quo_year;}
    public function __getPre_quo_version()
    {return $this->Pre_quo_version;}
    public function __getPre_quo_students()
    {return $this->Pre_quo_students;}
    public function __getPre_quo_quantity()
    {return $this->Pre_quo_quantity;}
    public function __getPre_quo_width()
    {return $this->Pre_quo_width;}
    public function __getPre_quo_height()
    {return $this->Pre_quo_height;}
    public function __getPre_quo_format()
    {return $this->Pre_quo_format;}
    public function __getPre_quo_color()
    {return $this->Pre_quo_color;}
    public function __getPre_quo_colorPaper()
    {return $this->Pre_quo_colorPaper;}
    public function __getPre_quo_colorWeigh()
    {return $this->Pre_quo_colorWeight;}
    public function __getPre_quo_bw()
    {return $this->Pre_quo_bw;}
    public function __getPre_quo_bwPaper()
    {return $this->Pre_quo_bwPaper;}
    public function __getPre_quo_bwWeight()
    {return $this->Pre_quo_bwWeight;}
    public function __getPre_quo_inserts()
    {return $this->Pre_quo_inserts;}
    public function __getPre_quo_guards()
    {return $this->Pre_quo_guards;}
    public function __getPre_quo_guardsPaper()
    {return $this->Pre_quo_guardsPaper;}
    public function __getPre_quo_guardsWeig()
    {return $this->Pre_quo_guardsWeight;}
    public function __getPre_quo_cover()
    {return $this->Pre_quo_cover;}
    public function __getPre_quo_coverPaper()
    {return $this->Pre_quo_coverPaper;}
    public function __getPre_quo_coverWeigh()
    {return $this->Pre_quo_coverWeight;}
    public function __getPre_quo_top()
    {return $this->Pre_quo_top;}
    public function __getPre_quo_coverFinis()
    {return $this->Pre_quo_coverFinish;}
    public function __getPre_quo_plast()
    {return $this->Pre_quo_plast;}
    public function __getPre_quo_correction()
    {return $this->Pre_quo_correction;}
    public function __getPre_quo_issn()
    {return $this->Pre_quo_issn;}
    public function __getPre_quo_observ()
    {return $this->Pre_quo_observ;}
    public function __getPre_quo_delivDate()
    {return $this->Pre_quo_delivDate;}
    public function __getPre_quo_delivPlace()
    {return $this->Pre_quo_delivPlace;}
    public function __getUser_id()
    {return $this->User_id;}
    public function __getPro_id()
    {return $this->Pro_id;}
    public function __getStat_id()
    {return $this->Stat_id;}
    public function __getPre_quo_pageTotal()
    {return $this->Pre_quo_pageTotal;}
    public function __getPre_quo_insert()
    {return $this->Pre_quo_inser;}
    public function __getPre_quo_inserPaper()
    {return $this->Pre_quo_inserPaper;}
    public function __getPre_quo_inserWeight()
    {return $this->Pre_quo_inserWeight;}
}
