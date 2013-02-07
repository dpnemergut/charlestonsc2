<?php
	$userName = $_POST['userName'];
	$characterCode = $_POST['characterCode'];
	$race = $_POST['race'];
	$email = $_POST['email'];
	$to = 'dpnemergut@gmail.com';
	$subject = 'Tournament Signup';
	
	$body = "New signup for $email:\n $userName\n $characterCode\n $race\n";
	
	if (isset($_POST['submit'])) {
		if (mail ($to, $subject, $body)) {
			echo '<p>Thanks for registering! Expect a confirmation email soon.</p>';
		} else {
			echo '<p>Something terrible has happened, the internet may have exploded. Please try again.</p>';
		}
	}
?>
