<?php
<form method="post" action="" name="signup-form">
	<div class="form-element">
		<label>Gebruikersnaam</label>
		<input type="text" name="Gebruikersnaam" pattern="[a-zA-Z0-9]+" required />
	</div>
	<div class="form-element">
		<label>Wachtwoord</label>
		<input type="password" name="Wachtwoord" required />
	</div>
	<button type="submit" name="Verzenden" value="register">Register</button>
</form>
?>