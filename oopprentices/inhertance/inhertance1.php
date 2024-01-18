<?php
class a
    {
        function fun1()
        {
            echo "Ramoliya Telanted!";
        }
    }
    class b extends a
    {
        function fun2()
        {
            echo "SSSIT";
        } 
    }
    $obj= new b();
    $obj->fun1();
?>