<?php require_once "config.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    <link rel="stylesheet" href="css/stylenav.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet animated-->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrapabout.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/styleabout.css" rel="stylesheet">
    

    <!-- Search-->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    
</head>

<body>
    <!-- Spinner Start-->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->
    
    <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-2 mb-0 ">

        <div class="col-12 col-md-3 mb-2 mb-md-0 text-center text-md-start">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img src="img/logo.png" alt="Description of the image" width="60" height="68">
            </a>
        </div>
  
        <div class="col-12 col-md-6 mb-2 mb-md-0 text-center">
          <h1>FC GALAHITIYAWA UNITED</h1>
          
        </div>
  
        <div class="col-12 col-md-3 text-center text-md-end">
          <p style="margin-top:1px; margin-bottom:1px;">We united because of football</p>
        </div>

      </header>
    </div>
    
    <nav>
      <div class="navbar">
        <i class='bx bx-menu'></i>
        
        <div class="nav-links">
          <div class="sidebar-logo">
            <span class="logo-name">FCGU</span>
            <i class='bx bx-x' ></i>
          </div>
          <ul class="links">
            <li><a href="#">HOME</a></li>
            <li><a href="players.html">PLAYERS</a></li>
            <li><a href="#">JERSEY</a></li>
            <li><a href="#">REVIEW</a></li>
            <li><a href="#">FOUNDATION</a></li>
            <li>
              <a href="#">EVENTS</a>
              <i class='bx bxs-chevron-down htmlcss-arrow arrow'></i>
              <ul class="htmlCss-sub-menu sub-menu">
                <li><a href="#">Matches</a></li>
                <li><a href="#">Practice sessions</a></li>
                <li><a href="#">Coaching camp</a></li>
                <li><a href="#">Tours</a></li>
              </ul>
            </li>
            <li><a href="#">NEWS</a></li>
            <li><a href="#">MANAGEMENT</a></li>
            <li><a href="#">LOGIN</a></li>
          </ul>
        </div>
        <div class="search-box">
            <i class='bx bx-search'></i>
            <div class="input-box">
              <input type="text" placeholder="Search...">
            </div>
      </div>
    </nav>

    <div class="container">

      <?php
        $sql = "SELECT * FROM player";
        $result = $database->query($sql) or die($database->error);
      ?>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4" style="margin-top: 20px;">
        <?php if ($result->num_rows > 0) { ?>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="col mb-4">
                    <div class="card h-100"> <!-- Removed fixed width and height, use h-100 for equal height -->
                        <img src="<?= $row['image'] ?>" class="card-img-top" alt="..." style="width: 100%; height: 350px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['role'] ?></h5>
                            <p class="card-text"><?= $row['fname'] ?> <?= $row['lname'] ?></p>
                            <p class="card-text"><a href="<?= $row['fb_link'] ?>">Facebook</a></p>
                            <p class="card-text"><a href="<?= $row['inst_link'] ?>">Instagram</a></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <h4 class="text-center">No records are available!</h4>
        <?php } ?>
      </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Get in touch</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">Players</a>
                    <a class="btn btn-link" href="">Jersey</a>
                    <a class="btn btn-link" href="">Fans</a>
                    <a class="btn btn-link" href="">Foundation</a>
                    <a class="btn btn-link" href="">Events</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">News</a>
                    <a class="btn btn-link" href="">Login</a>
                    <a class="btn btn-link" href="">Management</a>
                    <a class="btn btn-link" href="">Business Loans</a>
        
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Sponsers</h4>
                    <a class="btn btn-link" href=""></a>
                    <a class="btn btn-link" href=""></a>
                    <a class="btn btn-link" href=""></a>
                    <a class="btn btn-link" href=""></a>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-white border-0 w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="script.js"></script>
</body>

</html>
