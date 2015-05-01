<?php /* The Template for displaying all single posts. */ ?>
<?php

	$categories = get_the_category();
	$isArmyRules = false;
	foreach($categories as $category) {
		if($category->slug == "army-rules") {
			$isArmyRules = true;
		}
	}

?>
<?php get_header(); ?>

<section class="container">
	<div class="row">
		<article class="col-lg-12">
			<h1 class="page-header"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <?php the_title(); ?></h1>
			<p><strong>Categories: </strong><em><?php the_category( ' &gt; ' ); ?></em></p>
        	<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?><?php the_content(); ?><?php endwhile; ?><?php endif; ?>
		</article>
	</div>
</section>

<?php get_footer(); ?>