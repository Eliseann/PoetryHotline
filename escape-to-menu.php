</pre>
<?php
 header('Content-type: text/xml');
 echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<Response>';
 //Create second variable with user input.
 $user_pushed_2 = (int) $_REQUEST['Digits'];
if ($user_pushed_2 == 4)
{
 echo '<Gather action="handle-user-input.php" numDigits="1">;
 echo '<Play>menu</Play>';
 echo </Gather>';
 }
 else
 {
 echo "<Say>Sorry, I can't do that yet.</Say>";
 echo '<Redirect>handle-incoming-call.php</Redirect>';
 }
echo '</Response>';
?>
