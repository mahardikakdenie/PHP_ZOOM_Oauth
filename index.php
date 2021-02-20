<?php
require_once 'config.php';
 
$url = "https://zoom.us/oauth/authorize?response_type=code&client_id=".CLIENT_ID."&redirect_uri=".REDIRECT_URI;
?>
  
<a href="<?php echo $url; ?>">Login with Zoom</a>