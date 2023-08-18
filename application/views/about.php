<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About - Mentor Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php include("links.php"); ?>
</head>

<body>
<?php include('header.php'); ?>
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
      <?php 

foreach ($results as $result):

 ?>
    <div class="breadcrumbs" >
      <div class="container">
        <h2><?php echo $result['text']; ?></h2>
        <p><?php echo $result['text_box']; ?></p>
      </div>
    </div>
    <?php endforeach; ?>
    <!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <?php 

foreach ($results2 as $result2):

 ?>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" >
            <img src="<?= base_url("../photos/".$result2['image']) ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3><?php echo $result2['heading']; ?></h3>
            <p class="fst-italic">
              <?php echo $result2['paragraph_frist']; ?>
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <?php echo $result2['list_frist']; ?></li>
              <li><i class="bi bi-check-circle"></i><?php echo $result2['list_second']; ?></li>
              <li><i class="bi bi-check-circle"></i><?php echo $result2['list_third']; ?></li>
            </ul>
            <p>
              <?php echo $result2['paragraph_second']; ?>
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->
<?php endforeach; ?>
    <!-- End About Section -->
 <?php 

foreach ($results3 as $result3):

 ?>
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title">
          <h2><?php echo $result3['heading_forth']; ?></h2>
          <p><?php echo $result3['heading_frist']; ?></p>
        </div>

        <div class="testimonials-slider swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3><?php echo $result3['name']; ?></h3>
                  <h4><?php echo $result3['post']; ?></h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <?php echo $result3['saying']; ?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->
<?php include('footer.php'); ?>

</body>

</html>