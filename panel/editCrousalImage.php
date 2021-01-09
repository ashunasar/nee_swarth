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
                                <h4 class="card-title">Edit Crousal Image</h4>
                                <form action="#" method="post" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
<?php  $crousal = $adminView->showCrousalImageById($_GET['edit'])->fetch();?>
                                               
                                                <div class="form-group">
                                            <img src="images/<?php echo $crousal->imagePath;?>" alt="" style="height:200px">
                                                </div>
                                            <div class="form-group">
                                            <label  for="upload-photo" style="background: #5f76e8;height: 35px;width: 200px;border-radius: 5px;color: white;line-height: 35px;text-align: center;">Change Crousal Image...</label>
                                            <input type="file" name="CrousalImage" id="upload-photo" style="left: 15px;width: 200px;line-height: 35px;" accept="image/*">
                                                </div>
                                                <div class="form-group">
                                                    <select name="category" id="" class="form-control" required>
                                                    <option value="" disabled>Select Category</option>
                                                    <option selected value="<?php echo $crousal->category?>"><?php echo $crousal->category?></option>
                                                    <?php foreach($adminView->showCategoryNamesForPanel()->fetchAll() as $category){
                                                    if($category->category_name !==$crousal->category){
                                                        echo '<option value="'.$category->category_name.'">'.$category->category_name.'</option>';}}?>
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
        $id    = $_GET['edit'];
        
        if(isset($_FILES['CrousalImage']['name'][0])){
           $crousalImage =  $_FILES['CrousalImage'];
        }else{
            $crousalImage = $crousal->imagePath;
        }

        $categoty     = $_POST['category'];
        $adminControl->EditCrousalImage($id,$crousalImage,$categoty);
        ?>
        <script>
window.location = 'editCrousalImage.php?edit=<?php echo $id?>';
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