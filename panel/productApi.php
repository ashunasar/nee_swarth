<?php
include 'init.php';

if (isset($_POST['request'])){

    if($_POST['request'] == 'showHeaderProducts'){
      $adminView->showHeaderProducts();
    }
    
    if($_POST['request'] == 'showCrousalImages'){
      $adminView->showCrousalImages();
    }
    
    if($_POST['request'] == 'categoryNames'){
        $result = $adminView->showCategoryNamesForPanel();
        $count = $result->rowCount();
        echo '['; 
    $i = 0;
    while($category = $result->fetch()){
        $category_name = $category->category_name;
        $category_image = $category->category_image;
 
        $response = array();
        $response['category_name'] = $category_name;
        $response['category_image'] = $category_image;
        
        echo json_encode($response);
        echo ($i == $count - 1) ? '' :',';
        $i++;
    }
    
    echo ']';
    }
    
    
    
    if($_POST['request'] == 'productByCategoryName' && isset($_POST['categoryName'])){
        $categoryName = $_POST['categoryName'];
        $result = $adminView->showProductsByCategoryForPanel($categoryName);
        $count = $result->rowCount();
        echo '['; 
    $i = 0;
    while($product = $result->fetch()){

        $response = array();
        $response['name'] = $product->name;
        $response['image_path'] = $product->image_path;
        $response['price'] = $product->price;
        $response['discounted_price'] = $product->discounted_price;
        $response['stock'] = $product->stock;
        $response['description'] = $product->description;
        $response['category'] = $product->category;
        
        echo json_encode($response);
        echo ($i == $count - 1) ? '' :',';
        $i++;
    }
    
    echo ']';
    }
    
    if($_POST['request'] =='showProductById' && isset($_POST['product_id'])){
        $product_id = $_POST['product_id'];
        $result = $adminView->showProductById($product_id);
        $product = $result->fetch();
        echo '[';
        $response = array();
        $response['id'] = $product->id;
        $response['name'] = $product->name;
        $response['image_path'] = $product->image_path;
        $response['price'] = $product->price;
        $response['discounted_price'] = $product->discounted_price;
        $response['stock'] = $product->stock;
        $response['description'] = $product->description;
        $response['category'] = $product->category;
        
        echo json_encode($response);
        echo ']';
        
    }
    
    if($_POST['request'] == 'showProductDescription'){
        $name        =  $_POST['name'];
        $image_path  =  $_POST['image_path'];
        $price       =  $_POST['price'];
        
        $result = $adminView->showProductDescription($name,$image_path,$price);
        $product = $result->fetch();
        echo '[';
        $response = array();
        $response['description'] = $product->description;
        echo json_encode($response);
        echo ']';
    }
    
    
}