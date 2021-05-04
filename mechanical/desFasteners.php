<?php
	$title = "Fasteners";
	require "../header.php";
?>
<H1>Fasteners</H1>
<div class="secSep"></div>
<h2>Solving Fastener Questions</h2>
<div class="secSep"></div>
<table>
	<tr>
		<th>Math</th>
		<th>Explanation</th>
		<th>References</th>
	</tr>
	<tr>
		<td>$$P_{init} = \sum P \text{%preload}$$</td>
		<td>Add all of the initial loads together.</td>
		<td>The %preload should be given in the question (assume 100% if not given).</td>
	</tr>
	<tr>
		<td>$$P_{pre} =  P_{init} \times SF \times $$</td>
		<td>Muliply the Initial load with the safety factor.</td>
		<td>Given value (assume SF = 2 for general)</td>
	</tr>
	<tr>
		<td>$$F_{proof} =A_s \times \sigma _{proof}$$</td>
		<td>To find bolt strength we need to multiply the tensile stress area by the tensile strength of the bolt.</td>
		<td>Find the tensile stress in the table below or in a bolt chart, and the tensile strength should be there to.</td>
	</tr>
	<tr>
		<td>$$F_{max} = F_{proof} \times \text{proof load %}$$</td>
		<td>We need to find the maximum bolt strength, take the bolt strength and multiply it by the proof load %.</td>
		<td>Proof load should always be in the question.</td>
	</tr>
	<tr>
		<td>$$n = {{P_{pre}}\over{F_{max}}}$$</td>
		<td>To find the number of bolts required we divide the preload by the maximum bolt strength. This will give us a number with decimals. Since bolts come in only whole numbers, we will always round up for the final number of bolts</td>
		<td>Both where calculated previously.</td>
	</tr>
	<tr>
		<td>$$T_{min} = K\times D\times \left({{P_{pre}}\over{n}}\right)$$</td>
		<td>To find the minimum torque we must take the preload and divid it by the number of fastners (rounded) and multiply the result by the nut factor and the diameter of the bolt.</td>
		<td>The nut factor is found in the table below and is dependant on the surface of the bolt.</td>
	</tr>
	<tr>
		<td>$$T_{max} = K\times D\times F_{max}$$</td>
		<td>To find the maximum torque we must take the nut factor, bolt diameter, and the maximum bolt strength and multiply together. </td>
		<td>The nut factor is found in the table below and is dependant on the surface of the bolt.</td>
	</tr>
</table>
<p>This should get the number of fasteners needed and the torque range required for your design.</p>
<div class="secSep"></div>
<h2></h2>
<div class="secSep"></div>
<h2>Categories</h2>
<div class="secSep"></div>
<table>
	<tr>
		<th>Removable</th>
		<th>Semi-permanent</th>
		<th>Permanent</th>
		<th>Welded</th>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>
<h2>Bolts or Screws?</h2>
<div class="secSep"></div>
<p>Bolts needs a nut, screws don't. </p>
<div class="secSep"></div>
<h2>Drive Types</h2>
<div class="secSep"></div>
<table width="100%">
	<thead><tr>
		<th>Screw Drive Family</th>
		<th>Head On View</th>
		<th>Orthographic View</th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
	</tr></thead>
	<tbody><tr style="height: 15px;"></tr></tbody>
	<tbody class="labels"><tr>
		<td align="center">
			<label for="cross"><h4>Slotted</h4></label>
			<input type="checkbox" name="cross" id="cross" data-toggle = "toggle">
		</td>
		<td><img src="img/slotHO.png" style="width: 100px; height: 100px;"></td>
		<td><img src="img/slotO.png" style="width: 100px; height: 100px;"></td>
	</tr></tbody>
	<tbody class="hidden">
		<tr>			
			<th>Blade width (mm)</th>
			<th>Blade width (in)</th>
			<th>Screw size</th>
		</tr>
		<tr>
			<td>2.4</td>
			<td>$$\stackrel{3}{}\!\!\unicode{x2215}_{\!\unicode{x202f}32}$$</td>
			<td>0-1</td>
		</tr>
		<tr>
			<td>3.2</td>
			<td>$$\stackrel{1}{}\!\!\unicode{x2215}_{\!\unicode{x202f}8}$$</td>
			<td>2</td>
		</tr>
	</tbody>
</table>
<div class="secSep"></div>
<h3>Nut Factors</h3>
<div class="secSep"></div>
<table>
	<tr>
		<th>Bolt Condition</th>
		<th>K range</th>
	</tr>
	<tr>
		<td>Non-plated, black finish</td>
		<td>0.20-0.30</td>
	</tr>
	<tr>
		<td>Zinc-plated</td>
		<td>0.17-0.22</td>
	</tr>
	<tr>
		<td>Lubricated</td>
		<td>0.12-0.16</td>
	</tr>
	<tr>
		<td>Cadmium-plated</td>
		<td>0.11-0.15</td>
	</tr>
</table>

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
			<td>M-?</td>
			<td>Preload</td>
			<td>$$P_{pre} = S \times \text{Load} \times \text{%preload}$$</td>
			<td>Safety Factor, Total Load, % Preload</td>
			<td>Quantity of Bolts</td>
		</tr>
		<tr>
			<td>M-?</td>
			<td>Fastener Strength</td>
			<td>$$F_{proof} = A_s\times \sigma_{proof}$$</td>
			<td>Stress Area, Tensile Strength</td>
			<td>$F_{max}$</td>
		</tr>
		<tr>
			<td>M-?</td>
			<td>Maximum Fastener Strength</td>
			<td>$$F_{max} = F_{proof} \times\text{Proof load}$$</td>
			<td>Fastener Strength, Proof load</td>
			<td></td>
		</tr>
		<tr>
			<td>M-?</td>
			<td>Tensile Strength of Fastener</td>
			<td>$$P = S_t\times A_s$$</td>
			<td>Tensile Strength, Stress Area</td>
		</tr>
		<tr>
			<td>M-?</td>
			<td>Fastner Torque</td>
			<td>$$T = K\times d \times F$$</td>
			<td>Nut Factor, Bolt Diameter, Bolt Tension</td>
			<td></td>
		</tr>
		<tr>
			<td>M-?</td>
			<td>Quantity of Bolts</td>
			<td>$$n = {{P_{pre}}\over{F_{max}}}$$</td>
			<td>Preload, Maximum Fastener Strength</td>
			<td></td>
		</tr>
		<tr>
			<td>M-?</td>
			<td>Minimum Torque on Bolt</td>
			<td>$$T_{min} = K\times D\times \left({{P_{pre}}\over{n}}\right)$$</td>
			<td>Nut Factor, Bolt Diameter, Preload, Number of Bolts</td>
			<td></td>
		</tr>
		<tr>
			<td>M-?</td>
			<td>Maximum Torque on Bolt</td>
			<td>$$T_{max} = K\times D\times F_{max}$$</td>
			<td>Nut Factor, Bolt Diameter, Maximum Fastener Strength</td>
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