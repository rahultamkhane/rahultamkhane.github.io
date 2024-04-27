<?php // gets the current URI, remove the left / and then everything after the / on the right
$folder = substr($_SERVER['REQUEST_URI'], strlen("SITE_DIR")-1);
$folder = substr($folder, 0, strpos($folder,"/")); 
?>
<div class="col-sm-2">
  
</div>