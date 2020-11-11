<?php

/**
 *Author:DIEGO CASALLAS
 *Date:16/03/2020
 *Description: Class to get the database 
 **/
include "../dto/dto_connection.php";

class DataSource
{
    private $strChainConnection;
    private $objConnection;
    private $arrayData;
    public function __construct()
    {
        $objCon = new DtoConnection();
        $this->arraData = $objCon->getData();
    }
    /**
     *Author:DIEGO CASALLAS
     *Date:16/03/2020
     *Description: Class to get the database 
     *@param $arrayData is data for connection
     **/
    public function getConnection()
    {
        try {
            $dsn = 'mysql:dbname='. $this->arraData[3].';host='. $this->arraData[0];
            $this->objConnection = new PDO($dsn, $this->arraData[1], $this->arraData[2]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $this->objConnection; 
    }
    /**
     *Author:DIEGO CASALLAS
     *Date:16/03/2020
     *Description:Function for consult database
     *@param $setSql is the query 
     **/
    public function sqlExecution($setSql)
    {
        $getResult = "";
        try {
            $this->objConnection->query("SET NAMES 'utf8'");
            if ($this->objConnection != null) {
                $getResult = $this->objConnection->prepare($setSql);
                $getResult = null;
                $this->objConnection = null;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            $this->objConnection = null;
        }

        return $getResult;
    }
}

/*$obj =new DataSource();
$conn=$obj->getConnection();
$result = $conn->prepare('CALL sp_select_role()' );
$result->execute();
$arrayResult = $result->fetchAll(PDO::FETCH_ASSOC);
$result = null;
$conn = null;
echo(json_encode($arrayResult));*/