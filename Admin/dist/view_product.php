<?php 

include 'header.php';
if($_SESSION['role'] == 'department'){
    echo "<script>window.location.href='CPRI_dept.php'</script>";
}

?>


<div class="main-content">

<div class="page-content">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">View Product</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                  
                        <li class="breadcrumb-item active">View product</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Product Table</h4>
                    

                    <div class="table-responsive">
                        <table class="table table-editable table-nowrap align-middle table-edits text-center">
                            <thead>
                            <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Category</td>
                    <td>Code</td>
                    <td>Status</td>
                    <td>Testing</td>
                    <td>Image</td>
                    <td>Action</td>
                </tr>
                           
                            </thead>
                            <tbody>
                            <?php 
                            $fetch = "SELECT * FROM `products` AS p INNER JOIN `category` AS c on p.category = c.c_id";
                            $result = mysqli_query($conn,$fetch);


                while($row = mysqli_fetch_array($result)){

                            
                            ?>
                                <tr>
                                <td> <?php echo $row['id']?> </td>
                                <td> <?php echo $row['title']?> </td>
                                <td> <?php echo $row['c_name']?> </td>
                                <td> <?php echo $row['code']?> </td>
                                <td> <?php echo $row['status']?> </td>
                                <td> <?php 
                                 if($row['testing']==0){
                                    echo "Pending";  
                                
                                } elseif($row['testing']==1){
                                    echo "In Progress";
                                }elseif($row['testing']==2){
                                    echo "Rejected";
                                }elseif($row['testing']==3){
                                    echo "Approved";
                                }
                                    
                                 ?> </td>
                                <td> <img src="assets/images/products/<?php echo $row['image']?>" alt="" height="100px" width="100px" > </td>


                                <td>
                        <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-warning text-white">Edit</a>
                        <a href="delete_product.php?id=<?php echo $row['id']?>" class="btn btn-danger text-white">Delete</a>
                        <a href="send.php?id=<?php echo $row['id']?>" class="btn btn-success text-white">Send</a>
                    </td>
                                    
                                    
                                </tr>
                                
                            </tbody>
                            <?php }?>
                        </table>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div>
<!-- End Page-content -->


</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->

</div>
<!-- end container-fluid -->



<!-- JAVASCRIPT -->


<!-- Table Editable plugin -->
<script src="assets/libs/table-edits/build/table-edits.min.js"></script>

<script src="assets/js/pages/table-editable.int.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>