<?php 

class Admin extends Db{
    
    protected function insertHeaderProduct($productName,$productImage,$category){
        
        $image = "product_image".rand(10,1000).rand(10,1000).rand(10,1000). str_replace(' ', '', $productImage['name']);
        $tempImg = $productImage['tmp_name'];
        move_uploaded_file($tempImg,"../panel/images/$image");
        $query = "INSERT INTO `headerproducts` (`id`, `productName`, `productImage`,`category`) VALUES (NULL, ?, ?,?)";
        $result = $this->connect()->prepare($query);
        $result->execute([$productName,$image,$category]);
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
    
    protected function updateHeaderProduct($id,$productName,$productImage,$category){
        
        if(isset($productImage['name'])){
            $image = "product_image".rand(10,1000).rand(10,1000).rand(10,1000). str_replace(' ', '', $productImage['name']);
            $tempImg = $productImage['tmp_name'];
            move_uploaded_file($tempImg,"../panel/images/$image");
            $query = "UPDATE `headerproducts` SET `productName` = ?, `productImage` = ? ,`category` = ? WHERE `headerproducts`.`id` = ?";
            $result = $this->connect()->prepare($query);
            $result->execute([$productName,$image,$category,$id]);
        }else{
            $query = "UPDATE `headerproducts` SET `productName` = ?, `productImage` = ? ,`category` = ? WHERE `headerproducts`.`id` = ?";
            $result = $this->connect()->prepare($query);
            $result->execute([$productName,$productImage,$category,$id]);
        }
        
        
    }
    
    protected function insertCrousalImage($crousalImage,$category){
        
        $image = "crousal_image".rand(10,1000).rand(10,1000).rand(10,1000). str_replace(' ', '', $crousalImage['name']);
        $tempImg = $crousalImage['tmp_name'];
        move_uploaded_file($tempImg,"../panel/images/$image");
        $query = "INSERT INTO `crousalimages` (`id`, `imagePath`,`category`) VALUES (NULL, ?,?)";
        $result = $this->connect()->prepare($query);
        $result->execute([$image,$category]);
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
    
    protected function updateCrousalImage($id,$crousalImage,$categoty){
          
        if(isset($crousalImage['name'])){
        $image = "crousal_image".rand(10,1000).rand(10,1000).rand(10,1000). str_replace(' ', '', $crousalImage['name']);
        $tempImg = $crousalImage['tmp_name'];
        move_uploaded_file($tempImg,"../panel/images/$image");
        $query = "UPDATE `crousalimages` SET `imagePath`=? ,`category` = ? WHERE id=?";
        $result = $this->connect()->prepare($query);
        $result->execute([$image,$categoty,$id]); 
        }else{
        $query = "UPDATE `crousalimages` SET `imagePath`=? ,`category` = ? WHERE id=?";
        $result = $this->connect()->prepare($query);
        $result->execute([$crousalImage,$categoty,$id]); 
        }
          
    }
    
    protected function insertCategoryName($categoryName,$categoryImage){
        $image = "categoryImage".rand(10,1000).rand(10,1000).rand(10,1000). str_replace(' ', '', $categoryImage['name']);
        $tempImg = $categoryImage['tmp_name'];
        move_uploaded_file($tempImg,"../panel/images/$image");
        $query = "INSERT INTO `categories` (`category_id`, `category_name`, `category_image`, `created_on`) VALUES (NULL, ?, ?, current_timestamp());";
        $result = $this->connect()->prepare($query);
        $result->execute([$categoryName,$image]);

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
    
    protected function updateCategoryname($id,$categoryName,$categoryImage){
        
        if(isset($categoryImage['name'])){
            $image = "category_image".rand(10,1000).rand(10,1000).rand(10,1000). str_replace(' ', '', $categoryImage['name']);
            $tempImg = $categoryImage['tmp_name'];
            move_uploaded_file($tempImg,"../panel/images/$image");
            $query = "UPDATE `categories` SET `category_name` = ?, `category_image` = ? WHERE `category_id` = ?";
            $result = $this->connect()->prepare($query);
            $result->execute([$categoryName,$image,$id]);
        }else{
            $query = "UPDATE `categories` SET `category_name` = ?, `category_image` = ? WHERE `category_id` = ?";
            $result = $this->connect()->prepare($query);
            $result->execute([$categoryName,$categoryImage,$id]);
        }
        
        
    }
    
    protected function selectProductsByCategory($category){
        $query  = "SELECT * FROM `product` WHERE category=?";
        $result = $this->connect()->prepare($query);
        $result->execute([$category]);
        
        return $result;
    }
    
    protected function insertProductByCategory($name,$image_path,$price,$discounted_price,$stock,$description,$origin,$category){
        $image = "product_image".rand(10,1000).rand(10,1000).rand(10,1000). str_replace(' ', '', $image_path['name']);
        $tempImg = $image_path['tmp_name'];
        move_uploaded_file($tempImg,"../panel/images/productImages/$image");
        $query  = "INSERT INTO `product` (`id`, `name`, `image_path`, `price`, `discounted_price`,`stock`, `description`, `origin`,`category`) VALUES (NULL, ?, ?, ?,?,?, ?, ?, ?)";
        $result = $this->connect()->prepare($query);
        $result->execute([$name,$image,$price,$discounted_price,$stock,$description,$origin,$category]);
        
    }
    
    protected function selectProductById($id){
        $query  = "SELECT * FROM `product` WHERE id=?";
        $result = $this->connect()->prepare($query);
        $result->execute([$id]);
        
        return $result;
    }
    
    protected function updateProductById($id,$name,$image_path,$price,$discounted_price,$stock,$description,$origin,$category){
        
        if(isset($image_path['name'])){
            $image = "product_image".rand(10,1000).rand(10,1000).rand(10,1000). str_replace(' ', '', $image_path['name']);
        $tempImg = $image_path['tmp_name'];
        move_uploaded_file($tempImg,"../panel/images/productImages/$image");
        $query  = "UPDATE `product` SET `name`=?,`image_path`=?,`price`=?,`discounted_price`=?,`stock`=?,`description`=?,`origin` =?,`category`=? WHERE id=?";
        $result = $this->connect()->prepare($query);
        $result->execute([$name,$image,$price,$discounted_price,$stock,$description,$origin,$category,$id]);
        }else{
           $query  = "UPDATE `product` SET `name`=?,`image_path`=?,`price`=?,`discounted_price`=?,`stock`=?,`description`=?,`origin` =?,`category`=? WHERE id=?";
        $result = $this->connect()->prepare($query);
        $result->execute([$name,$image_path,$price,$discounted_price,$stock,$description,$origin,$category,$id]);
        }
        
        
    }
    
    protected function deleteproductById($id){
        $query  = "DELETE FROM `product` WHERE `product`.`id` = ?";
        $result = $this->connect()->prepare($query);
        $result->execute([$id]);
    }
    
    protected function selectProductDescription($name,$image_path,$price){
        $query  = "SELECT * FROM `product` WHERE name=? and image_path=? and price=?";
        $result = $this->connect()->prepare($query);
        $result->execute([$name,$image_path,$price]);
        
        return $result;
    }
    
    
}

?>
