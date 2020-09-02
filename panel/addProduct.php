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
                                <h4 class="card-title">Add Products</h4>
                                <form action="#" method="post" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" placeholder="Product Name" required>
                                                </div>
                                                <div class="form-group">
                                            <label  for="upload-photo" style="background: #5f76e8;height: 35px;width: 200px;border-radius: 5px;color: white;line-height: 35px;text-align: center;">Upload Product Image...</label>
                                            <input type="file" name="image_path" accept="image/*" id="upload-photo" required style="margin-left: -200px;width: 200px;">

                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="price" class="form-control" placeholder="product Price" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="discounted_price" class="form-control" placeholder="Discounted Price" required>
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="description" id="" class="form-control" required  rows="5" placeholder="Product Description"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <select name="category" id="" class="form-control" required>
                                                    <option value="" selected disabled>Select Category</option>
                                                    <?php foreach($adminView->showCategoryNamesForPanel()->fetchAll() as $category){
                                                    
                                                    echo '<option value="'.$category->category_name.'">'.$category->category_name.'</option>';

                                                    } ?>
                                                    </select>
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
        $name       = $_POST['name'];
        $image_path = $_FILES['image_path'];
        $price      = $_POST['price'];
        $discounted_price = $_POST['discounted_price'];
        $description  = $_POST['description'];
        $category     = $_POST['category'];
        
        $adminControl->addProductByCategory($name,$image_path,$price,$discounted_price,$description,$category);
        
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