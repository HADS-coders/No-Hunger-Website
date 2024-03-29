<?php


    class Volunteer{
        private $conn;
        private $table = 'vol';

        //person properties
        public $vol_id;
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

            $query = 'select * from '.$this->table.' where email = "'.$this->email.'" and password = "'.$this->password.'"';

            $this->email = htmlspecialchars(strip_tags($this->email));
            $this->password = htmlspecialchars(strip_tags($this->password));

            try{

                $data=mysqli_query($this->conn,$query);

                $row=mysqli_num_rows($data);

                //if match found
                if($row == 1){
                    $result= $data->fetch_assoc();
                    return $result;
                }

                //match not found
                return null;

            }
            catch(Exception $e){
                echo mysqli_error($this->conn);
                return false;
            }

            
        }
    }
?>