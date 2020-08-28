<?php 
  class Client {
    // DB stuff
    private $conn;
    private $table = 'clients';

    // Client Properties
    public $id;
    public $phone_number;
    public $email;
     
    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }




?>