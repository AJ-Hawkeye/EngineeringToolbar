<?php
	$title = "Engineering Toolbar";
	require "header.php";
?>
<form action="" style="text-align: center;">
	<input type="text" name="graphEq" value="y=x">
</form>
<canvas id="graph" class="graph" align="center"></canvas>

<script>
	let res = 50;
	function displayOnLoad() {drawGraph(800,800,res);}//on load defaults
	window.addEventListener("load", displayOnLoad);
	function displayWindowSize() {drawGraph(1040,1500,res);}//on resize defaults
	window.addEventListener("resize", displayWindowSize);
	function zoomGraph(event) {//on zoom on graph
		res = res + event.deltaY * 0.1;
		drawGraph(1040,1500,res);
	}
	document.getElementById('graph').addEventListener("wheel", zoomGraph);
</script>
<?php
	require "footer.php";
?>