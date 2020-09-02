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
                                <h4 class="card-title">Modify or Delete Categories</h4>
                                <table class="table table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Category Name</th>
                                            <th scope="col">View</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                       
                                       <?php
                                           foreach($adminView->showCategoryNamesForPanel()->fetchAll() as $category){
                                               
                                        echo '<tr>
                                        <th scope="row">'.$category->category_id.'</th>
                                        <td>'.$category->category_name.'</td>
                                        <td><a href="viewCategoryProducts.php?category='.$category->category_name.'"><button class="btn btn-rounded btn-outline-primary">View</button></a></td>
                                        <td><a href="editCategoryName.php?edit='.$category->category_id.'"><button class="btn btn-rounded btn-outline-primary">Edit</button></a></td>
                                        <td><a onclick=\'javascript : return confirm("Are you sure want to delete this Category?")\' href="manageCategories.php?delete='.$category->category_id.'"><button class="btn btn-rounded btn-outline-danger">Delete</button></a></td>
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
        $id = $_GET['delete'];
        $adminControl->removeCategoryName($id);
        ?>
        <script>
        window.location = 'manageCategories.php'</script>
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