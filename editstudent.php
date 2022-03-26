<?php
require_once 'passlogin.php';
include_once 'dbh.inc.php'; 
$cne = $_GET['update'];  
$req="SELECT * from students where cne='".addslashes($cne)."' ";
$eleves=mysqli_query($connect,$req) or die (mysqli_error($connect));
$et=mysqli_fetch_assoc($eleves);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">
  <meta content="" name="keywords">

   <!-- Favicons -->
   <link href="logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="style.css" rel="stylesheet">
 <style>
     td{
         padding: 1.5%;
        
     }
     input{
         border-style: groove;
         border-color: whitesmoke;
         border: blue;

     }

 </style> 
</head>

<body style="background-color:#E3F2FD" >

  <!-- ======= Header ======= -->
  <header style="background-color: rgb(159, 201, 253);" id="header" class="d-flex align-items-center header-inner-pages">
    <div class="container-fluid d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0" style="font-family: 'Arial Narrow', Arial, sans-serif; color: antiquewhite;">Centre Etudiant</h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="bienvenue.php" >Home</a></li>
          <li><a class="nav-link scrollto" href="students.php">Students</a></li>
          <li><a class="nav-link scrollto" href="services.php">Services</a></li>
          <li class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="info.php">Your Info</a></li>
              <li><a href="logout.php">Log out</a></li>
            </ul>
          </li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="https://www.facebook.com/ensatanger" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/ensatanger/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/company/ensatanger/?originalSubdomain=ma" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->
  <main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="students.php" style="color: black;">Students</a></li>
      <li><a style="color: coral;">Edit Student</a></li>
    </ol>
  </div>
</section><!-- End Breadcrumbs -->
</main><!-- End #main -->
<center>
  <div style="margin-top: 2%;padding:3%;width:500px;background-color:rgb(66, 170, 751); border-bottom-left-radius: 155px;border-top-right-radius:155px ; ">
      <table >
        <form action="updatestudent.php" method="POST" enctype="multipart/form-data">
          <tr>
              <td><h5>CNE</h5></td>
              <td><input type="text" name="CNE" value="<?php echo $et['cne'] ?>"></td>
          </tr>
          <tr>
              <td><h5>First Name</h5></td>
              <td><input type="text" name="fname" value="<?php echo $et['prenom'] ?>" ></td>
          </tr>
          <tr>
              <td><h5>Last Name</h5></td>
              <td><input type="text" name="lname" value="<?php echo $et['nom'] ?>"></td>
          </tr>
          <tr>
              <td><h5>Adress</h5></td>
              <td><input type="text" name="adres" value="<?php echo $et['adresse'] ?>"></td>
          </tr>
          <tr>
              <td><h5>City</h5></td>
              <td><input type="text" name="city" value="<?php echo $et['ville'] ?>" ></td>
          </tr>
          <tr>
              <td><h5>Email</h5></td>
              <td><input type="text" name="email" value="<?php echo $et['email'] ?>"></td>
          </tr>
          <tr>
                <td><b>Photo</b></td>
                <td><input type="file" name="photo" accept=".jpg,.jpeg,.png,.gif" ></td>
            </tr> 
         
          
          <tr>
              <td colspan="2"><center><input style="background-color: cornflowerblue;border-radius:15px; width:120px" type="submit" name="update" value="Update" required></center></td>
          </tr>
          <tr>    
              <td colspan="2" ><center><input style="background-color: cornflowerblue;border-radius:15px; width:120px" type="reset" name="reset" value="Reset" required></center></td>
          </tr>
          <tr>
              <td colspan="2"><center><a href="students.php"><input style="background-color: cornflowerblue;border-radius:15px; width:120px" type="button" name="cancel" value="Cancel" required></center></a></td>
          </tr>
        </form>
      </table>
  </div></center>


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
 

</body>
</html>