<?php include ('header.php');?>

    <!-- Page Header Start -->
    <div class="page-header">      
      <div class="container"> 
        <div class="page-header-inner">         
          <ol class="breadcrumb wow fadeInDown" data-wow-delay="300ms">
            <li><a href="index.php">Home</a></li>
            <li class="page">Start</li>
          </ol>
          <h1 class="page-title wow fadeInRight" data-wow-delay="300ms">
           Workspace
          </h1>
        </div>
      </div>
    </div>
    <!-- Page Header End-->
  <body>

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

  <?php include ('footer.php');?>
  
