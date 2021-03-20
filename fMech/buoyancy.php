<?php
	$title = "Buoyancy";
	require "../header.php";
?>
<h1>Buoyancy</h1>
<div class="secSep"></div>
<h2>The Buoyancy Force</h2>
<div class="secSep"></div>
<p>$$\text{Buoyant Force} (F_b) = \text{Specific Weight} \times \text{Displaced Volume} = \gamma \times V$$</p>
<div class="secSep"></div>
<h3>Metric</h3>
<div class="secSep"></div>
<p>$$F_b = {{kN}\over{\cancel{m^3}}} \cdot \cancel{m^3}=kN$$</p>
<div class="secSep"></div>
<h3>Imperial</h3>
<div class="secSep"></div>
<p>$$F_b = {{lb}\over{\cancel{ft^3}}} \cdot \cancel{ft^3}= lb$$</p>
<div class="secSep"></div>
<h2>Stability</h2>
<div class="secSep"></div>
<h3>Rules for Stability</h3>
<div class="secSep"></div>
<p>1: Completely submerged objects must have the center of gravity lower than the center of buoyancy.</p>
<p>2: Floating bodies are stable if the metacenter is above the center of gravity.</p>
<div class="secSep"></div>
<h3>Floating Problems</h3>
<div class="secSep"></div>
<p>Steps:</p>
<ol>
	<li>Determine the position of the floating body, using 5-1.</li>
	<li>Locate the center of buoyancy from the bottom of the object.</li>
	<li>Locate the center of gravity from the bottom of the object.</li>
	<li>Determine the shape of the area at the fluid surface and find the smallest moment of inertia.</li>
	<li>Compute the displaced volume.</li>
	<li>Compute the distance between the center of buoyancy and metacenter (5-5).</li>
	<li>Compute distance from the bottom to the meta center ($y_{mc}$) and the center of gravity ($y_{cg}$) (5-5).</li>
	<li>If the meta center is above the center of gravity, then the body is stable, else there is no stablity.</li>
</ol>
<div class="secSep"></div>
<h3>Submerged Problems</h3>
<div class="secSep"></div>
<h3>Equations of Equilibrium</h3>
<div class="secSep"></div>
<h3>Stability Problems</h3>
<div class="secSep"></div>
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
			<td>5-1</td>
			<td>Buoyant Force</td>
			<td>$$F_b = \gamma V$$</td>
			<td>Specific Weight, Volume</td>
			<td>5-2,5-4</td>
		</tr>
		<tr>
			<td>5-2 or 3 (mistyped in textbook)</td>
			<td>Equilibrium upward force</td>
			<td>$$F_e = w - F_b$$</td>
			<td>Weight, Buoyant Force</td>
			<td></td>
		</tr>
		<tr>
			<td>5-4</td>
			<td>Two Materials in equilibrium</td>
			<td>$$F_{bA} + F_{bB}=w_A+w_B$$</td>
			<td>Buoyant Force, Weight</td>
			<td></td>
		</tr>
		<tr>
			<td>5-5</td>
			<td>Distance b/w center of buoyancy and metacenter</td>
			<td>$$MB = {{I}\over{V}}$$</td>
			<td>Least moment of Inertia, Volume</td>
			<td></td>
		</tr>
		<tr>
			<td>5-6</td>
			<td>Distance b/w center of buoyancy and the center of gravity</td>
			<td>$$MG = y_{mc} - y_{cg}$$</td>
			<td>Center of Buoyancy, Center of gravity</td>
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
		<th><i>Applied Fluid Mechanics, 7$^{th}$ edition</i></th>
	</tr>
</table>
<?php
	require "../footer.php";
?>