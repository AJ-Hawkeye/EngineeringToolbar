<?php
	$title = "Integral";
	require "../header.php";
?>
<h1>Energy</h1>
<div class="secSep"></div>
<p></p>
<div class="secSep"></div>
<h2></h2>
<div class="secSep"></div>
<p></p>
<div class="mainSep"></div>
<h2>Equation Table</h2>
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
			<td>7-1</td>
			<td>Energy at end per unit of weight</td>
			<td>$$E'_1 + h_A - h_R - h_L = E'_2$$</td>
			<td>Energy Added, Removed, Lost</td>
			<td></td>
		</tr>
		<tr>
			<td>7-2</td>
			<td>Energy per unit of weight</td>
			<td>$$E' = {{p}\over{\gamma}} + z + {{v^2}\over{2g}}$$</td>
			<td>pressure, velocity, height, gravity</td>
			<td></td>
		</tr>
		<tr>
			<td>7-3</td>
			<td>General Energy Equation</td>
			<td>$${{p_1}\over{\gamma}} + z_1 + {{v^2_1}\over{2g}} + h_A - h_R - h_L = {{p_2}\over{\gamma}} + z_2 + {{v^2_2}\over{2g}}$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>7-4</td>
			<td>General Energy Simplied for $h_A$</td>
			<td>$$h_A = {{p_B - p_A}\over{\gamma}} + (z_B - z_A) + {{v^2_B - v^2_A}\over{2g}} + h_L$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>7-5</td>
			<td></td>
			<td>$$P_A = h_A \gamma Q$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>7-6</td>
			<td></td>
			<td>$$e_M = {{\text{Power delivered to fluid}}\over{\text{Power put into pump}}} = {{P_A}\over{P_I}}$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>7-7</td>
			<td></td>
			<td>$$h_A = {{p_2 - p_1}\over{\gamma}} + (z_2 - z_1)+ {{v^2_2 - v^2_1}\over{2g}}$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>7-8</td>
			<td>Power Delivered by a Fluid to a Motor</td>
			<td>$$P_R = h_R W = h_R \gamma Q$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>7-9</td>
			<td>Motor Efficiency</td>
			<td>$$e_M = {{\text{Power output from motor}}\over{\text{Power delivered by fluid}}} = {{P_O}\over{P_R}}$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>7-10</td>
			<td></td>
			<td>$$h_R = {{p_B - p_A}\over{\gamma}} + (z_A - z_B) + {{v^2_A - v^2_B}\over{2g}} - h_L$$</td>
			<td></td>
			<td></td>
		</tr>
	</tbody>
</table>
<div class="secSep"></div>
<h2>Glossary</h2>
<div class="secSep"></div>
<table>
	<tr>
		<th>Term</th>
		<th>Definition</th>
	</tr>
</table>
<div class="secSep"></div>
<h2>References</h2>
<div class="secSep"></div>
<table>
	<tr>
		<th></th>
	</tr>
</table>
<?php
	require "../footer.php";
?>