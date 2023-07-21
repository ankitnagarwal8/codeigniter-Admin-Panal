<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Courses - Mentor Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php include('links.php'); ?>
</head>

<body>
<?php include('header.php'); ?>
  <main id="main" data-aos="fade-in">
<?php
foreach($results23 as $result23):
?>
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2><?php echo $result23['heading']; ?></h2>
        <p><?php echo $result23['paragraph']; ?></p>
      </div>
    </div>

<?php endforeach; ?>
    <!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <?php 
              foreach($results24 as $result24):
           ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="<?= base_url('../photos/'.$result24['photo']);?>" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><?php echo $result24['coursename'];?></h4>
                  <p class="price"><?php echo $result24['courseprice'];?></p>
                </div>

                <h3><a href="course-details.html"><?php echo $result24['coursepart'];?></a></h3>
                <p><?php echo $result24['text_area'];?></p>
                <!-- <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="" class="img-fluid" alt="">
                    <span>Antonio</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        <?php endforeach; ?>
          <!-- End Course Item-->
        </div>

      </div>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->

<?php include('footer.php');  ?>

</body>

</html>