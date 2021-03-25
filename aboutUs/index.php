<?php
	$title = "About Us";
	require "../header.php";
?>
<h2>Current Staff</h2>
<table id="staffTable" class="staffTable">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Youtube</th>
		<th>Twitch</th>
		<th>Discord</th>
		<th>Role</th>
	</tr>
	<tr>
		<td><h3>AJ_Hawkeye</h3></td>
		<td><a href="mailto:ajhawkeyecoding@gmail.com"><img <?php if ($darkMode == true) {echo "src=\"/img/enevelopeW.png\"";}else {echo "src=\"/img/enevelopeB.png\"";}?> class="grow"></a></td>
		<td><a href="https://www.youtube.com/channel/UCqXJYywwtdoPYTtIgCfxa2w"><img <?php if ($darkMode == true) {echo "src=\"/img/youtubeW.png\"";}else {echo "src=\"/img/youtubeB.png\"";}?> class="grow"></a></td>
		<td><a href="https://www.twitch.tv/aj_hawkeye"><img <?php if ($darkMode == true) {echo "src=\"/img/twitchW.png\"";}else {echo "src=\"/img/twitchB.png\"";}?> class="grow"></a></td>
		<td><a href="https://discord.gg/wGhwQjgMjZ"><img <?php if ($darkMode == true) {echo "src=\"/img/discordW.png\"";}else {echo "src=\"/img/discordB.png\"";}?> class="grow"></a></td>
		<td><b>Founder</b></td>
	</tr>
</table>
<?php
	require "../footer.php";
?>