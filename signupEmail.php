<?php
	$userName = $_POST['userName'];
	$characterCode = $_POST['characterCode'];
	$race = $_POST['race'];
	$email = $_POST['email'];
	$bar = $_POST['bar'];
	$to = 'dpnemergut@gmail.com';
	$subject = 'Tournament Signup';
	
	$body = "New signup for $email:\n $userName\n $characterCode\n $race\n $bar\n";
	
	if (isset($_POST['submit'])) {
		if (mail ($to, $subject, $body)) {
			echo "<script>window.location = 'http://www.charlestonsc2.com/registery.html'</script>";
		} else {
			echo "<script>window.location = 'http://www.charlestonsc2.com/registern.html'</script>";
		}
	}
?>
