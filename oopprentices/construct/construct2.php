<?php
    class demo
    {
        public function demo()
        {
            echo "Hello <br>
            Ramoliya &nbsp";
        }
    }
    class demo1 extends demo
    {
        public function __construct()
        {
            echo parent::demo();
            echo "Het";
        }
    }
    $obj = new demo1();

?>