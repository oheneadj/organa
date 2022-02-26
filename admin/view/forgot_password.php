<!DOCTYPE html>
<html lang="en">

<head>
<!-- Head goes here -->
<?php require './includes/head.php' ?>

  <title>Pages / Forget Password - NiceAdmin Bootstrap Template</title>
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Organa</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Forgot your password?</h5>
                    <p class="text-center small">Enter your email and we will send you a link to reset your password.</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <input type="text" name="email" class="form-control" id="yourUsername" placeholder="Enter your email" required>
                        <div class="invalid-feedback">Please enter your email.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Reset Password</button>
                    </div>
                    
                    <div class="col-6">
                      <p class="small mb-0"><a href="register.php">Create an account</a></p>
                    </div>
                    <div class="col-6">
                      <p class="small mb-0 text-end"><a href="register.php">Login to your account</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits mt-2">
                  &copy; Copyright <strong><span>Organa</span></strong>. All Rights Reserved
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

 <!-- Script goes here -->
 <?php require './includes/scripts.php'?>

</body>

</html>