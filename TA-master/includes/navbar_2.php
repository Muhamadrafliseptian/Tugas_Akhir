
	<?php 
	session_start();
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
<html>
<head>
	<title>Tugas Akhir</title>

	  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    
	<nav class="navbar navbar-expand-lg mb-5 navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img
            src="./images/logo_full.png"
            alt=""
            width="33"
            height="33"
            class="d-inline-block align-text-top"
          />
       Gadget Grapher
        </a>

        <ul class="navbar-nav">
              <li class="nav-item">
                  <a href="aft_log.php" class="nav-link me-2">Home</a>
          </li>
           <li class="nav-item">
            <a class="nav-link me-2  aria-current="page" href="berita.php"
              >Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2  aria-current="page" href="form.php"
              >Upload</a>
          </li>

          <li class="nav-item">
                    <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDarkDropdown"
          aria-controls="navbarNavDarkDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDarkDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Pengumuman
              </a>
              
              <ul
                class="dropdown-menu dropdown-menu-dark"
                aria-labelledby="navbarDarkDropdownMenuLink"
              >
                <li><a class="dropdown-item" href="nilai_user.php">Nilai</a></li>
                <li><a class="dropdown-item" href="juara.php">Foto Karya Peserta</a></li>
                <li><a class="dropdown-item" href="#">Sertifikat</a>
                </li>
              </ul>
            </li>
          </ul>
          
        </div>
              
          </li>
        </ul>
  
            
         <form class="d-flex">
 <a href="logout.php" class="btn btn-outline-secondary me-2 " >Logout</a>
 
  <a href="signup.html" class="btn btn-primary " <?php echo $_SESSION['level']; ?>
 ><?php echo $_SESSION['username']; ?> </a>
      </form>
      
      </div>
      
    </nav>