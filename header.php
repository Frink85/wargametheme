<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="For the Emperor !">
	<meta name="author" content="Frink">
	<link rel="icon" href="favicon.ico">

	<title><?php bloginfo('name'); ?></title>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
	
	<!-- Permet de gerer l'ajax -->
	<script>ajaxurl = '<?php echo admin_url();?>admin-ajax.php';</script>
</head>

<body>
	<?php display_wp_menu(); ?>
	<section class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php display_wp_search_form(); ?>
			</div>
		</div>
	</section>