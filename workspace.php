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
  
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">  
    
	<script type="text/javascript" src="http://code.angularjs.org/1.2.25/angular.min.js"></script>
    <script type="text/javascript" src="https://s3.amazonaws.com/iotworkspace/js/modules/promise-tracker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.17.0/codemirror.js"></script>
    <script src="https://cdn.firebase.com/libs/firepad/1.4.0/firepad.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/3.6.10/firebase.js"></script>

    <script type="text/javascript" src="https://s3.amazonaws.com/iotworkspace/js/app.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.17.0/codemirror.css">
    <link rel="stylesheet" href="https://cdn.firebase.com/libs/firepad/1.4.0/firepad.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    
    <style>
      .powered-by-firepad {
          visibility: hidden;
      }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <?php include ('header.php');?>

    <!-- Page Header Start -->
    <div class="page-header">      
      <div class="container"> 
        <div class="page-header-inner">         
          <ol class="breadcrumb wow fadeInDown" data-wow-delay="300ms">
            <li><a href="index.html">Home</a></li>
            <li class="page">Start</li>
          </ol>
          <h1 class="page-title wow fadeInRight" data-wow-delay="300ms">
           Workspace
          </h1>
        </div>
      </div>
    </div>
    <!-- Page Header End-->
  <body  onload="init()">

      <!-- Start Content -->
      <section id="content" class="section" >
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <!-- Start Single Post Area -->
                    <div class="blog-post single-gallery">
                        <!-- Post feature-inner -->
                        <div class="feature-inner">
                            <a class="lightbox" href="assets/img/blog/bloglarge-1.jpg"><img src="assets/img/blog/bloglarge-1.jpg" alt=""></a>
                        </div>
                        <!-- End Post feature-inner -->
                        <!-- Post format icon -->
                        <div class="post-format">
                            <span>
                                <a href="#"><i class="icon-picture"></i></a>
                            </span>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <h1 class="post-title" align="center">Ideation Contest Form</h1>
                                <div class="meta">
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem facilis possimus quo cum delectus itaque! Soluta id a laudantium error omnis totam suscipit doloremque quam nostrum provident minus consectetur, debitis! Itaque ipsam consequuntur minus aut iusto, in earum dolores adipisci quis rerum, cum animi voluptate provident deserunt assumenda sequi pariatur molestias commodi.</p>
                               
                                <script>
                                    function init() {
                                        firebase.initializeApp({
                                            apiKey: 'AIzaSyAT-MtTOD0YQ0sn5Zve_kQ-MODPGAd0KGY',
                                            databaseURL: 'https://iot-open-innovation-lab.firebaseio.com'
                                        });
                                        var firepadRef_1 = firebase.database().ref('/workspace_form_data/1' + '/answer_1/');
                                        var firepadRef_2 = firebase.database().ref('/workspace_form_data/2' + '/answer_2/');
                                        var firepadRef_3 = firebase.database().ref('/workspace_form_data/3' + '/answer_3/');
                                        var firepadRef_4 = firebase.database().ref('/workspace_form_data/4' + '/answer_4/');
                                        var firepadRef_5 = firebase.database().ref('/workspace_form_data/5' + '/answer_5/');
                                        var firepadRef_6 = firebase.database().ref('/workspace_form_data/6' + '/answer_6/');
                                        var firepadRef_7 = firebase.database().ref('/workspace_form_data/7' + '/answer_7/');
                                        var firepadRef_8 = firebase.database().ref('/workspace_form_data/8' + '/answer_8/');
                                        var firepadRef_9 = firebase.database().ref('/workspace_form_data/9' + '/answer_9/');
                                        var firepadRef_10 = firebase.database().ref('/workspace_form_data/10' + '/answer_10/');
                                        var firepadRef_11 = firebase.database().ref('/workspace_form_data/11' + '/answer_11/');
                                        var firepadRef_12 = firebase.database().ref('/workspace_form_data/12' + '/answer_12/');
                                        var firepadRef_13 = firebase.database().ref('/workspace_form_data/13' + '/answer_13/');
                                        var firepadRef_14 = firebase.database().ref('/workspace_form_data/14' + '/answer_14/');
                                        var codeMirror_1 = CodeMirror(document.getElementById('answer_1'), { lineWrapping: true });
                                        var codeMirror_2 = CodeMirror(document.getElementById('answer_2'), { lineWrapping: true });
                                        var codeMirror_3 = CodeMirror(document.getElementById('answer_3'), { lineWrapping: true });
                                        var codeMirror_4 = CodeMirror(document.getElementById('answer_4'), { lineWrapping: true });
                                        var codeMirror_5 = CodeMirror(document.getElementById('answer_5'), { lineWrapping: true });
                                        var codeMirror_6 = CodeMirror(document.getElementById('answer_6'), { lineWrapping: true });
                                        var codeMirror_7 = CodeMirror(document.getElementById('answer_7'), { lineWrapping: true });
                                        var codeMirror_8 = CodeMirror(document.getElementById('answer_8'), { lineWrapping: true });
                                        var codeMirror_9 = CodeMirror(document.getElementById('answer_9'), { lineWrapping: true });
                                        var codeMirror_10 = CodeMirror(document.getElementById('answer_10'), { lineWrapping: true });
                                        var codeMirror_11 = CodeMirror(document.getElementById('answer_11'), { lineWrapping: true });
                                        var codeMirror_12 = CodeMirror(document.getElementById('answer_12'), { lineWrapping: true });
                                        var codeMirror_13 = CodeMirror(document.getElementById('answer_13'), { lineWrapping: true });
                                        var codeMirror_14 = CodeMirror(document.getElementById('answer_14'), { lineWrapping: true });
                                        var answer_1 = Firepad.fromCodeMirror(firepadRef_1, codeMirror_1, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
                                        var answer_2 = Firepad.fromCodeMirror(firepadRef_2, codeMirror_2, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
                                        var answer_3 = Firepad.fromCodeMirror(firepadRef_3, codeMirror_3, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
                                        var answer_4 = Firepad.fromCodeMirror(firepadRef_4, codeMirror_4, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
                                        var answer_5 = Firepad.fromCodeMirror(firepadRef_5, codeMirror_5, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
                                        var answer_6 = Firepad.fromCodeMirror(firepadRef_6, codeMirror_6, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
                                        var answer_7 = Firepad.fromCodeMirror(firepadRef_7, codeMirror_7, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
                                        var answer_8 = Firepad.fromCodeMirror(firepadRef_8, codeMirror_8, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
                                        var answer_9 = Firepad.fromCodeMirror(firepadRef_9, codeMirror_9, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
                                        var answer_10 = Firepad.fromCodeMirror(firepadRef_10, codeMirror_10, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
                                        var answer_11 = Firepad.fromCodeMirror(firepadRef_11, codeMirror_11, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
                                        var answer_12 = Firepad.fromCodeMirror(firepadRef_12, codeMirror_12, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
                                        var answer_13 = Firepad.fromCodeMirror(firepadRef_13, codeMirror_13, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
                                        var answer_14 = Firepad.fromCodeMirror(firepadRef_14, codeMirror_14, { richTextShortcuts: false, richTextToolbar: false, defaultText: 'Answer' });
                                    }
                                </script>
                                <div data-ng-controller="help">
                                    <form name="helpForm" novalidate="" role="form">

                                        <div class="meta"></div>
                                        <div class="form-group">
                                            <div class="use-case" style="border-radius:0px;">
                                                <h1 class="post-title">Use Case</h1>


                                                <p for="name">1. Who is your user?</p>
                                                <div style="height: 150px;" id="answer_1"></div>

                                                <div class="meta"></div>

                                                <p for="name">2. Provide a narrative of the user’s problem</p>
                                                <div style="height: 150px;" id="answer_2"></div>

                                                <div class="meta"></div>

                                                <p for="name">3. How is it currently solved?</p>
                                                <div style="height: 150px;" id="answer_3"></div>

                                                <div class="meta"></div>

                                                <p for="name">4. What key attributes of the existing solution are you trying to improve?</p>
                                                <div style="height: 150px;" id="answer_4"></div>

                                                <div class="meta"></div>

                                                <p for="name">5. Explain how your solution ranks in relation to the existing solution, in each key attribute?</p>
                                                <div style="height: 150px;" id="answer_5"></div>

                                                <div class="meta"></div>
                                            </div>
                                         <h1 class="post-title">Technology Architecture</h1>
                                                <p>
                                                    <label for="name">Layer 1 (Physical) </label> <br />                                           
                                                   The physical entity e.g. heater, humidifier, e-bike, Baby Camera <br />
                                                   Q. What simple everyday object does it look similar to? 
                                                <div style="height: 150px;" id="answer_6"></div>
                                                </p>
                                            <div class="meta"></div>

                                            <p>
                                                <label for="name">Layer 2 (Sensors and Actuators) </label> <br />
                                                In this layer, the physical entity has sensors, and actuating elements. For a baby camera, an example of the sensors are the optical sensor and motion sensor <br />
                                                Q. Which sensors and actuators do you need?
                                                <div style="height: 150px;" id="answer_7"></div>
                                            </p>
                                            <div class="meta"></div>
                                            
                                            <p>
                                                <label for="name">Layer 3 (Control Layer) </label> <br />
                                                IIn this layer, the sensors and actuators are connected to a microcontroller. E.g: Raspberry Pi, Arduino, Beaglebone Black <br />
                                                Q. Which microcontroller do you need?
                                                <div style="height: 150px;" id="answer_8"></div>
                                            </p>
                                            <div class="meta"></div>

                                            <p>
                                                <label for="name">Layer 4 (Network Connectivity) </label> <br />
                                                The microcontroller needs to transmit data over the network. E.g: here a baby camera transmits images and video through WiFi <br />
                                                Q. How is the microcontroller sending data? (E.g WiFi, ZigBee, Bluetooth)
                                                <div style="height: 150px;" id="answer_9"></div>
                                            </p>
                                            <div class="meta"></div>

                                            <p>
                                                <label for="name">Layer 5 (Data) </label> <br />
                                                The data needs to be collected, analyzed and presented to the user. E.g: The user receives the images and videos from the baby camera on a mobile device <br />
                                                Q. What happens to the transmitted data?
                                                <div style="height: 150px;" id="answer_10"></div>
                                            </p>
                                            <div class="meta"></div>

                                            <h1 class="post-title">Business Case Design</h1>
                                                <p for="name">6. Given the benefits you're providing, how much would your user be willing to pay? (Refer to 5.)</p>
                                                <div style="height: 150px;" id="answer_11"></div>
                                            <div class="meta"></div>

                                                <p for="name">7. Given the benefits you're providing and the price, what is the market potential in terms of # of users, and why?</p>
                                                <div style="height: 150px;" id="answer_12"></div>
                                            <div class="meta"></div>

                                                <p for="name">8. How do you think this product should be launched in the market?</p>
                                                <div style="height: 150px;" id="answer_13"></div>
                                            <div class="meta"></div>

                                                <p for="name">9. Why do you think users won’t buy your product?</p>
                                                <div style="height: 150px;" id="answer_14"></div>
                                            <div class="meta"></div>

</div>
                                        <button data-ng-disabled="progress.active()" data-ng-click="submit(helpForm)" type="submit" id="submit" class="btn btn-common">Submit </button>

                                    </form>
                                </div>
      </div>
    </div>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
<script src="js/webflow.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
                </div>
<!-- Post Content -->
              </div>
<!-- End Single Post Area -->
            </div>
          </div>
        </div>
      </section>
      <!-- End content -->

  <?php include ('footer.html');?>
  

    <!-- Go to Top Link -->
    <a href="#header-wrap" class="back-to-top">
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
