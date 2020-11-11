<?php
#Author: DIEGO CASALLAS
#Date: 15/08/2019
#Description : Is DTO Client
class DtoClient
{
    private $Client_id;
    private $Client_name;
    private $Client_identification;
    private $Client_address;
    private $Client_tel;
    private $Client_email;
    private $Client_contactName;
    private $Client_contactTitle;
    private $Client_contactTel;
    private $Client_contactCel;
    private $Client_contactEmail;
    private $Stat_id;

    public function __construct()
    {

    }
    public function __setClient($id,$name, $identification, $address, $tel, $email, $contactName, $contactTitle, $contactTel, $contactCel, $contactEmail,$state)
    {
        $this->Client_id = $id;
        $this->Client_name = $name;
        $this->Client_identification = $identification;
        $this->Client_address = $address;
        $this->Client_tel = $tel;
        $this->Client_email = $email;
        $this->Client_contactName = $contactName;
        $this->Client_contactTitle = $contactTitle;
        $this->Client_contactTel = $contactTel;
        $this->Client_contactCel = $contactCel;
        $this->Client_contactEmail = $contactEmail;
        $this->Stat_id = $state;
    }

    public function __getClient()
    {
        $objClient = new DtoClient();
        $objClient->__getId();
        $objClient->__getName();
        $objClient->__getIdentification();
        $objClient->__getAddress();
        $objClient->__getTel();
        $objClient->__getEmail();
        $objClient->__getContactName();
        $objClient->__getContactTitle();
        $objClient->__getContactTel();
        $objClient->__getContactCel();
        $objClient->__getContactEmail();
        return $objClient;
    }
    //SET CLIENT
    public function __setId($id)
    {
        $this->Client_id = $id;
    }
    public function __setName($name)
    {
        $this->Client_name = $name;
    }
    public function __setIdentification($identification)
    {
        $this->Client_identification = $identification;
    }
    public function __setAddress($address)
    {
        $this->Client_address = $address;
    }
    public function __setTel($tel)
    {
        $this->Client_tel = $tel;
    }
    public function __setEmail($email)
    {
        $this->Client_email = $email;
    }
    public function __setContactName($contactName)
    {
        $this->Client_contactName = $contactName;
    }
    public function __setContactTitle($contactTitle)
    {
        $this->Client_contactTitle = $contactTitle;
    }
    public function __setContactTel($contactTel)
    {
        $this->Client_contactTel = $contactTel;
    }
    public function __setContactCel($contactCel)
    {
        $this->Client_contactCel = $contactCel;
    }
    public function __setContactEmail($contactEmail)
    {
        $this->Client_contactEmail = $contactEmail;
    }
    public function __setStat_id($state)
    {
        $this->Stat_id = $state;
    }
    //GET CLIENT
    public function __getId()
    {
        return $this->Client_id;
    }
    public function __getName()
    {
        return $this->Client_name;
    }
    public function __getIdentification()
    {
        return $this->Client_identification;
    }
    public function __getAddress()
    {
        return $this->Client_address;
    }
    public function __getTel()
    {
        return $this->Client_tel;
    }
    public function __getEmail()
    {
        return $this->Client_email;
    }
    public function __getContactName()
    {
        return $this->Client_contactName;
    }
    public function __getContactTitle()
    {
        return $this->Client_contactTitle;
    }
    public function __getContactTel()
    {
        return $this->Client_contactTel;
    }
    public function __getContactCel()
    {
        return $this->Client_contactCel;
    }
    public function __getContactEmail()
    {
        return $this->Client_contactEmail;
    }
    public function __getStatId()
    {
        return $this->Stat_id;
    }

}
