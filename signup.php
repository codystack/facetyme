<?php
include "./components/header.php";
require_once "./auth/account.php";
?>

  <section class="bg-black overflow-hidden">
    <div class="py-15 py-xl-20 d-flex flex-column container level-3 min-vh-100">
      <div class="row align-items-center justify-content-center my-auto">
        <div class="col-md-10 col-lg-8 col-xl-5">

          <div class="card">
            <div class="card-body bg-white">
              <h5 class="fs-4 text-center mb-0">Register</h5>
              <div class="text-muted text-center small py-2 mb-3">Gain access to your transactions and pictures</div>

                <?php
                if (isset($_SESSION['error_status'])) {
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <div class="alert-message text-center">
                            <?php echo $_SESSION['error_status']; ?>
                        </div>
                    </div>
                    <?php
                    unset($_SESSION['error_status']);
                }
                ?>

                <?php
                if (isset($_SESSION['success_status'])) {
                    ?>
                    <div class="alert alert-success" role="alert">
                        <div class="alert-message text-center">
                            <?php echo $_SESSION['success_status']; ?>
                        </div>
                    </div>
                    <?php
                    unset($_SESSION['success_status']);
                }
                ?>

              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="form-floating mb-2">
                  <input type="text" class="form-control" name="firstName" id="floatingInput" placeholder="Firt Name">
                  <label for="floatingInput">First Name</label>
                </div>
                <div class="form-floating mb-2">
                  <input type="text" class="form-control" name="lastName" id="floatingInput" placeholder="Last Name">
                  <label for="floatingInput">Last Name</label>
                </div>
                <div class="form-floating mb-2">
                  <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-2">
                  <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>
                <div class="d-grid mb-2">
                  <button type="submit" name="signup_btn" class="btn btn-lg btn-black">Create Account</button>
                </div>
              </form>
            </div>
            <div class="card-footer bg-opaque-black inverted text-center">
              <p class="text-secondary">Already have an account? <a href="login" class="underline">Sign In</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <figure class="background background-overlay" style="background-image: url('assets/images/signupbg.jpg')"></figure>
  </section>


  <!-- javascript -->
  <script src="assets/js/vendor.bundle.js"></script>
  <script src="assets/js/index.bundle.js"></script></body>

</html>