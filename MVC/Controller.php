<?php
    class UserController{
        private $userModel;
        private $userView;

        public function __construct(User $userModel, UserView $userView) {
            $this->userModel = $userModel;
            $this->userView = $userView;
        }
        public function showUser() {
            $this->userView->render($userData);
        }
    }

?>