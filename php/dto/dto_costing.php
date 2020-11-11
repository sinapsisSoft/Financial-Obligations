<?php
#Author: LAURA GRISALES
#Date: 27/08/2019
#Description : Is DTO costing
class DtoCosting
{
    private $Cost_id;
    private $Quo_id;
    private $Cost_totalValue;
    private $Cost_pagValue;
    private $Cost_impQuantity;
    private $Cost_impValue;
    private $Cost_phoQuantity;
    private $Cost_phoValue;
    private $Cost_issnQuantity;
    private $Cost_issnValue;
    private $Cost_sendQuantity;
    private $Cost_sendValue;
    private $Cost_stuQuantity;
    private $Cost_stuValue;
    private $Cost_perQuantity;
    private $Cost_perValue;
    private $Cost_daysQuantity;
    private $Cost_daysValue;
    private $Cost_admin;
    private $Cost_incid;
    private $Cost_utili;
    private $Cost_finalValue;
    private $Cost_attach; 
    private $Cost_description; 
    private $Cost_stuValue1;

    public function __construct()
    {

    }
    public function __setCosting($id, $totalValue, $attach, $pagValue, $impQuantity, $impValue, $phoQuantity, $phoValue, $issnQuantity, 
    $issnValue, $sendQuantity, $sendValue, $stuValue, $admin, $utility, $incid, $perQuantity, $perValue, $finalValue, $daysQuantity, $daysValue, $description, $stuValue1)
    {
        $this->Quo_id = $id;
        $this->Cost_totalValue = $totalValue;
        $this->Cost_attach = $attach;
        $this->Cost_pagValue = $pagValue;
        $this->Cost_impQuantity = $impQuantity;
        $this->Cost_impValue = $impValue;
        $this->Cost_phoQuantity = $phoQuantity;
        $this->Cost_phoValue = $phoValue;
        $this->Cost_issnQuantity = $issnQuantity;
        $this->Cost_issnValue = $issnValue;
        $this->Cost_sendQuantity = $sendQuantity;
        $this->Cost_sendValue = $sendValue;
        $this->Cost_stuValue = $stuValue;
        $this->Cost_admin = $admin;
        $this->Cost_utili = $utility;
        $this->Cost_incid = $incid;        
        $this->Cost_perQuantity = $perQuantity;
        $this->Cost_perValue = $perValue;
        $this->Cost_finalValue = $finalValue;
        $this->Cost_daysQuantity = $daysQuantity;
        $this->Cost_daysValue = $daysValue;  
        $this->Cost_description = $description;
        $this->Cost_stuValue1 = $stuValue1;
    }

    //SET COSTING
    public function __setCId($Cid)
    {
        $this->Cost_id = $Cid;
    }
    public function __setQId($Qid)
    {
        $this->Quo_id = $Qid;
    }
    public function __setTotalValue($totalvalue)
    {
        $this->Cost_totalValue = $totalvalue;
    }    
    public function __setPagValue($pagValue)
    {
      $this->Cost_pagValue = $pagValue;        
    }
    public function __setImpQuantity($impQuantity)
    {
      $this->Cost_impQuantity = $impQuantity;              
    }
    public function __setImpValue($impValue)
    {
      $this->Cost_impValue = $impValue;        
    }
    public function __setPhoQuantity($phoQuantity)
    {
      $this->Cost_phoQuantity = $phoQuantity;        
    }
    public function __setPhoValue($phoValue)
    {
      $this->Cost_phoValue = $phoValue;        
    }
    public function __setIssnQuantity($issnQuantity)
    {
      $this->Cost_issnQuantity = $issnQuantity;        
    }
    public function __setIssnValue($issnValue)
    {
      $this->Cost_issnValue = $$issnValue;        
    }
    public function __setSendQuantity($sendQuantity)
    {
      $this->Cost_sendQuantity = $sendQuantity;        
    }
    public function __setSendValue($sendValue)
    {
      $this->Cost_sendValue = $sendValue;        
    }
    public function __setStuQuantity($stuQuantity)
    {
      $this->Cost_stuQuantity = $stuQuantity;        
    }
    public function __setStuValue($stuValue)
    {
      $this->Cost_stuValue = $stuValue;       
    }
    public function __setPerQuantity($perQuantity)
    {
      $this->Cost_perQuantity = $perQuantity;        
    }
    public function __setPerValue($perValue)
    {
      $this->Cost_perValue = $perValue;        
    }
    public function __setDaysQuantity($daysQuantity)
    {
      $this->Cost_daysQuantity = $daysQuantity;       
    }
    public function __setDaysValue($daysValue)
    {
      $this->Cost_daysValue = $daysValue;       
    }
    public function __setAdmin($admin)
    {
        $this->Cost_admin = $admin;
    }
    public function __setIncid($incid)
    {
        $this->Cost_incid = $incid;
    }
    public function __setUtility($utility)
    {
        $this->Cost_utili = $utility;
    }
    public function __setFinalValue($finalValue)
    {
        $this->Cost_finalValue = $finalValue;
    }
    public function __setAttach($attach)
    {
        $this->Cost_attach = $attach;
    }
    public function __setDescription($description)
    {
        $this->Cost_description = $description;
    }
        
    //GET COSTING
    public function __getCId()
    {
      return $this->Cost_id;
    }
    public function __getQId()
    {
      return $this->Quo_id;
    }
    public function __getPagValue()
    {
      return $this->Cost_pagValue;        
    }
    public function __getImpQuantity()
    {
      return $this->Cost_impQuantity;              
    }
    public function __getImpValue()
    {
      return $this->Cost_impValue;        
    }
    public function __getPhoQuantity()
    {
      return $this->Cost_phoQuantity;        
    }
    public function __getPhoValue()
    {
      return $this->Cost_phoValue;        
    }
    public function __getIssnQuantity()
    {
      return $this->Cost_issnQuantity;        
    }
    public function __getIssnValue()
    {
      return $this->Cost_issnValue;        
    }
    public function __getSendQuantity()
    {
      return $this->Cost_sendQuantity;        
    }
    public function __getSendValue()
    {
      return $this->Cost_sendValue;        
    }
    public function __getStuQuantity()
    {
      return $this->Cost_stuQuantity;        
    }
    public function __getStuValue()
    {
      return $this->Cost_stuValue;       
    }
    public function __getPerQuantity()
    {
      return $this->Cost_perQuantity;        
    }
    public function __getPerValue()
    {
      return $this->Cost_perValue;        
    }
    public function __getDaysQuantity()
    {
      return $this->Cost_daysQuantity;       
    }
    public function __getDaysValue()
    {
      return $this->Cost_daysValue;       
    }
    public function __getTotalValue()
    {
      return $this->Cost_totalValue;
    }
    public function __getAdmin()
    {
      return $this->Cost_admin;
    }
    public function __getIncid()
    {
      return $this->Cost_incid;
    }
    public function __getUtility()
    {
      return $this->Cost_utili;
    }
    public function __getFinalValue()
    {
      return $this->Cost_finalValue;
    }
    public function __getAttach()
    {
      return $this->Cost_attach;
    }
    public function __getDescription()
    {
      return $this->Cost_description;
    }
    public function __getStuValue1()
    {
      return $this->Cost_stuValue1;
    }

}
