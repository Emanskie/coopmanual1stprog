<?php include('assets/header.php') ?>

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>This is just a <span>Placeholder</span></h2>
              <p>Wala pami kabalo unsay ibutang diri.</p>
              <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>So is this...</h2>
              <p>Siguro para nis news module?</p>
              <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>And this...</h2>
              <p>Sir Haron is my idol.</p>
              <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Take our <span>pre-assesment test</span> now!</h3>
            <p> and figure out what you need.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">take the test</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-bank"></i></div>
              <h4 class="title"><a href="servicephp/savings.php">Savings</a>
              </h4>
              <p class="description">Secure your financial future with our savings services.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-cash-coin"></i></div>
              <h4 class="title"><a href="servicephp/cashandloans.php">Cash and Loans</a></h4>
              <p class="description">Reach you goals faster with our cash and loan services.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-houses"></i></div>
              <h4 class="title"><a href="servicephp/alliedbusinesses.php">Allied Businesses</a></h4>
              <p class="description">Meet the people who share the same vision with us.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-person-fill-check"></i></div>
              <h4 class="title"><a href="servicephp/member.php">Member Benefits</a></h4>
              <p class="description">Join us for exclusive benefits!</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div id="ComingSoonBox" class="icon-box" data-aos="fade-up" data-aos-delay="200">

              <h4 class="title"><a href="">COMING SOON</a></h4>
              <p class="description">More services will be made available soon...</p>
            </div>
          </div>
        </div>
    </section><!-- End Services Section -->



  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <?php include('assets/footer.php') ?>