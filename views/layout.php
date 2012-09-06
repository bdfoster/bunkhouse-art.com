<!DOCTYPE html>
<html lang="en">
  <head>
    <?php Bootstrap::set_charset('utf-8'); ?>
    <?php Bootstrap::set_title('Art by Janet Foster · Bunkhouse-Art.com'); ?>
    <?php Bootstrap::make_meta('viewport', 'width=device-width, initial-scale=1.0'); ?>
    <?php Bootstrap::make_meta('description'); ?>
    <?php Bootstrap::make_meta('author'); ?>


    <!-- Stylesheets/CSS -->
    <?php Bootstrap::add_css($this->make_route('/css/bootstrap.min.css')); ?>
    <?php Bootstrap::add_css($this->make_route('/css/master.css')); ?>
    <?php Bootstrap::add_css($this->make_route('/css/bootstrap-responsive.min.css')); ?>

    <!--[if lt IE 9]>
      <?php Bootstrap::add_script('http://html5shim.googlecode.com/svn/trunk/html5.js') ?>
    <![endif]-->

  </head>
  <body>
    
    <!-- Header -->
    <div class="container-fluid">
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container-fluid">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="nav-collapse collapse">
              <ul class="nav pull-left">
                <?php Bootstrap::make_navbar_button($this->make_route('/'), 'Home'); ?>
              </ul>
              <ul class="nav pull-right">
                <?php 
                if (User::is_authenticated()) {
                  Bootstrap::make_navbar_button($this->make_route('/logout'), 'Logout');
                } else {
                  Bootstrap::make_navbar_button($this->make_route('/login'), 'Login'); 
                } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="page-header">
        <h1><small>Art by </small>Janet Foster</h1>
      </div>
    </div>
    
    <!-- Content -->
    <div class="container-fluid">
      <!-- Alerts -->
      <?php echo $this->display_alert('error'); ?>
      <?php echo $this->display_alert('success'); ?>
      <?php include($this->content); ?>
    </div>
    
    <!-- Footer -->
    <div class="container-fluid">
      <hr>
      <div class="footer">
        <div class="container-fluid pagination-centered">
          <p>&copy; 2012 Janet Foster. All rights reserved.</p>
        </div>
      </div>
    </div>
    
    <!-- Scripts -->
    <?php Bootstrap::add_script($this->make_route('/js/jquery.js'), 'text/javascript'); ?>
    <?php Bootstrap::add_script($this->make_route('/js/bootstrap-transition.js'), 'text/javascript'); ?>
    <?php Bootstrap::add_script($this->make_route('/js/bootstrap-alert.js'), 'text/javascript'); ?>
    <?php Bootstrap::add_script($this->make_route('/js/bootstrap-modal.js'), 'text/javascript'); ?>
    <?php Bootstrap::add_script($this->make_route('/js/bootstrap-carousel.js'), 'text/javascript'); ?>
    <?php Bootstrap::add_script($this->make_route('/js/bootstrap-button.js'), 'text/javascript'); ?>
    <?php Bootstrap::add_script($this->make_route('/js/bootstrap-affix.js'), 'text/javascript'); ?>
    <?php Bootstrap::add_script($this->make_route('/js/bootstrap-typeahead.js'), 'text/javascript'); ?>
    <?php Bootstrap::add_script($this->make_route('/js/bootstrap-tooltip.js'), 'text/javascript'); ?>
    <?php Bootstrap::add_script($this->make_route('/js/bootstrap-tab.js'), 'text/javascript'); ?>
    <?php Bootstrap::add_script($this->make_route('/js/bootstrap-collapse.js'), 'text/javascript'); ?>
    <?php Bootstrap::add_script($this->make_route('/js/master.js'), 'text/javascript'); ?>
    
  </body>

</html>
