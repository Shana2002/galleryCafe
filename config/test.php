<?php 
    class Database {
        private $host = 'localhost';
        private $dbName = 'your_db_name';
        private $username = 'your_username';
        private $password = 'your_password';
        public $conn;
    
        public function __construct() {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbName);
            // Check connection
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }
    
        public function getConnection() {
            return $this->conn;
        }
    }
?>