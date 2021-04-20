<?php

    class Person{
        private $conn;
        private $table = 'person';

        //person properties
        public $pid;
        public $fname;
        public $lname;
        public $email;
        public $number;
        public $usernme;
        public $password;

        //constructor with db connection
        public function __construct($db){
            $this->conn = $db;
        }
        
        //get person from database
        public function read(){
            $query = 'SELECT * from '.$this->table;
        
            //prepare statement
            $stmt = $this->conn->prepare($query);

            //execute 
            $stmt->execute();

            return $stmt; 
        }
        
        public function read_single(){

            $query = 'SELECT * from person where PID = ?';

            //prepare statement
            $stmt = $this->conn->prepare($query);

            //binding param
            $stmt->bindParam(1,$this->PID);

            //execute 
            $stmt->execute();


            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->fname = $row['fname'];
            $this->lname = $row['lname'];
            $this->email = $row['email'];
            $this->phone = $row['phone'];
            $this->username = $row['username'];
            $this->password = $row['password'];

        }

        public function add(){
            $query = 'INSERT into person SET  fname = :fname, lname = :lname, email = :email, phone = :phone, username = :username, password= :password';

            //prepare stmt
            $stmt = $this->conn->prepare($query);

            //clean data
            $this->fname = htmlspecialchars(strip_tags($this->fname));
            $this->lname = htmlspecialchars(strip_tags($this->lname));
            $this->email = htmlspecialchars(strip_tags($this->email));
            $this->phone = htmlspecialchars(strip_tags($this->phone));
            $this->username = htmlspecialchars(strip_tags($this->username));
            $this->password = htmlspecialchars(strip_tags($this->password));

            //binding params
            $stmt->bindParam(':fname',$this->fname);
            $stmt->bindParam(':lname',$this->lname);
            $stmt->bindParam(':email',$this->email);
            $stmt->bindParam(':phone',$this->phone);
            $stmt->bindParam(':username',$this->username);
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