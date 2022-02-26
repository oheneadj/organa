<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Head goes here -->
  <?php require './includes/head.php' ?>

  <title>Create Organisations | Organa</title>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php require './includes/header.php' ?>
  <!-- End Header -->

  <!-- Sidebar -->
  <?php require './includes/sidebar.php' ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Organization</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item">Organization</li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">


      <div class="col-lg-8 mx-auto">

      <div class="card">
          <div class="card-body">
              <h5 class="card-title">Organization Details</h5>

              <!-- Vertical Form -->
              <form class="row g-3">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Name of Organisation</label>
                  <input type="text" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Address</label>
                  <input type="text" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Phone Number</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-6">
                  <label for="inputAddress" class="form-label">Logo</label>
                  <input type="file" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-6 mt-3">
                
                  <img src="#" class="img-responsive" alt="Organization Logo preview">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <a href="./all_org.php" class="btn btn-danger">Cancel</a>
                </div>
              </form><!-- Vertical Form -->

            </div>
        </div>

</div>
      </div>
    </section>

  </main><!-- End #main -->

 <!-- Footer -->
 <?php require './includes/footer.php'?>

<!-- Back-to-Top -->
<?php require './components/backtotop.php'?>  

<!-- Script goes here -->
<?php require './includes/scripts.php'?>

</body>

</html>