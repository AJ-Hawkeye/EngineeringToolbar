<?php
	$title = "Drilling and Thread";
	require "../header.php";
?>
<H1>Drilling/Threading</H1>
<div class="secSep"></div>
<h2>Drilling</h2>
<div class="secSep"></div>
<h3>Countersunk Holes</h3>
<div class="secSep"></div>
<h3>Tapered Holes</h3>
<div class="secSep"></div>
<h3>Spot Drilling</h3>
<div class="secSep"></div>

<h2>Threading (Tapping)</h2>
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
	<!-- Table Body -->
	<tbody>
		<tr>
			<td>M-?</td>
			<td>Drilling Spindle Speed (RPM)</td>
			<td>$$N = {{12V}\over{\pi D}}$$</td>
			<td>Surface Speed (FPM), Tool Diameter(in)</td>
			<td>Feed Rate</td>
		</tr>
		<tr>
			<td>M-?</td>
			<td>Feed Rate</td>
			<td>$$f=Nf_R$$</td>
			<td>Spindle Speed, Feed</td>
			<td>Material Removal Time (min), Material Removal Rate ($in^3/min$)</td>
		</tr>
		<tr>
			<td>M-?</td>
			<td>Material Removal Time (min)</td>
			<td>$$MRT = {{L+A}\over{f}}$$</td>
			<td>Drill Depth (in), ${{D}\over{2}}$ (in), feed rate</td>
			<td></td>
		</tr>
		<tr>
			<td>M-?</td>
			<td>Material Removal Rate ($in^3/min$)</td>
			<td>$$MRR = {{\pi D^2 f}\over{4}}$$</td>
			<td>Drill Diameter (in), feed rate</td>
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