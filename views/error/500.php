<div class="hero-unit">
  <h3>An Error Has Occurred!</h3>
  <p>
    <strong>Code:</strong><?php echo $exception->getCode(); ?>
  </p>
  <p>
    <strong>Message:</strong>
    <?php echo $exception->getMessage(); ?>
  </p>
  <p><strong>Exception:</strong><?php echo $exception; ?></p>
</div>
