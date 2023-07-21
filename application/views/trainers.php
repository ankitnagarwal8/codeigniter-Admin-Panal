<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Trainers - Mentor Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php  include('links.php');  ?>
</head>

<body>


  <?php include('header.php'); ?>
<?php 
foreach($results as $result):

?>

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2><?php echo $result['heading']; ?></h2>
        <p><?php echo $result['paragraph']; ?></p>
      </div>
    </div><!-- End Breadcrumbs -->
<?php endforeach; ?>
    <!-- ======= Trainers Section ======= -->
    
    <section id="trainers" class="trainers" style="display:flex;">
      <?php
          foreach($results2 as $result2):
    ?>
      <div class="container" data-aos="fade-up" style="display: flex;">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?= base_url('../photos/'.$result2['photo']) ?>" class="img-fluid">
              <div class="member-content">
                <h4><?php echo $result2['name']; ?></h4>
                <span><?php echo $result2['post']; ?></span>
                <p>
                  contact number : <?php echo $result2['mobile_number']; ?>
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>    

      </div>
       <?php endforeach; ?>
    </section>
   
    <!-- End Trainers Section -->

  </main><!-- End #main -->

 <?php include('footer.php'); ?>

</body>

</html>