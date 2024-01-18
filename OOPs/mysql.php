<?php 

class Mysql {

    protected $db = 'oops';
    protected $host = 'localhost';
    protected $username = 'root';
    protected $password = '';
    public $conn;
    public $result;

    // public function __construct(){

    // }

    public function connect(){
        $this->conn = mysqli_connect($this->host,$this->username,$this->password,$this->db);
        if($this->conn){
            $this->result = 'Database connected!';
        }else{
            $this->result = "Database not connected!";
        }

        return $this->result;
    }

}

?>