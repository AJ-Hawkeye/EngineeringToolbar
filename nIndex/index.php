<?php
	$title = "Current News";
	require "../header.php";
?>
<H1>Website News!</H1>
<p>The portal for all things new in the website!</p>
<h2>Current Staff</h2>
<table id="staffTable" class="staffTable">
	<tr>
		<th>Name</th>
		<th>Contact</th>
		<th>Role</th>
	</tr>
	<tr>
		<td>AJ_Hawkeye</td>
		<td><a href="mailto:ajhawkeyecoding@gmail.com"><img <?php if ($darkMode == true) {echo "src=\"/img/enevelopeW.png\"";}else {echo "src=\"/img/enevelopeB.png\"";}?> class="grow"></a></td>
		<td>Founder</td>
	</tr>
</table>
<!-- Row 1 -->
<div class="row">
	<!-- First Entry -->
	<div class="columnL" align="center">
		<h2>January 2021</h2>
		<p>This website was started. The first edition of the format was finished. Pages started to be populated.</p>
	</div>
	<div class="columnR" align="center">
		<h2>February 2021</h2>
		<p>Content on most pages finished and section specific formating was started. SQL databases were made for future reference.</p>
	</div>
</div>
<p></p>
<?php
	require "../footer.php";
?>