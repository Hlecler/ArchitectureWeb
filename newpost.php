<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
	</head>
	<body>
		<?php
			include 'headersection.php';
		?>
		<!-- HTML CODE BELOW -->
		<form id="newpostform" action="r_post.php", method="post">
			<b>Message</b>
			<textarea name="message" form="newpostform">Your Message...<textarea>
			<br />
			<input type="submit" value="Envoyer">
		</form>
		<!-- END HTML CODE -->
		<?php
			include 'footer.php';
		?>
	</body>
</html>
