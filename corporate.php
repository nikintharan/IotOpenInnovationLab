<?php include ('header.php');?>

    <!-- Page Header Start -->
    <div class="corporate">
      <div class="container"> 
        <div class='col-md-12 col-sm-12 col-xs-12'>
          <div class="text register-red-button corporate-register-padding text-center">
            
            <a onclick="trackClick('corporateSurvey');" href='javascript:;' data-toggle="modal" data-target="#survey" class='btn red-btn btn-common btn-lrg' alt="LinkedIn">
              <h2>Register with</h2>                
              <img src='assets/img/LinkedIn-2.png'>
            </a>  
          </div>
        </div>
        <div class="page-header-inner">         
          <h1 class="page-title wow fadeInRight" data-wow-delay="300ms">
            Corporate
          </h1>
        </div>
      </div>
    </div>
    <!-- Page Header End-->    

    <!-- Get Involved Section Start -->
    <section id="featured" class="section gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            
            
            <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">What we have to offer</h2>
              <div class="col-md-4 col-sm-6">
                <div class="featured-box wow fadeInLeft" data-wow-delay="0.1s">
                  <div class="icon">
                    <i class="icon-badge"></i>
                  </div>
                  <div class="featured-content">
                    <h4>Crowdsourcing</h4>
                    <p>Looking for innovators to help you solve your current and future IoT problems? The Open Innovation Lab can help you
                    find creative solutions by running competitions centered around the issues your business faces.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="featured-box wow fadeInLeft" data-wow-delay="0.3s">
                  <div class="icon">
                    <i class="icon-people"></i>
                  </div>
                  <div class="featured-content">
                    <h4>Hire</h4>
                    <p>Looking for candidates with a background in IoT? By partnering with the Open Innovation Lab you can get access to students
                    with a passion and interest in the field.</p>
                  </div>
                  <button type="button" class="btn btn-small btn-hire" data-toggle="modal" data-target="#meetAbhinav" onclick="trackClick('meetAbhinav');">
                   Learn More
                  </button>
                </div>
              </div>              
              <div class="col-md-4 col-sm-6">
                <div class="featured-box wow fadeInLeft" data-wow-delay="0.2s">
                  <div class="icon">
                    <i class="icon-notebook"></i>
                  </div>
                  <div class="featured-content">
                    <h4>Judge</h4>
                    <p>We are looking for industry representatives to join our group of evaluators to help us decide
                    which student projects will move on to the next stages. As an evaluator you will interact 
                    with top IoT talent and guide students as they create innovative, world changing ideas.</p>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Get Involved Section End -->
    
    
    
    <!-- Coming Soon Section Start -->
    <section id="featured" class="section crowd-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title2 wow fadeInUp" data-wow-delay="0s">The Open Innovation Platform</h2>
          </div>   
          <div class="col-md-6 col-sm-6">
            <div class="featured-box2 wow fadeInLeft" data-wow-delay="0.1s">
              <div class="featured-content corp-tagline">
                <h4><i class='icon-check'></i>Learn how to maximize innovation <br>in collaborative settings</h4>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="featured-box2 wow fadeInLeft" data-wow-delay="0.2s">
              <div class="featured-content corp-tagline">
                <h4><i class='icon-check'></i>Interact with the next generation <br>of IoT talent</h4>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class='col-md-1'></div>
            <div class='col-md-10'>
              <div class="featured-box2 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="featured-content about-iot-corporate">
                  <p>The IoT Open Innovation Labs collaborative platform is a revolutionary 
                  tool enabling deep insight into how collaboration affects innovation. Our custom solutions allow us
                  guide interdiscplinary users through a complex development cycle, 
                  thereby enabling us to engage a whole university. Our unique analytics tools are 
                  allowing us to establish a strong understanding of the ideal conditions for 
                  successful collaboration and innovation in team environments.</p>
                </div>
              </div>
            </div
          </div>
        </div>
      </div>
    </section>
    <!-- Coming Next Section End -->
  
    

     <!-- Sponsors Section Start -->
    <section id="sponsors" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title wow fadeInUp" data-wow-delay="0s">Our Sponsors</h2>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="spnsors-logo wow fadeInUp" data-wow-delay="0.2s">
                        <a href="http://www.ge.com/"><img src="assets/img/sponsors/ge.png" alt="">
                        <p>General Electric</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="spnsors-logo wow fadeInUp" data-wow-delay="0.3s">
                        <a href="http://www.northeastern.edu/entrepreneurship/"><img class="img-circle" src="assets/img/sponsors/nucee.jpg" alt="">
                        <p>NUCEE</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="spnsors-logo wow fadeInUp" data-wow-delay="0.4s">
                        <a id="sponsorClick" onclick="trackClick('corporateSurvey');" href='javascript:;' data-toggle="modal" data-target="#survey"><img src="assets/img/sponsors/plus.png" alt="">
                        <p>Possibly You</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sponsors Section End --> 

  <?php include ('footer.php');?>
