<!DOCTYPE html>
<html lang="en">
  <head> 
    <?php Bootstrap::set_charset('utf-8'); ?>
    <?php Bootstrap::set_title('Administration Home · Bunkhouse-Art.com'); ?>
    <?php Bootstrap::make_meta('viewport', 'width=device-width, initial-scale=1.0'); ?>
    <?php Bootstrap::make_meta('description'); ?>
    <?php Bootstrap::make_meta('author'); ?>

    <!-- Stylesheets/CSS -->
    <?php Bootstrap::add_css($this->make_route('/css/bootstrap.min.css')); ?>
    <?php Bootstrap::add_css($this->make_route('/css/master.css')); ?>
    <?php Bootstrap::add_css($this->make_route('/css/bootstrap-responsive.min.css')); ?>

    <!--[if lt IE 9]>
      <?php Bootstrap::add_script('http://html5shim.googlecode.com/svn/trunk/html5.js'); ?>
    <![endif]-->

  </head>
  <body>
    
    <!-- Header -->
    <div class="container-fluid">
      <div class="navbar navbar-fixed-top navbar-inverse">
        <div class="navbar-inner">
          <div class="container-fluid">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="<?php echo $this->make_route('/admin/home'); ?>">Administration Panel</a>
              <div class="nav-collapse collapse">
                <ul class="nav">
                   <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Orders</a>
                    <ul class="dropdown-menu">
                      <?php Bootstrap::make_navbar_button('#', 'View Pending Orders'); ?>
                      <?php Bootstrap::make_navbar_button('#', 'Edit Order'); ?>
                      <?php Bootstrap::make_navbar_button('#', 'Cancel Order'); ?>
                    </ul> 
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Items</a>
                    <ul class="dropdown-menu">
                      <?php Bootstrap::make_navbar_button('#', 'Add Item'); ?>
                      <?php Bootstrap::make_navbar_button('#', 'Edit Item'); ?>
                      <?php Bootstrap::make_navbar_button('#', 'Delete Item'); ?>
                    </ul> 
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Groups</a>
                    <ul class="dropdown-menu">
                      <?php Bootstrap::make_navbar_button('#', 'Add Group'); ?>
                      <?php Bootstrap::make_navbar_button('#', 'Edit Group'); ?>
                      <?php Bootstrap::make_navbar_button('#', 'Delete Group'); ?>
                    </ul> 
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Settings</a>
                    <ul class="dropdown-menu">
                      <?php Bootstrap::make_navbar_button('#', 'Item 1'); ?>
                      <?php Bootstrap::make_navbar_button('#', 'Item 2'); ?>
                      <?php Bootstrap::make_navbar_button('#', 'Item 3'); ?>
                    </ul> 
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Testing</a>
                    <ul class="dropdown-menu">
                      <?php Bootstrap::make_navbar_button($this->make_route('/admin/render-samples'), 'Render Samples'); ?>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Body -->
    <div class="container-fluid">
      <!-- Alerts -->
      <?php $this->display_alert('error'); ?>
      <?php $this->display_alert('success'); ?>
      
      <!-- Content -->
      <?php include($this->content); ?>
      
    </div>
    
    <!-- Footer -->
    <div class="container-fluid">
      <div class="container-fluid">
        <hr>
        <div class="footer">
          <div class="container-fluid pagination-centered">
            <p>&copy; 2012 Janet Foster. All rights reserved.</p>
          </div>
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
    <?php Bootstrap::add_script($this->make_route('/js/bootstrap-dropdown.js'), 'text/javascript'); ?>
    <?php Bootstrap::add_script($this->make_route('/js/master.js'), 'text/javascript'); ?>
    
  </body>

</html>
