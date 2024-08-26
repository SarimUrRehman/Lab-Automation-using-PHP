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
                <h4 class="page-title mb-0 font-size-18">All Users</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                  
                        <li class="breadcrumb-item active">All Users</li>
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

                    <h4 class="card-title">Users Table</h4>
                    

                    <div class="table-responsive">
                        <table class="table table-editable table-nowrap align-middle table-edits text-center">
                            <thead>
                            <tr>
                    <td>ID</td>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Role</td>
                    
                </tr>
                           
                            </thead>
                            <tbody>
                            <?php 
                            $fetch = "SELECT * FROM `admin`";
                            $result = mysqli_query($conn,$fetch);


                while($row = mysqli_fetch_array($result)){

                            
                            ?>
                                <tr>
                                <td> <?php echo $row['id']?> </td>
                                <td> <?php echo $row['username']?> </td>
                                <td> <?php echo $row['email']?> </td>
                                <td> <?php echo ucwords($row['role'])?> </td>
                                
                             
                                    
                                    
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