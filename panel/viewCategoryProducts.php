<?php include 'includes/header.php' ?>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Modify or Delete Categories</h4>
                                <table class="table table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Discount</th>
                                            <th scope="col">AvailableStock</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                       
                                       <?php
                                           $category = $_GET['category'];
                                           foreach($adminView->showProductsByCategoryForPanel($category)->fetchAll() as $product){
                                        echo '<tr>
                                        <th scope="row">'.$product->id.'</th>
                                        <td>'.$product->name.'</td>
                                        <td><img src=images/productImages/'.$product->image_path.' style="height: 100px;"></td>
                                        <td>'.$product->price.'</td>
                                        <td>'.$product->discounted_price.'</td>
                                        <td>'.$product->stock.'</td>
                                        <td><a href="editProduct.php?edit='.$product->id.'"><button class="btn btn-rounded btn-outline-primary">Edit</button></a></td>
                                        <td><a onclick=\'javascript : return confirm("Are you sure want to delete this Product?")\' href="viewCategoryProducts.php?category='.$category.'&delete='.$product->id.'"><button class="btn btn-rounded btn-outline-danger">Delete</button></a></td>
                                        </tr>';
                                           }
                                            ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <?php


        if(isset($_GET['delete'])){
            echo "<h1>$category</h1>";
        $id = $_GET['delete'];
        $adminControl->removeProductById($id);
        
        echo "<h1>$category</h1>";
        ?>
        <script>
        window.location = "viewCategoryProducts.php?category=<?php echo $category ?>"</script>
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