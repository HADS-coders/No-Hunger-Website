<?php

    class Volunteer{
        private $conn;
        private $table = 'vol';

        //person properties
        public $name;
        public $user_name;
        public $email;
        public $number;
        public $username;
        public $password;
        public $gender;


        //constructor with db connection
        public function __construct($db){
            $this->conn = $db;
        }

        public function login(){

            $query = 'select * from '.$this->table.' where email = :email and password = :password';

            $stmt = $this->conn->prepare($query);

            //clear data
            $this->email = htmlspecialchars(strip_tags($this->email));
            $this->password = htmlspecialchars(strip_tags($this->password));

            //bind param
            $stmt->bindParam(':email',$this->email);
            $stmt->bindParam(':password',$this->password);

            //execute
            if($stmt->execute()){
                return true;
            }

            //print error if something goes wrong
            printf("Error %s. \n",$stmt->error);
            return false;
        }
    }
?>