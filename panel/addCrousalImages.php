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
                                <h4 class="card-title">Add Crousal Image</h4>
                                <form action="#" method="post" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                
                                                <div class="form-group">
                                            <label  for="upload-photo" style="background: #5f76e8;height: 35px;width: 200px;border-radius: 5px;color: white;line-height: 35px;text-align: center;">Upload Crousal Image...</label>
                                            <input type="file" name="CrousalImage" id="upload-photo" required="" style="left: 15px;width: 200px;line-height: 35px;">
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
        $crousalImage = $_FILES['CrousalImage'];
        $category     = $_POST['category'];
        $adminControl->addCrousalImage($crousalImage,$category);
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