<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
	</head>
	<body>
		<!-- HTML CODE BELOW -->
		<form id="newtopicform" action="/r_newtopic.php", method="post">
			<b>Sujet: </b><input type="text" name="subject"><br />
			<br />
			<b>Message</b>
			<textarea name="message" form="newtopicform">Your Message</textarea>
			<br />
			<input type="submit" value="Envoyer">
		</form>
	</body>
</html>
