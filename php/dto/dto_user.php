<?php
#Author: DIEGO CASALLAS
#Date: 15/08/2019
#Description : Is DTO User
class DtoUser
{
    private $User_id;
    private $User_name;
    private $User_identification;
    private $User_email;
    private $User_title;    
    private $Stat_id;
    private $User_telephone;
    private $Login_id;
    private $Login_password;
    private $Login_hash;
    private $Url;
    private $Role;
    private $SecurityGroup;
    private $Comp_id;

    public function __construct()
    {

    }
    public function __setUser($name, $identification, $email, $title, $stat_id, $password, $telephone, $id, $role, $sGroup, $company)
    {
        $this->User_name = $name;
        $this->User_identification = $identification;
        $this->User_email = $email;
        $this->User_title = $title;
        $this->Stat_id = $stat_id;
        $this->Login_password = $password;
        $this->User_telephone = $telephone;
        $this->User_id = $id;
        $this->Role = $role;
        $this->SecurityGroup = $sGroup;
        $this->Comp_id = $company;
    }

    public function __setLogin($email, $password) 
    {
      $this->User_email = $email;
      $this->Login_password = $password;
    }

    public function __getUser()
    {
        $objUser = new DtoUser();
        $objUser->__getId();
        $objUser->__getName();
        $objUser->__getIdentification();
        $objUser->__getEmail();
        $objUser->__getTitle();
        $objUser->__getStat_id();
        $objUser->__getTelephone();
        $objUser->__getRole();
        $objUser->__getSecurityGroup();
        $objUser->__getCompany();
        return $objUser;
    }
    //SET User
    public function __setId($id)
    {
        $this->User_id = $id;
    }
    public function __setName($name)
    {
        $this->User_name = $name;
    }
    public function __setIdentification($identification)
    {
        $this->User_identification = $identification;
    }
    public function __setEmail($email)
    {
        $this->User_email = $email;
    }
    public function __setTitle($title)
    {
        $this->User_title = $title;
    }
    public function __setStat_id($stat_id)
    {
        $this->Stat_id = $stat_id;
    }
    public function __setLogin_id($login_id)
    {
        $this->Login_id = $login_id;
    }
    public function __setPassword($password)
    {
        $this->Login_password = $password;
    }
    public function __setLogin_hash($hash)
    {
        $this->Login_hash = $hash;
    }
    public function __setTelephone($telephone)
    {
        $this->User_telephone = $telephone;
    }
    public function __setUrl($url)
    {
        $this->Url = $url;
    }
    public function __setRole($role)
    {
        $this->Role = $role;
    }
    public function __setSecurityGroup($sGroup)
    {
        $this->SecurityGroup = $sGroup;
    }
    public function __setCompany($company)
    {
        $this->Comp_id = $company;
    }
    //GET User
   
    public function __getId()
    {
        return $this->User_id ;
    }
    public function __getName()
    {
        return $this->User_name ;
    }
    public function __getIdentification()
    {
        return $this->User_identification ;
    }
    public function __getEmail()
    {
        return $this->User_email ;
    }
    public function __getTitle()
    {
        return $this->User_title;
    }
    public function __getStat_id()
    {
        return $this->Stat_id;
    }
    public function __getLogin_id()
    {
        return $this->Login_id;
    }
    public function __getPassword()
    {
        return $this->Login_password;
    }
    public function __getLogin_hash()
    {
        return $this->Login_hash;
    }
    public function __getTelephone()
    {
        return $this->User_telephone;
    }
    public function __getUrl()
    {
        return $this->Url;
    }
    public function __getRole()
    {
        return $this->Role;
    }
    public function __getSecurityGroup()
    {
        return $this->SecurityGroup;
    }
    public function __getCompany()
    {
        return $this->Comp_id;
    }
}
