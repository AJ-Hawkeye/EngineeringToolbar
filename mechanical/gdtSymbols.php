<?php
	$title = "GD&T Symbols";
	require "../header.php";
?>
<H1>GD&T Symbols</H1>
<div class="secSep"></div>
<p>When learning GD&T, symbols play an important role in allowing engineers to design for manufacturing. With symbols you can determine what features are important to create parts that will always fit together.</p>
<div class="secSep"></div>
<table width="100%">
	<tr>
		<th width="10%">Symbol</th>
		<th width="15%">Name</th>
		<th width="20%">Tolerance Type</th>
		<th width="45%">Description</th>
		<th width="10%">Unicode Char</th>
	</tr>
	<tr>
		<td><img src="img/straightness.png" style="width: 50px; height: 50px;"></td>
		<td>Straightness</td>
		<td rowspan="4" style="vertical-align: middle;">Form</td>
		<td>Creates a Cylindar for the tolerance of the mid line of the object.</td>
		<td>U+23E4</td>
	</tr>
	<tr>
		<td><img src="img/flatness.png" style="width: 50px; height: 50px;"></td>
		<td>Flatness</td>
		<td>Creates 2 planes for tolerance which the surface needs be within.</td>
		<td>U+23E5</td>
	</tr>
	<tr>
		<td><img src="img/cylindricity.png" style="width: 50px; height: 50px;"></td>
		<td>Cylindricity</td>
		<td>Creates two cylindrical planes for tolerance which the surface of the cylindar needs to be in.</td>
		<td>U+232D</td>
	</tr>
	<tr>
		<td><img src="img/circularity.png" style="width: 50px; height: 50px;"></td>
		<td>Circularity</td>
		<td>Creates 2 circles which the part's feature must be within.</td>
		<td>U+25CB</td>
	</tr>
	<tr>
		<td><img src="img/perpendicularity.png" style="width: 50px; height: 50px;"></td>
		<td>Perpendicularity</td>
		<td rowspan="3" style="vertical-align: middle;">Orientation</td>
		<td>Creates a cylindar which the midline must be within.</td>
		<td>U+27C2</td>
	</tr>
	<tr>
		<td><img src="img/parallelism.png" style="width: 50px; height: 50px;"></td>
		<td>Parallelism</td>
		<td>Creates two planes which the surface plane should be within.</td>
		<td>U+2225</td>
	</tr>
	<tr>
		<td><img src="img/angularity.png" style="width: 50px; height: 50px;"></td>
		<td>Angularity</td>
		<td>Creates two planes angled within tolerance which the feature must be within.</td>
		<td>U+2220</td>
	</tr>
	<tr>
		<td><img src="img/position.png" style="width: 50px; height: 50px;"></td>
		<td>Position</td>
		<td rowspan="3" style="vertical-align: middle;">Location</td>
		<td>Creates a cylindar where the feature's mid lines must be within. (SEE POSITION PAGE FOR MORE INFO)</td>
		<td>U+2316</td>
	</tr>
	<tr>
		<td><img src="img/profileOfSurface.png" style="width: 50px; height: 50px;"></td>
		<td>Profile of a Surface</td>
		<td>Creates two planes which follow the feature's profile which the feature's surface must be within.</td>
		<td>U+2313</td>
	</tr>
	<tr>
		<td><img src="img/profileOfLine.png" style="width: 50px; height: 50px;"></td>
		<td>Profile of a Line</td>
		<td>Creates two offset lines which the feature must be within.</td>
		<td>U+2312</td>
	</tr>
	<tr>
		<td><img src="img/totalRunout.png" style="width: 50px; height: 50px;"></td>
		<td>Total Runout</td>
		<td rowspan="2" style="vertical-align: middle;">Runout</td>
		<td>Creates two cylindrical planes on the profile in which all points must be within</td>
		<td>U+2330</td>
	</tr>
	<tr>
		<td><img src="img/circularRunout.png" style="width: 50px; height: 50px;"></td>
		<td>Circular Runout</td>
		<td>Creates two circles on the profile in which all points must be within.</td>
		<td>U+2197</td>
	</tr>
	<tr>
		<td><img src="img/concentricity.png" style="width: 50px; height: 50px;"></td>
		<td>Concentricity</td>
		<td rowspan="2" style="vertical-align: middle;">Middle Point/Line</td>
		<td>Creates a cylindar on the mid axis which the midline must be within.</td>
		<td>U+25CE</td>
	</tr>
	<tr>
		<td><img src="img/symmetry.png" style="width: 50px; height: 50px;"></td>
		<td>Symmetry</td>
		<td>Creates two midplanes which all features on both sides must be within.</td>
		<td>U+232F</td>
	</tr>
</table>
<?php
	require "../footer.php";
?>