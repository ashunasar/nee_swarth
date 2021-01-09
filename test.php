<?php

class User extends Db {

public function jsonMessage($msg){
    echo '{"data": [';
    $response = array(); 
    $response['message'] = $msg;
    echo json_encode($response);
    echo ']}';
}

protected function signUpUser($firstName,$lastName,$email,$password){

     if(empty($firstName) || empty($lastName) || empty($email) || empty($password)){
         $this->jsonMessage("Feilds Can't be empty");
     }else{
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               $this->jsonMessage("Invalid email format");
            }else{
                    if(strlen($password) <6 || strlen($password) > 15 ){
                       $this->jsonMessage("Password must be between 6 to 15 characters");
                    }else{
                       $query  = "SELECT * FROM `users` WHERE email=?";
                       $result = $this->connect()->prepare($query);
                       $result->execute([$email]);

                       if($result->rowCount() > 0){
                          $this->jsonMessage("Email already exist!");
                       }else{
                          $query  = "INSERT INTO `users` (`user_id`, `firstName`, `lastName`, `email`, `password`) VALUES (NULL, ?, ?, ?, ?)";
                          $result = $this->connect()->prepare($query);
                          $result->execute([$firstName,$lastName,$email,$password]);
                          $this->jsonMessage("success");
                           }
                        }
               }
       }
     
    }
    
protected function loginUser($email,$password){
    
            $query  = "SELECT * FROM `users` WHERE email=?";
            $result = $this->connect()->prepare($query);
            $result->execute([$email]);

            if($result->rowCount() < 1){
            $this->jsonMessage("Email not registerd!");
            }else{
                
                
            $query  = "SELECT * FROM `users` WHERE email=? AND password=?";
            $result = $this->connect()->prepare($query);
            $result->execute([$email,$password]);

            if($result->rowCount() < 1){
            $this->jsonMessage("Incorrect Password!");
            }else{
            $this->jsonMessage("success");
            }
            }
    }

protected function checkProductCart($product_image,$user_email){
        $query  = "SELECT * FROM `cart` WHERE `product_image`=? and `user_email`=?";
        $reslut = $this->connect()->prepare($query);
        $reslut->execute([$product_image,$user_email]);
    
         return $reslut->rowCount();
    }
    
protected function insertIntoCart($product_image,$product_quantity,$product_price,$user_email){
        $count = $this->checkProductCart($product_image,$user_email);
        
        if($count < 1){
        $query = "INSERT INTO `cart` (`cart_id`, `product_image`, `product_quantity`, `product_price`,`user_email`) VALUES (NULL, ?, ?, ?,?)";
        $reslut = $this->connect()->prepare($query);
        $reslut->execute([$product_image,$product_quantity,$product_price,$user_email]);
        }else{
        $query = "UPDATE cart set `product_quantity` = `product_quantity` + ? WHERE `product_image` = ? and `user_email` = ?";
        $reslut = $this->connect()->prepare($query);
        $reslut->execute([$product_quantity,$product_image,$user_email]);
        }
    }
    
protected function checkProductWishlist($product_image,$user_email){
        $query  = "SELECT * FROM `wishlist` WHERE `product_image`=? and `user_email`=?";
        $reslut = $this->connect()->prepare($query);
        $reslut->execute([$product_image,$user_email]);
    
         return $reslut->rowCount();
    }
    
protected function insertIntoWishlist($product_image,$product_quantity,$product_price,$user_email){
        $count = $this->checkProductWishlist($product_image,$user_email);
        
        if($count < 1){
        $query = "INSERT INTO `wishlist` (`cart_id`, `product_image`, `product_quantity`, `product_price`,`user_email`) VALUES (NULL, ?, ?, ?,?)";
        $reslut = $this->connect()->prepare($query);
        $reslut->execute([$product_image,$product_quantity,$product_price,$user_email]);
        }else{
        $query = "UPDATE wishlist set `product_quantity` = `product_quantity` + ? WHERE `product_image` = ? and `user_email` = ?";
        $reslut = $this->connect()->prepare($query);
        $reslut->execute([$product_quantity,$product_image,$user_email]);
        }
    }
    
protected function removeWishlist($product_image,$user_email){

        $query = "DELETE FROM `wishlist` WHERE `product_image` = ? and `user_email` = ?";
        $reslut = $this->connect()->prepare($query);
        $reslut->execute([$product_image,$user_email]);
     
    }
}



