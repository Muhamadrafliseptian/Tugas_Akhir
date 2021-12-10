<?php
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Karya
            </h6>
        </div>

        <div class="card-body">

           

            <div class="table-responsive">

                <?php
                $connection = mysqli_connect("localhost", "root", "", "user_level");
                $query = "SELECT *FROM karya";
                $query_run = mysqli_query($connection, $query);
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center"> Nama </th>
                            <th class="text-center"> Judul</th>
                            <th class="text-center">Deskripsi</th>
                            <th class="text-center">Hasil</th>
                            <th class="text-center"> Nilai juri 1</th>
                            <th class="text-center">Beri Nilai</th>
                            <th class="text-center">nilai juri 2</th>
                            <th class="text-center">Beri Nilai</th>
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
                                    <td class="text-center"><?php echo $row['nama_peserta']; ?></td>
                                    <td class="text-center"><?php echo $row['judul']; ?></td>
                                    <td class="text-center"><?php echo $row['deskripsi']; ?></td>
                                   <td><img src="../images/<?php echo $row['nama']; ?>" alt="" width='100' height='100'></td> 
                                    <td class="text-center"><?php echo $row['nilai']; ?></td>
                                    
                                    <td class="text-center">
                                        <a href="balas_nilai.php?id=<?= $row['id_karya']; ?>"><button type="submit" name="edit_btn" class="btn btn-success">Balas</button></a>
                                    </td>
                                    <td class="text-center"><?php echo $row['nilai_2']; ?></td>
                                     <td class="text-center">
                                        <a href="balas_nilai2.php?id=<?= $row['id_karya']; ?>"><button type="submit" name="edit_btn" class="btn btn-success">Balas</button></a>
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