<?php 
if (!empty($_POST)):
  $to ="youremail@gmail.com"; //the email address you want messages sent to
  $subject ="Website Message from ".$_POST['name'];
  $message =$_POST['message'];
  $headers ="From: ".$_POST['email'];
  mail($to, $subject, $message, $headers);
endif;

?>


<div class="contact">
	<!-- contact form here -->
	<form action="index.php" method="post">
		<div>
			<label for="name">Your Name</label>
			<input type="text" id="name" name="name" required>
		</div>
		<div>
			<label for="email">Your Email Address</label>
			<input type="email" id="email" name="email" required>
		</div>
		<div>
			<label for="message">Message</label>
			<textarea id="message" name="message" required></textarea>
		</div>
		<button type="submit">Send</button>
	</form>
</div>