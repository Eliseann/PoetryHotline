<?php
 header('Content-type: text/xml');
 echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<Response>';
 //Create variable with user input.
 $user_pushed = (int) $_REQUEST['Digits'];
if ($user_pushed == 1)
{
 echo '<Gather action="escape-to-menu.php" numDigits="1">';
 echo '<Play>poem1.mp3</Play>';
 echo '<Play>append.wav</Play>';
 echo '</Gather>';
 }
 elseif ($user_pushed == 2)
 {
 echo '<Gather action="escape-to-menu.php" numDigits="1">';
 echo '<Play>poem2.mp3</Play>';
 echo '<Play>append.wav</Play>';
 echo '</Gather>';
 }
 elseif ($user_pushed == 3)
 {
 echo '<Gather action="escape-to-menu.php" numDigits="1">';
 echo '<Play>poem3.mp3</Play>';
 echo '<Play>append.wav</Play>';
 echo '</Gather>';
 }
 elseif ($user_pushed == 4)
 {
 echo '<Gather action="escape-to-menu.php" numDigits="1">';
 echo '<Play>menu.mp3</Play>';
 echo '</Gather>';
 }
 elseif ($user_pushed == 5)
 {
 echo '<Gather action="escape-to-menu.php" numDigits="1">';
 echo '<Play>disclaimer.wav</Play>';
 echo '</Gather>';
 }
 else
 {
 echo "<Say>Sorry, I can't do that yet.</Say>";
 echo '<Hangup/>';
 }
echo '</Response>';
?>
