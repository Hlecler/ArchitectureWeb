		<form id="newpostform" action="/r_newpost.php" method="post">
			<b>Answer?:<br></b>
			<textarea name="message" form="newpostform">Your Message...</textarea>
			<br/>
			<input type='hidden' name="idthread" value="<?php echo $_GET['idthread']; ?> " />
			<input type="submit" value="Envoyer">
			<input type='hidden' name='idthread1' value='<?php echo $_GET['idthread'];?>'>
		</form>
