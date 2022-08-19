<!Doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('cahrset')?>"/>
	<title><?php bloginfo('name');?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
	<?php wp_head(); ?>
</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="http://www.badeeapro.com/">Badeeapro</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
  			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
    			<?php badeeapro_bootstrap_menu(); ?>
			</div>
			
			<div class="social-link text-left">
				<a href="https://www.facebook.com/Badeea.Alahdal/" target="_blank" class="facebook"><i class="fab fa-facebook"></i></a> 
				<a href="https://twitter.com/Badeea_Alahdal" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a> 
				<a href="https://www.instagram.com/badeea.alahdal/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
				<a href="https://www.youtube.com/channel/UCtx1lWvDqOtqYYPjbtulAVA" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a> 

    </div>
</nav>
