<?php
	$title = "Position";
	require "../header.php";
?>
<div class="secSep"></div>
<h2>Position Table Values</h2>
<div class="secSep"></div>
<table width="100%">
	<tr>
		<th>Hole #</th>
		<th>"X" deviation</th>
		<th>"Y" deviation</th>
		<th>Position Error</th>
		<th>Hole Actual Size</th>
		<th>Additional Tolerance</th>
		<th>Allowable Position</th>
		<th>Accept (Y or N)</th>
	</tr>
	<tr>
		<td>#</td>
		<td>Deviation from basic dimension</td>
		<td>"</td>
		<td>$$2* \sqrt{\text{X Dev}^2 + \text{Y Dev}^2}$$</td>
		<td>Pin Size</td>
		<td>$$\text{Actual Hole Size} - \text{Hole MMC}$$</td>
		<td>$$\text{Add. Tol} + \text{FCF Tol}$$</td>
		<td>Is Position Error < Allowable Position</td>
	</tr>
</table>
<div class="secSep"></div>
<h2>Common Stuff</h2>
<div class="secSep"></div>
<p>If the hole is threaded for attachment piece, use a projected tolerance zone.</p>
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