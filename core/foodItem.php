<?php

class FoodItem{

    private $conn;
    private $table = 'foodItem';

    public $name;
    public $amount;
    public $food_id;

    public function __construct($db){
        $this->conn = $db;
    }

    public function add(){
        $query = 'insert into'.$this->table.' values ( '.$this->name.','.$this->amount.', '.$this->food_id.')';

        $result = mysqli_query($this->conn,$query);

        return $result;
    }
}

?>