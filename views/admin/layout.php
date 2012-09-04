<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Administration Panel · Bunkhouse-Art.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Stylesheets/CSS -->
    <link href="<?php echo $this->make_route('/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $this->make_route('/css/master.css'); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $this->make_route('/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet" type="text/css"/>

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>
  <body>
    
    <!-- Header -->
    <div class="container-fluid">
      <?php include(ROOT . '/views/admin/header.php'); ?>
    </div>
    
    <!-- Body -->
    <div class="container-fluid">
      <!-- Alerts -->
      <?php echo $this->display_alert('error'); ?>
      <?php echo $this->display_alert('success'); ?>
      <!-- Content -->
      <?php include($this->content); ?>
    </div>
    
    <!-- Footer -->
    <div class="container-fluid">
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
    <script type="text/javascript" src="<?php echo $this->make_route('/js/master.js'); ?>"></script>
  </body>

</html>
