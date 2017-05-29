		<p><b> To create a new thread:</b></p>
		<form id="newtopicform" action="/r_newtopic.php" method="post">
			<b>Sujet:<br> </b><input type="text" name="subject" placeholder="Enter a title"><br />
			<br/>
			<b>Message<br></b>
			<textarea name="message" form="newtopicform" placeholder="Enter a message"></textarea>
			<input type='hidden' name="idsection" value="<?php echo $_GET['idsection']; ?>" />
			<br/>
			<input type="submit" value="Envoyer">
		</form>

