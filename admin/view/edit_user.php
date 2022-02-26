<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Head goes here -->
  <?php require './includes/head.php' ?>

  <title>Edit User | Organa</title>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php require './includes/header.php' ?>
  <!-- End Header -->



  <main class="mt-5 pt-5"  >

    <div class="pagetitle col-lg-8 mx-auto mt-5">
      <h1>Edit Organization</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item">Organization</li>
          <li class="breadcrumb-item active">Create</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="row">
    <div class="col-lg-6 mx-auto">

      <div class="card">
          <div class="card-body">
              <h5 class="card-title">User Details</h5>

              <!-- Vertical Form -->
              <form class="row g-3">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Name</label>
                  <input type="text" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Date of Birth</label>
                  <input type="date" class="form-control" id="inputEmail4">
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
                  <label for="inputAddress" class="form-label">Image <span class="small text-info">(use a passport-sized image that clearly shows your face)</span></label>
                  <input type="file" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-6 mt-3">
                
                  <img src="#" class="img-responsive" alt="Image preview">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Register</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
        </div>
      </div>
</div>

  </main><!-- End #main -->

 <!-- Footer -->
 <?php require './includes/footer.php'?>

<!-- Back-to-Top -->
<?php require './components/backtotop.php'?>  

<!-- Script goes here -->
<?php require './includes/scripts.php'?>

</body>

</html>