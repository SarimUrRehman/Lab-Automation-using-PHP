<?php 
include 'header.php';
if($_SESSION['role'] == 'department'){
    echo "<script>window.location.href='CPRI_dept.php'</script>";
}


if(isset($_POST['submit'])){
    $c_name = $_POST['c_name'];
    
    $insert = "INSERT INTO `category` (`c_name`) VALUES ('$c_name')";
    $res = mysqli_query($conn,$insert);

}
?>

















 <div class="main-content">

<div class="page-content">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Add Category</h4>

            </div>
        </div>
    </div>
    <!-- end page title -->
    <form action="" method="post" enctype="multipart/form-data">

        <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-body">

                <h4 class="mb-4 h5 mt-5">Category Information</h4>

<div class="row">
    <!-- input -->
    <div class="mb-3 col-lg-6">
        <label class="form-label">Category Name</label>
        <input type="text" class="form-control" name="c_name" placeholder="Category Name"
            required>
    </div>
 

    <div class="col-lg-12">
       <input type="submit" value="Create Category" name="submit" class="btn btn-primary">
         
    </div>
</div>
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
