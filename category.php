<?php /* The template for displaying Category pages. */ ?>

<?php
	$varCurrentId = get_cat_id(single_cat_title("",false));
?>

<?php get_header(); ?>

<section class="container">
	<div class="row">
		<article class="col-lg-12">
			<h1 class="page-header"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <?php single_cat_title(); ?></h1>
			<?php query_posts($query_string . '&orderby=name&order=ASC'); ?>
        	<?php if (have_posts()) : ?>
        		<?php $count = 0; ?>
        		<?php while (have_posts()) : the_post(); ?>
        			<?php if($count%3 == 0) { echo '<div class="row">'; } ?>
        			<article class="col-md-4">
		                <div class="panel panel-default">
		                    <div class="panel-heading">
		                        <h3><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> <?php the_title(); ?></h3>
		                    </div>
		                    <div class="panel-body">
		                    	<?php if(get_field('_descriptif')) : ?>
		                        	<p><em><?php echo get_field('_descriptif'); ?></em></p>
		                        <?php endif; ?>
		                        <?php if(get_field('_page')) : ?>
		                        	<p><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> <?php echo get_field('_page'); ?></p>
		                    	<?php endif; ?>
		                        <a class="btn btn-default" href="<?php echo get_permalink(get_the_ID()); ?>">Détails</a>
		                    </div>
		                </div>
            		</article>
    				<?php if($count%3 == 2) { echo '</div>'; } ?>
            		<?php $count++; ?>
        		<?php endwhile; ?>
        	<?php endif; ?>
		</article>
	</div>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>