<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
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
    <link rel="stylesheet" href="assets/css/signin.css"> 

    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
 <!-- Header Area wrapper Starts -->
    <header id="header-wrap">

      <!-- Nav Menu Section Start -->
      <div class="navigation-menu">
        <nav class="navbar navbar-default navbar-event" role="navigation" data-spy="affix" data-offset-top="1" id="topnavbar">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header col-md-2">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand logo-bright" href="index.php"><img src="assets/img/logo-bright.png" alt=""></a>
              <a class="navbar-brand logo-dark" href="index.php"><img src="assets/img/logo-dark.png" alt=""></a>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar">
              <ul class="nav navbar-nav navbar-right">
              <li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php">Home</a></li>  
                <li class="<?= ($activePage == 'start') ? 'active':''; ?>"><a href="start.php">Start</a></li>
                <li class="<?= ($activePage == 'about') ? 'active':''; ?>"><a href="about.php">About</a></li>
                <?php  if (isset($_COOKIE["username"])){ 
                        $firstname = substr($_COOKIE["username"], 0, strpos($_COOKIE["username"], ' '));
                      ?> 
                        <li class='user_name'><a href='#'><?php echo "Hi ".$firstname ?></a></li>
                        <li class="logout-btn"><a class="cd-signout" href="#"">Log Out<i class="fa fa-lg fa-sign-out" aria-hidden="true"></i></a></li>
                <?php 
                  }
                else { ?>
                <li class="login-btn"><a class="cd-signin" href="#"">Sign in<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                <?php } ?>
              </ul>
            </div><!-- /navbar-collapse -->
          </div><!-- /container -->

          <!-- Mobile Menu Start -->
          <ul class="wpb-mobile-menu">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="start.php">Start</a></li>
              <li><a href="about.php">About</a></li>  
           </ul>
          <!-- Mobile Menu End -->

        </nav>
      </div>
      <!-- Nav Menu Section End -->

    </header>
    <!-- Header Area wrapper End -->


  <div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
    <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
      <ul class="cd-switcher">
        <li><a href="#0">Sign in</a></li>
        <li><a href="#0">New account</a></li>
      </ul>

      <div id="cd-login"> <!-- log in form -->
        <form class="cd-form" id="log_in_form">
          <p class="fieldset">
            <label class="image-replace cd-email" for="signin-email">E-mail</label>
            <input class="full-width has-padding has-border" data-validation="email" id="signin-email" type="email" placeholder="E-mail">
            <!-- <span class="cd-error-message">Error message here!</span> -->
          </p>

          <p class="fieldset">
            <label class="image-replace cd-password" for="signin-password">Password</label>
            <input class="full-width has-padding has-border" id="signin-password" data-validation = "required" type="password" placeholder="Password">
            <!-- <a href="#0" class="hide-password">Hide</a>
            <span class="cd-error-message">Error message here!</span> -->
          </p>

          <p class="fieldset">
            <input type="checkbox" id="remember-me" checked>
            <label for="remember-me">Remember me</label>
          </p>

          <p class="fieldset">
            <input class="full-width" type="submit" value="Login">
          </p>
        </form>
        
        <p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
        <!-- <a href="#0" class="cd-close-form">Close</a> -->
      </div> <!-- cd-login -->

      <div id="cd-signup"> <!-- sign up form -->
        <form class="cd-form" id="sign_up_form">
          <p class="fieldset">
            <label class="image-replace cd-username" for="signup-username">Full Name</label>
            <input class="full-width has-padding has-border" data-validation = "required" id="signup-username" type="text" placeholder="Full Name">
            <!-- <span class="cd-error-message">Error message here!</span> -->
          </p>

          <p class="fieldset">
            <label class="image-replace cd-email" for="signup-email">E-mail</label>
            <input class="full-width has-padding has-border" id="signup-email" type="email" data-validation="email" placeholder="E-mail">
            <!-- <span class="cd-error-message">Error message here!</span> -->
          </p>

          <p class="fieldset">
            <label class="image-replace cd-password" for="signup-password">Password</label>
            <input class="full-width has-padding has-border" id="signup-password" type="password" data-validation="length required" data-validation-length="min8" placeholder="Password">
            <!-- <a href="#0" class="hide-password">Hide</a>
            <span class="cd-error-message">Error message here!</span> -->
          </p>

          <p class="fieldset">
            <input type="checkbox" id="accept-terms" data-validation="required">
            <label for="accept-terms">By signing up you agree to the <a href="#0">Terms and Conditions</a></label>
          </p>

          <p class="fieldset">
            <input class="full-width has-padding" type="submit" value="Create account">
          </p>
        </form>

        <!-- <a href="#0" class="cd-close-form">Close</a> -->
      </div> <!-- cd-signup -->

      <div id="cd-reset-password"> <!-- reset password form -->
        <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

        <form class="cd-form" id="reset_password_form">
          <p class="fieldset">
            <label class="image-replace cd-email" for="reset-email">E-mail</label>
            <input class="full-width has-padding has-border" id="reset-email" data-validation = "email" type="email" placeholder="E-mail">
            <!-- <span class="cd-error-message">Error message here!</span> -->
          </p>

          <p class="fieldset">
            <input class="full-width has-padding" type="submit" value="Reset password">
          </p>
        </form>

        <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
      </div> <!-- cd-reset-password -->
      <a href="#0" class="cd-close-form">Close</a>
    </div> <!-- cd-user-modal-container -->
  </div> <!-- cd-user-modal -->

