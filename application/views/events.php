<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Events - Mentor Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php include('links.php'); ?>
</head>

<body>

  <?php include("header.php"); ?>

<?php
foreach($events_details as $events_detail):

?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2><?php echo $events_detail['heading']; ?></h2>
        <p><?php echo $events_detail['paragraph']; ?></p>
      </div>
    </div><!-- End Breadcrumbs -->
<?php endforeach; ?>
    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container">

        <div class="row">
          <?php
            foreach($details2 as $detail2):

          ?>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="<?= base_url('../photos/'.$detail2['image']);?>" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href=""><?php echo $detail2['heading'];?></a></h5>
                <p class="fst-italic text-center"><?php echo $detail2['timing_details'] ?></p>
                <p class="card-text"><?php echo $detail2['details'];?></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

      </div>
    </section><!-- End Events Section -->

  </main><!-- End #main -->

 <?php include('footer.php'); ?>

</body>

</html>