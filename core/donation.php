<?php
    include_once('food.php');

    class Donation{
        private $conn;
        private $table = 'donation';

        //person properties
        public $donation_id;
        public $name;
        public $number;
        public $email;
        public $longitude;
        public $latitude;
        public $food;
        public $time;


        //constructor with db connection
        public function __construct($db){
            $this->conn = $db;
        }

        public function add(){

            $query = 'INSERT INTO '.$this->table.' ( name, number, email, longitude, latitude, time) VALUES 
            ( '.$this->name.', '.$this->number.', '.$this->email.', '.$this->longitude.', '.$this->latitude.', '.$this->time.' )';


            $this->name = htmlspecialchars(strip_tags($this->name));
            $this->email = htmlspecialchars(strip_tags($this->email));
            $this->number = htmlspecialchars(strip_tags($this->number));
            $this->longitude = htmlspecialchars(strip_tags($this->longitude));
            $this->latitude = htmlspecialchars(strip_tags($this->latitude));
            $this->time = htmlspecialchars(strip_tags($this->time));

            if(!$result = mysqli_query($this->conn,$query)){
                echo mysqli_connect_error();
            }

            $this->donation_id = mysqli_insert_id($this->conn);

            echo $this->donation_id;

            $foodDetail = new Food($this->conn);

            $foodDetail->type = $this->food->type;
            $foodDetail->time = $this->food->time;
            $foodDetail->havePackets = $this->food->havePackets;
            $foodDetail->donation_id = $this->donation_id;
            $foodDetail->foodItems = $this->food->foodItems;

            return $foodDetail->add();

        }
    }
?>