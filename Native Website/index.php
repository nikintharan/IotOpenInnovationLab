<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>IoT Open Innovation Lab</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >    
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome.min.css">
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/simple-line-icons.css"> 
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css" > 
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">   
    
    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="assets/css/colors/default.css" media="screen" /> 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php include ('header.php');?>

    <!-- Main Slider Section Start -->
    <div id="carousel-area">
      
      <!--<video width="100%" height ="70%" autoplay> 
        <source src='assets/video/frontpage.mp4'>
      </video> -->
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        
        <!--Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            
            <!--<img src="assets/img/slider/bg-1.jpg" alt="">-->
            <video autoplay loop> 
              <source src='assets/video/frontpage.mp4'>
            </video>
            
            <div class="carousel-caption">
              <h2 class="wow fadeInRight" data-wow-delay="300ms">Ideation Contest<br> Join us be The First to Book Your Ticket</h2>
              <div class="buttons wow fadeInDown" data-wow-delay="0.2s"><a class="btn btn-lg btn-border" href="#">Registration</a></div>
              <a data-scroll href="#featured">
              <div class="rev-scroll-btn wow fadeInUp" data-wow-delay="600ms">
                <span></span>
              </div>
              </a>
            </div>
          </div>
          <!--<div class="item">
            <img src="assets/img/slider/bg-2.jpg" alt="">
            <div class="carousel-caption">
              <h2 class="wow fadeInUp" data-wow-delay="300ms">Opportunity to showcase<br> your product and services to attendees</h2>
              <div class="buttons">
              <a class="btn btn-lg btn-common wow fadeInLeft" data-wow-delay="300ms" href="#">Buy Tickets</a>
              <a class="btn btn-lg btn-border wow fadeInRight" data-wow-delay="300ms" href="#">Know More</a>
              </div>                
              <a data-scroll href="#featured">
              <div class="rev-scroll-btn wow fadeInUp" data-wow-delay="600ms">
                <span></span>
              </div>
              </a>
            </div>
          </div>
          <div class="item">
            <img src="assets/img/slider/bg-3.jpg" alt="">
            <div class="carousel-caption">
              <h2 class="wow fadeInDown" data-wow-delay="300ms">Expert and Love to Speak? <br> Apply as Speaker for Taking Session</h2>
              <div class="wow fadeInUp" data-wow-delay="300ms"><a class="btn btn-lg btn-common" href="#">Apply Now</a></div>
              <a data-scroll href="#featured">
              <div class="rev-scroll-btn wow fadeInUp" data-wow-delay="600ms">
                <span></span>
              </div>
              </a>
            </div>
          </div> -->
        </div> 
         <!--Controls -->
        <!--<a class="left carousel-control" href="#carousel-slider" role="button" data-slide="prev">
          <span class="icon-arrow-left" aria-hidden="true"></span>
        </a>
        <a class="right carousel-control" href="#carousel-slider" role="button" data-slide="next">
          <span class="icon-arrow-right" aria-hidden="true"></span>
        </a> -->
      </div> 
    </div>
    <!-- Main Slider Section End -->

    <!-- Coundown Section Start -->
    <section class="countdown-timer section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.2s">
            <div class="text">
              <h2>Ideation <br>Contest Launch</h2>
              <h4>Northeastern University, Boston, MA <br> Jan 25, 2018 - Jan 28, 2018 </h4>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.2s">
            <div class="time-countdown">
              <div id="clock" class="time-count"></div>
            </div> 
          </div>
        </div>
      </div>
    </section>
    <!-- Coundown Section End -->

    <!-- Welocme Event Start -->
    <section id="event" class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="tab-block wow fadeInDown" data-wow-delay="0s">
              <div class="icon">
                <i class="icon-location-pin"></i>
              </div>
              <div class="desc">
                <h4>Location</h4>
                <p>Northeastern University, Boston Campus</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="tab-block wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon">
                <i class="icon-calendar"></i>
              </div>
              <div class="desc">
                <h4>Date & Time</h4>
                <p>1PM - 11PM, 25- 28 Jan</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="tab-block wow fadeInDown" data-wow-delay="0.4s">
              <div class="icon">
                <i class="icon-microphone"></i>
              </div>
              <div class="desc">
                <h4>Speakers</h4>
                <p>Amazing industry speakers</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="tab-block last-block wow fadeInDown" data-wow-delay="0.6s">
              <div class="icon">
                <i class="icon-people"></i>
              </div>
              <div class="desc left">
                <h4>Teams</h4>
                <p>Teams of 4 people</p>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="content-text">
              <h3 class="wow fadeInUp" data-wow-delay="0.8s">Pioneer the Internet of Things</h3>
              <p class="wow fadeInUp" data-wow-delay="1s">Students will enter the contest, be assigned into teams, and collaborate to develop new and
              game changing ideas using the Internet of Things. Everyone will get prizes, and the top teams will receive collectively 
              <strong>$30,000 in prize money</strong>, as well as the opportunity to pursue the idea further!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Welocme Event End -->

    <!-- Featured Section Start -->
    <section id="featured" class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title wow fadeInUp" data-wow-delay="0s">Empowering your success</h2>
              <p class="section-subcontent wow fadeInUp" data-wow-delay="0.2s">Our mission is to empower all Northeastern University students with all of the resources
              they need to develop world changing projects. You will be supported in every way possible as we guide you through the steps of success. </p>
              <div class="col-md-4 col-sm-6">
                <div class="featured-box wow fadeInLeft" data-wow-delay="0.1s">
                  <div class="icon">
                    <i class="icon-energy"></i>
                  </div>
                  <div class="featured-content">
                    <h4>Make a difference</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.  Aenean commodo ligula eget dolor.  Aenean massa.  Cum sociis natoque </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="featured-box wow fadeInLeft" data-wow-delay="0.2s">
                  <div class="icon">
                    <i class="icon-arrow-right"></i>
                  </div>
                  <div class="featured-content">
                    <h4>World Class Prizes</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.  Aenean commodo ligula eget dolor.  Aenean massa.  Cum sociis natoque </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="featured-box wow fadeInLeft" data-wow-delay="0.3s">
                  <div class="icon">
                    <i class="icon-graph"></i>
                  </div>
                  <div class="featured-content">
                    <h4>Industry Connections</h4>
                      <p> ipsum dolor sit amet, consectetuer adipiscing elit.  Aenean commodo ligula eget dolor.  Aenean massa.  Cum sociis natoque </p>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Featured Section End -->
    <?php include ('footer.html');?>



    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    <i class="icon-arrow-up"></i>
    </a>

     

    <!-- jQuery Load -->    
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Countdown Js -->
    <script src="assets/js/jquery.countdown.min.js"></script>
    <!-- Smooth scroll JS -->   
    <script src="assets/js/smooth-scroll.js"></script>        
    <!-- Wow Scroll -->
    <script src="assets/js/wow.js"></script>
    <!-- Owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Slicknav js -->
    <script src="assets/js/jquery.slicknav.js"></script>
    <!--  Nivo lightbox Js -->
    <script src="assets/js/nivo-lightbox.js"></script>   
    <!-- Contact Form Scripts -->
    <script src="assets/js/form-validator.min.js"></script>  
    <script src="assets/js/contact-form-script.js"></script>    
 
    <!-- All Js plugin -->
    <script src="assets/js/main.js"></script> 
    <!-- Map JS -->
    <script type="text/javascript" src="assets/js/jquery.mapit.min.js"></script>
    <script src="assets/js/initializers.js"></script>

  </body>
</html>