<?php

    require_once "config.php";
    class Db{

        //Properties
        private $host = DB_HOST;
        private $dbname = DB_NAME;
        private $user = DB_USER;
        private $pass = DB_PASS;


        //method to connect to database
        public function connect(){

            //dsn= means data source name
            $dsn = "mysql:host=$this->host;dbname=$this->dbname";
            $option = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];

            try{
                $conn = new PDO($dsn, $this->user, $this->pass, $option);
                return $conn;

            }catch(PDOException $e){
                echo $e->getMessage();
            }
          
        }

    }
    // $dbcon1 = new Db;
    // var_dump ($dbcon1-> connect("Samad", "Malik", "1990-03-03", "09078564321", "Mowe"));










?>