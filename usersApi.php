<?php
include 'init.php';

if (isset($_POST['request'])){
    if($_POST['request'] == 'signup'){
        $firstName   = $_POST['firstName'];
        $lastName    = $_POST['lastName'];
        $email       = $_POST['email'];
        $password    = $_POST['password'];
        
        $userControl->createAccount($firstName,$lastName,$email,$password);
    }
    
    if($_POST['request'] == 'login'){
        $email       = $_POST['email'];
        $password    = $_POST['password'];
        $userView->checkLogin($email,$password);
    }
    
}

