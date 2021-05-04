<?php
	$title = "AC Circuits";
	require "../header.php";
?>
<h1>AC Circuits</h1>
<div class="mainSep"></div>

<div class="mainSep"></div>
<table class="EquationTB">
	<thead><tr class="EqTBHeader">
			<th><h2>Equation ID</h2></th>
			<th><h2>Equation Name</h2></th>
			<th><h2>Equation</h2></th>
			<th><h2>Requires</h2></th>
			<th><h2>Extends</h2></th>
	</tr></thead>
	<tbody>
		<tr>
			<td>E-?</td>
			<td>Peak to Peak Voltage</td>
			<td>$$V_{pp} = V_{+p} + |V_{-p}|$$</td>
			<td>Positive Peak Voltage, Negative Peak Voltage</td>
			<td></td>
		</tr>
		<tr>
			<td>E-?</td>
			<td>V RMS (Root Mean Square)</td>
			<td>$$V_{RMS} = {{V_p}\over{\sqrt2}}$$</td>
			<td>AC Voltage</td>
			<td></td>
		</tr>
		<tr>
			<td>E-?</td>
			<td>I RMS (Root Mean Square)</td>
			<td>$$I_{RMS} = {{V_p}\over{\sqrt2}}$$</td>
			<td>AC Current</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
	</tbody>
</table>
<?php
	require "../footer.php";
?>