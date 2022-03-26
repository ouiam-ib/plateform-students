<?php
require_once 'passlogin.php';
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
 
 
</head>

<body >

  <!-- ======= Header ======= -->
  <header style="background-color: rgb(159, 201, 253);" id="header" class="d-flex align-items-center header-inner-pages">
    <div class="container-fluid d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0" style="font-family: 'Arial Narrow', Arial, sans-serif; color: antiquewhite;">Centre Etudiant</h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="bienvenue.php" >Home</a></li>
          <li><a class="nav-link scrollto" style="color: coral;">Students</a></li>
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
      <li><a style="color: coral;">Students</a></li>
    </ol>
    <center><a href="add.php"><input style="color:darkblue;background-color:deepskyblue;border-radius: 60%; width:150px;height:50px" type="button" name="add" value="Add Student"></a></center>
    <h2>Students List</h2>

  </div>
</section><!-- End Breadcrumbs -->
</main><!-- End #main -->

<div>
<table class="table table-primary table-striped" >
<thead>
  <tr>
  <th scope="col"> CNE</th>
  <th scope="col"> First Name</th>
  <th scope="col"> Last Name</th>
  <th scope="col"> Adress</th>
  <th scope="col"> City</th>
  <th scope="col"> Email</th>
  <th scope="col"> Photo</th>
  <th scope="col"> </th>
  </tr>
</thead>
<tbody>
<?php
include 'dbh.inc.php';
$sql="SELECT * from students";
$eleves=mysqli_query($connect, $sql);


  foreach ($eleves as $eleve) :?>
		<tr>
		<td><?= $eleve["cne"]; ?></td>
		<td><?= $eleve["prenom"]; ?></td>
		<td><?= $eleve["nom"]; ?></td>
        <td><?= $eleve["adresse"]; ?></td>
        <td><?= $eleve["ville"]; ?></td>
        <td><?= $eleve["email"]; ?></td>
        <td><img src=<?php echo $eleve["photo"]; ?> width="150px" /></td>
        <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example" >
        <button type="button" class="btn btn-warning"><a href="editstudent.php?update=<?php echo $eleve['cne'] ?>" style="color: aliceblue;">Edit</a></button>
        <button type="button" class="btn btn-danger"><a style="color: aliceblue;" href="delete.php?delete=<?php echo $eleve['cne'] ?>">Delete</a></button>
        </div>
        </td>
    </tr>   
	<?php endforeach ?>
    
  
</tbody>
</table>
</div>



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