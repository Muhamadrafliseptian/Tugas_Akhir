<?php

include('includes/header.php');
include('includes/navbar.php');
        $connection = mysqli_connect("localhost", "root", "", "user_level");
        if (isset($_POST['judul_konten'])) {
            $id = $_POST['id_konten'];

            $query = "SELECT * FROM konten WHERE id_konten = $id ";
            $query_run = mysqli_query($connection, $query);

            foreach ($query_run as $row) {

            }
        }
                



?>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Konten
            </h6>
        </div>
        <div class="card-body">
            <form action="konek_konten.php" method="POST">

                    <input type="hidden" name="id_konten" value="<?php echo $row['id_konten'] ?>">
                    <div class="form-group">
                        <label> Judul Konten </label>
                        <input type="text" name="judul_konten" value="<?php echo $row['judul_konten'] ?>" class="form-control" placeholder="Enter Username" required>
                    </div>
                    <div class="form-group">
                        <label> Isi Konten</label>
                        <textarea type="text" cols="60" rows="5" name="isi_konten" value="<?php echo $row['isi_konten'] ?>" class="form-control" placeholder="Enter Berita" required></textarea>
                    </div>
                    <a href="konten.php" class="btn btn-danger"> Cancel </a>
                    <button type="submit" name="update_konten" class="btn btn-primary"> Update </button>
                </form>
        </div>

    </div>
</div>
<!--/.container-fluid -->
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>