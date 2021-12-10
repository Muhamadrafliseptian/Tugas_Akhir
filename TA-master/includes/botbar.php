
 <img
        src="../images/kurator.png" height="300" width="300"
        class="rounded float-end"
        alt="..."
      />
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
      <h1 class="text-start"><b><?php echo $dataganjil['judul_konten'] ?></b></h1>

      <p class="text-start">
      <?php echo $dataganjil['isi_konten'] ?>
      </p>
       <?php
        }
        ?>
        <?php
        while ($datagenap = $query_rungenap->fetch_assoc()) {
        ?>
      <button type="button" class="btn btn-dark">Explore</button> 
      <div class="image"></div>
      <br>
      <br><br>
      <br>
      <h1 class="text-start" id="#visi"><b><?php echo $datagenap['judul_konten'] ?></b>
        
      </h1>
    <p class="text-start"><?php echo $datagenap['isi_konten'] ?></p>
     <?php
        }
        ?>
    </div>
    </div>