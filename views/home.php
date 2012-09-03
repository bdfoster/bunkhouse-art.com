<div class="row-fluid">
  <div class="span8 pagination-centered">
    <div class="hero-unit">
      <h2>Welcome to Bunkhouse-Art.com</h2>
      <p>Bunkhouse-Art.com will be the new home for Art by Janet Foster, but we're not quite ready yet.</p>
      <div class="progress progress-striped active">
        <div class="bar" style="width: 20%;"></div>
      </div>
      <p>20% Complete</p>
    </div>
  </div>
  <div class="span4">
    <div class="hero-unit">
      <h3>We'll let you know...</h3>
      <h5>Give us some information and we'll send you an email when the new site is done.</h5>
      <form action="<?php echo $this->make_route('/site-ready-notification'); ?>" method="post">
        <fieldset>
          <?php Bootstrap::make_input('first_name', 'First Name', 'text', 'Johnny'); ?>
          <?php Bootstrap::make_input('last_name', 'Last Name', 'text', 'Appleseed'); ?>
          <?php Bootstrap::make_input('email', 'Email', 'text', 'JApples@example.com'); ?>
          <div class="form-actions">
            <button class="btn btn-large btn-block btn-inverse">Notify Me!</button>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>
