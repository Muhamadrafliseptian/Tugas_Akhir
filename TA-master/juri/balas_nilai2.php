<?php



$conn = mysqli_connect("localhost", "root", "", "user_level");

include('includes/header.php');
include('includes/navbar.php');



if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $nilai_2 = $_REQUEST['nilai_2'];    
date_default_timezone_set("Asia/Jakarta");
    $tanggal_ditanggapi = date("Y-m-d H:i:s");

    $query = mysqli_query($conn, "UPDATE karya SET nilai_2 = '$nilai_2', tanggal_ditanggapi = '$tanggal_ditanggapi' WHERE id_karya=$id ");
    
    if ($query == true) {
        echo "<script>
        alert('Balasan Terkirim!');
        document.location.href = 'jml_karya.php';
        </script>";
    } else {
        echo "<script>
        alert('Balasan Gagal Terkirim!');
        </script>";
    }
}

?>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Balasan
            </h6>
        </div>
        <form action="" method="POST">
            <div class="card-body"></div>

            <input type="hidden" name="edit_id" value="id">
            <div class="form-group">
                <label></label>
                <textarea class="input message" cols="30" rows="5" autocomplete="off" name="nilai_2" placeholder="Balasan....." required></textarea>
            </div>
            <a href="jml_karya.php" class="btn btn-danger"> Batal </a>
            <button type="submit" name="update" class="btn btn-primary"> Kirim </button>
        </form>

        <!--/.container-fluid -->
        <?php
        include('includes/scripts.php');
        include('includes/footer.php');
        ?>