<?php

include 'header.php';
if($_SESSION['role'] == 'admin'){
    echo "<script>window.location.href='view_product.php'</script>";
}

?>

<div class="main-content">

    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">View products</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">CPRI</a></li>
                            
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
                                 
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php
                                    $fetch = "SELECT * FROM `products` AS p INNER JOIN `category` AS c on p.category = c.c_id WHERE `testing`=2 OR `testing`=3 ";
                                    $result = mysqli_query($conn, $fetch);


                                    while ($row = mysqli_fetch_array($result)) {


                                    ?>
                                        <tr>
                                            <td> <?php echo $row['id'] ?> </td>
                                            <td> <?php echo $row['title'] ?> </td>
                                            <td> <?php echo $row['c_name'] ?> </td>
                                            <td> <?php echo $row['code'] ?> </td>
                                            <td> <?php echo $row['status'] ?> </td>
                                            <td> <?php
                                                    if ($row['testing'] == 2) {
                                                        echo "Rejected";
                                                    } elseif ($row['testing'] == 3) {
                                                        echo "Approved";
                                                    } elseif ($row['testing'] == 1) {
                                                        echo "In Progress";
                                                    }

                                                    ?> </td>
                                            <td> <img src="assets/images/products/<?php echo $row['image'] ?>" alt="" height="100px" width="100px"> </td>


                                      


                                        </tr>

                                </tbody>
                            <?php } ?>
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

    <!-- JAVASCRIPT -->
    <!-- JAVASCRIPT -->
    <!-- <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script> -->

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- jquery.vectormap map -->
    <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

    <script src="assets/js/pages/dashboard.init.js"></script>

    <script src="assets/js/app.js"></script>


      <!-- JAVASCRIPT -->
    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- jquery.vectormap map -->
    <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

    <script src="assets/js/pages/dashboard.init.js"></script>

    <script src="assets/js/app.js"></script>



    <!-- Table Editable plugin -->
<script src="assets/libs/table-edits/build/table-edits.min.js"></script>

<script src="assets/js/pages/table-editable.int.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>


</body>

</html>