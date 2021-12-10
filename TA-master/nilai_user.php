<?php
include ('includes/navbar_2.php');
?>
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "3600";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Latian Table</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css">
 <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
</head>
<div class="container">
    
        <div class="card-header py-3">
            
            <h6 class="m-0 font-weight-bold text-danger">Data akan di-update setiap 60 menit
            </h6>
        </div>

<body><br>
    <h3 align="center"> Data Karya</h3>
     <?php
                $connection = mysqli_connect("localhost", "root", "", "user_level");
                $query = "SELECT *FROM karya ORDER BY nilai desc";
                $query_run = mysqli_query($connection, $query);
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center"> Nama </th>
                            <th class="text-center"> Nilai juri 1</th>
                            <th class="text-center">nilai juri 2</th>
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
                                    <td class="text-center"><?php echo $row['nilai']; ?></td>
                                    <td class="text-center"><?php echo $row['nilai_2']; ?></td>

                                     
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
                <a href="cetak.php" class="btn btn-primary">Cetak Nilai</a>
            </div>
   </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>
            