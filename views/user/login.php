<div class="container">
  <div class="row">
    <div class="span4"></div>
    <div class="span4 pagination-centered">
      <div class="hero-unit" style="text-align:center">
        <h3>Login</h3>
        <form action="<?php echo $this->make_route('/login'); ?>" method="post">
          <fieldset>
            <?php Bootstrap::make_input('username', 'Username', 'text'); ?>
            <?php Bootstrap::make_input('password', 'Password', 'password'); ?>
            <div class="form-actions">
              <button class="btn btn-large btn-block btn-inverse">Login</button>
            </div>
          </fieldset>
        </form> 
      </div>
    </div>
  </div>
</div>
