<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>IoT Open Innovation Lab</title>
    <?php include_once("analyticstracking.php") ?>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >    
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">


    <link href="assets/css/styles.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/signin.css"> 
    
    <?php if($activePage != 'index')
    { ?>
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/simple-line-icons.css"> 
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css" > 
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:700" rel="stylesheet">
    <?php } 
    
    if($activePage == 'workspace')
    {
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.17.0/codemirror.css">
    <link rel="stylesheet" href="https://cdn.firebase.com/libs/firepad/1.4.0/firepad.css">
  
    <?php } ?>

    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Linkedin Signin initialize -->
    <script type="text/javascript" src="//platform.linkedin.com/in.js">
        api_key: 77lpqeh3bb98vi
        authorize: true
        onLoad: onLinkedInLoad
    </script>
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
                <div>
                <li id="linkedinLogout" class="logout-btn"><a class="cd-signout" href="javascript:;" onclick="closeSession()">Log Out<i class="fa fa-lg fa-sign-out" aria-hidden="true"></i></a></li>
                </div>
              </ul>
            </div><!-- /naƒvbar-collapse -->
          </div><!-- /container -->

          <!-- Mobile Menu Start -->
          <ul class="wpb-mobile-menu">
          </ul>
          <!-- Mobile Menu End -->

        </nav>
      </div>
      <!-- Nav Menu Section End -->

    </header>
    <!-- Header Area wrapper End -->
