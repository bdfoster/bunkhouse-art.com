<?php
  class Bootstrap {
	  
	  public static function make_input($id, $label, $type, $placeholder = '') {
		  echo '<label for="' . $id . '">' . $label . '</label><input class="input-fluid" id="' . $id . '" name="' . $id . '" type="' . $type . '" placeholder="' . $placeholder . '">';
	  }
  }
