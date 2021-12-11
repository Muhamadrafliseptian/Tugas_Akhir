<?php
include ('includes/header.php');
include ('includes/navbar.php');
$conn = mysqli_connect("localhost", "root", "", "user_level");
$count1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM karya"));

$conn = mysqli_connect("localhost", "root", "", "user_level");
$count2 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM admin_juri  WHERE level = 'admin'"));

$conn = mysqli_connect("localhost", "root", "", "user_level");
$count3 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM karya"));
?>
<div class="container-fluid">
    

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
         <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            <h5>Jumlah Karya</h5>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <h2><?= $count1; ?> Karya Masuk</h2>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            <h5>Jumlah Peserta</h5>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <h2><?= $count3; ?> Peserta</h2>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            <h5>Jumlah Admin</h5>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <h2><?= $count2; ?> Admin</h2>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>