<?php 
//  database connector
    class Db_connector{
        
        private $localhost = 'localhost';
        private $db_username = 'root';
        private $db_password = '';
        private $db_name='gc_db';
        protected $conn;

        public function __construct(){
            $this->conn = mysqli_connect($this->localhost,$this->db_username,$this->db_password);
            $db_select = mysqli_select_db($this->conn , $this->db_name)or die(mysqli_error($this->conn));
        }
        public function getConnection() {
            return $this->conn;
        }
        
    
    }
