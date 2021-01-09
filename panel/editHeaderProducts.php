<?php include 'includes/header.php' ?>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
                <div class="row">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Header Products</h4>
                                <form action="#" method="post" enctype="multipart/form-data">
                                    <div class="form-body">
                                       <?php $product = $adminView->showHeaderProductById($_GET['edit'])->fetch();
                                
                                        ?>
                                       
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" name="productName" class="form-control" value="<?php echo $product->productName;?>" placeholder="product Name">
                                                </div>
                                                <div class="form-group">
                                                    <select name="category" id="" class="form-control" required>
                                                    <option value="" disabled>Select Category</option>
                                                    <option selected value="<?php echo $product->category?>"><?php echo $product->category?></option>
                                                    <?php foreach($adminView->showCategoryNamesForPanel()->fetchAll() as $category){
                                                    if($category->category_name !==$product->category){
                                                        echo '<option value="'.$category->category_name.'">'.$category->category_name.'</option>';}}?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <img src="images/<?php echo $product->productImage;?>" alt="" style="height: 60px;">
                                                </div>
                                                <div class="form-group">
                                            <label  for="upload-photo" style="background: #5f76e8;height: 35px;width: 200px;border-radius: 5px;color: white;line-height: 35px;text-align: center;">Upload Product Image...</label>
                                            <input type="file" name="productImage" id="upload-photo" />
<!--                                               <input type="file" name="productImage"/>-->
                                                </div>
                                            </div>
                                             
                                        </div>
                                        
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-left">
                                            <button type="submit" name="submit" class="btn btn-info">Submit</button>
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <?php
    if(isset($_POST['submit'])){
                 $id  = $_GET['edit']; 
        $productName  = $_POST['productName'];
        $category  = $_POST['category'];
        
        if(isset($_FILES['productImage']['name'][0])){
            $productImage = $_FILES['productImage'];
//            print_r($productImage);
        }else{
            $productImage = $product->productImage;
//            print($productImage);
        } 
        $adminControl->EditHeaderProduct($id,$productName,$productImage,$category);
        ?>
        <script>
window.location = 'editHeaderProducts.php?edit=<?php echo $id?>';
</script>
        <?php
    }


       ?>
        
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
<?php include 'includes/footer.php' ?>