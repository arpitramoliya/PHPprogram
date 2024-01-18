<?php
    class demo{
        public function display()
        {
            echo "Ramoliya Arpit!";
        }
    }
    class demo1 extends demo
    {
        public function view()
        {
            echo "....PHP developer";
        }
    }
    $obj = new demo1();
    $obj -> display();
    $obj -> view();

?>