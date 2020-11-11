<?php
#Author: LAURA GRISALES
#Date: 18/08/2019
#Description : Is DTO Provider
class DtoProvider
{
    private $Pro_id;
    private $Pro_name;
    private $Pro_identification;
    private $Pro_tel;
    private $Pro_address;
    private $Pro_contactName;
    private $Pro_contactEmail;
    private $Pro_attach;
    private $Stat_id;

    public function __construct()
    {

    }
    public function __setProvider($name, $identification, $tel, $address, $contactName, $contactEmail, $attach, $stat)
    {

        $this->Pro_name = $name;
        $this->Pro_identification = $identification;
        $this->Pro_tel = $tel;
        $this->Pro_address = $address;
        $this->Pro_contactName = $contactName;
        $this->Pro_contactEmail = $contactEmail;
        $this->Pro_attach = $attach;
        $this->Stat_id = $stat;
    }

    public function __setProviderstatus($id, $stat)
    {

        $this->Pro_id = $id;
        $this->Stat_id = $stat;
    }

    public function __getProvider()
    {
        $objPro = new DtoProvider();
        $objPro->__getId();
        $objPro->__getName();
        $objPro->__getIdentification();        
        $objPro->__getTel();
        $objPro->__getAddress();
        $objPro->__getContactName();
        $objPro->__getContactEmail();
        $objPro->__getAttach();
        $objPro->__getStatus();        
        return $objPro;
    }
    //SET Pro
    public function __setId($id)
    {
        $this->Pro_id = $id;
    }
    public function __setName($name)
    {
        $this->Pro_name = $name;
    }
    public function __setIdentification($identification)
    {
        $this->Pro_identification = $identification;
    }
    public function __setTel($tel)
    {
        $this->Pro_tel = $tel;
    }
    public function __setAddress($address)
    {
        $this->Pro_address = $address;
    }    
    public function __setContactName($contactName)
    {
        $this->Pro_contactName = $contactName;
    }
    public function __setContactEmail($contactEmail)
    {
        $this->Pro_contactEmail = $contactEmail;
    }
    public function __setAttach($attach)
    {
        $this->Pro_attach = $attach;
    }
    public function __setStatus($status)
    {
        $this->Stat_id = $status;
    }
    //GET Pro
    public function __getId()
    {
        return $this->Pro_id;
    }
    public function __getName()
    {
        return $this->Pro_name;
    }
    public function __getIdentification()
    {
        return $this->Pro_identification;
    }
    public function __getTel()
    {
        return $this->Pro_tel;
    }
    public function __getAddress()
    {
        return $this->Pro_address;
    }    
    public function __getContactName()
    {
        return $this->Pro_contactName;
    }
    public function __getContactEmail()
    {
        return $this->Pro_contactEmail;
    }
    public function __getAttach()
    {
        return $this->Pro_attach;
    }
    public function __getStatus()
    {
        return $this->Stat_id;
    }
}
