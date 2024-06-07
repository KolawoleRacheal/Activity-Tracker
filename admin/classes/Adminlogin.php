<?php
error_reporting(E_ALL);
    require_once "Db.php";

    class Adminlogin extends Db{
        private $dbconn;

        public function __construct(){
            $this->dbconn = $this->connect();
        }
        public function admin_login($email,$pass){
            try {
                $query = "SELECT * FROM admin WHERE admin_email = ?";
                $stmt = $this->dbconn->prepare($query);
                $stmt->execute([$email]);
                $record = $stmt->fetch(PDO::FETCH_ASSOC);
                
                if($record) {
                    $passhashed = $record["admin_pwd"];
                   // echo "password hashed from database: ". $passhashed . "<br>";
                    $check = password_verify($pass, $passhashed);
                  //  echo "password Input: ".$pass. "<br>";
                    if($check) {
                        return $record['admin_id'];
                    }else{
                        $_SESSION["admin_errormsg"] = "Invalid Password";
                        return 0;
                    }
                }else{
                    $_SESSION["admin_errormsg"] = "Invalid Email";
                    return 0;
                }
            } catch(PDOException $e) {
                $_SESSION['admin_errormsg'] = $e->getMessage();
                return 0;
            } catch(Exception $e) {
                $_SESSION['admin_errormsg'] = $e->getMessage();
                return 0;
            }
        }
        
        // public function admin_logout(){
        //     unset($_SESSION["adminonline"]);
        //     session_destroy();
        // }

    
    }






?>