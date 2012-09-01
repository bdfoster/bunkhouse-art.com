<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Art by Janet Foster · Bunkhouse-Art.com</title>
    <meta name="viewport" content="width=device-width, initial scale=1.0">

    <!-- Stylesheets/CSS -->
    <link href="<?php echo $this->make_route('/css/bootstrap.min.css'); ?>" rel="stylesheet" type="css"/>
    <link href="<?php echo $this->make_route('/css/master.css'); ?>" rel="stylesheet" type="css"/>
    <link href="<?php echo $this->make_route('/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet" type="css"/>

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>
  <body>
    
    <!-- Header -->
    <div class="container">
      <?php include(ROOT . '/views/header.php'); ?>
    </div>
    
    <!-- Content -->
    <div class="container">
      <!-- Alerts -->
      <?php echo $this->display_alert('error'); ?>
      <?php echo $this->display_alert('success'); ?>
        <?php include($this->content); ?>
    </div>
    
    <!-- Footer -->
    <div class="container">
      <?php include(ROOT . '/views/footer.php'); ?>
    </div>
    
    <!-- Scripts -->
    <script type="text/javascript" src="<?php echo $this->make_route('/js/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo $this->make_route('/js/bootstrap-transition.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo $this->make_route('/js/bootstrap-alert.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo $this->make_route('/js/bootstrap-modal.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo $this->make_route('/js/bootstrap-carousel.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo $this->make_route('/js/bootstrap-button.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo $this->make_route('/js/bootstrap-affix.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo $this->make_route('/js/bootstrap-typeahead.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo $this->make_route('/js/bootstrap-tooltip.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo $this->make_route('/js/bootstrap-tab.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo $this->make_route('/js/bootstrap-collapse.js'); ?>"></script>
    
  </body>

</html>
