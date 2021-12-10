<?php
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="container-fluid">
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Konten</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="konek_konten.php" method="POST">

                <div class="modal-body">

                   <div class="form-group">
                        <label> Juduk </label>
                        <input type="text" name="judul_konten" class="form-control" autocomplete="off" placeholder="Enter Judul">
                    </div>
                    <div class="form-group">
                        <label>Isi</label>
                        <input type="text" name="isi_konten" class="form-control" autocomplete="off" placeholder="Enter Isi">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>
    <!-- DataTales Example -->
    <div class="card-body">
<div class="card shadow mb-4">
        <div class="card-header py-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                    Tambah Konten
                </button>
            </h6>
        </div>

           

            <div class="table-responsive">

                <?php
                $connection = mysqli_connect("localhost", "root", "", "user_level");
                $query = "SELECT *FROM konten ";
                $query_run = mysqli_query($connection, $query);
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center"> Judul </th>
                            <th class="text-center">Isi</th>
                            <th class="text-center">Tambah</th>
                            <th class="text-center">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($query_run)) :
                        ?>
                                <tr>

                                    <td class="text-center"><?php echo $no; ?></td>
                                    <td class="text-center"><?php echo $row['judul_konten']; ?></td>
                                    <td class="text-center"><?php echo $row['isi_konten']; ?></td>
                                        <td class="text-center">
                                        <form action="edit_konten.php" method="post">
                                            <input type="hidden" name="id_konten" value="<?php echo $row['id_konten']; ?>">
                                            <button type="submit" name="judul_konten" class="btn btn-success"> Update</button>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <form action="konek_konten.php" method="post">
                                            <input type="hidden" name="delete_id" value="<?php echo $row['id_konten']; ?>">
                                            <button type="submit" name="delete_btn" class="btn btn-danger"> Hapus</button>
                                        </form>
                                    </td>
                                    
                                    
                                    
                                </tr>


                        <?php
                                $no++;
                            endwhile;
                        } else {
                            echo "No Record Found";
                        }
                        ?>  

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>