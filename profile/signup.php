<?php
	$title = "Sign Up";
	require "../header.php";
?>
<h1>Sign Up</h1>
<div class="mainSep"></div>
<form style="text-align: center;" action="signup.inc.php" method="post">
	<input type="text" name="uid" class="userForm" id="userForm" placeholder="Username">
	<div class="secSep"></div>
	<input type="text" name="email" class="userForm" id="userForm" placeholder="Email">
	<div class="secSep"></div>
	<input type="password" name="pwd" class="userForm" id="userForm" placeholder="Password">
	<div class="secSep"></div>
	<input type="password" name="pwdrepeat" class="userForm" id="userForm" placeholder="Retype Password">
	<div class="secSep"></div>
	<p><button type="submit" name="submit">Sign Up</button></p>
</form>

<?php
	require "../footer.php";
?>