<?php 
include 'header.php';
if($_SESSION['role'] == 'department'){
    echo "<script>window.location.href='CPRI_dept.php'</script>";
}


if(isset($_POST['submit'])){
    $title = $_POST['p_title'];
    $category = $_POST['category'];
    $code = $_POST['p_code'];
    $status = $_POST['status'];
    $image = $_FILES['img'];
   
   
    $img_name = $image['name'];
    $temp_name = $image['tmp_name'];

    $fetch = mysqli_query($conn, "SELECT * FROM `products`");
    $row = mysqli_fetch_assoc($fetch);

    if($code !== $row['code']){

        
        $insert = "INSERT INTO `products` (`title`, `category`, `code`, `status`, `image`) VALUES ('$title', '$category',  '$code', '$status', '$img_name')";
        $res = mysqli_query($conn,$insert);
        
        if($res){
            move_uploaded_file($temp_name,"assets/images/products/$img_name" );
        }

    }else{
        $error ="Product code must be unique";
    }
}
?>
  <div class="main-content">

<div class="page-content">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Add Product</h4>

            </div>
        </div>
    </div>
    <!-- end page title -->
    <form method="post" enctype="multipart/form-data">

        <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-body">

                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Product Title</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value=""
                            id="example-text-input" name="p_title"required>
                        </div>
                        
                    </div>

                    <div class="mb-3 col-lg-6">
                                    <label class="form-label">Product Category</label>
                                    <select class="form-select" name='category' required>
                                        <option selected disabled>Product Category</option>
                                        <?php
                                        $fetchCat = "SELECT * FROM `category`";
                                        $catResult = mysqli_query($conn, $fetchCat);
                                        while ($row = mysqli_fetch_assoc($catResult)) {


                                        ?>
                                            <option value="<?php echo $row['c_id'] ?>"><?php echo $row['c_name'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>




                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Product Code</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value=""
                                id="example-text-input" name="p_code" required>
                        </div>
                        <p class="text-danger text-center"><?php echo @$error; ?></p>
                       
                    </div>
                    
                    
                   
                    <!-- input -->
                    <div class="mb-3">
                                    <label class="form-label" id="productSKU">Status</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" checked value='Active'>
                                        <label class="form-check-label" for="inlineRadio1">Active</label>
                                    </div>
                                    <!-- input -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Disable">
                                        <label class="form-check-label" for="inlineRadio2">Disabled</label>
                                    </div><br><br>
                                    
                                    <div class="mb-3">
                        <label for="formFile" class="form-label">Product Image</label>
                        <input class="form-control" type="file" id="formFile" name="img" required>  
                   </div>
                  
                   
                    <div class="col-lg-12 d-flex justify-content-center">
                      <input type="submit" value="Add Product" name="submit" class="btn btn-primary">     
    
                    </div>
                    
                                </div>

                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
    
    
</div>
</form>
<!-- End Page-content -->

@@include("partials/footer.html")
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->


<script src="../assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <!-- Libs JS -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="../assets/js/theme.min.js"></script>
    <script src="../assets/libs/quill/dist/quill.min.js"></script>
    <script src="../assets/js/vendors/editor.js"></script>
    <script src="../assets/libs/dropzone/dist/min/dropzone.min.js"></script>

  


</body>


<!-- Mirrored from freshcart.codescandy.com/dashboard/add-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:28 GMT -->
</html>