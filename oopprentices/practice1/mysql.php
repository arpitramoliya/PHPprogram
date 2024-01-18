<?php
    class mysql {
        protected $db = 'oops';
        protected $host = 'localhost';
        protected $username = 'root';
        protected $password = '';
        public $conn;
        public $result;

        public function connect() {
            $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db);
            if($this->conn){
                $this->result = 'DataBase Connected!';
            }else{
                $this->result = 'DataBase not Conncted!';
            }
        return $this->result;
        }
    }
?>