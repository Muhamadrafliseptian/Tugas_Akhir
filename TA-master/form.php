<body>
   <?php 
  include ('includes/navbar_2.php');
  ?>
  
<div class="container">
      <div class="alert alert-success text-center" role="alert">
        silahkan lengkapi form untuk upload foto
</div>
<br>
    <div class="container">
    <div class="card text-start" style="width: 36rem;">
  <div class="card-body">
    <form method="post" enctype="multipart/form-data" action="upload.php">
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label> 
    <input type="text" class="form-control" value="" name="nama_peserta" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Judul</label>
    <input type="text" class="form-control" name="judul" value="" id="" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
    <input type="text" class="form-control" value="" name="deskripsi" id="">
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Upload</label>
    <input type="file" class="form-control" value="" name="gambar" id="">
  </div>
  <button type="submit" name="" class="btn btn-primary">Submit</button>
  </div>
    </div>
    </div>
  </div>
</div>
<br>
<br>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <?php
// Load file koneksi.php
include "koneksi.php";

$query = "SELECT * FROM karya"; // Tampilkan semua data gambar
$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
?>
 <?php
 include ('includes/footer.php');
 ?>
 
</body>
</html>

