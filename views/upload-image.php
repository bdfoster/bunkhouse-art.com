<h3>Upload</h3>
<br>
<form class="form-horizontal" action="<?php echo $this->make_route('/upload'); ?>" enctype="multipart/form-data" method="post">
  <div class="control-group">
    <label class="control-label" for="file">File</label>
    <div class="controls">
      <input type="file" name="file" id="file"/>
    </div>
  </div>
  <div class="controls">
    <button type="submit" class="btn btn-inverse">Upload</button>
  </div>
</form>
