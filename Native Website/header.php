<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

 <!-- Header Area wrapper Starts -->
    <header id="header-wrap">

      <!-- Nav Menu Section Start -->
      <div class="navigation-menu">
        <nav class="navbar navbar-default navbar-event" role="navigation" data-spy="affix" data-offset-top="0" id="topnavbar">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header col-md-2">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php"><img src="assets/img/logo1.png" alt=""></a>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar">
              <ul class="nav navbar-nav navbar-right">
                <li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php">Home</a></li>  
                <li class="<?= ($activePage == 'start') ? 'active':''; ?>"><a href="start.php">Start</a></li>
                <li class="<?= ($activePage == 'about') ? 'active':''; ?>"><a href="about.php">About</a></li>  
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