<?php
        $connection = mysqli_connect("localhost", "root", "", "user_level");
        $queryganjil = "SELECT * FROM konten where id_konten%2=1 ";
        $query_runganjil = mysqli_query($connection, $queryganjil);

        $querygenap = "SELECT * FROM konten where id_konten%2=0 ";
        $query_rungenap = mysqli_query($connection, $querygenap);
        ?>
        <?php
        while ($dataganjil = $query_runganjil->fetch_assoc()) {
        ?>

<div class="container">
        <h1 class="text-center" style="color: black;">Berita Terkini</h1>
        <br>
        <div class="row">
      </p>
       
  <div class="col-sm-4">
    <div class="card">
        <img src="./images/seminar.png" width="355" height="200" alt="">
      <div class="card-body">
        <h5 class="card-title"><?php echo $dataganjil['judul_konten'] ?></h5>
        <p class="card-text"><?php echo $dataganjil['isi_konten'] ?></p>
      </div>
      
    </div>
  </div>
  
  <div class="col-sm-4">
    <div class="card">
        <img src="./images/AoI.png" width="355" height="200" alt="">
      <div class="card-body">
        <h5 class="card-title">Android atau Iphone?</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-dark">Selengkapnya</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
        <img src="./images/kurator.png" width="355" height="200" alt="">
      <div class="card-body">
        <h5 class="card-title">Mari Mengenal Kurator</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-dark">Selengkapnya</a>
      </div>
    </div>
  </div>
</div>
<?php
        }
        ?>
</div>