<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta charset="utf-8">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="vender/css/all.css">
</head>
<body >
    <?php
        if($_SESSION["userid"] === ""){
          echo $_SESSION['userid'];
          echo "login";
          header("Location: index.php ");
        }
      ?>
  




      <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="#header"><span>TRUE CALLER</span></a></h1>
        
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          
          <li><a href="#services">Services</a></li>
         
          
         
          <li><button class="btn  logout-btn" onclick="location.href='user-logout.php'">Logout</button></li>
        </ul>
        
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  
  <main id="main">

  

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <br>
          <h3>Services</h3>
          
        </header>

        <div class="row">

          
            <div class="box">
              <button class="btn btn-block action-btn p-3" onclick="location.href='add-contact.php'">
                    <i class="far fa-plus-square pr-3"></i> Add Local contact
                </button>
          </div>
        
          
            <div class="box">
             <button class="btn btn-block action-btn p-3" onclick="location.href='add-spam.php'">
                    <i class="fas fa-plus-square pr-3"></i> Add spam
                </button>
          </div>
       

          
            <div class="box">
             <button class="btn btn-block action-btn p-3" onclick="location.href='view_address.php'">
                <i class="fas fa-book pr-3"></i> View Addresss
              </button>

          
        </div>
          
            <div class="box">
            
              <button class="btn btn-block action-btn p-3" onclick="location.href='address.php'">
                <i class="fas fa-plus-square pr-3"></i> Add address detail
              </button>
            </div>
        

          

            <div class="box">
              <button class="btn btn-block action-btn p-3" onclick="location.href='search.php'">
                <i class="fas fa-search pr-3"></i> Search emergency contact Based on Location
              </button>
            </div>
            <div class="box">
              <button class="btn btn-block action-btn p-3" onclick="location.href='search-contact.php'">
                    <i class="fas fa-search pr-3"></i> Search unknown Number
                </button>
            </div>
            <div class="box">
              <button class="btn btn-block action-btn p-3" onclick="location.href='view_main.php'">
                    <i class="far fa-plus-square pr-3"></i> View Contact Database
                </button>
          </div>
        </div>
        
         
         


        </div>

      </div>

    </section><!-- #services -->

   
 
    <!--==========================
      Contact Section
    ============================-->
    

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Rajkamal</strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
      
</body>
</html>




