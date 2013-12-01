<?php
 header('Content-type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<Response>';
 //Create variable with user input.
 $user_pushed = (int) $_REQUEST['Digits'];
<Dial callerID="415-735-4737" record="true">$user_pushed</Dial>
echo '</Response>';
?>
