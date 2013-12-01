<?php
 header('Content-type: text/xml');
 echo('<?xml version="1.0" encoding="UTF-8"?>');
 echo("\n");
 ?>
 <Response>
 <Gather action="handle-user-input.php" numDigits="7">
	 <Say>Please enter the number you wish to call</Say>
 </Gather>
 <!-- If user doesn't input anything, prompt and try again. -->
 <Say>Sorry, I didn't get your response.</Say>
 <Redirect>index.php</Redirect>
</Response>
