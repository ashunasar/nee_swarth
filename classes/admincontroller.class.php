<?php

class AdminController extends Admin{
    
    public function addHeaderProduct($productName,$productImage){
        $this->insertHeaderProduct($productName,$productImage);
    }
    
    public function removeHeaderProduct($id){
        $this->deleteHeaderProduct($id);
    }
    
    public function EditHeaderProduct($id,$productName,$productImage){
        $this->updateHeaderProduct($id,$productName,$productImage);
    }
    
    public function addCrousalImage($crousalImage){
        $this->insertCrousalImage($crousalImage);
    }
    
    public function EditCrousalImage($id,$crousalImage){
        $this->updateCrousalImage($id,$crousalImage);
    }
    
    public function addCategoryName($categoryName){
        $this->insertCategoryName($categoryName);
    }
    
    public function removeCategoryName($id){
        $this->deleteCategoryName($id);
    }
    
    public function EditCategoryName($id,$categoryName){
        $this->updateCategoryname($id,$categoryName);
    }
    
    public function addProductByCategory($name,$image_path,$price,$discounted_price,$description,$category){
       return  $this->insertProductByCategory($name,$image_path,$price,$discounted_price,$description,$category);
    }
    
    public function EditProductById($id,$name,$image_path,$price,$discounted_price,$description,$category){
        return $this->updateProductById($id,$name,$image_path,$price,$discounted_price,$description,$category);
    }
    
    public function removeProductById($id){
        return $this->deleteproductById($id);
    }
}
 