
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
          <li><a href="<?php echo $this->make_route('/'); ?>">Home</a></li>
        </ul>
        <ul class="nav pull-right">
          <?php if (User::is_authenticated()) { ?>
          <li><a href="<?php echo $this->make_route('/logout'); ?>">Logout</a></li>
          <?php } else { ?>
          <li><a href="<?php echo $this->make_route('/login'); ?>">Login</a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="page-header">
  <h1><small>Art by </small>Janet Foster</h1>
</div>
