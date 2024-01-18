<?php
    class UserView{
        public function render (User $user){
            //Display
            echo "Username : ". $user->getUsername();
            echo "Email : ". $user->getEmail();
        }
    }

?>