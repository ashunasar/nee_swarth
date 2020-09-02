<?php

class UserController extends User {

public function createAccount($firstName,$lastName,$email,$password){
  $this->signUpUser($firstName,$lastName,$email,$password);
}

}