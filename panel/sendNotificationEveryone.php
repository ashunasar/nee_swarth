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
               <h4 class="card-title">Send Notification To Everyone</h4>
               <form action="#" method="post" enctype="multipart/form-data">
                  <div class="form-body">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <input type="text" name="name" class="form-control" placeholder="Title" required>
                           </div>
                           
                           <div class="form-group">
                              <textarea name="description" id="" class="form-control" required  rows="5" placeholder="Message"></textarea>
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
//       $name       = $_POST['name'];
//       $image_path = $_FILES['image_path'];
//       $price      = $_POST['price'];
//       $discounted_price = $_POST['discounted_price'];
//       $stock = $_POST['stock'];
//       $description  = $_POST['description'];
//       $category     = $_POST['category'];
//       
//       $adminControl->addProductByCategory($name,$image_path,$price,$discounted_price,$stock,$description,$category);
//       
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
