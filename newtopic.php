		<form id="newtopicform" action="/r_newtopic.php" method="post">
			<b>Sujet:<br> </b><input type="text" name="subject"><br />
			<br/>
			<b>Message<br></b>
			<textarea name="message" form="newtopicform">Your Message</textarea>
			<input type='hidden' name="idsection" value="<?php echo $_GET['idsection']; ?>" />
			<br/>
			<input type="submit" value="Envoyer">
		</form>

