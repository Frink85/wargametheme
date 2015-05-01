<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand text-emperor" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="<?php bloginfo('url'); ?>">Accueil</a></li>
				<li><a href="<?php echo get_category_link(LIVRER_CAT_ID); ?>">Livrer bataille</a></li>
				<li><a href="<?php echo get_the_permalink(TOUR_PAGE_ID); ?>">Le tour</a></li>
				<li><a href="<?php echo get_category_link(MORAL_CAT_ID); ?>">Moral</a></li>
				<!-- 
				<li><a href="<?php echo get_category_link(SPECIALRULES_CAT_ID); ?>">Règles spéciales</a></li>
				<li><a href="<?php echo get_category_link(ARMYRULES_CAT_ID); ?>">Règles d'armées</a></li>
				-->
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>