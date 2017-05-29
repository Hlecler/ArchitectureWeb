		<form id="newpostform" action="/r_newpost.php" method="post">
			<b>Answer?:<br></b>
			<textarea name="message" form="newpostform" placeholder="Enter a message"></textarea>
			<br/>
			<input type='hidden' name="idthread" value="<?php echo $_GET['idthread']; ?>" />
			<input type="submit" value="Envoyer">
		</form>
