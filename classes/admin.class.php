<?php 

class Admin extends Db{
    
    protected function insertHeaderProduct($productName,$productImage){
        
        $image = "product_image".rand(10,1000).rand(10,1000).rand(10,1000). str_replace(' ', '', $productImage['name']);
        $tempImg = $productImage['tmp_name'];
        move_uploaded_file($tempImg,"../panel/images/$image");
        $query = "INSERT INTO `headerproducts` (`id`, `productName`, `productImage`) VALUES (NULL, ?, ?)";
        $result = $this->connect()->prepare($query);
        $result->execute([$productName,$image]);
    }
    
    protected function selectHeaderProducts(){
        $query  = "SELECT * FROM `headerproducts`";
        $result = $this->connect()->prepare($query);
        $result->execute();
        
        return $result;
    }
    
    protected function selectHeaderProductById($id){
        $query  = "SELECT * FROM `headerproducts` WHERE id=?";
        $result = $this->connect()->prepare($query);
        $result->execute([$id]);
        
        return $result;
    }
    
    protected function deleteHeaderProduct($id){
        $query  = "DELETE FROM `headerproducts` WHERE `headerproducts`.`id` = ?";
        $result = $this->connect()->prepare($query);
        $result->execute([$id]);
    }
    
    protected function updateHeaderProduct($id,$productName,$productImage){
        
        if(isset($productImage['name'])){
            $image = "product_image".rand(10,1000).rand(10,1000).rand(10,1000). str_replace(' ', '', $productImage['name']);
            $tempImg = $productImage['tmp_name'];
            move_uploaded_file($tempImg,"../panel/images/$image");
            $query = "UPDATE `headerproducts` SET `productName` = ?, `productImage` = ? WHERE `headerproducts`.`id` = ?";
            $result = $this->connect()->prepare($query);
            $result->execute([$productName,$image,$id]);
        }else{
            $query = "UPDATE `headerproducts` SET `productName` = ?, `productImage` = ? WHERE `headerproducts`.`id` = ?";
            $result = $this->connect()->prepare($query);
            $result->execute([$productName,$productImage,$id]);
        }
        
        
    }
    
    protected function insertCrousalImage($crousalImage){
        
        $image = "crousal_image".rand(10,1000).rand(10,1000).rand(10,1000). str_replace(' ', '', $crousalImage['name']);
        $tempImg = $crousalImage['tmp_name'];
        move_uploaded_file($tempImg,"../panel/images/$image");
        $query = "INSERT INTO `crousalimages` (`id`, `imagePath`) VALUES (NULL, ?)";
        $result = $this->connect()->prepare($query);
        $result->execute([$image]);
    }
  
    protected function selectCrousalImages(){
        $query  = "SELECT * FROM `crousalimages`";
        $result = $this->connect()->prepare($query);
        $result->execute();
        
        return $result;
    }
    
    protected function selectCrousalImageById($id){
        $query  = "SELECT * FROM `crousalimages` WHERE id=?";
        $result = $this->connect()->prepare($query);
        $result->execute([$id]);
        
        return $result;
    }
    
    protected function updateCrousalImage($id,$crousalImage){
            $image = "crousal_image".rand(10,1000).rand(10,1000).rand(10,1000). str_replace(' ', '', $crousalImage['name']);
            $tempImg = $crousalImage['tmp_name'];
            move_uploaded_file($tempImg,"../panel/images/$image");
            $query = "UPDATE `crousalimages` SET `imagePath`=? WHERE id=?";
            $result = $this->connect()->prepare($query);
            $result->execute([$image,$id]); 
    }
    
    protected function insertCategoryName($categoryName){

        $query = "INSERT INTO `categories` (`category_id`, `category_name`, `created_on`) VALUES (NULL, ?, current_timestamp());";
        $result = $this->connect()->prepare($query);
        $result->execute([$categoryName]);
    }
    
    protected function selectCategoryNames(){
        $query  = "SELECT * FROM `categories`";
        $result = $this->connect()->prepare($query);
        $result->execute();
        
        return $result;
    }
    
    protected function deleteCategoryName($id){
        $query  = "DELETE FROM `categories` WHERE `categories`.`category_id` = ?";
        $result = $this->connect()->prepare($query);
        $result->execute([$id]);
    }
    
    protected function selectCategoryNameById($id){
        $query  = "SELECT * FROM `categories` WHERE `category_id`=?";
        $result = $this->connect()->prepare($query);
        $result->execute([$id]);
        
        return $result;
    }
    
    protected function updateCategoryname($id,$categoryName){
        $query = "UPDATE `categories` SET `category_name`=? WHERE category_id=?";
            $result = $this->connect()->prepare($query);
            $result->execute([$categoryName,$id]); 
    }
    
    protected function selectProductsByCategory($category){
        $query  = "SELECT * FROM `product` WHERE category=?";
        $result = $this->connect()->prepare($query);
        $result->execute([$category]);
        
        return $result;
    }
    
    protected function insertProductByCategory($name,$image_path,$price,$discounted_price,$description,$category){
        $image = "product_image".rand(10,1000).rand(10,1000).rand(10,1000). str_replace(' ', '', $image_path['name']);
        $tempImg = $image_path['tmp_name'];
        move_uploaded_file($tempImg,"../panel/images/productImages/$image");
        $query  = "INSERT INTO `product` (`id`, `name`, `image_path`, `price`, `discounted_price`, `description`, `category`) VALUES (NULL, ?, ?, ?, ?, ?, ?)";
        $result = $this->connect()->prepare($query);
        $result->execute([$name,$image,$price,$discounted_price,$description,$category]);
        
    }
    
    protected function selectProductById($id){
        $query  = "SELECT * FROM `product` WHERE id=?";
        $result = $this->connect()->prepare($query);
        $result->execute([$id]);
        
        return $result;
    }
    
    protected function updateProductById($id,$name,$image_path,$price,$discounted_price,$description,$category){
        
        if(isset($image_path['name'])){
            $image = "product_image".rand(10,1000).rand(10,1000).rand(10,1000). str_replace(' ', '', $image_path['name']);
        $tempImg = $image_path['tmp_name'];
        move_uploaded_file($tempImg,"../panel/images/productImages/$image");
        $query  = "UPDATE `product` SET `name`=?,`image_path`=?,`price`=?,`discounted_price`=?,`description`=?,`category`=? WHERE id=?";
        $result = $this->connect()->prepare($query);
        $result->execute([$name,$image,$price,$discounted_price,$description,$category,$id]);
        }else{
           $query  = "UPDATE `product` SET `name`=?,`image_path`=?,`price`=?,`discounted_price`=?,`description`=?,`category`=? WHERE id=?";
        $result = $this->connect()->prepare($query);
        $result->execute([$name,$image_path,$price,$discounted_price,$description,$category,$id]);
        }
        
        
    }
    
    protected function deleteproductById($id){
        $query  = "DELETE FROM `product` WHERE `product`.`id` = ?";
        $result = $this->connect()->prepare($query);
        $result->execute([$id]);
    }
}

?>
