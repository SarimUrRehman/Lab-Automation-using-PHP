<?php
include 'header.php';

$sid = $_GET['id'];

$fetch = "SELECT * FROM `products` WHERE id  = $sid";
$res = mysqli_query($conn, $fetch);


if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $status = $_POST['status'];
    $image = $_FILES['img'];
   
   
    $img_name = $image['name'];
    $temp_name = $image['tmp_name'];


        $update = "UPDATE `products` SET title = '{$title}', category = $category , status = '$status', image = '$img_name' WHERE id = '$sid'";
        $updateRes = mysqli_query($conn, $update);
        if ($updateRes) {
           if( move_uploaded_file($temp_name,"assets/images/products/$img_name" )){
            echo "
            <script>window.location.href='view_product.php'</script>
            ";
           }
        }
   
}



?>
<div class="main-content">

    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Update product</h4>

                  

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Textual inputs</h4>

                        <form  method="post" enctype="multipart/form-data">

                            <?php
                            $row = mysqli_fetch_assoc($res);
                            ?>

                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Title</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="title" value="<?php echo $row['title'] ?>" id="example-text-input" required>
                                </div>
                            </div>
                            <select class="form-select mb-3 w-50" name="category" aria-label="Default select example" required>
                                <option selected disabled>Category</option>

                                <?php
                                $category = "SELECT * FROM `category`";
                                $categoryRes = mysqli_query($conn, $category);
                                while ($cRow = mysqli_fetch_array($categoryRes)) {

                                    if ($row['c_name'] == $cRow['id']) {
                                        $select = 'selected';
                                    } else {
                                        $select = '';
                                    }
                                ?>
                                    <option <?php echo $select ?> value='<?php echo $cRow[0] ?>'><?php echo $cRow[1] ?></option>

                                <?php
                                }
                                ?>


                            </select>


                    
                
                    <div class="mb-3">
                                    <label class="form-label" id="productSKU">Status</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" <?php echo ($row['status']=='Active')? "checked":''  ?> value='Active'>
                                        <label class="form-check-label" for="inlineRadio1">Active</label>
                                    </div>
                                    <!-- input -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" <?php echo ($row['status']=='Disable')? "checked":''  ?> name="status" id="inlineRadio2" value="Disable">
                                        <label class="form-check-label" for="inlineRadio2">Disabled</label>
                                    </div><br><br>
                  
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Product Image</label>
                        <input class="form-control" type="file" id="formFile" name="img" required>  
                   </div>
                    <div class="col-lg-12 d-flex justify-content-center">
                        <input type="submit" value="Update Product" name="update" class="btn btn-primary">

                    </div>
                    </form>


                </div>
                </div>
                <!-- End Page-content -->


            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

    </div>
    <!-- end container-fluid -->


    <!-- App js -->
    <script src="assets/js/app.js"></script>

    </body>

    </html>