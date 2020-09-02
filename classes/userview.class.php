<?php

class UserView extends User {

    public function checkLogin($email,$password){
        $this->loginUser($email,$password);
    }

}