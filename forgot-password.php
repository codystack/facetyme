<?php
include "./components/header.php";
?>

  <section class="bg-black overflow-hidden">
    <div class="py-15 py-xl-20 d-flex flex-column container level-3 min-vh-100">
      <div class="row align-items-center justify-content-center my-auto">
        <div class="col-md-10 col-lg-8 col-xl-5">

          <div class="card">
            <div class="card-header bg-white text-center pb-0">
              <h5 class="fs-4 mb-1">Reset Password</h5>
              <p class="small text-secondary">Please enter the email address associated with your account, and we'll
                send you a
                recovery link.</p>
            </div>
            <div class="card-body bg-white">
              <form action="#">
                <div class="form-floating mb-2">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <div class="d-grid mb-2">
                  <a href="" class="btn btn-lg btn-black">Submit</a>
                </div>
              </form>
            </div>
            <div class="card-footer bg-opaque-white inverted text-center">
              <p class="text-muted">
                <a href="login" class="underline">Sign In</a> or
                <a href="signup" class="underline">Register</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <figure class="background background-overlay" style="background-image: url('assets/images/fpasswordbg.jpg')"></figure>
  </section>


  <!-- javascript -->
  <script src="assets/js/vendor.bundle.js"></script>
  <script src="assets/js/index.bundle.js"></script></body>

</html>