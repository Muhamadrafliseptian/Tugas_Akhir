<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "user_level");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas Akhir</title>
  <link rel="stylesheet" href="juara.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="icon" href="saloh.jpg">
</head>

<body>
  <div class="slider">
    <?php
    $no = 0;
    $query = $connection->query("SELECT * FROM karya");
    while ($row = $query->fetch_array()) {
    ?>
      <div class="slide 
      <?php if ($no == 0) {
        echo "active";
      } else {
        echo 'notactive';
      }

      ?>">
        <img src="images/<?php echo $row['nama']; ?>" alt="">
        <div class="info">
          <h2>Foto Karya Perlombaan</h2>
          <p></p>
        </div>
      </div>
    <?php
    }
    ?>
    <div class="navigation">
      <i class="fas fa-chevron-left prev-btn"></i>
      <i class="fas fa-chevron-right next-btn"></i>
    </div>
  </div>


  <script type="text/javascript">
    const slider = document.querySelector(".slider");
    const nextBtn = document.querySelector(".next-btn");
    const prevBtn = document.querySelector(".prev-btn");
    const slides = document.querySelectorAll(".slide");
    const slideIcons = document.querySelectorAll(".slide-icon");
    const numberOfSlides = slides.length;
    var slideNumber = 0;

    //image slider next button
    nextBtn.addEventListener("click", () => {
      slides.forEach((slide) => {
        slide.classList.remove("active");
      });
      slideIcons.forEach((slideIcon) => {
        slideIcon.classList.remove("active");
      });

      slideNumber++;

      if (slideNumber > (numberOfSlides - 1)) {
        slideNumber = 0;
      }

      slides[slideNumber].classList.add("active");
      slideIcons[slideNumber].classList.add("active");
    });

    //image slider previous button
    prevBtn.addEventListener("click", () => {
      slides.forEach((slide) => {
        slide.classList.remove("active");
      });
      slideIcons.forEach((slideIcon) => {
        slideIcon.classList.remove("active");
      });

      slideNumber--;

      if (slideNumber < 0) {
        slideNumber = numberOfSlides - 1;
      }

      slides[slideNumber].classList.add("active");
      slideIcons[slideNumber].classList.add("active");
    });

    //image slider autoplay
    var playSlider;

    var repeater = () => {
      playSlider = setInterval(function() {
        slides.forEach((slide) => {
          slide.classList.remove("active");
        });
        slideIcons.forEach((slideIcon) => {
          slideIcon.classList.remove("active");
        });

        slideNumber++;

        if (slideNumber > (numberOfSlides - 1)) {
          slideNumber = 0;
        }

        slides[slideNumber].classList.add("active");
        slideIcons[slideNumber].classList.add("active");
      }, 4000);
    }
    repeater();

    //stop the image slider autoplay on mouseover
    slider.addEventListener("mouseover", () => {
      clearInterval(playSlider);
    });

    //start the image slider autoplay again on mouseout
    slider.addEventListener("mouseout", () => {
      repeater();
    });
  </script>
</body>

</html>