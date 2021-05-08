<?php

class Food{
    private $conn;
    private $table = 'food';

    public $food_id;
    public $type;
    public $time;
    public $havePackets;
    public $donation_id;
    public $foodItems;

    public function __construct($db){
        $this->conn = $db;
    }

    public function add(){

        $query = 'INSERT INTO '.$this->table.' ( type, time, havePackets, donation_id) VALUES 
        ( '.$this->type.' , '.$this->time.', '.$this->havePackets.', '.$this->donation_id.')';

        $result = mysqli_query($this->conn,$query);

        $this->food_id = mysqli_insert_id($this->conn);
        
        $foodItemsList = $this->foodItems;
        foreach ($foodItemsList as $elem) {
            $foodItem = new FoodItem($this->conn);

            $foodItem->name = $elem->name;
            $foodItem->amount = $elem->amount;
            $foodItem->food_id = $this->food_id;

            $result =  $foodItem->add();
        }

        return $result;
    }
}

?>