<?php
	$title = "Equation Sheet";
	require "../header.php";
?>
<h1>Formula Sheet</h1>
<div class="secSep"></div>
<table class="EquationTB">
	<!-- Table Head -->
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
			<td>Resistivity Formula</td>
			<td>$$\rho = R{{A}\over{l}}$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>E-?</td>
			<td>Capacitor Formula</td>
			<td>$$C = 0.2235 {{KA}\over{d}}(N-1)$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>E-?</td>
			<td>Amp In Ohm's Law</td>
			<td>$$I = {{V}\over{R}}$$</td>
			<td>Voltage, Resistance</td>
			<td></td>
		</tr>
		<tr>
			<td>E-?</td>
			<td>Amperage in Series</td>
			<td>$$I_{Total} = I_{Anywhere}$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>E-?</td>
			<td>Amperage in Parallel</td>
			<td>$$I_{Total} = I_1 + I_2 + ... + I_N$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>E-?</td>
			<td>Voltage in Ohm's Law</td>
			<td>$$V = I R$$</td>
			<td>Current, Resistance</td>
			<td></td>
		</tr>
		<tr>
			<td>E-?</td>
			<td>Voltage in Series</td>
			<td>$$V_{Total} = V_1 + V_2 + ... +V_N$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>E-?</td>
			<td>Voltage in Parallel</td>
			<td>$$V_{Total} = V_{Anywhere}$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>E-?</td>
			<td>Voltage Divider Law</td>
			<td>$$V_x = R_x {{V_T}\over{R_T}}$$</td>
			<td></td>
			<td></td>
		</tr>
	</tbody>
</table>
<div class="secSep"></div>
<?php
	require "../footer.php";
?>