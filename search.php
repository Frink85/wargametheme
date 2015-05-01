<?php /* The template for displaying Search Results pages. */ ?>

<?php get_header() ?>

<section class="container">
	<div class="row">
		<article class="col-lg-12">
		    	<h1 class="page-header"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> R&eacute;sultat de votre recherche</h1>
		        
		        <p class="lead"><?php global $wp_query; echo $wp_query->found_posts; ?> r&eacute;sultat(s) pour "<?php the_search_query(); ?>"</p>
		</article>
	</div>
	<div class="row">
		<article class="col-lg-12">
			<ul class="list-group">
		    <?php if (have_posts()) : ?>
				<?php
					$count = 0; 
					while (have_posts()) : the_post();
					$count++;
					
					setup_postdata($post);
				?>
				<li class="list-group-item">
					<a class="text-muted" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><h3 class="titreSearch"><?php the_title(); ?></h3></a>
					<?php if(get_the_category()) : ?>
						<small><strong>Categories: </strong><em><?php the_category( ' &gt; ' ); ?></em><small>
					<?php endif; ?>
				</li>
				<?php endwhile;?>
			</ul>                    
			<?php else : ?>
				<h4>Aucun r&eacute;sultat trouv&eacute; pour &gt; <?php the_search_query(); ?></h4>
			<?php endif; ?>	
		</article>
	</div>	
</section>
<?php get_footer() ?>