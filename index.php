<!DOCTYPE html>
<html lang="fr">

	<?php include 'php/db/connexion.php'; ?>
	<?php include 'php/db/user.php'; ?>

	<!--==================== HEAD ====================-->
	<?php include 'includes/head.php'; ?>
	
	<body>
		<!--==================== HEADER ====================-->
		<?php include 'includes/header.php'; ?>
		
		<main class="main">
			
			<!--==================== HOME ====================-->
			<?php include 'includes/home.php'; ?>
			
			<!--==================== ABOUT ====================-->
			<?php include 'includes/about.php'; ?>
			
			<!--==================== SKILLS ====================-->
			<?php include 'includes/skills.php'; ?>
			
			<!--==================== QUALIFICATIONS ====================-->
			<?php include 'includes/qualifications.php'; ?>
			
			<!--==================== SERVICES ====================-->
			<?php include 'includes/services.php'; ?>
			
			<!--==================== PORTFOLIO ====================-->
			<?php include 'includes/portfolio.php'; ?>
			
			<!--==================== PROJECTS ====================-->
			<?php include 'includes/projects.php'; ?>
			
			<!--==================== TESTIMONIAL ====================-->
			<?php include 'includes/testimonials.php'; ?>
			
			<!--==================== CONTACT ====================-->
			<?php include 'includes/contact.php'; ?>

		</main>
		
		<!--==================== FOOTER ====================-->
		<?php include 'includes/footer.php'; ?>
		
		<!--==================== SCROLLUP ====================-->
		<a href="#" class="scrollup" id="scroll-up">
			<i class="uil uil-arrow-up scrollup_icon"></i>
		</a>
		
		<!--==================== SCRIPTS ====================-->
		<?php include 'includes/scripts.php'; ?>
	</body>
	
</html>