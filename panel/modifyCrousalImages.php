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
                                <h4 class="card-title">Modify or Delete Crousal Images</h4>
                                <table class="table table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                   
                                            <th scope="col">Crousal Image</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                       
                                       <?php
                                           foreach($adminView->showCrousalImagesForPanel()->fetchAll() as $crousal){
                                               
                                        echo '<tr>
                                        <th scope="row">'.$crousal->id.'</th>
                                
                                        <td><img src="images/'.$crousal->imagePath.'" alt="" style="height: 50px;"></td>
                                        <td><a href="editCrousalImage.php?edit='.$crousal->id.'"><button class="btn btn-rounded btn-outline-primary">Edit</button></a></td>
                                        <td><a onclick=\'javascript : return confirm("Are you sure want to delete this Crousal Image?")\' href="modifyCrousalImages.php?delete='.$crousal->id.'"><button class="btn btn-rounded btn-outline-danger">Delete</button></a></td>
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
        $adminControl->removeHeaderProduct($id);
        ?>
        <script>
        window.location = 'modifyHaderProducts.php'</script>
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