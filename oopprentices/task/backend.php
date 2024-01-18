<?php

    class a{
        public $s1=array();
        public function setdatas1(){
            $this->s1 = array("1"=>"aaa","2"=>"bbb","3"=>"ccc","4"=>"ddd");
        }

        public function searchdatas1($search){
            $a = array_search($search, $this->s1);
            if($a !== false){
                echo "Yes, found: " . $search;
            }
            else{
                echo "Not found";
            }
        }
    }

?>
