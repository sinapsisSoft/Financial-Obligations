<?php 
#Author: cristian malaver
#Date: 30/10/2020
#Description : Is DTO obligation

class DtoObligation
{
    private $Bank_name;
    private $user;
    private $password;

    private $obligation_id;
    private $client_idmax;
    private $client_name;
    private $client_contract;
    private $client_contract_name;
    private $Bank_id;
    private $credit_type_id;
    private $interesting_type_id;
    private $amortization_type_id;
    private $desembolso_date;
    private $initial_value;
    private $cuotes_number;
    private $residual_number;
    private $dtf;
    private $dtf_points;
    private $ibr;
    private $ibr_points;
    private $tasafija;
    private $Stat_id;
    private $obligation_cod;

    public function __construct()
    {
        $this->user = "MAXADMIN";
        $this->password = "Renting123*";
    }
    public function __setObligation($nitMaximo, $ClientName, $clientContract, $clientContractName, $bank, $typeCredit, $typeInteres, $typeAmortization, $desembolsoDate, $initialValue, $cuotesNumber, $residualNumber, $dtf, $dtfPoints, $ibr, $ibrPoints, $tasafija, $status, $obligationCod)
    {
        $this->client_idmax = $nitMaximo;
        $this->client_name = $ClientName;
        $this->client_contract = $clientContract;
        $this->client_contract_name = $clientContractName;
        $this->Bank_id = $bank;
        $this->credit_type_id = $typeCredit;
        $this->interesting_type_id = $typeInteres;
        $this->amortization_type_id = $typeAmortization;
        $this->desembolso_date = $desembolsoDate;
        $this->initial_value = $initialValue;
        $this->cuotes_number = $cuotesNumber;
        $this->residual_number = $residualNumber;
        $this->dtf = $dtf;
        $this->dtf_points = $dtfPoints;
        $this->ibr = $ibr;
        $this->ibr_points = $ibrPoints;
        $this->tasafija = $tasafija;
        $this->Stat_id = $status;
        $this->obligation_cod = $obligationCod;
    }

    public function __setUpdateObligation($nitMaximo, $ClientName, $clientContract, $clientContractName, $bank, $typeCredit, $typeInteres, $typeAmortization, $desembolsoDate, $initialValue, $cuotesNumber, $residualNumber, $dtf, $dtfPoints, $ibr, $ibrPoints, $tasafija, $status,$obligationCod)
    {
        $this->client_idmax = $nitMaximo;
        $this->client_name = $ClientName;
        $this->client_contract = $clientContract;
        $this->client_contract_name = $clientContractName;
        $this->Bank_id = $bank;
        $this->credit_type_id = $typeCredit;
        $this->interesting_type_id = $typeInteres;
        $this->amortization_type_id = $typeAmortization;
        $this->desembolso_date = $desembolsoDate;
        $this->initial_value = $initialValue;
        $this->cuotes_number = $cuotesNumber;
        $this->residual_number = $residualNumber;
        $this->dtf = $dtf;
        $this->dtf_points = $dtfPoints;
        $this->ibr = $ibr;
        $this->ibr_points = $ibrPoints;
        $this->tasafija = $tasafija;
        $this->Stat_id = $status;
        $this->obligation_cod = $obligationCod;

    }

    public function __getObligation()
    {
        $objObligation = new DtoObligation();
        $objObligation->__getPassword();
        $objObligation->__getObligation_id();
        $objObligation->__getClient_idmax();
        $objObligation->__getClient_name();
        $objObligation->__getClient_contract();
        $objObligation->__getClient_contract_name();
        $objObligation->__getBank_id();
        $objObligation->__getCredit_type_id();
        $objObligation->__getInteresting_type_id();
        $objObligation->__getAmortization_type_id();
        $objObligation->__getDesembolso_date();
        $objObligation->__getInitial_value();
        $objObligation->__getCuotes_number();
        $objObligation->__getResidual_number();
        $objObligation->__getDtf();
        $objObligation->__getDtf_points();
        $objObligation->__getIbr();
        $objObligation->__getIbr_points();
        $objObligation->__getTasafija();
        $objObligation->__getStat_id();
        $objObligation->__getObligation_cod();

        return $objObligation;
    }


    //SET OBLIGATION
    
    public function __setCod($code)
    {
        $this->obligation_cod = $code;
    }
    public function __setId($id)
    {
        $this->Bank_id = $id;
    }
    public function __setName($name)
    {
        $this->Bank_name = $name;
    }
    //GET OBLIGATION
    
    public function __getUser()
    {
        return $this->user;
    }
    public function __getBankName()
    {
        return $this->Bank_name;
    }
    public function __getPassword()
    {
        return $this->password;
    }
    public function __getObligation_id()
    {
        return $this->obligation_id;
    }
    public function __getClient_idmax()
    {
        return $this->client_idmax;
    }
    public function __getClient_name()
    {
        return $this->client_name;
    }
    public function __getClient_contract()
    {
        return $this->client_contract;
    }
    public function __getClient_contract_name()
    {
        return $this->client_contract_name;
    }
    public function __getBank_id()
    {
        return $this->Bank_id;
    }
    public function __getCredit_type_id()
    {
        return $this->credit_type_id;
    }
    public function __getInteresting_type_id()
    {
        return $this->interesting_type_id;
    }
    public function __getAmortization_type_id()
    {
        return $this->amortization_type_id;
    }
    public function __getDesembolso_date()
    {
        return $this->desembolso_date;
    }
    public function __getInitial_value()
    {
        return $this->initial_value;
    }
    public function __getCuotes_number()
    {
        return $this->cuotes_number;
    }
    public function __getResidual_number()
    {
        return $this->residual_number;
    }
    public function __getDtf()
    {
        return $this->dtf;
    }
    public function __getDtf_points()
    {
        return $this->dtf_points;
    }
    public function __getIbr()
    {
        return $this->ibr;
    }
    public function __getIbr_points()
    {
        return $this->ibr_points;
    }
    public function __getTasafija()
    {
        return $this->tasafija;
    }
    public function __getStat_id()
    {
        return $this->Stat_id;
    }
    public function __getObligation_cod()
    {
        return $this->obligation_cod;
    }
}
