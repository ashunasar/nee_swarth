<?php

class AdminController extends Admin{
    
    public function addHeaderProduct($productName,$productImage,$category){
        $this->insertHeaderProduct($productName,$productImage,$category);
    }
    
    public function removeHeaderProduct($id){
        $this->deleteHeaderProduct($id);
    }
    
    public function EditHeaderProduct($id,$productName,$productImage,$category){
        $this->updateHeaderProduct($id,$productName,$productImage,$category);
    }
    
    public function addCrousalImage($crousalImage,$category){
        $this->insertCrousalImage($crousalImage,$category);
    }
    
    public function EditCrousalImage($id,$crousalImage,$categoty){
        $this->updateCrousalImage($id,$crousalImage,$categoty);
    }
    
    public function addCategoryName($categoryName,$categoryImage){
        $this->insertCategoryName($categoryName,$categoryImage);
    }
    
    public function removeCategoryName($id){
        $this->deleteCategoryName($id);
    }
    
    public function EditCategoryName($id,$categoryName,$categoryImage){
        $this->updateCategoryname($id,$categoryName,$categoryImage);
    }
    
    public function addProductByCategory($name,$image_path,$price,$discounted_price,$stock,$description,$origin,$category){
        $this->insertProductByCategory($name,$image_path,$price,$discounted_price,$stock,$description,$origin,$category);
    }
    
    public function EditProductById($id,$name,$image_path,$price,$discounted_price,$stock,$description,$origin,$category){
         $this->updateProductById($id,$name,$image_path,$price,$discounted_price,$stock,$description,$origin,$category);
    }
    
    public function removeProductById($id){
        $this->deleteproductById($id);
    }
    
    
        
    
}
 