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
                                <h4 class="card-title">Edit Category Name</h4>
                                <form action="#" method="post" enctype="multipart/form-data">
                                    <div class="form-body">
                                       <?php $category = $adminView->showCategoryNameById($_GET['edit'])->fetch();
                                
                                        ?>
                                       
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" name="categoryName" class="form-control" value="<?php echo $category->category_name;?>" placeholder="product Name">
                                                </div>
                                                <div class="form-group">
                                                    <img src="images/<?php echo $category->category_image;?>" alt="" style="height: 60px;">
                                                </div>
                                                <div class="form-group">
                                            <label  for="upload-photo" style="background: #5f76e8;height: 35px;width: 200px;border-radius: 5px;color: white;line-height: 35px;text-align: center;">Upload Category Image...</label>
                                            <input type="file" name="categoryImage" id="upload-photo" />
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
        $categoryName  = $_POST['categoryName'];
 
        if(isset($_FILES['categoryImage']['name'][0])){
            $categoryImage = $_FILES['categoryImage'];
        }else{
            $categoryImage = $category->category_image;
        } 
        $adminControl->EditCategoryName($id,$categoryName,$categoryImage);
        ?>
        <script>
window.location = 'editCategoryName.php?edit=<?php echo $id?>';
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