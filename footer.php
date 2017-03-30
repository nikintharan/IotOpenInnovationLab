

    <!-- Terms of Service Modal -->
    <div class="modal fade" id="termsofservice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title" id="myModalLabel">Terms of Service</h4>
          </div>
          <div class="modal-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla bibendum eu turpis 
            quis fermentum. Phasellus sapien dolor, iaculis ac hendrerit a, tristique at est. Ut 
            tempus venenatis lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus 
            ligula nibh, tempor a erat sed, malesuada eleifend risus. Morbi lacus magna, aliquam ac eros 
            congue, finibus aliquet metus. In hac habitasse platea dictumst. Nunc fringilla nisi pretium, 
            aliquam justo a, fermentum purus. Fusce aliquet nisi turpis, a aliquet turpis finibus quis. 
            Mauris condimentum metus sed risus ultrices, a suscipit dui lacinia. 
            Pellentesque non tincidunt tellus, vitae suscipit diam. Morbi 
            porta lacus magna, a euismod ante ultrices at</p>
          </div>
        </div>
      </div>
    </div>
    <!-- End of TOS -->
    
    
    <!-- Privacy Policy -->
    <div class="modal fade" id="privacypolicy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title" id="myModalLabel">Privacy Policy</h4>
          </div>
          <div class="modal-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla bibendum eu turpis 
            quis fermentum. Phasellus sapien dolor, iaculis ac hendrerit a, tristique at est. Ut 
            tempus venenatis lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus 
            ligula nibh, tempor a erat sed, malesuada eleifend risus. Morbi lacus magna, aliquam ac eros 
            congue, finibus aliquet metus. In hac habitasse platea dictumst. Nunc fringilla nisi pretium, 
            aliquam justo a, fermentum purus. Fusce aliquet nisi turpis, a aliquet turpis finibus quis. 
            Mauris condimentum metus sed risus ultrices, a suscipit dui lacinia. 
            Pellentesque non tincidunt tellus, vitae suscipit diam. Morbi 
            porta lacus magna, a euismod ante ultrices at<p>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Privacy Policy -->
    

    <!-- Copytight Start -->
    <section id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&nbsp;</p>
                    <p style="color: white;">©&nbsp;2017 IoT Open Innovation Lab</p>
                    <p style="color: white;">Boston, MA </p>
                    <p style="color: white;"><a style='color:white;' data-toggle='modal' data-target='#privacypolicy'>Privacy Policy</a>
                    &nbsp;·&nbsp;<a style='color:white;' data-toggle='modal' data-target='#termsofservice'>Terms of Service</a></p>
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Copytight End -->

        <!-- Go to Top Link -->
    <a href="#header-wrap" class="back-to-top">
    <i class='icon-arrow-up'></i>
    </a>


     

    <!-- jQuery Load -->    
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/interact.js/1.2.6/interact.min.js"></script>    <!-- Page Header Start -->
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script> 
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Countdown Js -->
    <!-- Smooth scroll JS -->   
    <script src="assets/js/smooth-scroll.js"></script>        
    <!-- Wow Scroll -->
    <script src="assets/js/wow.js"></script>
    <!-- Signin Load -->
    <script src="assets/js/signin.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script> 
    <script src="https://www.gstatic.com/firebasejs/3.6.10/firebase.js"></script>

  <?php
  
  function curPageURL() {
   $pageURL = 'http';
   if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
   $pageURL .= "://";
   if ($_SERVER["SERVER_PORT"] != "80") {
    $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
   } else {
    $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
   }
   return $pageURL;
  }
  
  // If cookie_value == 1 then this is treatment, otherwise this is control
  $cookie_name = "treatOrControl";
  if (curPageURL() == "iotopeninnovation.org/?eng=1" or curPageURL() == "www.iotopeninnovation.org/?eng=1") {
    $cookie_value = "1";
  } else if (curPageURL() == "iotopeninnovation.org/?eng=0" or curPageURL() == "www.iotopeninnovation.org/?eng=0") {
    $cookie_value = "0";
  }
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
  ?>


    <?php if($activePage == 'corporate')
    { ?>
    <script src='assets/js/windowcheck.js'></script>    

    <div class="modal fade" id="meetAbhinav" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title text-center" id="myModalLabel">Hiring at the IoT Open Innovation Lab</h4>
          </div>
          <div class="modal-body">
            <div class='text-center'>
              <h4>"The best time to plant a tree was 20 years ago, <br>the second best time is now"</h4>
              <br>
              <p>The Internet of Things has disrupted traditional markets, adding new ways 
              to create value and growth within organizations. We can help you hire the best talent to allow you to 
              make the most out of these new opportunities.<br><br>
              Partnering with the IoT Open Innovation Lab lets you tap into the next generation of innovators.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Survey Modal -->
    <div class="modal fade" id="survey" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="width:790px;">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title" id="myModalLabel">Please Sign In</h4>
          </div>
          <div class="modal-body">
            <div id="corpLogin">
            <div class='text-center'>
              <h2> Register with</h2>
              <a href='javascript:;' onclick="liLoginCorporate();trackClick('linkedinLogin');"><img src='assets/img/LinkedIn-2.png' style='background-color: rgba(51,51,51,.75)!important' class='btn btn-common btn-lrg'></a>
            </div>
            </div>
            <iframe style="display: none;" id="corpSurvey" src="https://docs.google.com/forms/d/e/1FAIpQLSeWrTdZfc77NYNyCsNF29ztcTVuZt9mm0u72xHTpQ1h4ZpIrg/viewform?embedded=true" width="760" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>


    <?php if($activePage == 'index')
    { ?>
    <script src="assets/js/index.js"></script>
    

    <?php } ?>

     <?php if($activePage != 'index')
    { ?>


    <!-- Owl carousel -->

    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Slicknav js -->
    <script src="assets/js/jquery.slicknav.js"></script>
    <!--  Nivo lightbox Js -->
    <script src="assets/js/nivo-lightbox.js"></script>   
         <script src="assets/js/main.js"></script> 
    <?php } 

    if($activePage == 'workspace')
    { ?>
    
    <script type="text/javascript" src="http://code.angularjs.org/1.2.25/angular.min.js"></script>
    <script type="text/javascript" src="https://s3.amazonaws.com/iotworkspace/js/modules/promise-tracker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.17.0/codemirror.js"></script>
    <script type="text/javascript" src="https://s3.amazonaws.com/iotworkspace/js/app.js"></script>
    <script src="https://cdn.firebase.com/libs/firepad/1.4.0/firepad.min.js"></script>
    <script type="text/javascript" src="https://s3.amazonaws.com/iotworkspace/js/app.js"></script>
    <script src="assets/js/workspace.js"></script> 


    <?php } ?> 
  </body>
</html>