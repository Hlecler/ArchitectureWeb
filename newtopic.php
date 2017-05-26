		<form action="/r_newtopic.php?<?php echo $_GET['idsection']'?>" method="post">
			<b>Sujet:<br> </b><input type="text" name="subject"><br />
			<br/>
			<b>Message<br></b>
			<textarea name="message" form="newtopicform">Your Message</textarea>
			<br/>
			<input type="submit" value="Envoyer">
		</form>

