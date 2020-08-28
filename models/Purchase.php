<?php 
  class Purchase {
    // DB stuff
    private $conn;
    private $table = 'purchases';

    // Purchase Properties
    public $id;
    public $client_id;
    public $product;
    public $purchase_cost;
     
    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }




?>