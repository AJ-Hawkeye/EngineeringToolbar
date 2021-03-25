<?php
	$title = "Login";
	require "../header.php";
?>
<h1>Login</h1>
<div class="mainSep"></div>
<form style="text-align: center;" action="login.inc.php" method="post">
	<input type="text" name="uid" class="userForm" id="userForm" placeholder="Username/Email">
	<div class="secSep"></div>
	<input type="password" name="pwd" class="userForm" id="userForm" placeholder="Password">
	<div class="secSep"></div>
	<p><button type="submit" name="submit">Login</button></p>
	<div class="secSep"></div>
	<a href="#">Forgot Password</a>
</form>

<?php
	require "../footer.php";
?>