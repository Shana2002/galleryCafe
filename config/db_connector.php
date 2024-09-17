<?php 
//  database connector
    class Db_connector{
        
        private $localhost = 'localhost';
        private $db_username = 'root';
        private $db_password = '';
        private $db_name='gallerycafedb';
        protected $conn;

        public function __construct(){
            $this->conn = mysqli_connect($this->localhost,$this->db_username,$this->db_password) or die(mysqli_error($this->conn));
            $db_select = mysqli_select_db($this->conn , $this->db_name)or die(mysqli_error($this->conn));
        }
        public function getConnection() {
            return $this->conn;
        }
        
    
    }
