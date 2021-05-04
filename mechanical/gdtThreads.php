<?php
	$title = "Threads";
	require "../header.php";
?>
<div class="secSep"></div>
<h1>Threads in GD&T</h1>
<div class="secSep"></div>
<h2>Floating Fasteners (No Threads)</h2>
<div class="secSep"></div>
<p>These are often bolts that keep two parts together.</p>
<p>Will be ${{1}\over{2}}$ of the diameter tolerance (radius).</p>
<p>$$\text{Floating Diam} = \text{Hole MMC} - \text{Fastener MMC}$$</p>
<p><b>MOST BOLTS ARE UNDERSIZE AND ARE MMC AT NOMIAL SIZE.</b></p>
<div class="secSep"></div>
<h2>Fixed Fasteners</h2>
<div class="secSep"></div>
<p>These often keep a part positioned properly.</p>
<p>As a designer <b>full control</b> should have 60% of the tolerance toward the thread and 40% to the hole.</p>
<p>$$\text{Hole MMC} - \text{Fastener MMC} - \text{Supplier Part Tolerance} = \text{Hole Remainer}$$</p>
<p>Put a position tolerance of the hole remainder at MMC for the clearance hole.</p>
<p>Put a position tolerance of the fastener MMC and a projected modifier of the thread depth at MMC.</p>
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