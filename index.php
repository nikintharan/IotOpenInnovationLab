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
          </div>
        
          <!--
          <div class='col-md-6 wow fadeInRight stream text-center' data-wow-delay='0.2s'>
            <button class='btn btn-common stream-btn'>
              <i class='icon-social-youtube'></i> We're Live
            </button>
          </div>
          -->
        </div>
      </div>
    
  </section>
  <!-- Coundown Section End -->
</body>

<?php include ('footer.php');?>
