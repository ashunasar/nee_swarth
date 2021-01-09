<?php

class UserView extends User {

    public function checkLogin($email,$password){
        $this->loginUser($email,$password);
    }
    
    public function showCartItems($user_email){
        return $this->getCartItems($user_email);
    }

}  