<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact - Mentor Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php include('links.php'); ?>
</head>

<body>

  <?php include('header.php'); ?>

  <main id="main">
    <?php 

    foreach($results9090 as $result9090):


    ?>
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" >
      <div class="container">
        <h2><?php echo $result9090['heading'];?></h2>
        <p><?php echo $result9090['paragraph'];?></p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4><?php echo $result9090['location_name'];?></h4>
                <p><?php echo $result9090['address'];?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4><?php echo $result9090['email_id'];?></h4>
                <p>email</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4><?php echo $result9090['phone'];?></h4>
                <p><?php echo $result9090['phone_number'];?></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="<?= base_url('Email_controller\send_mail'); ?>" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">

                <div class="loading">Loading</div>
                <div class="error-message">       <?php 
         echo $this->session->flashdata('email_sent'); 
         echo form_open('/Email_controller/send_mail'); 
      ?></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
<?php endforeach; ?>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<?php include('footer.php'); ?>

</body>

</html>