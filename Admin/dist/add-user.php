<?php

include 'header.php';
if($_SESSION['role'] == 'department'){
    echo "<script>window.location.href='CPRI_dept.php'</script>";
}


// if($_SESSION['role'] !== 'admin'){
//     echo "<script>window.location.href = 'dashboard.php'</script>";
//     }

// pass = admin123@

if (isset($_POST['register'])) {
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $pswrd = $_POST['pass'];

    $see = "SELECT * FROM `admin` WHERE `email` = '$email' OR `username` = '$uname'";
    $seeR = mysqli_query($conn, $see);
    $User = mysqli_num_rows($seeR);

    if ($User == 0) {
       
            $pass = password_hash($pswrd, CRYPT_BLOWFISH);
            $insert = "INSERT INTO `admin` ( `email`, `username`, `password`, `role`) VALUES ( '$email', '$uname', '$pass', '$role')";
            $result = mysqli_query($conn, $insert);
            if ($result) {

                $success = 'User Successfully Added';
            }
        
    } else {
        $exist = 'User Already Exists';
    }
}




?>


<div class="main-content">

    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Add USer</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Add</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </div>

                </div>
                <div class="account-pages  pt-sm-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-lg-6 col-xl-5">
                                <div class="card overflow-hidden">
                                    <div class="bg-login text-center">
                                        <div class="bg-login-overlay"></div>
                                        <div class="position-relative">
                                            <h5 class="text-white font-size-20">Add User</h5>
                                            <img src="assets/images/logo-sm-dark.png" alt="" height="30">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body pt-5">

                                        <div class="p-2">
                                            <p class="text-success"><?php echo @$success; ?></p>
                                            <p class="text-danger"><?php echo @$exist; ?></p>
                                            <form class="form-horizontal" method="post">

                                                <div class="mb-3">
                                                    <label class="form-label" for="useremail">Email</label>
                                                    <input type="email" class="form-control" id="useremail" placeholder="Enter email" name="email">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="username">Username</label>
                                                    <input type="text" class="form-control" id="username" placeholder="Enter username" name="uname">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="userpassword">Password</label>
                                                    <input type="password" class="form-control" id="userpassword" placeholder="Enter password" name="pass">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="userpassword">Role</label>
                                                    <select name="role" class="form-control">
                                                        <option selected disabled>Select Role</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="department">Department</option>
                                                    </select>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-primary w-100 waves-effect waves-light" type="submit" name="register">Register</button>
                                                </div>

                                                <div class="mt-4 text-center">
                                                    <p class="mb-0">By registering you agree to the Skote <a href="#" class="text-primary">Terms of Use</a></p>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                                <div class="mt-5 text-center">
                                    <p>Already have an account ? <a href="users.php" class="fw-medium text-primary">
                                            <a href="add-user.php">login</a> </p>
                                    <p>©
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script> Qovex. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

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