<?php /* Template for displying Home page */ ?>

<?php
    $catBattaile = 'category_'.LIVRER_CAT_ID;
    $catTour = 'category_'.TOUR_CAT_ID;
    $catMoral = 'category_'.MORAL_CAT_ID;
    $catSpecialesRules = 'category_'.SPECIALRULES_CAT_ID;
    $catArmyRules = 'category_'.ARMYRULES_CAT_ID;
    $catPsyrules = 'catergory_'.PSY_CAT_ID;

    $args = array(
        'child_of' => GALERIE_PAGE_ID,
        'order_by' => 'name',
        'order' => 'ASC'
    );
    $pageGaleries = get_pages($args);
?>

<?php get_header(); ?>

<section class="container">
	<div class="row">
        <h1 class="page-header"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Règles de base</h1>
		<article class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Livrer Bataille</h3>
                </div>
                <div class="panel-body">
                    <p><?php echo category_description(LIVRER_CAT_ID); ?></p>
                    <?php if(get_field('_page', $catBattaile)) : ?>
                    	<p><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> <?php echo get_field('_page', $catBattaile); ?></p>
                	<?php endif; ?>
                    <a class="btn btn-default" href="<?php echo get_category_link(LIVRER_CAT_ID); ?>">Détails</a>
                </div>
            </div>
		</article>

		<article class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Le tour</h3>
                </div>
                <div class="panel-body">
                    <a class="btn btn-default" href="<?php echo get_the_permalink(TOUR_PAGE_ID); ?>">Détails</a>
                </div>
            </div>
		</article>

		<article class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Moral</h3>
                </div>
                <div class="panel-body">
                    <p><?php echo category_description(MORAL_CAT_ID); ?></p>
                    <?php if(get_field('_page', $catMoral)) : ?>
                        <p><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> <?php echo get_field('_page', $catMoral); ?></p>
                    <?php endif; ?>
                    <a class="btn btn-default" href="<?php echo get_category_link(MORAL_CAT_ID); ?>">Détails</a>
                </div>
            </div>
		</article>
    </div>
    <div class="row">
        <h1 class="page-header"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Règles avancées</h1>
		<article class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Règles spéciales</h3>
                </div>
                <div class="panel-body">
                    <p><?php echo category_description(SPECIALRULES_CAT_ID); ?></p>
                    <?php if(get_field('_page', $catSpecialesRules)) : ?>
                        <p><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> <?php echo get_field('_page', $catSpecialesRules); ?></p>
                    <?php endif; ?>
                    <a class="btn btn-default" href="<?php echo get_category_link(SPECIALRULES_CAT_ID); ?>">Détails</a>
                </div>
            </div>
		</article>

		<article class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Règles d'armées</h3>
                </div>
                <div class="panel-body">
                    <p><?php echo category_description(ARMYRULES_CAT_ID); ?></p>
                    <?php if(get_field('_page', $catArmyRules)) : ?>
                        <p><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> <?php echo get_field('_page', $catArmyRules); ?></p>
                    <?php endif; ?>
                    <a class="btn btn-default" href="<?php echo get_category_link(ARMYRULES_CAT_ID); ?>">Détails</a>
                </div>
            </div>
		</article>

        <article class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Diciplines Psychiques</h3>
                </div>
                <div class="panel-body">
                    <p><?php echo category_description(PSY_CAT_ID); ?></p>
                    <?php if(get_field('_page', $catPsyrules)) : ?>
                        <p><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> <?php echo get_field('_page', $catPsyrules); ?></p>
                    <?php endif; ?>
                    <a class="btn btn-default" href="<?php echo get_category_link(PSY_CAT_ID); ?>">Détails</a>
                </div>
            </div>
        </article>
  	</div>
    <div class="row">
        <h1 class="page-header"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Galerie d'armées</h1>
        <?php foreach($pageGaleries as $pageGalerie) : ?>
            <?php $image = get_field('_image-une',$pageGalerie->ID); ?>
            <div class="col-xs-6 col-md-3">
                <a href="<?php echo get_permalink($pageGalerie->ID); ?>" class="thumbnail">
                    <img src="<?php echo $image['sizes']['thumbnail-front-page']; ?>" alt="<?php echo $image['alt']; ?>">
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section><!-- /.container -->
    
<?php get_footer(); ?>
