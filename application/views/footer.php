  <footer id="footer">
    <?php foreach($results9090 as $result9090): ?>
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Mentor</h3>
            <p>
              <?php echo $result9090['address']; ?><br><br>
              <strong> <?php echo $result9090['phone']; ?></strong> <?php echo $result9090['phone_number']; ?> <br>
              <strong> <?php echo $result9090['email_id']; ?></strong>  <?php echo $result9090['email']; ?><br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('Landing_home');?>">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('Landing_home/about');?>">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4> <?php echo $result9090['title']; ?></h4>
            <p> <?php echo $result9090['title_paragraph']; ?></p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>
<?php endforeach; ?>
    
  </footer><!-- End Footer -->