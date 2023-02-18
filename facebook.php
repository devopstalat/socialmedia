<?php
require_once 'sdk/src/facebook.php';
$facebook = new Facebook(array(
  'appId'  => getenv('434412236903186'),
  'secret' => getenv('ca559e2eb696ec48a4abba85add9a95e'),
));
$zack = $facebook->api('/zuck');
?>
<pre>
<?php
var_dump($zack);
?>
</pre>