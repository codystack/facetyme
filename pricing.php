<?php
include "./components/header.php";
include "./components/navbar-dark.php";
?>

  <!-- pricing -->
  <section class="py-15 py-xl-20">
    <div class="container mt-10">
      <div class="row justify-content-center mb-10">
        <div class="col-lg-8 text-center">
          <h1 class="mb-2">Our Pricing</h1>
          <p class="fs-lg text-secondary">Choose from our wild range of tailored price list.</p>
        </div>
      </div>
      <div class="row g-3 g-xl-5 align-items-end">
        <div class="col-lg-4">
            <div class="card border bg-dark inverted">
                <img src="./assets/images/pricing/PHOTO STUDIO.jpg" alt="PHOTO STUDIO">
            </div>
        </div>

        <div class="col-lg-4">
          <div class="card border bg-dark inverted">
              <img src="./assets/images/pricing/HEAD SHOOT .jpg" alt="HEAD SHOOT">
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card border bg-dark inverted">
              <img src="./assets/images/pricing/FASHION.jpg" alt="FASHION">
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card border bg-dark inverted">
              <img src="./assets/images/pricing/BIRTHDAY.jpg" alt="BIRTHDAY">
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card border bg-dark inverted">
              <img src="./assets/images/pricing/FAMILY .jpg" alt="FAMILY">
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card border bg-dark inverted">
              <img src="./assets/images/pricing/FAMILY  2.jpg" alt="FAMILY 2">
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card border bg-dark inverted">
              <img src="./assets/images/pricing/KIDDIES.jpg" alt="KIDDIES">
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card border bg-dark inverted">
              <img src="./assets/images/pricing/MATERNITY.jpg" alt="MATERNITY">
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card border bg-dark inverted">
              <img src="./assets/images/pricing/NEW BORN.jpg" alt="NEW BORN">
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card border bg-dark inverted">
              <img src="./assets/images/pricing/PRE WEDDING.jpg" alt="PHOTO STUDIO">
          </div>
        </div>
      </div>
    </div>
  </section>



  <?php include "./components/faq.php"; ?>

    <!-- cta -->
    <section class="py-15 py-xl-20 border-bottom">
    <div class="container">
        <div class="row g-4 g-xl-6">
        <div class="col-lg-6" data-aos="fade-up">
            <a href="contact" class="card h-100 border card-arrow">
            <div class="card-body">
                <h4 class="card-title fw-light fs-4"><span class="fw-bold">Let's connect.</span> Follow us on social
                media.</h4>
            </div>
            </a>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <a href="login" class="card card-arrow bg-primary inverted overflow-hidden">
            <div class="card-body">
                <h4 class="card-title fw-light fs-4">We'd love to <span class="fw-bold">shoot</span> and frame you.<br> Book a session</h4>
            </div>
            <img class="position-absolute top-50 start-50 translate-middle level-3" src="assets/images/svg/dialog.svg"
                alt="">
            </a>
        </div>
        </div>
    </div>
    </section>


  <?php include "./components/footer.php"; ?>