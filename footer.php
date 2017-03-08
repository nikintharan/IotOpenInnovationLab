    <!-- Copytight Start -->
    <section id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&nbsp;</p>
                    <p style="color: white;">©&nbsp;2017 IoT Open Innovation Lab</p>
                    <p style="color: white;">Boston, MA </p>
                    <p style="color: white;">Privacy Policy &nbsp;·&nbsp;Terms of Service</p>
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
    <!-- Countdown Js -->
    <!-- Smooth scroll JS -->   
    <script src="assets/js/smooth-scroll.js"></script>        
    <!-- Wow Scroll -->
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/signin.js"></script>


    <script src="https://www.gstatic.com/firebasejs/3.6.10/firebase.js"></script>

    <?php if($activePage == 'index')
    { ?>
    <script src="assets/js/index.js"></script>
    

    <?php } ?>

     <?php if($activePage != 'index')
    { ?>


    <!-- Owl carousel -->
    <script src="assets/js/jquery.countdown.min.js"></script>

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

    <script type="text/javascript" src="//platform.linkedin.com/in.js">
    api_key: 77lpqeh3bb98vi
    authorize: true
    onLoad: onLinkedInLoad
</script>

  </body>
</html>