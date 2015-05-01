<?php /* Template for displaying army rules category  */ ?>
<?php

	$args = array(
		'child_of' => PSY_CAT_ID,
		'orderby' => 'name',
		'order' => 'ASC'
	);
	$categories = get_categories($args);

	$varCurrentId = get_the_ID();
?>

<?php get_header(); ?>

<section class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Diciplines psychiques</h1>
		</div>
	</div>
	<?php foreach($categories as $key => $category) : ?>
		<?php if($key%3 == 0) { echo '<div class="row">'; } ?>
		<article class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3><span class="glyphicon glyphicon-book" aria-hidden="true"></span> <?php echo $category->name; ?></h3>
                </div>
                <div class="panel-body">
                    <p><em><?php echo $category->description; ?></em></p>
                    <a class="btn btn-default" href="<?php echo get_category_link($category->term_id); ?>">Lire la suite</a>
                </div>
            </div>
		</article>
		<?php if($key%3 == 2) { echo '</div>'; } ?>
	<?php endforeach; ?>	
 </section><!-- /.container -->