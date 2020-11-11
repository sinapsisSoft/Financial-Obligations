<?php
#Author: LAURA GRISALES
#Date: 15/08/2019
#Description : Is DTO quote
class DtoQuote
{
    private $Quo_id;
    private $Client_id;
    private $Quo_consec;
    private $Quo_calendar;
    private $Quo_date;
    private $Quo_project;
    private $Quo_year;
    private $Quo_version;
    private $Quo_students;
    private $Quo_quantity;
    private $Quo_width;
    private $Quo_height;
    private $Quo_format;
    private $Quo_color;
    private $Quo_colorPaper;
    private $Quo_colorWeight;
    private $Quo_bw;
    private $Quo_bwPaper;
    private $Quo_bwWeight;
    private $Quo_inserts;
    private $Quo_guards;
    private $Quo_guardsPaper;
    private $Quo_guardsWeight;
    private $Quo_cover;
    private $Quo_coverPaper;
    private $Quo_coverWeight;
    private $Quo_top;
    private $Quo_coverFinish;
    private $Quo_plast;
    private $Quo_correction;
    private $Quo_issn;
    private $Quo_observ;
    private $Quo_delivDate;
    private $Quo_delivPlace;
    private $User_id;
    private $Pro_id;
    private $Stat_id;
    private $Quo_pageTotal;
    private $Quo_inser;
    private $Quo_inserPaper;
    private $Quo_inserWeight;

    public function __construct()
    {

    }
    public function __setQuote($client,$consec,$calendar,$quoteDate,$project,$quoteYear,$version,$students,$quality,$width,$height,$format,$color,$colorPaper,$colorWeight,$bw,$bwPaper,$bwWeight,$serts,$guards,$guardsPaper,$guardsWeight,$cover,$coverPaper,$coverWeight,$top,$coverFish,$plast,$correction,$issn,$observ,$delivDate,$delivPlace,$user_id,$prov,$stat,$pageTotal,$Quo_inser,$inserPaper,$inserWeight) {
        $this->Client_id = $client;
        $this->Quo_consec = $consec;
        $this->Quo_calendar = $calendar;
        $this->Quo_date = $quoteDate;
        $this->Quo_project = $project;
        $this->Quo_year = $quoteYear;
        $this->Quo_version = $version;
        $this->Quo_students = $students;
        $this->Quo_quantity = $quality;
        $this->Quo_width = $width;
        $this->Quo_height = $height;
        $this->Quo_format = $format;
        $this->Quo_color = $color;
        $this->Quo_colorPaper = $colorPaper;
        $this->Quo_colorWeight = $colorWeight;
        $this->Quo_bw = $bw;
        $this->Quo_bwPaper = $bwPaper;
        $this->Quo_bwWeight = $bwWeight;
        $this->Quo_inserts = $serts;
        $this->Quo_guards = $guards;
        $this->Quo_guardsPaper = $guardsPaper;
        $this->Quo_guardsWeight = $guardsWeight;
        $this->Quo_cover = $cover;
        $this->Quo_coverPaper = $coverPaper;
        $this->Quo_coverWeight = $coverWeight;
        $this->Quo_top = $top;
        $this->Quo_coverFinish = $coverFish;
        $this->Quo_plast = $plast;
        $this->Quo_correction = $correction;
        $this->Quo_issn = $issn;
        $this->Quo_observ = $observ;
        $this->Quo_delivDate = $delivDate;
        $this->Quo_delivPlace = $delivPlace;
        $this->User_id = $user_id;
        $this->Pro_id = $prov;
        $this->Stat_id = $stat;
        $this->Quo_pageTotal = $pageTotal;
        $this->Quo_inser = $Quo_inser;
        $this->Quo_inserPaper = $inserPaper;
        $this->Quo_inserWeight = $inserWeight;
    }

    public function __setUpdateQuoteStatus($quo_consec, $stat_id)
    {
        $this->Quo_consec = $quo_consec;
        $this->Stat_id = $stat_id;
    }
//GET Quote
    public function __getClient_id()
    {return $this->Client_id;}
    public function __getQuo_consec()
    {return $this->Quo_consec;}
    public function __getQuo_calendar()
    {return $this->Quo_calendar;}
    public function __getQuo_date()
    {return $this->Quo_date;}
    public function __getQuo_project()
    {return $this->Quo_project;}
    public function __getQuo_year()
    {return $this->Quo_year;}
    public function __getQuo_version()
    {return $this->Quo_version;}
    public function __getQuo_students()
    {return $this->Quo_students;}
    public function __getQuo_quantity()
    {return $this->Quo_quantity;}
    public function __getQuo_width()
    {return $this->Quo_width;}
    public function __getQuo_height()
    {return $this->Quo_height;}
    public function __getQuo_format()
    {return $this->Quo_format;}
    public function __getQuo_color()
    {return $this->Quo_color;}
    public function __getQuo_colorPaper()
    {return $this->Quo_colorPaper;}
    public function __getQuo_colorWeigh()
    {return $this->Quo_colorWeight;}
    public function __getQuo_bw()
    {return $this->Quo_bw;}
    public function __getQuo_bwPaper()
    {return $this->Quo_bwPaper;}
    public function __getQuo_bwWeight()
    {return $this->Quo_bwWeight;}
    public function __getQuo_inserts()
    {return $this->Quo_inserts;}
    public function __getQuo_guards()
    {return $this->Quo_guards;}
    public function __getQuo_guardsPape()
    {return $this->Quo_guardsPaper;}
    public function __getQuo_guardsWeig()
    {return $this->Quo_guardsWeight;}
    public function __getQuo_cover()
    {return $this->Quo_cover;}
    public function __getQuo_coverPaper()
    {return $this->Quo_coverPaper;}
    public function __getQuo_coverWeigh()
    {return $this->Quo_coverWeight;}
    public function __getQuo_top()
    {return $this->Quo_top;}
    public function __getQuo_coverFinis()
    {return $this->Quo_coverFinish;}
    public function __getQuo_plast()
    {return $this->Quo_plast;}
    public function __getQuo_correction()
    {return $this->Quo_correction;}
    public function __getQuo_issn()
    {return $this->Quo_issn;}
    public function __getQuo_observ()
    {return $this->Quo_observ;}
    public function __getQuo_delivDate()
    {return $this->Quo_delivDate;}
    public function __getQuo_delivPlace()
    {return $this->Quo_delivPlace;}
    public function __getUser_id()
    {return $this->User_id;}
    public function __getPro_id()
    {return $this->Pro_id;}
    public function __getStat_id()
    {return $this->Stat_id;}
    public function __getQuo_pageTotal()
    {return $this->Quo_pageTotal;}
    public function __getQuo_inser()
    {return $this->Quo_inser;}
    public function __getQuo_inserPaper()
    {return $this->Quo_inserPaper;}
    public function __getQuo_inserWeight()
    {return $this->Quo_inserWeight;}
}
