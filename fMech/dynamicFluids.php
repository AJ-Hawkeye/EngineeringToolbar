<?php
	$title = "Dynamic Fluids";
	require "../header.php";
?>
<h1>Flow of Fluids</h1>

<h2>Units of Flow</h2>
<h3>Volume Flow Rate</h3>
<p>$$Q = {{\text{Volume}}\over{\text{Time}}} = {{m^3}\over{sec}}$$</p>
<h3>Mass Flow Rate</h3>
<p>$$M = \rho Q = $$</p>
<h3>Weight Flow Rate</h3>
<p>$$W = \gamma Q =$$</p>

<div class="secSep"></div>
<h2>Resonable Flow rates (Table 6.2)</h2>
<div class="secSep"></div>
<table width="50%">
	<tr>
		<th rowspan="2" style="vertical-align: middle;">Type of System</th>
		<th colspan="3" align="center">Flow Rate</th>
	</tr>
	<tr>
		<th>$$\left({{m^3}\over{h}}\right)$$</th>
		<th>$$\left({{L}\over{min}}\right)$$</th>
		<td>$$\left({{gal}\over{min}}\right)$$</td>
	</tr>
	<tr>
		<td>Reciprocating pumps - heavy fluids and slurries</td>
		<td>0.90-7.5</td>
		<td>15-125</td>
		<td>4-33</td>
	</tr>
	<tr>
		<td>Industrial oil hydraulic systems</td>
		<td>0.60-6.0</td>
		<td>10-100</td>
		<td>3-30</td>
	</tr>
	<tr>
		<td>Hydraulic systems for mobile equipment</td>
		<td>6.0-36</td>
		<td>100-600</td>
		<td>30-150</td>
	</tr>
	<tr>
		<td>Centrifugal pumps in chemical processes</td>
		<td>2.4-270</td>
		<td>40-4500</td>
		<td>10-1200</td>
	</tr>
	<tr>
		<td>Flood control and drainage pumps</td>
		<td>12-240</td>
		<td>200-4000</td>
		<td>50-1000</td>
	</tr>
	<tr>
		<td>Centrifugal pumps handling mine wastes</td>
		<td>2.4-900</td>
		<td>40-15000</td>
		<td>10-4000</td>
	</tr>
	<tr>
		<td>Centrifugal fire-fighting pumps</td>
		<td>108-570</td>
		<td>1800-9500</td>
		<td>500-2500</td>
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
			<td>6-1</td>
			<td>Volume Flow Rate</td>
			<td>$$Q = A v$$</td>
			<td>Area, Velocity</td>
			<td>6-2, 6-3, 6-5</td>
		</tr>
		<tr>
			<td>6-2</td>
			<td>Weight Flow Rate</td>
			<td>$$W = \gamma Q$$</td>
			<td>Specific Weight, Weight Flow Rate</td>
			<td></td>
		</tr>
		<tr>
			<td>6-3</td>
			<td>Mass Flow Rate</td>
			<td>$$M = \rho Q$$</td>
			<td>Density, Volume Flow Rate</td>
			<td>6-4</td>
		</tr>
		<tr>
			<td>6-4</td>
			<td>Continuity Equation</td>
			<td>$$\rho_1 A_1 v_1 = \rho_2 A_2 v_2$$</td>
			<td>Density, Area, Velocity</td>
			<td></td>
		</tr>
		<tr>
			<td>6-5</td>
			<td>Continuity Equation for liquids</td>
			<td>$$A_1 v_1 = A_2 v_2$$</td>
			<td>Area, Velocity</td>
			<td></td>
		</tr>
		<tr>
			<td>6-6</td>
			<td>Potential Energy</td>
			<td>$$PE = wh$$</td>
			<td>Weight, Height</td>
			<td></td>
		</tr>
		<tr>
			<td>6-7</td>
			<td>Kinetic Energy</td>
			<td>$$KE = {{wv^2}\over{2g}}$$</td>
			<td>Weight, Velocity, Gravity</td>
			<td></td>
		</tr>
		<tr>
			<td>6-8</td>
			<td>Flow Energy</td>
			<td>$$FE = {{wp}\over{\gamma}}$$</td>
			<td>Weight, Pressure, Specific Gravity</td>
			<td></td>
		</tr>
		<tr>
			<td>6-9</td>
			<td>Bernoulli's Equation</td>
			<td>$${{p_{1}}\over {\gamma}} + h_{1} + {{v_1^2}\over{2g}} = {{p_{2}}\over {\gamma}} + h_{2} + {{v_2^2}\over{2g}}$$</td>
			<td>Pressure, Specific Gravity, Height, Velocity, Gravity</td>
			<td>6-10</td>
		</tr>
		<tr>
			<td>6-10</td>
			<td>Bernoulli's Solved for $\Delta p$</td>
			<td>$$p_2 - p_1 = \gamma \left(h_1-h_2+{{v^2_1-v^2_2}\over{2g}}\right)$$</td>
			<td>Bernoulli's Equation</td>
			<td></td>
		</tr>
		<tr>
			<td>6-11</td>
			<td>Bernoulli's for Siphon</td>
			<td>$$p_{enterance} = \gamma\left(h_1-h_2-{{v^2_2}\over{2g}}\right)$$</td>
			<td>Bernoulli's Equation</td>
			<td></td>
		</tr>
		<tr>
			<td>6-12</td>
			<td></td>
			<td>$${{p_A-p_B}\over{\gamma}} + (z_A - z_B) = {{v^2_B - v^2_A}\over{2g}}$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>6-13</td>
			<td></td>
			<td>$$z_A - z_B = \Delta z$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>6-14</td>
			<td></td>
			<td>$${{p_A - p_B}\over{\gamma}}$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>6-15</td>
			<td></td>
			<td>$$$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>6-16</td>
			<td>Torricelli's Theorem</td>
			<td>$$v_2 = \sqrt{2gh}$$</td>
			<td>Gravity, Height</td>
			<td>6-17</td>
		</tr>
		<tr>
			<td>6-17</td>
			<td>Pressurized Tank velocity</td>
			<td>$$v_2 = \sqrt{2g\left({{p_1}\over{\gamma}}+h\right)}$$</td>
			<td>Gravity, Pressure, Specific Gravity, Height</td>
			<td></td>
		</tr>
		<tr>
			<td>6-18</td>
			<td></td>
			<td>$$\text{Volume flowing} = Q (dt) = A_j v_j (dt)$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>6-19</td>
			<td></td>
			<td>$$\text{Volume removed} = -A_t dh$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>6-20</td>
			<td></td>
			<td>$$A_j v_j(dt) = -A_t dh$$</td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>6-21</td>
			<td></td>
			<td>$$dt = {{-(A_t\div A_j)}\over{v_j}} dh$$</td>
			<td></td>
			<td>6-22</td>
		</tr>
		<tr>
			<td>6-22</td>
			<td></td>
			<td>$$dt = {{-(A_t\div A_j)}\over{\sqrt{2gh}}} dh$$</td>
			<td></td>
			<td>6-23</td>
		</tr>
		<tr>
			<td>6-23</td>
			<td></td>
			<td>$$dt = {{-(A_t\div A_j)}\over{\sqrt{2g}}}h^{-1/2}dh$$</td>
			<td></td>
			<td>6-24</td>
		</tr>
		<tr>
			<td>6-24</td>
			<td></td>
			<td>$$\int^{t_2}_{t_1} dt = {{-(A_t\div A_j)}\over{\sqrt{2g}}} \int^{h_2}_{h_1} h^{-1\div 2} dh$$</td>
			<td></td>
			<td>6-25</td>
		</tr>
		<tr>
			<td>6-25</td>
			<td></td>
			<td>$$t_2 - t_1 = {{-(A_t\div A_j)}\over{\sqrt{2g}}}{{(h^{{1}\over{2}}_1 - h^{{1}\over{2}}_2)}\over{1\div 2}}$$</td>
			<td>Area, Gravity, Height</td>
			<td>6-26</td>
		</tr>
		<tr>
			<td>6-26</td>
			<td>Time Required to Drain a Tank</td>
			<td>$$t_2 - t_1 = {{2(A_t\div A_j)}\over{\sqrt{2g}}}(h^{{1}\over{2}}_1 - h^{{1}\over{2}}_2)$$</td>
			<td>Area, Gravity, Height</td>
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