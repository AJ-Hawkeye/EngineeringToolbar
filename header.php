<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- Tab Title -->
		<title><?php echo $title;?></title>
		<!-- Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Tab Icon -->
		<link rel="icon" href="/img/favicon.ico" type="image/ico" sizes="16x16">
		<!-- Reset Style -->
		<link rel="stylesheet" type="text/css" href ="/css/reset.css">
		<!-- Stylesheet -->
		<link rel="stylesheet" type="text/css" href="/css/style.css">
		<!-- Dark Mode Style -->
		<?php
			$darkMode = false;
			if ($darkMode == true) {
					echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/darkMode.css\">";
				}else {
					echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/whiteMode.css\">";
				}
		?>
		<!-- Section Specific Styles -->
		<?php include "includes/header.html";?>
		<!-- Background Creation Script -->
		<script <?php if ($darkMode == true) {echo "src=\"/js/backgroundB.js\"";}else{echo "src=\"/js/backgroundW.js\"";}?>></script>
		<!-- Init MathJax -->
		<script> MathJax = {tex: {inlineMath: [['$', '$'], ['\\(', '\\)']]}, svg: {fontCache: 'global'}};</script>
		<!-- Import Math Jax -->
		<script type="text/javascript" id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-svg.js"></script>
		<!-- Import JQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		
	<!-- Main Body -->
	<body>
		<!-- Canvas for Background -->
		<canvas id="bgd" class="bgd"></canvas>
		<!-- Changes the size of the Background when the client changes the window size -->
		<script>
			function displayWindowSize(){bgcanvas();}
	     	window.addEventListener("resize",displayWindowSize);
		</script>
		<!-- Storing Dark Mode Status -->
		<script>
			//One loading create cookie of darkMode = false for 30days
			window.addEventListener("onload",setCookie("darkMode", false, 30));
			// sets the cookie depending on the arguments
			function setCookie(cname, cvalue, exdays) {
				var d = new Date();
				d.setTime(d.getTime() + (exdays*24*60*60*1000));
				var expires = "expires="+ d.toUTCString();
				document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
			}
			//returns the value of the cookie with the name of the cookie
			function getCookie(cname){
				var name = cname + "=";
				var decodedCookie = decodeURIComponent(document.cookie);
				var ca = decodedCookie.split(';');
				for (var i = 0; i < ca.length; i++) {
					var c = ca[i];
					while (c.charAt(0) == ' '){
						c = c.substring(1);
					}
					if (c.indexOf(name) == 0) {
						return c.substring(name.length, c.length);
					}
				}
				return "";
			}
			// toggles the value of darkMode
			function toggleDarkMode() {
				setCookie("darkMode",!(getCookie("darkMode")),30);
			}
		</script>

		<!-- Start of mainContent -->
		<div class="mainContent" id="mainContent">
			<!-- Dark Mode Toggle (not working currently) -->
			<div class="darkToggleEl" id="darkToggleEl">
				<img src="/img/dark.png">
				<label class="switch" onclick="toggleDarkMode();">
					<input type="checkbox">
					<span class="slider"></span>
				</label>
				<img src="/img/light.png">
			</div>

			<!-- Side Bar Navigation Div-->
			<div class="sideBar" id="navEl">
				<!-- Child of SideBarNav -->
				<div id="mySidenav" class="sidenav">
					<!-- Close Button -->
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					<!-- Includes the nav in the each section -->
					<?php
						include 'includes/nav.html';
					?>
				</div>
			</div>