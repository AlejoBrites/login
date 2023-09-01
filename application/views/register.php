<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

?>
<?php echo form_open(site_url('user/register')) ?>  

	<label for="username">Username</label>
	<input type="text" name="username" autocomplete="off" required>

	<label for="email">Email</label>
	<input type="email" name="email" autocomplete="off" required>

	<label for="password">Password</label>
	<input type="password" name="password" autocomplete="off" required>
	
	<input type="submit" value="register">

<?php echo form_close() ?>