<?php
					
require '../conf/confwebReader.php';


if(isset($_POST['destinoEmail'])){

	require 'ContactObject.php';
	$contactObject = new ContactObject();
	$contactObject->set($_POST);
	$contactObject->sendEmail();
}
	
	
?>

<!DOCTYPE HTML>
<!--
	Big Picture by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php echo $headTitle; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<h1><?php echo $TituloMenu; ?></h1>
				<nav>
					<ul>
						<li><a href="#intro"><?php echo $TextoMenu1; ?></a></li>
						<li><a href="#one"><?php echo $TextoMenu2; ?></a></li>
						<li><a href="#two"><?php echo $TextoMenu3; ?></a></li>
						<li><a href="#work"><?php echo $TextoMenu4; ?></a></li>
						<li><a href="#contact"><?php echo $TextoMenu5; ?></a></li>
					</ul>
				</nav>
			</header>

		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content">
					<header>
						<h2><?php echo $TituloIntro; ?></h2>
					</header>
					<p><?php echo $DescripcionIntro; ?></p>
					<footer>
						<a href="#one" class="button style2 down"><?php echo $TextoBotonIntro; ?></a>
					</footer>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
						<h2><?php echo $TituloOne; ?></h2>
					</header>
					<p><?php echo $DescripcionOne ?></p>
				</div>
				<a href="#two" class="button style2 down anchored"><?php echo $TextoBotonOne; ?></a>
			</section>

		<!-- Two -->
			<section id="two" class="main style2 left dark fullscreen">
				<div class="content box style2">
					<header>
						<h2><?php echo $TituloTwo; ?></h2>
					</header>
					<p><?php echo $DescripcionTwo; ?></p>
				</div>
				<a href="#work" class="button style2 down anchored"><?php echo $TextoBotonTwo; ?></a>
			</section>

		<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content">
					<header>
						<h2><?php echo $TituloGaleria; ?></h2>
						<p><?php echo $DescripcionGaleria; ?></p>
					</header>

					<!-- Gallery  -->
						<div class="gallery">
						
							<?php 						
								for ($i = 0; $i < $numItemsGallery; $i++) {
								   echo $arrayItemsGallery[$i]->printItemGallery();					    
								}							
							?>		
						</div>

				</div>
			</section>

		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content">
					<header>
						<h2><?php echo $TituloContacto; ?></h2>
						<p><?php echo $DescripcionContacto; ?></p>
					</header>
					<div class="box">
						<form method="post" action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
							<div class="fields">
								<div class="field half"><input type="text" name="name" placeholder="Name" /></div>
								<div class="field half"><input type="email" name="email" placeholder="Email" /></div>
								<div class="field"><input type="text" name="subject" placeholder="Subject" /></div>								
								<div class="field"><textarea name="message" placeholder="Message" rows="6"></textarea></div>
							</div>
							<ul class="actions special">
								<li><input type="submit" value="Send Message" /></li>
							</ul>
							<input type="hidden" name="destinoEmail" value="<?php echo $emailto_formContact; ?>" />
						</form>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">

				<!-- Icons -->
					<ul class="icons">
					
						<?php 													
							for ($i = 0; $i < $numItemsSocial; $i++) {
							   echo $arrayItemsSocial[$i]->printItemSocial();					    
							}														
						?>		
					</ul>

				<!-- Menu -->
					<ul class="menu">
						<li>&copy; <?php echo $nombreFooter; ?></li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
					</ul>

			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>