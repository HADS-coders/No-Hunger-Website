<?php


    class Donation{
        private $conn;
        private $table = 'donation';

        //person properties
        public $name;
        public $email;
        public $number;
        public $longitude;
        public $latitude;
        public $food;
        public $time;


        //constructor with db connection
        public function __construct($db){
            $this->conn = $db;
        }
    }
?>