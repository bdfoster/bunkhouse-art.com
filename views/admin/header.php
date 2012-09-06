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
          <?php echo Bootstrap::make_navbar_button('#', 'Orders'); ?>
          <?php echo Bootstrap::make_navbar_button('#', 'Items'); ?>
          <?php echo Bootstrap::make_navbar_button('#', 'Groups'); ?>
          <?php echo Bootstrap::make_navbar_button('#', 'Settings'); ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="page-header">
  <h1><small>Administration Home</small></h1>
</div>
