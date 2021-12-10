<?php
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Aspirasi
            </h6>
        </div>

        <div class="card-body">

           

            <div class="table-responsive">

                <?php
                $connection = mysqli_connect("localhost", "root", "", "user_level");
                $query = "SELECT *FROM user WHERE level = 'pegawai' ";
                $query_run = mysqli_query($connection, $query);
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th> Nama </th>
                            <th>Username</th>
                            <th> Password </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($query_run)) :
                        ?>
                                <tr>

                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $row['nama']; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['password']; ?></td>
                                    
                                    
                                    
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