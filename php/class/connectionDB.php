<?php
#Author: DIEGO  CASALLAS
#Date: 21/03/2019
#Description : Is class connection
include "../dto/dto_connection.php";
    class Connection
    {
        private $mysqli;
        private $objDto;

        public function connect()
        {
            try {
                $objDto = new DtoConnection;
                $dataConnection = $objDto->getData();
                $mysqli = new mysqli($dataConnection[0], $dataConnection[1], $dataConnection[2], $dataConnection[3]);                
                //echo"Connected";
            } catch (PDOException $e) {
                die("Error occurred:" . $e->getMessage());

            }
            return $mysqli;
        }
    
    }
 
?> 