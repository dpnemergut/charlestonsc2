<?php
	$userName = $_POST['userName'];
	$characterCode = $_POST['characterCode'];
	$race = $_POST['race'];
	$email = $_POST['email'];
	$bar = $_POST['bar'];
	$human = $_POST['human'];
	$to = 'dpnemergut@gmail.com';
	$subject = 'Tournament Signup';
	
	$body = "New signup for $email:\n $userName\n $characterCode\n $race\n $bar\n";
	
	if (isset($_POST['submit'])) {
		if ($userName != '' && strlen($characterCode) == 3 && $race != '' && $human == '10') {
			if (mail ($to, $subject, $body, null, null)) {
				echo "<script>window.location = 'http://www.charlestonsc2.com/registery.html'</script>";
			} else {
				echo "<script>window.location = 'http://www.charlestonsc2.com/registern.html'</script>";
			}
		} else {
			echo "<script>window.location = 'http://www.charlestonsc2.com/registern.html'</script>";
		}
	} else {
		echo "<script>window.location = 'http://www.charlestonsc2.com/registern.html'</script>";
	}
?>
