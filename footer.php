		<!-- End of mainBody -->
		</div>

		<!-- Animation Scripts -->
		<script>
			//Opening Sidebar Navigation Animation
			function openNav() {
			  document.getElementById("mySidenav").style.width = "15%";
			  document.getElementById("mainContent").style.marginLeft = "15%";
			  document.getElementById("sideNavBtn").style.opacity = "0%";
			  document.getElementById("navTb").style.marginLeft = "15%";
			}
			// Closing Sidebar Navigation Animation
			function closeNav() {
			  document.getElementById("mySidenav").style.width = "0";
			  document.getElementById("mainContent").style.marginLeft= "35px";
			  document.getElementById("sideNavBtn").style.opacity = "100%";
			  document.getElementById("navTb").style.marginLeft = "35px";
			}
			// Opening the Calculator Animation
			function openCalc() {
				document.getElementById('calcTray').style.bottom = "5%";
				document.getElementById('calcUpBtn').style.opacity = "0%";
				document.getElementById('calcUpBtn').style.height = "0";
				document.getElementById('calcDwnBtn').style.opacity = "100%";
				document.getElementById('calcDwnBtn').style.height = "10px";
			}
			// Closing the Calculator Animation
			function closeCalc() {
				document.getElementById('calcTray').style.bottom = "-300px";
				document.getElementById('calcUpBtn').style.opacity = "100%";
				document.getElementById('calcUpBtn').style.height = "10px";
				document.getElementById('calcDwnBtn').style.opacity = "0%";
				document.getElementById('calcDwnBtn').style.height = "0";
			}
		</script>

		<!-- Dropdown Script -->
		<script>
			/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
			var dropdown = document.getElementsByClassName("dropdown-btn");
			var i;

			for (i = 0; i < dropdown.length; i++) {
			  dropdown[i].addEventListener("click", function() {
			  this.classList.toggle("active");
			  var dropdownContent = this.nextElementSibling;
			  if (dropdownContent.style.maxHeight) {
			  dropdownContent.style.maxHeight = null;
			  } else {
			  dropdownContent.style.maxHeight = dropdownContent.scrollHeight + "px";
			  }
			  });
			}
		</script>

		<!-- Slideshow Script -->
		<script>
			var slideIndex = [1,1,1];
			var slideId = ["mySlides1", "mySlides2", "mySlides3"]
			showSlides(1, 0);
			showSlides(1, 1);
			showSlides(1, 2);

			function plusSlides(n, no) {
			  showSlides(slideIndex[no] += n, no);
			}

			function showSlides(n, no) {
			  var i;
			  var x = document.getElementsByClassName(slideId[no]);
			  if (n > x.length) {slideIndex[no] = 1}    
			  if (n < 1) {slideIndex[no] = x.length}
			  for (i = 0; i < x.length; i++) {
			     x[i].style.display = "none";  
			  }
			  x[slideIndex[no]-1].style.display = "block";  
			}
		</script>

		<!-- Collapsible Script for Animation -->
		<script>
			var coll = document.getElementsByClassName("collapsible");
			var i;

			for (i = 0; i < coll.length; i++) {
			  coll[i].addEventListener("click", function() {
			    this.classList.toggle("active");
			    var content = this.nextElementSibling;
			    if (content.style.maxHeight){
			      content.style.maxHeight = null;
			    } else {
			      content.style.maxHeight = content.scrollHeight + "px";
			    } 
			  });
			}
		</script>

		<!-- Jquery Table Collapse -->
		<script>
			$(document).ready(function() {
				$('[data-toggle="toggle"]').change(function(){
					$(this).parents().next('.hide').toggle();
				});
			});
		</script>

		<!-- Navigation Bar -->
		<table id="navTb" class="navTb"><tr>
			<!-- SideNavBar Button-->
			<td width="2%"><div id="navEl" class="navEl" style="background-color:#ffffff00;">
				<img <?php if ($darkMode == true) {echo "src=\"/img/plusW.png\"";}else {echo "src=\"/img/plusB.png\"";}?> class="sideNavBtn grow" id="sideNavBtn" onclick="openNav()">
			</div></td>
			
			<!-- Mathamatics -->
			<td width="14%" align="center"><a href="/mathamatics"><div id="navEl" class="navEl">
				<p id="navTxt" class="navTxt">Mathamatics</p>
				<img <?php if ($darkMode == true) {echo "src=\"/img/mathW.png\"";}else {echo "src=\"/img/mathB.png\"";}?> class="navImg grow" id="navImg">
			</div></a></td>

			<!-- Mechanical -->
			<td width="17%" align="center"><a href="/mechanical"><div id="navEl" class="navEl">
				<p id="navTxt" class="navTxt">Mechanical Design</p>
				<img <?php if ($darkMode == true) {echo "src=\"/img/gearW.png\"";}else {echo "src=\"/img/gearB.png\"";}?> class="navImg grow" id="navImg">
			</div></a></td>
			
			<!-- Electrical -->
			<td width="17%" align="center"><a href="/electrical"><div id="navEl" class="navEl">
				<p id="navTxt" class="navTxt">Electrical Engineering</p>
				<img <?php if ($darkMode == true) {echo "src=\"/img/boltW.png\"";}else {echo "src=\"/img/boltB.png\"";}?> class="navImg grow" id="navImg">
			</div></a></td>

			<!-- Home -->
			<td width="2%" align="center"><a href="/"><div id="navEl" class="navEl" style="background-color: #ffffff00;">
				<img <?php if ($darkMode == true) {echo "src=\"/img/logoW.png\"";}else {echo "src=\"/img/logoB.png\"";}?> class="navImg grow" id="navImg">
			</div></a></td>

			<!-- Fluid Mechanics -->
			<td width="12%" align="center"><a href="/fMech"><div id="navEl" class="navEl">
				<p id="navTxt" class="navTxt">Fluid Mechanics</p>
				<img <?php if ($darkMode == true) {echo "src=\"/img/dropW.png\"";}else {echo "src=\"/img/dropB.png\"";}?> class="navImg grow" id="navImg">
			</div></a></td>
			<!-- Thermodynamics -->
			<td width="12%" align="center"><a href="/therm"><div id="navEl" class="navEl">
				<p id="navTxt" class="navTxt">Thermodynamics</p>
				<img <?php if ($darkMode == true) {echo "src=\"/img/thermW.png\"";}else {echo "src=\"/img/thermB.png\"";}?> class="navImg grow" id="navImg">
			</div></a></td>

			<!-- Material Science -->
			<td width="17%" align="center"><a href="/matSci"><div id="navEl" class="navEl">
				<p id="navTxt" class="navTxt">Material Science</p>
				<img <?php if ($darkMode == true) {echo "src=\"/img/matW.png\"";}else {echo "src=\"/img/matB.png\"";}?> class="navImg grow" id="navImg">
			</div></a></td>
			
			<!-- About Me -->
			<td width="9%" align="center"><a href="/aboutUs"><div id="navEl" class="navEl">
				<p id="navTxt" class="navTxt">About Us</p>
				<img <?php if ($darkMode == true) {echo "src=\"/img/logoSoloW.png\"";}else {echo "src=\"/img/logoSoloB.png\"";}?> class="navImg grow" id="navImg">
			</div></a></td>

			<!-- News -->
			<td width="15%" align="center"><a href="/nIndex"><div id="navEl" class="navEl">
				<p id="navTxt" class="navTxt">News</p>
				<img <?php if ($darkMode == true) {echo "src=\"/img/newsW.png\"";}else {echo "src=\"/img/newsB.png\"";}?> class="navImg grow" id="navImg">
			</div></a></td>
		</tr></table>

		<!-- Calculator  (No production yet)-->
		<!-- <div id="calcTray" class="calcTray">
			<div id="calcUpBtn" class="calcUpBtn" onclick="openCalc();">&#9650</div>
			<div id="calcDwnBtn" class="calcDwnBtn" onclick="closeCalc();">&#9660</div>
			<?php 
				// include 'calculators/calc.html';
			?>
		</div> -->

		<!-- Footer -->
		<div id="footer" class="footer"><table class="footerTb" id="footerTb">
			<tr>
				<!-- Currently Empty -->
				<td width="33%" align="center"></td>
				<!-- Website Date -->
				<td width="33%" align="center">March 2021</td>
				<!-- Social Logos -->
				<td width="33%" align="right"><div><table id="socialButtons" class="socialButtons"><tr>
					<!-- GitHub -->
					<td><a href="https://github.com/AJ-Hawkeye/EngineeringToolbar"><img <?php if ($darkMode == true) {echo "src=\"/img/gitHubW.png\"";}else {echo "src=\"/img/gitHubB.png\"";}?> class="grow"></a></td>
					<!-- Email -->
					<td><a href="mailto:ajhawkeyecoding@gmail.com"><img <?php if ($darkMode == true) {echo "src=\"/img/enevelopeW.png\"";}else {echo "src=\"/img/enevelopeB.png\"";}?> class="grow"></a></td>
					<!-- Youtube -->
					<td><a href="https://www.youtube.com/channel/UCqXJYywwtdoPYTtIgCfxa2w"><img <?php if ($darkMode == true) {echo "src=\"/img/youtubeW.png\"";}else {echo "src=\"/img/youtubeB.png\"";}?> class="grow"></a></td>
					<td width="40px"></td>
				</tr></table></div></td>
			</tr>
		</table></div>

	</body>
</html>