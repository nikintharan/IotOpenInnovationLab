<?php include ('header.php');?>


<body>
  
  <!-- Coundown Section Start -->
    <section class="countdown-timer landing-full section">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12 col-sm-6 col-xs-12 wow fadeInLeft animated animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
            <div class="text front-image-sec text-center">
              <img src="assets/img/iot-white-big.png" width="500px" height="auto">
            </div>
            <div class="landing-buttons">
              <a href="learnmore.php" class="btn btn-common" onclick="trackClick('learnMoreUserLanding');"> <h2>Learn More</h2></a>
              <a href="javascript:;" onclick="liLogin();trackClick('linkedinLoginUserLanding');" class="btn btn-common red-btn">
                <h2>Register with</h2><img src="assets/img/LinkedIn-2.png">
              </a>
            </div>
            <?php 
            if ($_COOKIE["treatOrControl"] == 0) {
              echo "T ==== 0";
              { ?>
              <h1>t=0</h1>
              <?php }
            } else if ($_COOKIE["treatOrControl"] == 1) {
              echo "t====1";
              { ?>
              <h1>t=1</h1>
              <?php }
            } else {
              echo "broken";
            }
            ?>
            
            
          </div>
        </div>
      </div>
    
  </section>
  <!-- Coundown Section End -->
</body>

<?php include ('footer.php');?>
