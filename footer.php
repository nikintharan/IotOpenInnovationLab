

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
    <i class="icon-arrow-up"></i>
    </a>


     

    <!-- jQuery Load -->    
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script> 
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/i18n/defaults-*.min.js"></script>
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