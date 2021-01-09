<?php

class UserController extends User {

public function createAccount($firstName,$lastName,$email,$password){
  $this->signUpUser($firstName,$lastName,$email,$password);
}
    
public function addToCart($product_name,$product_image,$product_quantity,$product_price,$user_email){
        $this->insertIntoCart($product_name,$product_image,$product_quantity,$product_price,$user_email);
    }
    
    public function addToWishlist($product_name,$product_image,$product_quantity,$product_price,$user_email){
        $this->insertIntoWishlist($product_name,$product_image,$product_quantity,$product_price,$user_email);
    }
    
    public function lookOverProductWishlist($product_image,$user_email){
        return $this->checkProductWishlist($product_image,$user_email);
    }
    
    public function deleteCartItem($product_name,$product_image,$user_email){
        $this->removeCartItem($product_name,$product_image,$user_email);
    }
   

}