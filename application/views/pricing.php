

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pricing - Mentor Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
<?php include('links.php'); ?>
</head>

<body>

  <?php include('header.php');  ?>
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <?php
    foreach($res as $res2):
    ?>
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2><?php echo $res2['heading']; ?></h2>
        <p><?php echo $res2['paragraph']; ?></p>
      </div>
    </div>
<?php endforeach; ?>
    <!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="row">

<?php  

foreach($ressult990 as $ressult99):
?>



          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h3><?php echo $ressult99['user']; ?></h3>
              <h4><sup>$</sup><?php echo $ressult99['pricing']; ?><span> / month</span></h4>
              <ul>
                <li><?php echo $ressult99['s_frist']; ?></li>
                <li><?php echo $ressult99['s_second']; ?></li>
                <li><?php echo $ressult99['s_third']; ?></li>
                <li><?php echo $ressult99['s_forth']; ?></li>
                <li><?php echo $ressult99['s_fifth']; ?></li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy now</a>
              </div>
            </div>
          </div>

<?php  endforeach; ?>

        </div>

      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <?php include('footer.php');  ?>


</body>

</html>