<?php

class AdminView extends Admin{
    
    public function showHeaderProducts(){
       $result = $this->selectHeaderProducts();
       $count = $result->rowCount();
        echo '['; 
    $i = 0;
    while($product = $result->fetch()){
                 $id  =  $product->id;
        $productName  = $product->productName;
        $productImage = $product->productImage;
        $category     = $product->category;

        $response = array();
        $response['id'] = $id;
        $response['productName']  = $productName;
        $response['productImage'] = $productImage;
        $response['category']     = $category;
        
        echo json_encode($response);
        echo ($i == $count - 1) ? '' :',';
        $i++;
    }
    
    echo ']';
    }
    
    
    public function showHeaderProductsForPanel(){
        return $this->selectHeaderProducts();
    }
    
    public function showHeaderProductById($id){
        return $this->selectHeaderProductById($id);
    }
    
    
    public function showCrousalImages(){
    
       $result = $this->selectCrousalImages();
       $count = $result->rowCount();
        echo '['; 
    $i = 0;
    while($crousal = $result->fetch()){
                 $id  =  $crousal->id;
        $imagePath = $crousal->imagePath;
        $category  = $crousal->category;

        $response = array();
        $response['id'] = $id;
        $response['imagePath'] = $imagePath;
        $response['category']  = $category;
        
        echo json_encode($response);
        echo ($i == $count - 1) ? '' :',';
        $i++;
    }
    
    echo ']';
    }
    
    public function showCrousalImagesForPanel(){
        return $this->selectCrousalImages();
    }
     public function showCrousalImageById($id){
        return $this->selectCrousalImageById($id);
    }
    
    
    public function showCategoryNamesForPanel(){
        return $this->selectCategoryNames(); 
    }
    
    public function showCategoryNameById($id){
        return $this->selectCategoryNameById($id);
    }
    
    public function showProductsByCategoryForPanel($category){
        return $this->selectProductsByCategory($category);
    }
    
    public function showProductById($id){
        return $this->selectProductById($id);
    }
    
    public function showProductDescription($name,$image_path,$price){
        return $this->selectProductDescription($name,$image_path,$price);
    }
    
}
