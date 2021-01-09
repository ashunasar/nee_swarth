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
    
    if($_POST['request'] == 'addToCart'){
        $product_name       = $_POST['product_name'];
        $product_image      = $_POST['product_image'];
        $product_quantity   = $_POST['product_quantity'];
        $product_price      = $_POST['product_price'];
        $user_email         = $_POST['user_email'];
        $userControl->addToCart($product_name,$product_image,$product_quantity,$product_price,$user_email);
    }
    
    if($_POST['request'] == 'addToWishlist'){
        $product_name        = $_POST['product_name'];
        $product_image       = $_POST['product_image'];
        $product_quantity    = $_POST['product_quantity'];
        $product_price       = $_POST['product_price'];
        $user_email          = $_POST['user_email'];
        $userControl->addToWishlist($product_name,$product_image,$product_quantity,$product_price,$user_email);
    }
    
    if($_POST['request'] == 'lookOverProductWishlist'){
        $product_image       = $_POST['product_image'];
        $user_email          = $_POST['user_email'];
        $count = $userControl->lookOverProductWishlist($product_image,$user_email);
        echo '{"data": [';
        $response = array(); 
        $response['count'] = $count;
        echo json_encode($response);
        echo ']}';
        
    }
    
    if($_POST['request'] == 'showCartItems'){
        $user_email       = $_POST['user_email'];
        $result = $userView->showCartItems($user_email);
        $count  = $result->rowCount();
            echo '{"data": ';
             $response = array(); 
            foreach($result as $product_name=>$product_value){
            $response[$product_name] = $product_value;
            }
            echo json_encode($response);
            echo '';
            echo ',';
            echo '"count":[';
            $response = array();
            $response['count'] = $count;
            echo json_encode($response);
            echo ']}';

    }
    
    if($_POST['request'] == 'deleteCartItem'){
        $product_name  = $_POST['product_name'];
        $product_image = $_POST['product_image'];
        $user_email    = $_POST['user_email'];
        $userControl->deleteCartItem($product_name,$product_image,$user_email);
        
    }
    
}

