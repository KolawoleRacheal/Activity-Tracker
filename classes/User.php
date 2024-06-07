<?php
    error_reporting(E_ALL);
    require_once "Db.php";
    class User extends Db{

        private $dbconn;
        public function __construct(){
            $this->dbconn = $this->connect();
        }

           
       public function check_goals($id){
            $sql="SELECT * FROm goals WHERE goal_userid=?";
            $stmt=$this->dbconn->prepare($sql);
            $res=$stmt->execute([$id]);
            $result=$stmt->rowCount();
            return $result;

       }
       public function fetch_user(){
            $sql = "SELECT * FROM users";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute();
            $record = $stmt->fetchAll();
            return $record;
        }

        public function insert_activity($firstname,$lastname,$email,$password){
            $query = "INSERT INTO users(user_fname,user_lname,user_email,user_pwd)VALUE(?,?,?,?)";
            $stmt =$this->dbconn->prepare($query);
            $res = $stmt->execute([$firstname,$lastname,$email,$password]);
            return $res;
            // print_r($res);
            // die;

        }
        public function login($email,$password){
            try{
                $query= "SELECT * FROM `users` WHERE user_email = ? ";
                $stmt = $this->dbconn->prepare($query);
                $stmt->execute([$email]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                if($result){
                    $hashed =$result['user_pwd'];
                    $check =password_verify($password,$hashed);
                    if($check==true){
                        return $result['user_id'];
                    }else{
                        $_SESSION['errormsg'] = "password is wrong";
                        return 0;
                    }
                }else{
                    $_SESSION['errormsg'] = "invalid email";
                    return 0;
                }
            }catch(Exception $e){
                $_SESSION['errormsg']= $e->getMessage();
                return 0;
            }
        }
        public function get_user_by_id($id){
            try{
                $query = "SELECT * FROM users WHERE user_id =?";
                $stmt = $this->dbconn->prepare($query);
                $stmt->execute([$id]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                return $result;
            }catch(PDOEXCEPTION $e){
                $_SESSION['errormsg']=$e->getMessage();
                return 0;
            }catch(Exception $e){
                $_SESSION['errormsg']=$e->getMessage();
                return 0;
            }
        }
        public function fetch_activity(){
            $sql = "SELECT * FROM users JOIN sleep ON sleepuser_id = users.user_id JOIN exercise ON exercise_userid = users.user_id JOIN meal ON mealuser_id = users.user_id";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute();
            $record = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $record;
        }
        public function logout(){
            session_unset();
            session_destroy();
        }

        public function insert_goals($desc,$id){
            $query = "INSERT INTO goals(goal_name,goal_userid)VALUE(?,?)";
            $stmt =$this->dbconn->prepare($query);
            $res = $stmt->execute([$desc,$id]);
            return $res;
        }

        // // //method that fetches
        // public function fetch_all_message(){ 
        //     $sql = "SELECT msg_content FROM m";
        //     $stmt = $this->connection->prepare($sql);
        //     $stmt->execute();
        //     $result = $stmt->fetch([PDO::FETCH_ASSOC]);
        //     return $result;
        // }
     





    }










?>