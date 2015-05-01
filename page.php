<?php /* The template for displaying all pages. */ ?>

<?php get_header(); ?>

<section class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><span class="glyphicon glyphicon-th" aria-hidden="true"></span> <?php the_title(); ?></h1>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
  	</div>
 </section><!-- /.container -->

<?php get_footer(); ?>