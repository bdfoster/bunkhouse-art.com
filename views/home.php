
<div class="row-fluid">
  <div class="span8">
    <div class="hero-unit">
      <h2><center>Welcome to Bunkhouse-Art.com</center></h2>
      <p><center>Bunkhouse-Art.com will be the new home for Art by Janet Foster, but we're not quite ready yet.</center></p>
    </div>
  </div>
  <div class="span4">
    <div class="hero-unit">
      <h6>NON-FUNCTIONAL</h6>
      <h3>We'll let you know...</h3>
      <h5>Give us some information and we'll send you an email when the new site is done.</h5>
      <form action="<?php echo $this->make_route('/site-ready-notification'); ?>" method="post">
        <fieldset>
          <?php Bootstrap::make_input('first_name', 'First Name', 'text', 'Johnny'); ?>
          <?php Bootstrap::make_input('last_name', 'Last Name', 'text', 'Appleseed'); ?>
          <?php Bootstrap::make_input('email', 'Email', 'text', 'JApples@example.com'); ?>
          
          <div class="form-actions">
            <button class="btn btn-inverse btn-large">Notify Me!</button>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>

